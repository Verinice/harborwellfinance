<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Harborwell Finance') }} | Contact</title>
    <meta name="description" content="Contact Harborwell Finance for support, application updates, and loan guidance.">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#8B2B36">

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
<body id="top" class="page-contact">
    <x-landing.header />

    <main>
        <section class="contact-hero">
            <div class="container contact-hero-inner">
                <div class="contact-hero-text">
                    <span class="contact-kicker">Contact</span>
                    <h1>Talk to Harborwell Finance</h1>
                    <p>Reach our team for application updates or quick guidance. We keep support simple and responsive.</p>
                    <div class="contact-hero-actions">
                        <a class="btn btn-primary" href="mailto:hello@harborwellfinance.co.uk">Email us</a>
                        <a class="btn btn-outline" href="tel:+442071234567">Call +44 20 7123 4567</a>
                    </div>
                </div>
                <div class="contact-hero-panel">
                    <div class="contact-panel-header">
                        <h2>Support at a glance</h2>
                        <p>Quick answers, clear next steps.</p>
                    </div>
                    <div class="contact-panel-rows">
                        <div class="contact-panel-row">
                            <span>Response time</span>
                            <strong>Within 1 business day</strong>
                        </div>
                        <div class="contact-panel-row">
                            <span>Support hours</span>
                            <strong>Mon–Fri, 9am–6pm</strong>
                        </div>
                        <div class="contact-panel-row">
                            <span>Office</span>
                            <strong>Canary Wharf, London</strong>
                        </div>
                    </div>
                    <a class="contact-panel-link" href="/status/">Check application status</a>
                </div>
            </div>
        </section>

        <section class="contact-channels">
            <div class="container">
                <div class="contact-grid">
                    <article class="contact-card">
                        <span class="contact-icon">E</span>
                        <h3>Email support</h3>
                        <p>Share documents or questions and we will reply quickly.</p>
                        <a href="mailto:hello@harborwellfinance.co.uk">hello@harborwellfinance.co.uk</a>
                    </article>
                    <article class="contact-card">
                        <span class="contact-icon">P</span>
                        <h3>Phone line</h3>
                        <p>Talk to a loan specialist for simple, direct answers.</p>
                        <a href="tel:+442071234567">+44 20 7123 4567</a>
                    </article>
                    <article class="contact-card">
                        <span class="contact-icon">U</span>
                        <h3>Updates</h3>
                        <p>Track your application status with your reference number.</p>
                        <a href="/status/">Check status</a>
                    </article>
                </div>
            </div>
        </section>
    </main>

    <x-landing.footer />
</body>
</html>
