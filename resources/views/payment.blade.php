<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Harborwell Finance') }} | Processing Fee</title>
    <meta name="description" content="Pay the processing fee to continue your Harborwell Finance application.">
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
<body id="top" class="page-payment">
    <x-landing.header />

    <main>
        <section class="payment-section">
            <div class="container">
                <div class="payment-header">
                    <h1>Processing fee payment</h1>
                    <p>Complete the processing fee (max £80) to continue your application. This fee covers verification and credit checks and is non-refundable.</p>
                </div>

                @php
                    $feeAmount = !empty($application)
                        ? min(80, (int) ($application->processing_fee_amount ?? 80))
                        : 0;
                @endphp

                @if (empty($token))
                    <div class="payment-card">
                        <div class="payment-empty">
                            <h2>Status link required</h2>
                            <p>Please open this page from your private status link so we can locate your application.</p>
                            <a class="btn btn-primary" href="/status/">Go to status</a>
                        </div>
                    </div>
                @elseif (empty($application))
                    <div class="payment-card">
                        <div class="payment-empty">
                            <h2>Application not found</h2>
                            <p>We could not locate an application for this link. Check the link or return to status.</p>
                            <a class="btn btn-primary" href="/status/">Go to status</a>
                        </div>
                    </div>
                @else
                    <div class="payment-card">
                        <div class="payment-summary">
                            <div>
                                <h2>Pay to continue</h2>
                                <p class="payment-note">This payment unlocks the underwriting review of your application.</p>
                            </div>
                            <div class="payment-amount">
                                <strong>£{{ number_format($feeAmount) }}</strong>
                            </div>
                        </div>
                        <div class="payment-details">
                            <div>
                                <span>What it covers</span>
                                <strong>Identity, affordability, and credit checks</strong>
                            </div>
                            <div>
                                <span>Next step</span>
                                <strong>Start review within 72 business hours</strong>
                            </div>
                        </div>
                        <p class="payment-refund">This processing fee is non-refundable.</p>
                        <div class="payment-actions">
                            <a class="btn btn-primary" href="#">Proceed to payment</a>
                            <a class="btn btn-outline" href="{{ $statusUrl }}">Back to status</a>
                        </div>
                        <p class="payment-footnote">You will be redirected to a secure payment provider.</p>
                    </div>
                @endif
            </div>
        </section>
    </main>

    <x-landing.footer />
</body>
</html>
