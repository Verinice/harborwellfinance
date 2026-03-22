@props([
    'kicker' => 'Dashboard',
    'title' => 'Overview',
])

@php
    $currentUser = auth()->user();
    $userName = $currentUser?->name ?? 'Admin';
    $shortName = function ($fullName) {
        $parts = array_values(array_filter(preg_split('/\s+/', trim((string) $fullName))));
        $first = $parts[0] ?? '';
        $second = $parts[1] ?? '';
        if ($first === '') {
            return 'Admin';
        }
        if ($second === '') {
            return $first;
        }
        return $first . ' ' . strtoupper(substr($second, 0, 1)) . '.';
    };
    $userRole = 'Admin';
    $avatarLetter = strtoupper(substr(trim($userName), 0, 1));
@endphp

<header class="admin-topbar">
    <div class="admin-topbar-left">
        <button class="admin-menu-toggle" id="adminMenuToggle" type="button" aria-label="Open menu" aria-controls="adminSidebar" aria-expanded="false">
            <span></span>
        </button>
        <div>
            <p class="admin-kicker">{{ $kicker }}</p>
            <h1>{{ $title }}</h1>
        </div>
    </div>
    <div class="admin-topbar-actions">
        <div class="admin-user">
            <div class="admin-user-avatar">{{ $avatarLetter }}</div>
            <div class="admin-user-meta">
                <strong>{{ $shortName($userName) }}</strong>
                <span>{{ $userRole }}</span>
            </div>
        </div>
    </div>
</header>
