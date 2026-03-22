<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Harborwell Finance') }} | Terms & Conditions</title>
    <meta name="description" content="Harborwell Finance terms and conditions, including fees, eligibility, and disbursement policies.">
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
                    <h1>Terms & Conditions</h1>
                    <p>These terms govern your use of Harborwell Finance services. By applying, you agree to the terms below.</p>
                </div>

                <div class="legal-card">
                    <h2>Eligibility & Verification</h2>
                    <p>All applications are subject to identity checks, affordability assessment, and credit evaluation. We may request additional documents to verify your information.</p>

                    <h2>No Guaranteed Disbursement</h2>
                    <p>Submitting an application does not guarantee approval or disbursement. Loan decisions are based on your credit score, verification results, and internal risk assessment.</p>

                    <h2>Processing Fee (Non‑Refundable)</h2>
                    <p>A processing fee may be charged to evaluate your application. The processing fee is non‑refundable under all circumstances, including if your application is declined or you withdraw.</p>

                    <h2>Offer Validity</h2>
                    <p>Any indicative rates, terms, or offers displayed are subject to change until a formal offer is issued.</p>

                    <h2>Communications</h2>
                    <p>You consent to receiving application updates via email or SMS using the details you provide.</p>

                    <h2>Changes to These Terms</h2>
                    <p>We may update these terms from time to time. The latest version will always be available on this page.</p>
                </div>
            </div>
        </section>
    </main>

    <x-landing.footer />
</body>
</html>
