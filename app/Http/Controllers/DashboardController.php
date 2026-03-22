<?php

namespace App\Http\Controllers;

use App\Models\LoanApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\View\View;

class DashboardController extends Controller
{
    private const PER_PAGE_OPTIONS = [10, 20, 50];

    public function index(Request $request): View
    {
        $search = trim((string) $request->query('search', ''));
        $statusFilter = (string) $request->query('filter', 'all');
        $loanTypeFilter = (string) $request->query('loan_type_filter', 'all');
        $perPage = (int) $request->query('per_page', 10);

        if (!in_array($perPage, self::PER_PAGE_OPTIONS, true)) {
            $perPage = 10;
        }

        $baseQuery = LoanApplication::query();

        if ($search !== '') {
            $baseQuery->where(function ($query) use ($search) {
                $like = '%' . $search . '%';
                $query->where('full_name', 'like', $like)
                    ->orWhere('email', 'like', $like)
                    ->orWhere('phone_number', 'like', $like)
                    ->orWhere('id_number', 'like', $like)
                    ->orWhere('token', 'like', $like);
            });
        }

        $statusOptions = $this->statusOptions();
        if ($statusFilter !== 'all' && isset($statusOptions[$statusFilter])) {
            $baseQuery->where('status', $statusFilter);
        } else {
            $statusFilter = 'all';
        }

        $loanTypeOptions = $this->loanTypeOptions();
        $filteredQuery = clone $baseQuery;

        if ($loanTypeFilter !== 'all') {
            if ($loanTypeFilter === 'personal') {
                $filteredQuery->where('purpose', '!=', 'business');
            } elseif ($loanTypeFilter === 'business') {
                $filteredQuery->where('purpose', 'business');
            } elseif (isset($loanTypeOptions[$loanTypeFilter])) {
                $filteredQuery->where('purpose', $loanTypeOptions[$loanTypeFilter]['value']);
            } else {
                $loanTypeFilter = 'all';
            }
        }

        $personalCount = (clone $filteredQuery)
            ->where('purpose', '!=', 'business')
            ->count();
        $businessCount = (clone $filteredQuery)
            ->where('purpose', 'business')
            ->count();

        $applications = $filteredQuery
            ->orderByDesc('created_at')
            ->paginate($perPage)
            ->withQueryString();

        $totalApplications = $applications->total();

        $paginationWindow = 2;
        $currentPage = $applications->currentPage();
        $lastPage = $applications->lastPage();
        $pageStart = max(1, $currentPage - $paginationWindow);
        $pageEnd = min($lastPage, $currentPage + $paginationWindow);

        $dashboardRows = $applications->getCollection()->map(function (LoanApplication $application) {
            $purposeLabel = $this->purposeLabel($application->purpose);
            $groupLabel = $application->purpose === 'business' ? 'Business' : 'Personal';

            return [
                'id' => $application->id,
                'application_type' => $application->purpose,
                'display_name' => $application->full_name,
                'loan_group' => $groupLabel,
                'loan_type' => $purposeLabel,
                'amount' => (int) $application->amount,
                'status' => $application->status,
                'status_label' => $this->statusLabel($application->status),
                'status_class' => $this->statusClass($application->status),
                'phone' => (string) ($application->phone_number ?? ''),
                'email' => (string) $application->email,
                'applied_label' => $application->created_at?->format('M j, Y g:i A') ?? 'N/A',
                'notes_enabled' => false,
                'notes' => '',
                'details' => $this->buildDetails($application),
            ];
        });

        return view('dashboard', [
            'applications' => $dashboardRows,
            'paginator' => $applications,
            'search' => $search,
            'status_filter' => $statusFilter,
            'loan_type_filter' => $loanTypeFilter,
            'per_page' => $perPage,
            'status_options' => $statusOptions,
            'loan_type_options' => $loanTypeOptions,
            'total_applications' => $totalApplications,
            'personal_count' => $personalCount,
            'business_count' => $businessCount,
            'page_start' => $pageStart,
            'page_end' => $pageEnd,
        ]);
    }

    public function update(Request $request, LoanApplication $application): Response
    {
        $action = null;
        if ($request->has('approve')) {
            $action = 'approved';
        } elseif ($request->has('reject')) {
            $action = 'declined';
        }

        if (!$action) {
            return $request->expectsJson()
                ? response()->json(['message' => 'Invalid action.'], 422)
                : redirect()->back();
        }

        $approvedPercent = $action === 'approved' ? 70 : 0;
        $updates = [
            'status' => $action,
            'status_updated_at' => now(),
        ];

        $columns = $this->availableColumns();
        if ($columns['approved_percentage']) {
            $updates['approved_percentage'] = $approvedPercent;
        }
        if ($columns['credit_score_percent']) {
            $updates['credit_score_percent'] = $approvedPercent;
        }

        $application->fill($updates);
        $application->save();

        if ($request->expectsJson()) {
            return response()->json([
                'status' => $application->status,
                'status_label' => $this->statusLabel($application->status),
                'status_class' => $this->statusClass($application->status),
                'approved_percentage' => $approvedPercent,
            ]);
        }

        return redirect()->back();
    }

    public function destroy(Request $request, LoanApplication $application): Response
    {
        $application->delete();

        if ($request->expectsJson()) {
            return response()->json([
                'deleted' => true,
            ]);
        }

        return redirect()->back();
    }

    private function statusOptions(): array
    {
        return [
            'submitted' => 'Submitted',
            'approved' => 'Approved',
            'declined' => 'Declined',
            'processing_fee' => 'Processing fee',
        ];
    }

    private function loanTypeOptions(): array
    {
        return [
            'personal:personal' => ['label' => 'Personal Loan', 'value' => 'personal'],
            'personal:emergency' => ['label' => 'Emergency Loan', 'value' => 'emergency'],
            'personal:asset' => ['label' => 'Asset Finance', 'value' => 'asset'],
            'business' => ['label' => 'Business Loans', 'value' => 'business'],
        ];
    }

    private function purposeLabel(?string $purpose): string
    {
        return match ($purpose) {
            'personal' => 'Personal Loan',
            'emergency' => 'Emergency Loan',
            'business' => 'Business Loan',
            'asset' => 'Asset Finance',
            default => 'Loan',
        };
    }

    private function statusLabel(?string $status): string
    {
        return match ($status) {
            'submitted' => 'Submitted',
            'approved' => 'Approved',
            'declined' => 'Declined',
            'processing_fee' => 'Processing fee',
            default => 'Pending',
        };
    }

    private function statusClass(?string $status): string
    {
        return match ($status) {
            'approved' => 'approved',
            'declined' => 'rejected',
            'processing_fee' => 'paid',
            default => 'pending',
        };
    }

    private function buildDetails(LoanApplication $application): array
    {
        $details = [
            'Purpose' => $this->purposeLabel($application->purpose),
        ];

        if (!empty($application->income)) {
            $details['Income'] = '£' . number_format((int) $application->income);
        }

        if (!empty($application->term_months)) {
            $details['Term'] = $application->term_months . ' months';
        }

        switch ($application->purpose) {
            case 'emergency':
                if (!empty($application->emergency_type)) {
                    $details['Emergency'] = $application->emergency_type;
                }
                if (!empty($application->urgency)) {
                    $details['Urgency'] = ucfirst($application->urgency);
                }
                if (!empty($application->incident_date)) {
                    $details['Incident'] = $application->incident_date;
                }
                break;
            case 'personal':
                if (!empty($application->personal_goal)) {
                    $details['Goal'] = $application->personal_goal;
                }
                if (!empty($application->personal_timeline)) {
                    $details['Timeline'] = $application->personal_timeline;
                }
                break;
            case 'business':
                if (!empty($application->business_name)) {
                    $details['Business'] = $application->business_name;
                }
                if (!empty($application->business_industry)) {
                    $details['Industry'] = $application->business_industry;
                }
                if (!empty($application->business_years)) {
                    $details['Years'] = $application->business_years;
                }
                if (!empty($application->business_revenue)) {
                    $details['Revenue'] = '£' . number_format((int) $application->business_revenue);
                }
                break;
            case 'asset':
                if (!empty($application->asset_type)) {
                    $details['Asset'] = $application->asset_type;
                }
                if (!empty($application->asset_value)) {
                    $details['Value'] = '£' . number_format((int) $application->asset_value);
                }
                if (!empty($application->asset_ownership)) {
                    $details['Ownership'] = ucfirst($application->asset_ownership);
                }
                break;
        }

        return $details;
    }

    private function availableColumns(): array
    {
        static $cached;
        if ($cached !== null) {
            return $cached;
        }

        $cached = [
            'approved_percentage' => Schema::hasColumn('loan_applications', 'approved_percentage'),
            'credit_score_percent' => Schema::hasColumn('loan_applications', 'credit_score_percent'),
        ];

        return $cached;
    }
}
