@extends('layouts.admin-base')

@section('title', 'Users')
@section('page_kicker', 'Directory')
@section('page_title', 'Users')

@section('content')
    @php
        $userStats = $userStats ?? ['total' => 0, 'verified' => 0, 'new' => 0];
        $shortName = function ($fullName) {
            $parts = array_values(array_filter(preg_split('/\s+/', trim((string) $fullName))));
            $first = $parts[0] ?? '';
            $second = $parts[1] ?? '';
            if ($first === '') {
                return 'User';
            }
            if ($second === '') {
                return $first;
            }
            return $first . ' ' . strtoupper(substr($second, 0, 1)) . '.';
        };
        $filteredTotal = method_exists($users, 'total') ? $users->total() : $users->count();
        $showingFrom = method_exists($users, 'firstItem') ? ($users->firstItem() ?? 0) : ($users->count() ? 1 : 0);
        $showingTo = method_exists($users, 'lastItem') ? ($users->lastItem() ?? 0) : $users->count();
        $baseQuery = request()->except('page', 'status');
        $baseUrl = url()->current();
        $pendingUsers = max(0, ($userStats['total'] ?? 0) - ($userStats['verified'] ?? 0));
    @endphp

    <section class="admin-content-grid">
        <div class="admin-panel admin-panel--wide admin-panel--applications">
            <div class="admin-panel-header">
                <div>
                    <h2>Users list</h2>
                    <p>Review sign-ups, verification status, and recent activity.</p>
                </div>
                <a class="btn btn-primary btn-small" href="#add-user-modal">Add new user</a>
            </div>

            <div class="admin-table-filters">
                <div class="admin-filter-summary">
                    <span>Showing</span>
                    <strong>{{ $showingFrom }}–{{ $showingTo }}</strong>
                    <span>of {{ number_format($filteredTotal) }}</span>
                </div>
                <div class="admin-filter-chips" role="tablist" aria-label="Filter users">
                    <a class="admin-filter-chip {{ ($currentStatus ?? 'all') === 'all' ? 'is-active' : '' }}" href="{{ $baseUrl }}{{ empty($baseQuery) ? '' : '?' . http_build_query($baseQuery) }}">
                        All
                        <span>{{ number_format($userStats['total'] ?? 0) }}</span>
                    </a>
                    <a class="admin-filter-chip {{ ($currentStatus ?? 'all') === 'verified' ? 'is-active' : '' }}" href="{{ $baseUrl }}?{{ http_build_query(array_merge($baseQuery, ['status' => 'verified'])) }}">
                        Verified
                        <span>{{ number_format($userStats['verified'] ?? 0) }}</span>
                    </a>
                    <a class="admin-filter-chip {{ ($currentStatus ?? 'all') === 'pending' ? 'is-active' : '' }}" href="{{ $baseUrl }}?{{ http_build_query(array_merge($baseQuery, ['status' => 'pending'])) }}">
                        Pending
                        <span>{{ number_format($pendingUsers) }}</span>
                    </a>
                </div>
                <form class="admin-toolbar" method="get" action="{{ $baseUrl }}">
                    @foreach ($baseQuery as $key => $value)
                        <input type="hidden" name="{{ $key }}" value="{{ $value }}">
                    @endforeach
                    @if (($currentStatus ?? 'all') !== 'all')
                        <input type="hidden" name="status" value="{{ $currentStatus }}">
                    @endif
                    <div class="admin-filter">
                        <label for="adminUserStatusFilter">Status</label>
                        <select id="adminUserStatusFilter" name="status" onchange="this.form.submit()">
                            <option value="all" @selected(($currentStatus ?? 'all') === 'all')>All</option>
                            <option value="verified" @selected(($currentStatus ?? 'all') === 'verified')>Verified</option>
                            <option value="pending" @selected(($currentStatus ?? 'all') === 'pending')>Pending</option>
                        </select>
                    </div>
                    <div class="admin-filter">
                        <label for="adminUserSortSelect">Sort</label>
                        <select id="adminUserSortSelect" name="sort" onchange="this.form.submit()">
                            <option value="newest" @selected(($currentSort ?? 'newest') === 'newest')>Newest</option>
                            <option value="name" @selected(($currentSort ?? 'newest') === 'name')>Name</option>
                            <option value="status" @selected(($currentSort ?? 'newest') === 'status')>Status</option>
                        </select>
                    </div>
                    <div class="admin-results">{{ number_format($filteredTotal) }} result{{ $filteredTotal === 1 ? '' : 's' }}</div>
                </form>
            </div>

            <div class="admin-table admin-table--tabular">
                @forelse ($users as $user)
                    @if ($loop->first)
                        <div class="admin-table-scroll">
                            <table class="admin-table-grid">
                                <thead>
                                    <tr class="admin-table-head">
                                        <th>User</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Joined</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="admin-table-body">
                    @endif
                    <tr class="admin-table-row"
                        data-application-row
                        data-status="{{ $user->email_verified_at ? 'verified' : 'pending' }}"
                        data-name="{{ $user->name }}"
                        data-updated-ts="{{ $user->created_at?->timestamp ?? 0 }}">
                        <td>
                            <div class="admin-applicant">
                                <div class="admin-avatar">{{ strtoupper(substr($user->name, 0, 1)) }}</div>
                                <div>
                                    <strong>{{ $shortName($user->name) }}</strong>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="status-chip status-chip--info">
                                {{ ucfirst($user->role ?? 'user') }}
                            </span>
                        </td>
                        <td>
                            <span class="status-chip {{ $user->email_verified_at ? 'status-chip--success' : 'status-chip--warning' }}">
                                {{ $user->email_verified_at ? 'Verified' : 'Pending' }}
                            </span>
                        </td>
                        <td>
                            <div class="admin-updated">
                                <strong>{{ $user->created_at?->format('M d, Y') ?? '—' }}</strong>
                                <span>{{ $user->created_at?->format('H:i') ?? '' }}</span>
                            </div>
                        </td>
                        <td class="admin-cell-actions">
                            <button class="btn btn-outline btn-small" type="button">View</button>
                            <button class="btn btn-success btn-small" type="button">Verify</button>
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
                            <i data-lucide="users"></i>
                        </div>
                        <div class="admin-empty-copy">
                            <strong>No users yet</strong>
                            <p>New sign-ups will appear here for review.</p>
                        </div>
                        <div class="admin-empty-actions">
                            <a class="btn btn-outline btn-small" href="/apply/">Preview application flow</a>
                            <button class="btn btn-primary btn-small" type="button">Invite user</button>
                        </div>
                    </div>
                @endforelse
            </div>

            @if (method_exists($users, 'total'))
                <div class="admin-pagination">
                    <div class="admin-pagination-info">
                        Showing {{ $users->firstItem() ?? 0 }}–{{ $users->lastItem() ?? 0 }} of {{ $users->total() }} users
                    </div>
                    <div class="admin-pagination-actions">
                        @if ($users->onFirstPage())
                            <span class="admin-pagination-link is-disabled">Previous</span>
                        @else
                            <a class="admin-pagination-link" href="{{ $users->previousPageUrl() }}">Previous</a>
                        @endif

                        @if ($users->hasMorePages())
                            <a class="admin-pagination-link" href="{{ $users->nextPageUrl() }}">Next</a>
                        @else
                            <span class="admin-pagination-link is-disabled">Next</span>
                        @endif
                    </div>
                </div>
            @endif
        </div>
    </section>

    <div class="admin-modal" id="add-user-modal" aria-hidden="true">
        <a class="admin-modal-overlay" href="#" aria-label="Close add user modal"></a>
        <div class="admin-modal-card" role="dialog" aria-modal="true" aria-labelledby="addUserTitle">
            <div class="admin-modal-header">
                <h3 id="addUserTitle">Add new user</h3>
                <a class="admin-modal-close" href="#" aria-label="Close">×</a>
            </div>
            <form class="admin-user-form" method="post" action="#">
                <div class="admin-user-form-grid">
                    <label>
                        <span>Full name</span>
                        <input type="text" name="name" placeholder="e.g. Martin K." autocomplete="name" required>
                    </label>
                    <label>
                        <span>Email address</span>
                        <input type="email" name="email" placeholder="e.g. martin@harborwell.finance" autocomplete="email" required>
                    </label>
                    <label>
                        <span>Role</span>
                        <select name="role">
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </label>
                </div>
                <div class="admin-user-form-actions">
                    <button class="btn btn-outline btn-small" type="reset">Clear</button>
                    <button class="btn btn-success btn-small" type="submit">Create user</button>
                </div>
            </form>
        </div>
    </div>
@endsection
