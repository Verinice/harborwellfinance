<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Harborwell Finance') }} | Privacy Policy</title>
    <meta name="description" content="Harborwell Finance privacy policy describing how we collect, use, and protect your information.">
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
<body id="top" class="page-legal">
    <x-landing.header />

    <main>
        <section class="legal-section">
            <div class="container">
                <div class="legal-header">
                    <h1>Privacy Policy</h1>
                    <p>We respect your privacy and protect your data. This policy explains what we collect and how we use it.</p>
                </div>

                <div class="legal-card">
                    <h2>Information We Collect</h2>
                    <p>We collect details you submit in your application, such as your name, contact information, and loan preferences. We may also collect verification and credit assessment data as required.</p>

                    <h2>How We Use Your Information</h2>
                    <p>Your information is used to evaluate your application, verify your identity, assess affordability, and communicate your application status.</p>

                    <h2>Sharing & Disclosure</h2>
                    <p>We may share data with service providers and credit reference agencies as necessary to process your application and comply with legal obligations.</p>

                    <h2>Data Retention</h2>
                    <p>We retain your information only as long as necessary to process your application and meet regulatory requirements.</p>

                    <h2>Security</h2>
                    <p>We implement administrative, technical, and physical safeguards to protect your data from unauthorized access.</p>

                    <h2>Your Choices</h2>
                    <p>You may request access, correction, or deletion of your data subject to applicable regulations and compliance obligations.</p>
                </div>
            </div>
        </section>
    </main>

    <x-landing.footer />
</body>
</html>
