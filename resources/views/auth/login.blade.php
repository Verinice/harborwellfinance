<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Harborwell Finance') }} | Admin Login</title>
    <meta name="description" content="Secure login for Harborwell Finance administration.">
    <meta name="robots" content="noindex, nofollow">
    <meta name="theme-color" content="#f2f6ff">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            {!! file_get_contents(resource_path('css/welcome.css')) !!}
        </style>
    @endif
</head>
<body class="page-auth">
    <main>
        <section class="auth-section">
            <div class="auth-card">
                <img class="auth-logo" src="{{ asset('harborwell-logo.png') }}" alt="Harborwell Finance logo" loading="lazy">
                <div>
                    <h1 class="auth-title">Admin sign in</h1>
                    <p class="auth-subtitle">Use your admin account to access the dashboard.</p>
                </div>

                <form class="apply-form" method="post" action="/login">
                    @csrf
                    <div class="apply-field">
                        <label for="email">Email address</label>
                        <input id="email" name="email" type="email" autocomplete="email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="apply-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="apply-field">
                        <label for="password">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required>
                        @error('password')
                            <div class="apply-error">{{ $message }}</div>
                        @enderror
                    </div>
                    <label class="auth-remember">
                        <input type="checkbox" name="remember">
                        <span>Remember me</span>
                    </label>
                    <button class="btn btn-primary" type="submit">Sign in</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>
