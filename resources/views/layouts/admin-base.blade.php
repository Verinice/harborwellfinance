<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Harborwell Finance') }} | @yield('title', 'Admin Dashboard')</title>
    <meta name="description" content="Admin dashboard for monitoring Harborwell Finance users and loan applications.">
    <meta name="robots" content="noindex, nofollow">
    <meta name="theme-color" content="#f2f6ff">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@400;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/css/dashboard.css', 'resources/js/app.js'])
    @else
        <style>
            {!! file_get_contents(resource_path('css/welcome.css')) !!}
            {!! file_get_contents(resource_path('css/dashboard.css')) !!}
        </style>
    @endif
</head>
@php
    $layoutMode = trim($__env->yieldContent('admin_layout', 'default'));
@endphp
<body class="page-admin{{ $layoutMode === 'clean' ? ' page-admin--clean' : '' }}">
    @php
        $path = request()->path();
        $isOverview = $path === 'admin';
        $isApplications = request()->is('admin/applications');
        $isUsers = request()->is('admin/users');
        $isReports = request()->is('admin/reports');
        $isSettings = request()->is('admin/settings');
    @endphp

    <div class="admin-layout">
        @if ($layoutMode !== 'clean')
            <x-admin.topbar-intersect
                :kicker="trim($__env->yieldContent('page_kicker', 'Dashboard'))"
                :title="trim($__env->yieldContent('page_title', 'Overview'))" />

            <aside class="admin-sidebar" id="adminSidebar">
                <div class="admin-sidebar-inner">
                    <div class="admin-sidebar-header">
                        <div class="admin-brand">
                            <img class="admin-brand-logo admin-brand-logo--full" src="{{ asset('harborwell-logo.png') }}" alt="Harborwell Finance logo" loading="lazy">
                            <img class="admin-brand-logo admin-brand-logo--icon" src="{{ asset('harborwell-icon.png') }}" alt="Harborwell Finance icon" loading="lazy">
                        </div>
                    </div>
                    <nav class="admin-nav">
                        <a class="admin-nav-link {{ $isOverview ? 'is-active' : '' }}" href="/admin" @if ($isOverview) aria-current="page" @endif>
                            <i class="admin-nav-icon" data-lucide="home" aria-hidden="true"></i>
                            <span class="admin-nav-text">Overview</span>
                        </a>
                        <a class="admin-nav-link {{ $isApplications ? 'is-active' : '' }}" href="/admin/applications" @if ($isApplications) aria-current="page" @endif>
                            <i class="admin-nav-icon" data-lucide="file-text" aria-hidden="true"></i>
                            <span class="admin-nav-text">Applications</span>
                        </a>
                        <a class="admin-nav-link {{ $isUsers ? 'is-active' : '' }}" href="/admin/users" @if ($isUsers) aria-current="page" @endif>
                            <i class="admin-nav-icon" data-lucide="users" aria-hidden="true"></i>
                            <span class="admin-nav-text">Users</span>
                        </a>
                        <a class="admin-nav-link {{ $isReports ? 'is-active' : '' }}" href="/admin/reports" @if ($isReports) aria-current="page" @endif>
                            <i class="admin-nav-icon" data-lucide="bar-chart-3" aria-hidden="true"></i>
                            <span class="admin-nav-text">Reports</span>
                        </a>
                        <a class="admin-nav-link {{ $isSettings ? 'is-active' : '' }}" href="/admin/settings" @if ($isSettings) aria-current="page" @endif>
                            <i class="admin-nav-icon" data-lucide="settings" aria-hidden="true"></i>
                            <span class="admin-nav-text">Settings</span>
                        </a>
                    </nav>
                    <form class="admin-sidebar-logout" method="post" action="/logout">
                        @csrf
                        <button class="btn btn-outline btn-small" type="submit">
                            <i class="admin-nav-icon" data-lucide="log-out" aria-hidden="true"></i>
                            <span class="admin-nav-text">Log out</span>
                        </button>
                    </form>
                </div>
            </aside>

            <div class="admin-overlay" id="adminOverlay"></div>
        @endif

        <main class="admin-main{{ $layoutMode === 'clean' ? ' admin-main--clean' : '' }}">
            @yield('content')
        </main>
    </div>

    <div class="admin-modal" id="adminApproveModal" aria-hidden="true">
        <div class="admin-modal-overlay" data-approve-close></div>
        <div class="admin-modal-card" role="dialog" aria-modal="true" aria-labelledby="adminApproveTitle">
            <div class="admin-modal-header">
                <h3 id="adminApproveTitle">Set approved percentage</h3>
                <button class="admin-modal-close" type="button" data-approve-close aria-label="Close">×</button>
            </div>
            <form class="admin-approve-form" id="adminApproveForm">
                <p class="admin-approve-meta">
                    <span id="adminApproveName">Applicant</span>
                    <span id="adminApproveAmount"></span>
                </p>
                <label class="admin-approve-field">
                    <span>Approved %</span>
                    <input id="adminApprovedPercent" type="number" min="1" max="100" step="1" placeholder="e.g. 80" required>
                </label>
                <div class="admin-approve-actions">
                    <button class="btn btn-outline btn-small" type="button" data-approve-close>Cancel</button>
                    <button class="btn btn-success btn-small" type="submit">Confirm approval</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const statusMap = {
            submitted: { label: 'Submitted', className: 'status-chip status-chip--info' },
            processing_fee: { label: 'Payment', className: 'status-chip status-chip--warning' },
            approved: { label: 'Approved', className: 'status-chip status-chip--success' },
            declined: { label: 'Declined', className: 'status-chip status-chip--danger' },
        };
        const statusTransitions = {
            submitted: ['submitted', 'approved', 'declined'],
            approved: ['approved'],
            declined: ['declined'],
            processing_fee: ['processing_fee'],
        };
        const allowedStatusesFor = (status) => statusTransitions[status] || [status];

        const layout = document.querySelector('.admin-layout');
        const sidebar = document.getElementById('adminSidebar');
        const overlay = document.getElementById('adminOverlay');
        const menuToggle = document.getElementById('adminMenuToggle');
        const sidebarNav = document.querySelector('.admin-nav');

        const closeSidebar = () => {
            layout?.classList.remove('is-sidebar-open');
            if (menuToggle) {
                menuToggle.setAttribute('aria-expanded', 'false');
            }
        };

        const openSidebar = () => {
            layout?.classList.add('is-sidebar-open');
            if (menuToggle) {
                menuToggle.setAttribute('aria-expanded', 'true');
            }
        };

        menuToggle?.addEventListener('click', () => {
            if (layout?.classList.contains('is-sidebar-open')) {
                closeSidebar();
            } else {
                openSidebar();
            }
        });

        overlay?.addEventListener('click', closeSidebar);
        document.querySelectorAll('.admin-nav-link').forEach((link) => {
            link.addEventListener('click', closeSidebar);
        });

        const expandSidebar = () => sidebar?.classList.add('is-expanded');
        const collapseSidebar = () => {
            if (sidebar && !sidebar.contains(document.activeElement)) {
                sidebar.classList.remove('is-expanded');
            }
        };

        if (sidebarNav) {
            sidebarNav.addEventListener('mouseenter', expandSidebar);
            sidebarNav.addEventListener('mouseleave', collapseSidebar);
            sidebarNav.addEventListener('focusin', expandSidebar);
            sidebarNav.addEventListener('focusout', collapseSidebar);
        }

        const approveModal = document.getElementById('adminApproveModal');
        const approveForm = document.getElementById('adminApproveForm');
        const approveInput = document.getElementById('adminApprovedPercent');
        const approveName = document.getElementById('adminApproveName');
        const approveAmount = document.getElementById('adminApproveAmount');
        const approveCloseButtons = document.querySelectorAll('[data-approve-close]');
        let pendingApprove = null;

        const updateApproveAmount = (row, percentValue) => {
            if (!approveAmount || !row?.dataset?.amount) return;
            const baseAmount = Number(row.dataset.amount);
            const percent = Number(percentValue);
            if (!Number.isFinite(baseAmount) || !Number.isFinite(percent)) {
                approveAmount.textContent = '—';
                return;
            }
            const approvedAmount = Math.round(baseAmount * (percent / 100));
            approveAmount.textContent = `£${approvedAmount.toLocaleString()}`;
        };

        const openApproveModal = ({ row, selectEl }) => {
            if (!approveModal || !approveInput) return;
            const currentPercent = row?.dataset?.approvedPercent || '';
            approveInput.value = currentPercent;
            approveModal.classList.add('is-open');
            approveModal.setAttribute('aria-hidden', 'false');
            pendingApprove = { row, selectEl };
            if (approveName && row?.dataset?.name) {
                approveName.textContent = row.dataset.name;
            }
            updateApproveAmount(row, currentPercent);
            approveInput.focus();
        };

        const closeApproveModal = () => {
            if (!approveModal) return;
            approveModal.classList.remove('is-open');
            approveModal.setAttribute('aria-hidden', 'true');
            pendingApprove = null;
        };

        approveCloseButtons.forEach((button) => {
            button.addEventListener('click', (event) => {
                event.preventDefault();
                closeApproveModal();
            });
        });

        const rows = Array.from(document.querySelectorAll('[data-application-row]'));
        const statusSelects = Array.from(document.querySelectorAll('.admin-status-select'));

        rows.forEach((row) => {
            row.addEventListener('click', () => {
                rows.forEach((item) => item.classList.toggle('is-active', item === row));
            });

            const viewButton = row.querySelector('[data-application-action]');
            if (viewButton) {
                viewButton.addEventListener('click', (event) => {
                    event.stopPropagation();
                    rows.forEach((item) => item.classList.toggle('is-active', item === row));
                });
            }

            const approveButton = row.querySelector('[data-approve-action]');
            if (approveButton) {
                approveButton.addEventListener('click', (event) => {
                    event.stopPropagation();
                    if (approveButton.disabled) {
                        return;
                    }
                    const statusSelect = row.querySelector('.admin-status-select');
                    if (!statusSelect) {
                        return;
                    }
                    openApproveModal({ row, selectEl: statusSelect });
                });
            }
        });

        const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content') || '';
        const setStatusLoading = (selectEl, isLoading) => {
            const field = selectEl?.closest('[data-status-field]');
            if (!field) return;
            field.classList.toggle('is-loading', isLoading);
            selectEl.disabled = isLoading;
        };

        const applyApprovedPercent = (row, approvedPercent) => {
            if (!row) return;
            row.dataset.approvedPercent = approvedPercent ?? '';
            const display = row.querySelector('[data-approved-display]');
            if (display) {
                display.textContent = approvedPercent ? `${approvedPercent}%` : '—';
            }
        };

        const applyStatusControls = (row, selectEl, status) => {
            if (!selectEl) return;
            const allowed = allowedStatusesFor(status);
            Array.from(selectEl.options).forEach((option) => {
                option.disabled = !allowed.includes(option.value);
            });
            const approveButton = row?.querySelector('[data-approve-action]');
            if (approveButton) {
                approveButton.disabled = status !== 'submitted';
            }
        };

        const requestStatusUpdate = async ({ row, selectEl, approvedPercent }) => {
            const id = selectEl?.dataset?.applicationId;
            if (!id) return;
            setStatusLoading(selectEl, true);
            try {
                const response = await fetch(`/admin/applications/${id}/status`, {
                    method: 'PATCH',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    body: JSON.stringify({
                        status: selectEl.value,
                        approved_percentage: selectEl.value === 'approved' ? approvedPercent : undefined,
                    }),
                });
                if (!response.ok) {
                    throw new Error('Failed to update status');
                }
                const payload = await response.json();
                const statusInfo = statusMap[payload.status] || statusMap.submitted;
                if (row) {
                    row.dataset.status = payload.status;
                    if (payload.approved_percentage !== undefined) {
                        applyApprovedPercent(row, payload.approved_percentage);
                    }
                    const chip = row.querySelector('[data-status-chip]');
                    if (chip) {
                        chip.className = statusInfo.className;
                        chip.textContent = statusInfo.label;
                    }
                    applyStatusControls(row, selectEl, payload.status);
                }
            } catch (error) {
                console.error(error);
                alert('Unable to update status. Please try again.');
                if (row?.dataset?.status) {
                    selectEl.value = row.dataset.status;
                }
            } finally {
                setStatusLoading(selectEl, false);
            }
        };

        statusSelects.forEach((selectEl) => {
            const row = selectEl.closest('[data-application-row]');
            if (row) {
                applyStatusControls(row, selectEl, row.dataset.status);
            }
            selectEl.addEventListener('change', async () => {
                const row = selectEl.closest('[data-application-row]');
                if (selectEl.value === 'approved') {
                    openApproveModal({ row, selectEl });
                    if (row?.dataset?.status) {
                        selectEl.value = row.dataset.status;
                    }
                    return;
                }
                await requestStatusUpdate({ row, selectEl });
            });
        });

        if (approveForm) {
            approveForm.addEventListener('submit', async (event) => {
                event.preventDefault();
                if (!pendingApprove || !approveInput) return;
                const approvedValue = parseInt(approveInput.value, 10);
                if (!Number.isFinite(approvedValue) || approvedValue < 1 || approvedValue > 100) {
                    alert('Enter an approved percentage between 1 and 100.');
                    approveInput.focus();
                    return;
                }
                const { row, selectEl } = pendingApprove;
                selectEl.value = 'approved';
                await requestStatusUpdate({ row, selectEl, approvedPercent: approvedValue });
                closeApproveModal();
            });
        }

        if (approveInput) {
            approveInput.addEventListener('input', () => {
                if (!pendingApprove) return;
                updateApproveAmount(pendingApprove.row, approveInput.value);
            });
        }
    </script>

</body>
</html>
