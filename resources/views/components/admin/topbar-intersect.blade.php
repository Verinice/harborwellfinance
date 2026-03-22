@props([
    'kicker' => 'Dashboard',
    'title' => 'Overview',
])

@php
    $currentUser = auth()->user();
    $displayName = $currentUser?->name ?? $currentUser?->email ?? '';
    $displayRole = $currentUser?->role ? ucfirst($currentUser->role) : '';
    $shortName = function ($fullName) {
        $parts = array_values(array_filter(preg_split('/\s+/', trim((string) $fullName))));
        $first = $parts[0] ?? '';
        $second = $parts[1] ?? '';
        if ($first === '') {
            return '';
        }
        if ($second === '') {
            return $first;
        }
        return $first . ' ' . strtoupper(substr($second, 0, 1)) . '.';
    };
    $avatarLetter = $displayName !== '' ? strtoupper(substr(trim($displayName), 0, 1)) : '';
@endphp

<header class="admin-topbar">
    <div class="admin-topbar-left">
        <button class="admin-menu-toggle" id="adminMenuToggle" type="button" aria-label="Open menu" aria-controls="adminSidebar" aria-expanded="false">
            <span></span>
        </button>
        <div class="admin-topbar-title">
            <h1>{{ $title }}</h1>
        </div>
    </div>
    @if ($displayName !== '')
        <div class="admin-topbar-actions">
            <div class="admin-user">
                <div class="admin-user-avatar">{{ $avatarLetter }}</div>
                <div class="admin-user-meta">
                    <strong>{{ $shortName($displayName) }}</strong>
                    @if ($displayRole !== '')
                        <span>{{ $displayRole }}</span>
                    @endif
                </div>
            </div>
        </div>
    @endif
</header>
