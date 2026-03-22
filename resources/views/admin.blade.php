@extends('layouts.admin-base')

@section('title', 'Admin Dashboard')
@section('page_kicker', 'Dashboard')
@section('page_title', 'Overview')

@section('content')
    @php
        $formatCurrency = function ($amount) {
            return '£' . number_format((float) $amount);
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

        $statusMap = [
            'submitted' => ['label' => 'Submitted', 'class' => 'status-chip status-chip--info'],
            'processing_fee' => ['label' => 'Payment', 'class' => 'status-chip status-chip--warning'],
            'approved' => ['label' => 'Approved', 'class' => 'status-chip status-chip--success'],
            'declined' => ['label' => 'Declined', 'class' => 'status-chip status-chip--danger'],
        ];
        $statusFlow = [
            'submitted' => ['submitted', 'approved', 'declined'],
            'approved' => ['approved'],
            'processing_fee' => ['processing_fee'],
            'declined' => ['declined'],
        ];
        $filteredTotal = method_exists($applications, 'total') ? $applications->total() : $applications->count();
        $showingFrom = method_exists($applications, 'firstItem') ? ($applications->firstItem() ?? 0) : ($applications->count() ? 1 : 0);
        $showingTo = method_exists($applications, 'lastItem') ? ($applications->lastItem() ?? 0) : $applications->count();
        $baseQuery = request()->except('page', 'status');
        $baseUrl = url()->current();
    @endphp

    <section class="admin-summary-grid">
        <article class="admin-card">
            <div class="admin-card-header">
                <span>Applications</span>
                <span class="admin-card-trend">+{{ $stats['weeklyApplications'] ?? 0 }} this week</span>
            </div>
            <div class="admin-card-value">{{ number_format($stats['totalApplications'] ?? 0) }}</div>
            <p class="admin-card-meta">Pending review: {{ number_format($stats['pending'] ?? 0) }}</p>
        </article>
        <article class="admin-card">
            <div class="admin-card-header">
                <span>Approved value</span>
                <span class="admin-card-chip success">{{ $stats['approvalRate'] ?? 0 }}%</span>
            </div>
            <div class="admin-card-value">{{ $formatCurrency($stats['approvedAmount'] ?? 0) }}</div>
            <p class="admin-card-meta">Avg approved: {{ $formatCurrency($stats['averageApprovedAmount'] ?? 0) }}</p>
        </article>
        <article class="admin-card">
            <div class="admin-card-header">
                <span>Requested value</span>
                <span class="admin-card-chip neutral">Avg {{ $formatCurrency($stats['averageAmount'] ?? 0) }}</span>
            </div>
            <div class="admin-card-value">{{ $formatCurrency($stats['totalRequested'] ?? 0) }}</div>
            <p class="admin-card-meta">Total loan demand</p>
        </article>
        <article class="admin-card">
            <div class="admin-card-header">
                <span>Payment</span>
                <span class="admin-card-trend">{{ number_format($stats['processingFeeOverdue'] ?? 0) }} overdue</span>
            </div>
            <div class="admin-card-value">{{ number_format($stats['inReview'] ?? 0) }}</div>
            <p class="admin-card-meta">Awaiting payment</p>
        </article>
    </section>

    <section class="admin-content-grid" id="applications">
        <div class="admin-panel admin-panel--wide admin-panel--applications">
            <div class="admin-panel-header">
                <div>
                    <h2>Applications queue</h2>
                    <p>Monitor new submissions, payment status, and underwriting progress.</p>
                </div>
            </div>

            <div class="admin-filters">
                <div class="admin-filters-row">
                    <div class="admin-filter-label">Status</div>
                    <div class="admin-filter-segments" role="tablist" aria-label="Filter applications">
                        <a class="admin-filter-segment {{ $currentStatus === 'all' ? 'is-active' : '' }}" href="{{ $baseUrl }}{{ empty($baseQuery) ? '' : '?' . http_build_query($baseQuery) }}">
                            All
                            <span>{{ number_format($stats['totalApplications'] ?? 0) }}</span>
                        </a>
                        <a class="admin-filter-segment {{ $currentStatus === 'payment' ? 'is-active' : '' }}" href="{{ $baseUrl }}?{{ http_build_query(array_merge($baseQuery, ['status' => 'payment'])) }}">
                            Payment
                            <span>{{ number_format($stats['inReview'] ?? 0) }}</span>
                        </a>
                        <a class="admin-filter-segment {{ $currentStatus === 'approved' ? 'is-active' : '' }}" href="{{ $baseUrl }}?{{ http_build_query(array_merge($baseQuery, ['status' => 'approved'])) }}">
                            Approved
                            <span>{{ number_format($stats['approved'] ?? 0) }}</span>
                        </a>
                        <a class="admin-filter-segment {{ $currentStatus === 'declined' ? 'is-active' : '' }}" href="{{ $baseUrl }}?{{ http_build_query(array_merge($baseQuery, ['status' => 'declined'])) }}">
                            Declined
                            <span>{{ number_format($stats['declined'] ?? 0) }}</span>
                        </a>
                        <a class="admin-filter-segment {{ $currentStatus === 'submitted' ? 'is-active' : '' }}" href="{{ $baseUrl }}?{{ http_build_query(array_merge($baseQuery, ['status' => 'submitted'])) }}">
                            Submitted
                            <span>{{ number_format($stats['submitted'] ?? 0) }}</span>
                        </a>
                    </div>
                </div>
                <form class="admin-filter-form" method="get" action="{{ $baseUrl }}">
                    @foreach ($baseQuery as $key => $value)
                        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                    @endforeach
                    @if ($currentStatus !== 'all')
                        <input type="hidden" name="status" value="{{ $currentStatus }}">
                    @endif
                    <label class="admin-filter-field">
                        <span>Status</span>
                        <select name="status" onchange="this.form.submit()">
                            <option value="all" @selected($currentStatus === 'all')>All</option>
                            <option value="payment" @selected($currentStatus === 'payment')>Payment</option>
                            <option value="approved" @selected($currentStatus === 'approved')>Approved</option>
                            <option value="declined" @selected($currentStatus === 'declined')>Declined</option>
                            <option value="submitted" @selected($currentStatus === 'submitted')>Submitted</option>
                        </select>
                    </label>
                    <label class="admin-filter-field">
                        <span>Sort</span>
                        <select name="sort" onchange="this.form.submit()">
                            <option value="newest" @selected($currentSort === 'newest')>Newest</option>
                            <option value="amount" @selected($currentSort === 'amount')>Loan amount</option>
                            <option value="status" @selected($currentSort === 'status')>Status</option>
                        </select>
                    </label>
                    <div class="admin-filter-meta">
                        Showing {{ $showingFrom }}–{{ $showingTo }} of {{ number_format($filteredTotal) }}
                    </div>
                </form>
            </div>

            <div class="admin-table admin-table--tabular">
                @forelse ($applications as $application)
                    @if ($loop->first)
                        <div class="admin-table-scroll">
                            <table class="admin-table-grid">
                                <thead>
                                    <tr class="admin-table-head">
                                        <th>Applicant</th>
                                        <th>Loan</th>
                                        <th>Status</th>
                                        <th>Approved %</th>
                                        <th>Updated</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="admin-table-body">
                    @endif
                    @php
                        $statusInfo = $statusMap[$application->status] ?? $statusMap['submitted'];
                        $allowedStatuses = $statusFlow[$application->status] ?? [$application->status];
                        $canApprove = $application->status === 'submitted';
                    @endphp
                    <tr class="admin-table-row"
                        data-application-row
                        data-status="{{ $application->status }}"
                        data-name="{{ $application->full_name }}"
                        data-amount="{{ $application->amount }}"
                        data-purpose="{{ $application->purpose }}"
                        data-purpose-label="{{ ucwords(str_replace('_', ' ', $application->purpose)) }}"
                        data-approved-percent="{{ $application->approved_percentage ?? '' }}"
                        data-token="{{ $application->token }}"
                        data-created="{{ $application->created_at?->format('M d, Y') ?? 'Unknown' }}"
                        data-created-ts="{{ $application->created_at?->timestamp ?? 0 }}"
                        data-updated="{{ $application->updated_at?->format('M d, H:i') ?? 'Pending update' }}"
                        data-updated-ts="{{ $application->updated_at?->timestamp ?? 0 }}">
                        <td data-label="Applicant">
                            <div class="admin-applicant">
                                <div class="admin-avatar">{{ strtoupper(substr($application->full_name, 0, 1)) }}</div>
                                <div>
                                    <strong>{{ $shortName($application->full_name) }}</strong>
                                </div>
                            </div>
                        </td>
                        <td data-label="Loan">
                            <div class="admin-loan-meta">
                                <strong>{{ $formatCurrency($application->amount) }}</strong>
                                <span>{{ ucfirst(str_replace('_', ' ', $application->purpose)) }}</span>
                            </div>
                        </td>
                        <td data-label="Status">
                            <div class="admin-status-field" data-status-field>
                                <select class="admin-status-select" data-application-id="{{ $application->id }}">
                                    <option value="submitted" @selected($application->status === 'submitted') @disabled(!in_array('submitted', $allowedStatuses, true))>Submitted</option>
                                    @if ($application->status === 'processing_fee')
                                        <option value="processing_fee" selected disabled>Payment</option>
                                    @endif
                                    <option value="approved" @selected($application->status === 'approved') @disabled(!in_array('approved', $allowedStatuses, true))>Approved</option>
                                    <option value="declined" @selected($application->status === 'declined') @disabled(!in_array('declined', $allowedStatuses, true))>Declined</option>
                                </select>
                                <span class="admin-status-spinner" aria-hidden="true"></span>
                            </div>
                        </td>
                        <td data-label="Approved %">
                            <span class="admin-approved-display" data-approved-display>
                                {{ $application->approved_percentage ? $application->approved_percentage . '%' : '—' }}
                            </span>
                        </td>
                        <td data-label="Updated">
                            <div class="admin-updated">
                                <strong>{{ $application->updated_at?->format('M d, H:i') ?? 'Pending update' }}</strong>
                                <span>Token {{ $application->token }}</span>
                            </div>
                        </td>
                        <td class="admin-cell-actions" data-label="Actions">
                            <a class="btn btn-outline btn-small" href="/status/{{ $application->token }}">Open status</a>
                            <button class="btn btn-success btn-small" type="button" data-approve-action @disabled(!$canApprove)>
                                Approve
                            </button>
                            <form class="admin-delete-form" method="post" action="/admin/applications/{{ $application->id }}" onsubmit="event.stopPropagation(); return confirm('Delete this application? This cannot be undone.');">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline btn-small btn-danger" type="submit" onclick="event.stopPropagation();">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @if ($loop->last)
                                </tbody>
                            </table>
                        </div>
                    @endif
                @empty
                    <div class="admin-empty-state">
                        <div class="admin-empty-icon" aria-hidden="true">
                            <i data-lucide="inbox"></i>
                        </div>
                        <div class="admin-empty-copy">
                            <strong>No applications yet</strong>
                            <p>When borrowers submit applications, they’ll appear here for review.</p>
                        </div>
                    </div>
                @endforelse
            </div>

            @if (method_exists($applications, 'total'))
                <div class="admin-pagination">
                    <div class="admin-pagination-info">
                        Showing {{ $applications->firstItem() ?? 0 }}–{{ $applications->lastItem() ?? 0 }} of {{ $applications->total() }} applications
                    </div>
                    <div class="admin-pagination-actions">
                        @if ($applications->onFirstPage())
                            <span class="admin-pagination-link is-disabled">Previous</span>
                        @else
                            <a class="admin-pagination-link" href="{{ $applications->previousPageUrl() }}">Previous</a>
                        @endif

                        @if ($applications->hasMorePages())
                            <a class="admin-pagination-link" href="{{ $applications->nextPageUrl() }}">Next</a>
                        @else
                            <span class="admin-pagination-link is-disabled">Next</span>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection
