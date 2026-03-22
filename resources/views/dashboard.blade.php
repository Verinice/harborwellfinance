<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard - Harborwell Finance</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Poppins', sans-serif; }
        body { background: linear-gradient(180deg, #edf2f7 0%, #f8fafc 100%); color: #1f2937; }
        .admin-header { background: linear-gradient(135deg, #24364b, #2f4864); color: #fff; padding: 1.1rem 1rem; margin-bottom: 1.75rem; box-shadow: 0 14px 28px rgba(15, 23, 42, 0.16); }
        .header-content { display: flex; justify-content: space-between; align-items: center; max-width: 1320px; margin: 0 auto; gap: 1rem; }
        .header-content h1 { font-size: clamp(1.5rem, 2.8vw, 2.4rem); line-height: 1.1; }
        .header-content p { opacity: 0.94; font-size: 1.08rem; margin-top: 0.2rem; }
        .logout-btn { color: #fff; text-decoration: none; background: rgba(255,255,255,0.18); padding: 0.6rem 1.1rem; border-radius: 9px; transition: background-color 0.2s ease, transform 0.2s ease; font-weight: 600; border: 0; cursor: pointer; }
        .logout-btn:hover { background: rgba(255,255,255,0.28); transform: translateY(-1px); }
        .admin-container { max-width: 1320px; margin: 0 auto; padding: 0 1rem 2rem; }
        .filter-bar { background: #fff; border: 1px solid #e5e7eb; border-radius: 14px; box-shadow: 0 10px 20px rgba(15, 23, 42, 0.06); padding: 0.85rem; margin-bottom: 1rem; display: flex; gap: 0.7rem; align-items: center; flex-wrap: wrap; }
        .filter-bar input, .filter-bar select { height: 42px; border: 1px solid #d1d5db; border-radius: 9px; padding: 0 0.85rem; font-size: 0.98rem; background: #fff; color: #111827; }
        .filter-bar input { min-width: 260px; flex: 1 1 260px; }
        .filter-bar select { min-width: 170px; }
        .filter-bar button { height: 42px; background: linear-gradient(135deg, #8B0000, #a40000); color: #fff; border: 0; border-radius: 9px; padding: 0 1.15rem; cursor: pointer; font-weight: 700; transition: transform 0.2s ease, box-shadow 0.2s ease; }
        .filter-bar button:hover { transform: translateY(-1px); box-shadow: 0 8px 16px rgba(139, 0, 0, 0.25); }
        .app-count { background: linear-gradient(135deg, #8B0000, #a20a0a); color: #fff; padding: 0.75rem 1rem; border-radius: 10px; margin-bottom: 1rem; font-weight: 600; box-shadow: 0 10px 18px rgba(139, 0, 0, 0.18); }
        .table-shell { background: #fff; border: 1px solid #e5e7eb; border-radius: 14px; box-shadow: 0 16px 30px rgba(15, 23, 42, 0.08); overflow: hidden; }
        .table-scroll { overflow-x: auto; }
        .applications-table { width: 100%; border-collapse: collapse; min-width: 1160px; }
        .applications-table thead th { position: sticky; top: 0; z-index: 2; background: #f8fafc; color: #4b5563; font-size: 0.77rem; font-weight: 700; letter-spacing: 0.05em; text-transform: uppercase; padding: 0.9rem 0.75rem; text-align: left; border-bottom: 1px solid #e5e7eb; }
        .applications-table tbody td { padding: 0.8rem 0.75rem; border-bottom: 1px solid #eef2f7; vertical-align: top; font-size: 0.92rem; }
        .applications-table tbody tr:hover { background: #fbfdff; }
        .applicant-name { font-weight: 700; font-size: 0.97rem; color: #111827; margin-bottom: 0.2rem; }
        .applicant-type { display: inline-block; font-size: 0.72rem; font-weight: 700; border-radius: 999px; padding: 0.2rem 0.55rem; }
        .applicant-type.personal { background: #ede9fe; color: #5b21b6; }
        .applicant-type.business { background: #dbeafe; color: #1d4ed8; }
        .cell-muted { color: #6b7280; font-size: 0.82rem; }
        .cell-strong { font-weight: 700; color: #1f2937; }
        .status-badge { display: inline-flex; align-items: center; justify-content: center; border-radius: 999px; min-width: 94px; padding: 0.28rem 0.72rem; font-size: 0.76rem; font-weight: 700; text-transform: capitalize; }
        .pending { background: #fef3c7; color: #854d0e; }
        .approved { background: #dcfce7; color: #166534; }
        .rejected { background: #fee2e2; color: #991b1b; }
        .paid { background: #e0f2fe; color: #0369a1; }
        .details-list { display: grid; gap: 0.2rem; }
        .detail-row { display: flex; gap: 0.3rem; font-size: 0.8rem; }
        .detail-label { color: #6b7280; font-weight: 600; }
        .detail-value { color: #1f2937; }
        .action-form { display: grid; gap: 0.42rem; min-width: 220px; }
        .notes-input { width: 100%; border: 1px solid #d1d5db; border-radius: 8px; padding: 0.42rem 0.55rem; font-size: 0.84rem; min-height: 36px; }
        .notes-input:focus { border-color: #1d4ed8; outline: 0; box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.12); }
        .action-buttons { display: flex; gap: 0.38rem; }
        .btn { border: 0; border-radius: 8px; padding: 0.45rem 0.65rem; cursor: pointer; font-weight: 700; font-size: 0.8rem; color: #fff; transition: transform 0.18s ease, opacity 0.18s ease; flex: 1; }
        .btn:hover { transform: translateY(-1px); opacity: 0.95; }
        .btn-approve { background: linear-gradient(135deg, #16a34a, #15803d); }
        .btn-reject { background: linear-gradient(135deg, #ef4444, #dc2626); }
        .table-footer { display: flex; justify-content: space-between; align-items: center; gap: 0.75rem; flex-wrap: wrap; border-top: 1px solid #e5e7eb; background: #f8fafc; padding: 0.85rem 1rem; }
        .table-meta { color: #4b5563; font-size: 0.88rem; font-weight: 600; }
        .pagination { display: flex; align-items: center; gap: 0.35rem; flex-wrap: wrap; }
        .page-link { display: inline-flex; align-items: center; justify-content: center; min-width: 36px; height: 36px; border-radius: 8px; border: 1px solid #d1d5db; background: #fff; color: #374151; text-decoration: none; font-weight: 600; font-size: 0.85rem; padding: 0 0.65rem; }
        .page-link:hover { border-color: #94a3b8; background: #f8fafc; }
        .page-link.active { background: #111827; border-color: #111827; color: #fff; }
        .page-link.disabled { color: #9ca3af; background: #f3f4f6; border-color: #e5e7eb; cursor: not-allowed; }
        .empty-state { text-align: center; padding: 3rem 1rem; background: #fff; border-radius: 14px; border: 1px solid #e5e7eb; color: #6b7280; }
        .stats-grid { display: grid; gap: 0.85rem; margin-bottom: 1rem; }
        .stats-card { background: #fff; border: 1px solid #e5e7eb; border-radius: 14px; padding: 1rem 1.1rem; box-shadow: 0 12px 20px rgba(15, 23, 42, 0.06); display: grid; gap: 0.4rem; }
        .stats-label { font-size: 0.72rem; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; color: #6b7280; }
        .stats-value { font-size: clamp(1.4rem, 2.8vw, 2rem); font-weight: 700; color: #111827; }
        .stats-meta { font-size: 0.88rem; color: #6b7280; }
        .applications-cards { display: none; gap: 1rem; }
        .application-card { background: #fff; border: 1px solid #e5e7eb; border-radius: 16px; padding: 1.2rem; box-shadow: 0 12px 22px rgba(15, 23, 42, 0.06); display: grid; gap: 1rem; }
        .card-section { display: grid; gap: 0.5rem; }
        .card-label { font-size: 0.78rem; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; color: #6b7280; }
        .card-value { font-size: 1rem; font-weight: 600; color: #111827; }
        .card-sub { font-size: 0.9rem; color: #6b7280; }
        .card-divider { border-top: 1px dashed #e5e7eb; }
        .card-row { display: flex; justify-content: space-between; align-items: center; gap: 0.75rem; flex-wrap: wrap; }
        .card-pill { display: inline-flex; align-items: center; justify-content: center; border-radius: 999px; padding: 0.3rem 0.8rem; font-size: 0.78rem; font-weight: 700; }
        .card-actions { display: grid; gap: 0.5rem; }
        .card-actions .action-buttons { gap: 0.5rem; }
        .card-pagination { display: none; gap: 0.6rem; background: #fff; border: 1px solid #e5e7eb; border-radius: 14px; padding: 0.85rem 1rem; box-shadow: 0 10px 18px rgba(15, 23, 42, 0.06); }
        .action-buttons { align-items: center; }
        .icon-button { display: inline-flex; align-items: center; justify-content: center; width: 36px; height: 36px; border-radius: 8px; border: 0; cursor: pointer; transition: transform 0.18s ease, opacity 0.18s ease; color: #fff; }
        .icon-button svg { width: 16px; height: 16px; }
        .icon-button:hover { transform: translateY(-1px); opacity: 0.9; }
        .icon-button:disabled { opacity: 0.5; cursor: not-allowed; transform: none; }
        .icon-button.approve { background: linear-gradient(135deg, #16a34a, #15803d); }
        .icon-button.reject { background: linear-gradient(135deg, #ef4444, #dc2626); }
        .icon-button.delete { background: linear-gradient(135deg, #111827, #1f2937); }
        .action-form.is-locked .icon-button.approve,
        .action-form.is-locked .icon-button.reject { opacity: 0.45; cursor: not-allowed; }
        .action-form.is-locked .icon-button.approve:hover,
        .action-form.is-locked .icon-button.reject:hover { transform: none; }
        .snackbar { position: fixed; left: 50%; bottom: 24px; transform: translateX(-50%) translateY(24px); background: #111827; color: #fff; padding: 0.75rem 1rem; border-radius: 999px; font-weight: 600; font-size: 0.9rem; opacity: 0; pointer-events: none; transition: opacity 0.2s ease, transform 0.2s ease; z-index: 2000; }
        .snackbar.is-visible { opacity: 1; transform: translateX(-50%) translateY(0); }
        .snackbar.is-success { background: #16a34a; }

        @media screen and (max-width: 1080px) {
            .filter-bar input, .filter-bar select, .filter-bar button {
                width: 100%;
            }

            .filter-bar input {
                min-width: 0;
            }
        }

        @media screen and (min-width: 768px) {
            .stats-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media screen and (min-width: 1024px) {
            .stats-grid {
                grid-template-columns: repeat(4, minmax(0, 1fr));
            }
        }

        @media screen and (max-width: 920px) {
            .applications-table {
                min-width: 100%;
            }

            .applications-table thead {
                display: none;
            }

            .applications-table,
            .applications-table tbody,
            .applications-table tr,
            .applications-table td {
                display: block;
                width: 100%;
            }

            .applications-table tbody tr {
                background: #fff;
                border-bottom: 1px solid #e5e7eb;
                padding: 0.6rem 0.8rem;
            }

            .applications-table tbody td {
                border-bottom: 1px dashed #eef2f7;
                padding: 0.58rem 0;
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
                gap: 0.75rem;
            }

            .applications-table tbody td:last-child {
                border-bottom: 0;
            }

            .applications-table tbody td::before {
                content: attr(data-label);
                min-width: 112px;
                font-size: 0.72rem;
                font-weight: 700;
                letter-spacing: 0.05em;
                text-transform: uppercase;
                color: #6b7280;
                margin-top: 0.2rem;
            }

            .applications-table td[data-label="Applicant"],
            .applications-table td[data-label="Contact"],
            .applications-table td[data-label="Details"],
            .applications-table td[data-label="Actions"] {
                flex-direction: column;
                align-items: flex-start;
            }

            .applications-table td[data-label="Actions"]::before {
                margin-bottom: 0.25rem;
            }

            .action-form {
                width: 100%;
                min-width: 0;
            }

            .table-footer {
                flex-direction: column;
                align-items: stretch;
            }

            .pagination {
                justify-content: flex-start;
            }

            .table-shell {
                display: none;
            }

            .applications-cards {
                display: grid;
            }

            .card-pagination {
                display: grid;
            }
        }
    </style>
</head>
<body>
@php
    $showing_start = $paginator->firstItem() ?? 0;
    $showing_end = $paginator->lastItem() ?? 0;
    $dashboardUser = auth()->user();
    $dashboardName = $dashboardUser?->name ?: 'Admin';
@endphp

<div class="admin-header">
    <div class="header-content">
        <div>
            <h1>{{ config('app.name', 'Harborwell Finance') }} - Admin Panel</h1>
            <p>Welcome, {{ $dashboardName }}!</p>
        </div>
        <form method="POST" action="/logout">
            @csrf
            <button class="logout-btn" type="submit">Logout</button>
        </form>
    </div>
</div>

<div class="admin-container">
    <div class="stats-grid">
        <div class="stats-card">
            <div class="stats-label">Total Applications</div>
            <div class="stats-value">{{ number_format($stats['total_applications']) }}</div>
            <div class="stats-meta">Personal {{ number_format($stats['personal_count']) }} · Business {{ number_format($stats['business_count']) }}</div>
        </div>
        <div class="stats-card">
            <div class="stats-label">Total Requested</div>
            <div class="stats-value">KSh {{ number_format($stats['total_requested'], 2) }}</div>
            <div class="stats-meta">All loan applications</div>
        </div>
        <div class="stats-card">
            <div class="stats-label">Total Approved</div>
            <div class="stats-value">KSh {{ number_format($stats['approved_total'], 2) }}</div>
            <div class="stats-meta">Based on 70% approval</div>
        </div>
        <div class="stats-card">
            <div class="stats-label">Average Approved</div>
            <div class="stats-value">KSh {{ number_format($stats['approved_average'], 2) }}</div>
            <div class="stats-meta">Approved loans average</div>
        </div>
    </div>
    <form method="GET" class="filter-bar">
        <input type="text" name="search" placeholder="Search applications..." value="{{ $search }}">
        <select name="filter">
            <option value="all" {{ $status_filter === 'all' ? 'selected' : '' }}>All Status</option>
            @foreach ($status_options as $value => $label)
                <option value="{{ $value }}" {{ $status_filter === $value ? 'selected' : '' }}>
                    {{ $label }}
                </option>
            @endforeach
        </select>
        <select name="loan_type_filter">
            <option value="all" {{ $loan_type_filter === 'all' ? 'selected' : '' }}>All Loan Types</option>
            <option value="personal" {{ $loan_type_filter === 'personal' ? 'selected' : '' }}>All Personal Loans</option>
            @foreach ($loan_type_options as $value => $option)
                <option value="{{ $value }}" {{ $loan_type_filter === $value ? 'selected' : '' }}>
                    {{ $option['label'] }}
                </option>
            @endforeach
        </select>
        <select name="per_page">
            <option value="10" {{ $per_page === 10 ? 'selected' : '' }}>10 / page</option>
            <option value="20" {{ $per_page === 20 ? 'selected' : '' }}>20 / page</option>
            <option value="50" {{ $per_page === 50 ? 'selected' : '' }}>50 / page</option>
        </select>
        <button type="submit">Apply</button>
    </form>

    <div class="app-count">
        Total Applications: {{ $total_applications }}
        (Personal: {{ $personal_count }}, Business: {{ $business_count }})
    </div>

    @if ($total_applications > 0)
    <div class="table-shell">
        <div class="table-scroll">
            <table class="applications-table">
                <thead>
                    <tr>
                        <th>Applicant</th>
                        <th>Contact</th>
                        <th>Loan Type</th>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Applied</th>
                        <th>Details</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($applications as $app)
                    <tr data-application-id="{{ $app['id'] }}">
                        <td data-label="Applicant">
                            <div class="applicant-name">{{ $app['display_name'] }}</div>
                            <span class="applicant-type {{ strtolower($app['loan_group']) }}">
                                {{ $app['loan_group'] }}
                            </span>
                        </td>
                        <td data-label="Contact">
                            <div class="cell-strong">{{ $app['phone'] !== '' ? $app['phone'] : 'N/A' }}</div>
                            <div class="cell-muted">{{ $app['email'] !== '' ? $app['email'] : 'N/A' }}</div>
                        </td>
                        <td data-label="Loan Type">
                            <div class="cell-strong">{{ $app['loan_type'] }}</div>
                            <div class="cell-muted">{{ $app['application_type'] }} application</div>
                        </td>
                        <td data-label="Amount" class="cell-strong">KSh {{ number_format((float) $app['amount'], 2) }}</td>
                        <td data-label="Status">
                            <span class="status-badge {{ $app['status_class'] }}">
                                {{ $app['status_label'] }}
                            </span>
                        </td>
                        <td data-label="Applied">{{ $app['applied_label'] }}</td>
                        <td data-label="Details">
                            <div class="details-list">
                                @foreach ($app['details'] as $detailLabel => $detailValue)
                                    <div class="detail-row">
                                        <span class="detail-label">{{ $detailLabel }}:</span>
                                        <span class="detail-value">{{ $detailValue }}</span>
                                    </div>
                                @endforeach
                            </div>
                        </td>
                        <td data-label="Actions">
                            @php
                                $isLocked = in_array($app['status'], ['approved','declined'], true);
                            @endphp
                            <form method="POST" action="/dashboard/{{ $app['id'] }}/status" class="action-form{{ $isLocked ? ' is-locked' : '' }}" data-action-form>
                                @csrf
                                <input type="hidden" name="application_id" value="{{ $app['id'] }}">
                                <input type="hidden" name="application_type" value="{{ $app['application_type'] }}">
                                <input type="text" class="notes-input" value="Auto-approve at 70% of requested amount" disabled>

                                <div class="action-buttons">
                                    <button type="submit" name="approve" class="icon-button approve" aria-label="Approve application" @if($isLocked) disabled @endif>
                                        <svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M20 6L9 17l-5-5" />
                                        </svg>
                                    </button>
                                    <button type="submit" name="reject" class="icon-button reject" aria-label="Decline application" @if($isLocked) disabled @endif>
                                        <svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M18 6L6 18M6 6l12 12" />
                                        </svg>
                                    </button>
                                    <button type="button" class="icon-button delete" aria-label="Delete application" data-delete-trigger data-delete-url="/dashboard/{{ $app['id'] }}/delete">
                                        <svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M3 6h18" />
                                            <path d="M8 6V4h8v2" />
                                            <path d="M10 11v6" />
                                            <path d="M14 11v6" />
                                            <path d="M6 6l1 14h10l1-14" />
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div class="table-footer">
            <div class="table-meta">
                Showing {{ $showing_start }}-{{ $showing_end }} of {{ $total_applications }} applications
            </div>
            <div class="pagination">
                @if ($paginator->onFirstPage())
                    <span class="page-link disabled">Prev</span>
                @else
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}">Prev</a>
                @endif

                @for ($page = $page_start; $page <= $page_end; $page++)
                    <a class="page-link {{ $page === $paginator->currentPage() ? 'active' : '' }}" href="{{ $paginator->url($page) }}">
                        {{ $page }}
                    </a>
                @endfor

                @if ($paginator->hasMorePages())
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}">Next</a>
                @else
                    <span class="page-link disabled">Next</span>
                @endif
            </div>
        </div>
    </div>
    <div class="applications-cards">
        @foreach ($applications as $app)
            @php
                $isLocked = in_array($app['status'], ['approved','declined'], true);
            @endphp
            <article class="application-card" data-application-id="{{ $app['id'] }}">
                <div class="card-section">
                    <div class="card-label">Applicant</div>
                    <div class="card-value">{{ $app['display_name'] }}</div>
                    <span class="card-pill applicant-type {{ strtolower($app['loan_group']) }}">{{ $app['loan_group'] }}</span>
                </div>

                <div class="card-divider"></div>

                <div class="card-section">
                    <div class="card-label">Contact</div>
                    <div class="card-value">{{ $app['phone'] !== '' ? $app['phone'] : 'N/A' }}</div>
                    <div class="card-sub">{{ $app['email'] !== '' ? $app['email'] : 'N/A' }}</div>
                </div>

                <div class="card-divider"></div>

                <div class="card-section card-row">
                    <div>
                        <div class="card-label">Loan Type</div>
                        <div class="card-value">{{ $app['loan_type'] }}</div>
                        <div class="card-sub">{{ $app['application_type'] }} application</div>
                    </div>
                    <div>
                        <div class="card-label">Amount</div>
                        <div class="card-value">KSh {{ number_format((float) $app['amount'], 2) }}</div>
                    </div>
                </div>

                <div class="card-divider"></div>

                <div class="card-section card-row">
                    <div>
                        <div class="card-label">Status</div>
                        <span class="status-badge {{ $app['status_class'] }}">{{ $app['status_label'] }}</span>
                    </div>
                    <div>
                        <div class="card-label">Applied</div>
                        <div class="card-value">{{ $app['applied_label'] }}</div>
                    </div>
                </div>

                <div class="card-divider"></div>

                <div class="card-section">
                    <div class="card-label">Details</div>
                    <div class="details-list">
                        @foreach ($app['details'] as $detailLabel => $detailValue)
                            <div class="detail-row">
                                <span class="detail-label">{{ $detailLabel }}:</span>
                                <span class="detail-value">{{ $detailValue }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="card-divider"></div>

                <div class="card-actions">
                    <form method="POST" action="/dashboard/{{ $app['id'] }}/status" class="action-form{{ $isLocked ? ' is-locked' : '' }}" data-action-form>
                        @csrf
                        <input type="hidden" name="application_id" value="{{ $app['id'] }}">
                        <input type="hidden" name="application_type" value="{{ $app['application_type'] }}">
                        <input type="text" class="notes-input" value="Auto-approve at 70% of requested amount" disabled>

                        <div class="action-buttons">
                            <button type="submit" name="approve" class="icon-button approve" aria-label="Approve application" @if($isLocked) disabled @endif>
                                <svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M20 6L9 17l-5-5" />
                                </svg>
                            </button>
                            <button type="submit" name="reject" class="icon-button reject" aria-label="Decline application" @if($isLocked) disabled @endif>
                                <svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M18 6L6 18M6 6l12 12" />
                                </svg>
                            </button>
                            <button type="button" class="icon-button delete" aria-label="Delete application" data-delete-trigger data-delete-url="/dashboard/{{ $app['id'] }}/delete">
                                <svg viewBox="0 0 24 24" aria-hidden="true" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 6h18" />
                                    <path d="M8 6V4h8v2" />
                                    <path d="M10 11v6" />
                                    <path d="M14 11v6" />
                                    <path d="M6 6l1 14h10l1-14" />
                                </svg>
                            </button>
                        </div>
                    </form>
                </div>
            </article>
        @endforeach
    </div>
    <div class="card-pagination">
        <div class="table-meta">
            Showing {{ $showing_start }}-{{ $showing_end }} of {{ $total_applications }} applications
        </div>
        <div class="pagination">
            @if ($paginator->onFirstPage())
                <span class="page-link disabled">Prev</span>
            @else
                <a class="page-link" href="{{ $paginator->previousPageUrl() }}">Prev</a>
            @endif

            @if ($paginator->hasMorePages())
                <a class="page-link" href="{{ $paginator->nextPageUrl() }}">Next</a>
            @else
                <span class="page-link disabled">Next</span>
            @endif
        </div>
    </div>
    @else
        <div class="empty-state">
            <h3>No Loan Applications Found</h3>
            <p>No records match your search or filter criteria.</p>
        </div>
    @endif
</div>
<div class="snackbar" id="dashboardSnackbar" role="status" aria-live="polite"></div>
<script>
    (() => {
        const forms = document.querySelectorAll('[data-action-form]');
        const deleteTriggers = document.querySelectorAll('[data-delete-trigger]');
        const snackbar = document.getElementById('dashboardSnackbar');
        const csrfToken = document.querySelector('meta[name=\"csrf-token\"]')?.getAttribute('content');

        const showSnackbar = (message, type = 'success') => {
            if (!snackbar) return;
            snackbar.textContent = message;
            snackbar.classList.remove('is-success', 'is-visible');
            if (type === 'success') {
                snackbar.classList.add('is-success');
            }
            snackbar.classList.add('is-visible');
            window.clearTimeout(snackbar._timer);
            snackbar._timer = window.setTimeout(() => {
                snackbar.classList.remove('is-visible');
            }, 2600);
        };

        const lockActions = (appId) => {
            if (!appId) return;
            document.querySelectorAll(`[data-application-id=\"${appId}\"] [data-action-form]`).forEach((form) => {
                form.classList.add('is-locked');
                form.querySelectorAll('.icon-button.approve, .icon-button.reject').forEach((button) => {
                    button.setAttribute('disabled', 'disabled');
                });
            });
        };

        forms.forEach((form) => {
            form.addEventListener('submit', async (event) => {
                event.preventDefault();
                if (!csrfToken) {
                    showSnackbar('Missing CSRF token.');
                    return;
                }

                const submitter = event.submitter;
                const formData = new FormData(form);
                if (submitter?.name) {
                    formData.append(submitter.name, submitter.value || '1');
                }

                const buttons = form.querySelectorAll('button');
                buttons.forEach((button) => button.setAttribute('disabled', 'disabled'));

                try {
                    const response = await fetch(form.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken,
                            'Accept': 'application/json',
                        },
                        body: formData,
                    });

                    const payload = await response.json().catch(() => ({}));
                    if (!response.ok) {
                        throw new Error(payload.message || 'Update failed.');
                    }

                    const wrapper = form.closest('[data-application-id]');
                    const appId = wrapper?.dataset.applicationId;
                    document.querySelectorAll(`[data-application-id=\"${appId}\"] .status-badge`).forEach((badge) => {
                        if (payload.status_class && payload.status_label) {
                            badge.className = `status-badge ${payload.status_class}`;
                            badge.textContent = payload.status_label;
                        }
                    });

                    if (payload.status === 'approved' || payload.status === 'declined') {
                        lockActions(appId);
                    }

                    showSnackbar('Status updated.');
                } catch (error) {
                    showSnackbar(error.message || 'Update failed.');
                } finally {
                    buttons.forEach((button) => button.removeAttribute('disabled'));
                }
            });
        });

        deleteTriggers.forEach((trigger) => {
            trigger.addEventListener('click', async (event) => {
                event.preventDefault();
                if (!csrfToken) {
                    showSnackbar('Missing CSRF token.');
                    return;
                }

                if (!confirm('Delete this application?')) {
                    return;
                }

                const deleteUrl = trigger.getAttribute('data-delete-url');
                const wrapper = trigger.closest('[data-application-id]');
                const appId = wrapper?.dataset.applicationId;

                try {
                    const response = await fetch(deleteUrl, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': csrfToken,
                            'Accept': 'application/json',
                        },
                    });

                    const payload = await response.json().catch(() => ({}));
                    if (!response.ok || !payload.deleted) {
                        throw new Error(payload.message || 'Delete failed.');
                    }

                    if (appId) {
                        document.querySelectorAll(`[data-application-id=\"${appId}\"]`).forEach((node) => node.remove());
                    }

                    showSnackbar('Application deleted.');
                } catch (error) {
                    showSnackbar(error.message || 'Delete failed.');
                }
            });
        });
    })();
</script>
</body>
</html>
