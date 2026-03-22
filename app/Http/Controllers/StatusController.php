<?php

namespace App\Http\Controllers;

use App\Models\LoanApplication;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        return view('status', [
            'token' => null,
            'application' => null,
            'statusData' => null,
            'steps' => [],
            'error' => null,
        ]);
    }

    public function show(Request $request, string $token)
    {
        $rawInput = trim($token);
        $normalizedInput = strtoupper(preg_replace('/\s+/', '', $rawInput));
        $emailInput = filter_var($rawInput, FILTER_VALIDATE_EMAIL) ? strtolower($rawInput) : null;
        $statusPattern = '/^HW-[A-HJ-KM-NP-Z2-9]{8}$/';
        $statusCompactPattern = '/^HW[A-HJ-KM-NP-Z2-9]{8}$/';

        $tokenCandidate = null;
        if (preg_match($statusPattern, $normalizedInput)) {
            $tokenCandidate = $normalizedInput;
        } elseif (preg_match($statusCompactPattern, $normalizedInput)) {
            $tokenCandidate = substr($normalizedInput, 0, 2) . '-' . substr($normalizedInput, 2);
        }

        $application = null;
        $inputWasValid = false;

        if ($emailInput) {
            $inputWasValid = true;
            $application = LoanApplication::where('email', $emailInput)
                ->latest('created_at')
                ->first();
        } elseif ($tokenCandidate) {
            $inputWasValid = true;
            $application = LoanApplication::where('token', $tokenCandidate)->first();
        }

        if (!$inputWasValid) {
            return view('status', [
                'token' => $token,
                'application' => null,
                'statusData' => null,
                'steps' => [],
                'error' => 'Enter a valid reference number or email address.',
            ]);
        }

        if ($application && $rawInput !== $application->token) {
            return redirect('/status/' . $application->token);
        }

        if (!$application) {
            return view('status', [
                'token' => $token,
                'application' => null,
                'statusData' => null,
                'steps' => [],
                'error' => null,
            ]);
        }

        $approvedPercent = (int) ($application->approved_percentage ?? 0);
        if (in_array($application->status, ['approved', 'processing_fee'], true) && $approvedPercent <= 0) {
            $application->status = 'declined';
            $application->status_updated_at = now();
            $application->save();
        }

        $statusData = $this->buildStatusData($application);
        $steps = $this->buildSteps($application, $statusData['current_step']);

        return view('status', [
            'token' => $application->token,
            'application' => $application,
            'statusData' => $statusData,
            'steps' => $steps,
            'error' => null,
        ]);
    }

    private function buildStatusData(LoanApplication $application): array
    {
        $status = $application->status;
        $map = [
            'submitted' => ['title' => 'Application received', 'badge' => 'Submitted', 'current_step' => 'submitted'],
            'approved' => ['title' => 'Approval granted', 'badge' => 'Action required', 'current_step' => 'approved'],
            'processing_fee' => ['title' => 'Payment received', 'badge' => 'Underwriting', 'current_step' => 'processing_fee'],
            'declined' => ['title' => 'Declined', 'badge' => 'Declined', 'current_step' => 'approved'],
        ];

        $default = ['title' => 'In progress', 'badge' => 'In review', 'current_step' => 'processing_fee'];
        $data = $map[$status] ?? $default;

        $timestamp = $application->status_updated_at ?? $application->updated_at ?? $application->created_at;
        $lastUpdate = $timestamp ? $this->formatTimestamp($timestamp) : 'Pending update';

        return [
            'title' => $data['title'],
            'badge' => $data['badge'],
            'last_update' => $lastUpdate,
            'eta' => 'Within 3 business days',
            'current_step' => $data['current_step'],
            'status' => $status,
        ];
    }

    private function buildSteps(LoanApplication $application, string $currentStep): array
    {
        $steps = [
            'submitted' => [
                'title' => 'Submitted',
                'description' => [
                    'We received your application and queued it for review.',
                ],
            ],
            'approved' => [
                'title' => 'Approved',
                'description' => [
                ],
            ],
            'processing_fee' => [
                'title' => 'Processing fee',
                'description' => [
                    'Payment received. We are finalizing affordability checks.',
                ],
            ],
            'disbursement' => [
                'title' => 'Disbursement',
                'description' => [
                    'Approved funds are released to your nominated account once all checks pass.',
                ],
            ],
        ];

        $order = array_keys($steps);
        $currentIndex = array_search($currentStep, $order, true);
        $currentIndex = $currentIndex === false ? 1 : $currentIndex;

        $status = $application->status;

        $response = [];
        foreach ($order as $index => $key) {
            $state = 'pending';
            $stateLabel = 'Pending';
            $stateClass = '';

            if ($index < $currentIndex) {
                $state = 'complete';
                $stateLabel = 'Completed';
                $stateClass = 'status-step-state--success';
            } elseif ($index === $currentIndex) {
                $state = 'current';
                if ($key === 'processing_fee') {
                    $stateLabel = 'Payment received';
                } elseif ($key === 'approved') {
                    $stateLabel = 'Action required';
                } else {
                    $stateLabel = 'In progress';
                }
            }

            if ($key === 'approved' && $status === 'approved') {
                $state = 'current';
                $stateLabel = 'Action required';
            }

            if ($key === 'approved' && $status === 'declined') {
                $state = 'current';
                $stateLabel = 'Declined';
                $stateClass = 'status-step-state--danger';
            }

            if ($key === 'approved' && $status === 'processing_fee') {
                $state = 'complete';
                $stateLabel = 'Completed';
                $stateClass = 'status-step-state--success';
            }

            if ($key === 'processing_fee' && $status === 'processing_fee') {
                $state = 'current';
                $stateLabel = 'Payment received';
                $stateClass = 'status-step-state--success';
            }

            if ($state === 'pending' && in_array($key, ['disbursement'], true)) {
                $stateLabel = 'Locked';
            }

            $response[] = [
                'key' => $key,
                'title' => $steps[$key]['title'],
                'description' => $steps[$key]['description'],
                'state' => $state,
                'state_label' => $stateLabel,
                'state_class' => $stateClass,
                'open' => $state === 'current',
            ];
        }

        return $response;
    }

    private function formatTimestamp($timestamp): string
    {
        return $timestamp->isToday()
            ? 'Today, ' . $timestamp->format('H:i')
            : $timestamp->format('M d, H:i');
    }
}
