<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Harborwell Finance') }} | Application Received</title>
    <meta name="description" content="Your Harborwell Finance application has been received and will be processed within 72 business hours.">
    <meta name="robots" content="index, follow">
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
<body class="page-apply-received">
    <x-landing.header />

    <main>
        <section class="apply-section apply-section--received">
            <div class="container">
                <div class="apply-card apply-card--received">
                    <div class="apply-success apply-success--received">
                        <div class="apply-success-header">
                            <div class="apply-success-badge">✓</div>
                            <div>
                                <h2>Application received</h2>
                                <p>Your application has been received and will be processed within 24 business hours.</p>
                            </div>
                        </div>
                        <p class="apply-note apply-note--center">Use email and reference number to check updates.</p>
                        <div class="apply-actions">
                            <a class="btn btn-primary" href="{{ url('/status') }}">Check status</a>
                            <a class="btn btn-outline" href="{{ url('/') }}">Go to homepage</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-landing.footer />
</body>
</html>
