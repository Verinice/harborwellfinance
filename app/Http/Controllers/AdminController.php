<?php

namespace App\Http\Controllers;

use App\Mail\ApplicationActionRequired;
use App\Mail\ApplicationDeclined;
use App\Models\LoanApplication;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function index()
    {
        $data = $this->buildApplicationsData(true, 6);
        return view('admin', $data);
    }

    public function applications()
    {
        $data = $this->buildApplicationsData(true, 10);
        return view('admin.applications', $data);
    }

    public function users()
    {
        $status = request()->query('status');
        $sort = request()->query('sort', 'newest');

        $query = User::query();
        if ($status === 'verified') {
            $query->whereNotNull('email_verified_at');
        } elseif ($status === 'pending') {
            $query->whereNull('email_verified_at');
        }

        if ($sort === 'name') {
            $query->orderBy('name');
        } elseif ($sort === 'status') {
            $query->orderByRaw('email_verified_at is null');
            $query->orderByDesc('created_at');
        } else {
            $query->orderByDesc('created_at');
        }

        $users = $query->paginate(10)->withQueryString();

        $totalUsers = User::count();
        $verifiedUsers = User::whereNotNull('email_verified_at')->count();
        $newUsers = User::where('created_at', '>=', now()->subDays(7))->count();

        return view('admin.users', [
            'users' => $users,
            'userStats' => [
                'total' => $totalUsers,
                'verified' => $verifiedUsers,
                'new' => $newUsers,
            ],
            'currentStatus' => in_array($status, ['verified', 'pending'], true) ? $status : 'all',
            'currentSort' => in_array($sort, ['newest', 'name', 'status'], true) ? $sort : 'newest',
        ]);
    }

    public function reports()
    {
        return view('admin.reports');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function updateStatus(Request $request, LoanApplication $application)
    {
        $validated = $request->validate([
            'status' => ['required', 'in:submitted,approved,declined'],
            'approved_percentage' => ['required_if:status,approved', 'integer', 'min:1', 'max:100'],
        ]);

        $previousStatus = $application->status;
        $status = $validated['status'];
        $allowed = $this->allowedStatusTransitions($application->status);
        if (!in_array($status, $allowed, true)) {
            return response()->json([
                'message' => 'Invalid status transition.',
            ], 422);
        }

        $application->status = $status;
        $application->status_updated_at = now();

        if ($status === 'approved') {
            $application->approved_percentage = (int) $validated['approved_percentage'];
        }

        if ($status === 'approved' && !$application->processing_fee_due_at) {
            $application->processing_fee_due_at = now()->addHours(24);
        }

        $application->save();

        if ($status !== $previousStatus) {
            $statusUrl = url('/status/' . $application->token);

            if ($status === 'approved') {
                Mail::to($application->email)->queue(new ApplicationActionRequired($application, $statusUrl));
            } elseif ($status === 'declined') {
                Mail::to($application->email)->queue(new ApplicationDeclined($application, $statusUrl));
            }
        }

        return response()->json([
            'status' => $application->status,
            'status_updated_at' => $application->status_updated_at?->toIso8601String(),
            'approved_percentage' => $application->approved_percentage,
        ]);
    }

    public function destroy(LoanApplication $application)
    {
        $application->delete();

        return redirect()->back()->with('status', 'Application deleted.');
    }

    private function allowedStatusTransitions(string $current): array
    {
        $map = [
            'submitted' => ['submitted', 'approved', 'declined'],
            'approved' => ['approved'],
            'processing_fee' => ['processing_fee'],
            'declined' => ['declined'],
        ];

        return $map[$current] ?? [$current];
    }

    private function buildApplicationsData(bool $paginated = false, int $perPage = 10): array
    {
        $status = request()->query('status');
        $sort = request()->query('sort', 'newest');
        $allowedStatuses = ['submitted', 'approved', 'declined', 'processing_fee', 'payment'];

        $query = LoanApplication::query();
        if ($status && in_array($status, $allowedStatuses, true)) {
            if ($status === 'payment') {
                $query->whereIn('status', ['approved', 'processing_fee']);
            } else {
                $query->where('status', $status);
            }
        }

        if ($sort === 'amount') {
            $query->orderByDesc('amount');
        } elseif ($sort === 'status') {
            $query->orderBy('status');
        } else {
            $query->orderByDesc('created_at');
        }

        if ($paginated) {
            $applications = $query->paginate($perPage)->withQueryString();
        } else {
            $applications = $query->limit(12)->get();
        }

        $statusCounts = LoanApplication::select('status', DB::raw('count(*) as total'))
            ->groupBy('status')
            ->pluck('total', 'status');
        $purposeCounts = LoanApplication::select('purpose', DB::raw('count(*) as total'))
            ->groupBy('purpose')
            ->pluck('total', 'purpose');

        $totalApplications = LoanApplication::count();
        $totalRequested = (int) LoanApplication::sum('amount');
        $averageAmount = (float) (LoanApplication::avg('amount') ?? 0);
        $weeklyApplications = LoanApplication::where('created_at', '>=', now()->subDays(7))->count();

        $processingFee = (int) ($statusCounts['processing_fee'] ?? 0);
        $approved = (int) ($statusCounts['approved'] ?? 0);
        $payment = $processingFee + $approved;
        $approved = (int) ($statusCounts['approved'] ?? 0);
        $declined = (int) ($statusCounts['declined'] ?? 0);
        $submitted = (int) ($statusCounts['submitted'] ?? 0);
        $pending = $payment + $submitted;
        $approvalRate = $totalApplications > 0 ? round(($approved / $totalApplications) * 100) : 0;

        $approvedAmount = (float) LoanApplication::whereIn('status', ['approved', 'processing_fee'])
            ->whereNotNull('approved_percentage')
            ->selectRaw('COALESCE(SUM(amount * approved_percentage / 100), 0) as total')
            ->value('total');

        $averageApprovedAmount = (float) LoanApplication::whereIn('status', ['approved', 'processing_fee'])
            ->whereNotNull('approved_percentage')
            ->selectRaw('COALESCE(AVG(amount * approved_percentage / 100), 0) as avg')
            ->value('avg');

        $processingFeeOverdue = LoanApplication::where('status', 'processing_fee')
            ->whereNotNull('processing_fee_due_at')
            ->where('processing_fee_due_at', '<', now())
            ->count();

        return [
            'applications' => $applications,
            'currentStatus' => in_array($status, $allowedStatuses, true) ? $status : 'all',
            'currentSort' => in_array($sort, ['newest', 'amount', 'status'], true) ? $sort : 'newest',
            'purposeCounts' => $purposeCounts,
            'stats' => [
                'totalApplications' => $totalApplications,
                'weeklyApplications' => $weeklyApplications,
                'processingFee' => $processingFee,
                'inReview' => $payment,
                'approved' => $approved,
                'approvedAmount' => $approvedAmount,
                'averageApprovedAmount' => $averageApprovedAmount,
                'declined' => $declined,
                'submitted' => $submitted,
                'pending' => $pending,
                'approvalRate' => $approvalRate,
                'totalRequested' => $totalRequested,
                'averageAmount' => $averageAmount,
                'processingFeeOverdue' => $processingFeeOverdue,
            ],
        ];
    }
}
