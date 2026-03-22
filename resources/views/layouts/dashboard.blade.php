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
<body class="page-admin">
    @php
        $path = request()->path();
        $isOverview = $path === 'admin';
        $isApplications = request()->is('admin/applications');
        $isUsers = request()->is('admin/users');
        $isReports = request()->is('admin/reports');
        $isSettings = request()->is('admin/settings');
    @endphp

    <div class="admin-layout">
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
    </div>
</body>
</html>
