@extends('layouts.admin-base')

@section('title', 'Applications')
@section('admin_layout', 'clean')

@section('content')
    @php
        $formatCurrency = function ($amount) {
            return number_format((float) $amount, 0);
        };
        $shortName = function ($fullName) {
            $parts = array_values(array_filter(preg_split('/\s+/', trim((string) $fullName))));
            $first = $parts[0] ?? '';
            $second = $parts[1] ?? '';
            if ($first === '') {
                return 'Applicant';
            }
            if ($second === '') {
                return $first;
            }
            return $first . ' ' . strtoupper(substr($second, 0, 1)) . '.';
        };

        $filteredTotal = method_exists($applications, 'total') ? $applications->total() : $applications->count();
        $showingFrom = method_exists($applications, 'firstItem') ? ($applications->firstItem() ?? 0) : ($applications->count() ? 1 : 0);
        $showingTo = method_exists($applications, 'lastItem') ? ($applications->lastItem() ?? 0) : $applications->count();
        $currentPage = method_exists($applications, 'currentPage') ? $applications->currentPage() : 1;
        $lastPage = method_exists($applications, 'lastPage') ? $applications->lastPage() : 1;
        $personalCount = (int) ($purposeCounts['personal'] ?? 0);
        $businessCount = (int) ($purposeCounts['business'] ?? 0);
        $totalCount = (int) ($stats['totalApplications'] ?? 0);
    @endphp

    <section class="admin-app-shell">
        <div class="admin-app-toolbar">
            <input class="admin-app-search" type="search" placeholder="Search applications..." aria-label="Search applications">
            <select class="admin-app-select" aria-label="Status filter">
                <option>All Status</option>
                <option>Approved</option>
                <option>Rejected</option>
                <option>Pending</option>
            </select>
            <select class="admin-app-select" aria-label="Loan type filter">
                <option>All Loan Types</option>
                <option>Personal</option>
                <option>Business</option>
            </select>
            <select class="admin-app-select" aria-label="Items per page">
                <option>10 / page</option>
                <option>20 / page</option>
                <option>50 / page</option>
            </select>
            <button class="admin-app-apply" type="button">Apply</button>
        </div>

        <div class="admin-app-summary">
            Total Applications: {{ number_format($totalCount) }} (Personal: {{ number_format($personalCount) }}, Business: {{ number_format($businessCount) }})
        </div>

        <div class="admin-app-table">
            <div class="admin-app-table-head">
                <span>Applicant</span>
                <span>Contact</span>
                <span>Loan Type</span>
                <span>Amount</span>
                <span>Status</span>
                <span>Applied</span>
                <span>Details</span>
                <span>Actions</span>
            </div>

            @forelse ($applications as $application)
                @php
                    $loanLabel = ucfirst(str_replace('_', ' ', $application->purpose));
                    $statusLabel = $application->status === 'approved' || $application->status === 'processing_fee' ? 'Approved' : ($application->status === 'declined' ? 'Rejected' : 'Pending');
                    $statusClass = $application->status === 'approved' || $application->status === 'processing_fee'
                        ? 'is-approved'
                        : ($application->status === 'declined' ? 'is-rejected' : 'is-pending');
                    $submittedDate = $application->created_at?->format('M d, Y') ?? '—';
                    $submittedTime = $application->created_at?->format('g:i A') ?? '';
                @endphp
                <div class="admin-app-row">
                    <div class="admin-app-cell">
                        <strong>{{ $shortName($application->full_name) }}</strong>
                        <span class="admin-app-pill">{{ $loanLabel }}</span>
                    </div>
                    <div class="admin-app-cell">
                        <strong>{{ $application->phone_number }}</strong>
                        <span>{{ $application->email }}</span>
                    </div>
                    <div class="admin-app-cell admin-app-loan">
                        <strong>{{ $loanLabel }} Loan</strong>
                        <span>{{ strtolower($loanLabel) }} application</span>
                    </div>
                    <div class="admin-app-cell">
                        <strong>KSh {{ $formatCurrency($application->amount) }}</strong>
                    </div>
                    <div class="admin-app-cell">
                        <span class="admin-app-status {{ $statusClass }}">{{ $statusLabel }}</span>
                    </div>
                    <div class="admin-app-cell">
                        <strong>{{ $submittedDate }}</strong>
                        <span>{{ $submittedTime }}</span>
                    </div>
                    <div class="admin-app-cell admin-app-details">
                        <span>ID: {{ $application->token }}</span>
                        <span>Employment: {{ $application->employment_status ?? '—' }}</span>
                        <span>Income: KSh {{ $formatCurrency($application->income ?? 0) }}</span>
                        <span>Purpose: {{ strtolower($loanLabel) }}</span>
                    </div>
                    <div class="admin-app-cell admin-app-actions">
                        <input class="admin-app-notes" type="text" placeholder="Credit notes...">
                        <div class="admin-app-buttons">
                            <button class="admin-app-approve" type="button">Approve</button>
                            <button class="admin-app-reject" type="button">Reject</button>
                        </div>
                    </div>
                </div>
            @empty
                <div class="admin-app-empty">No applications yet.</div>
            @endforelse
        </div>

        <div class="admin-app-footer">
            <span>Showing {{ $showingFrom }}-{{ $showingTo }} of {{ number_format($filteredTotal) }} applications</span>
            <div class="admin-app-pagination">
                <button class="admin-app-page" type="button" @disabled($currentPage <= 1)>Prev</button>
                @for ($page = 1; $page <= $lastPage; $page++)
                    <button class="admin-app-page {{ $page === $currentPage ? 'is-active' : '' }}" type="button">{{ $page }}</button>
                @endfor
                <button class="admin-app-page" type="button" @disabled($currentPage >= $lastPage)>Next</button>
            </div>
        </div>
    </section>
@endsection
