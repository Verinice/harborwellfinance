<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Harborwell Finance') }} | Application Status</title>
    <meta name="description" content="View your Harborwell Finance loan application status using your reference number, email, or document.">
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
<body id="top" class="page-status">
    <x-landing.header />

    <main>
        <section class="status-section">
            <div class="container">
                <div class="status-layout status-layout--single">
                    @php
                        $isApproved = !empty($application) && ($statusData['status'] ?? '') === 'approved';
                    @endphp
                    <div class="status-grid status-grid--single{{ $isApproved ? ' status-grid--approved' : '' }}">
                        <div class="status-card status-card--narrow{{ $isApproved ? ' status-card--approved' : '' }}">
                            @if (!empty($application))
                                @php
                                    $badgeClass = 'status-badge';
                                    if ($statusData['status'] === 'approved') {
                                        $badgeClass .= ' status-badge--approved';
                                    } elseif ($statusData['status'] === 'declined') {
                                        $badgeClass .= ' status-badge--declined';
                                    }

                                    $approvedPercent = (int) ($application->approved_percentage ?? $application->credit_score_percent ?? 0);
                                    $approvedPercent = max(0, min(100, $approvedPercent));
                                    $approvedAmount = (int) round(($application->amount ?? 0) * ($approvedPercent / 100));
                                    $feeAmount = (int) ($application->processing_fee_amount ?? 80);
                                    $feeAmount = max(0, min(80, $feeAmount));
                                    $firstName = trim(strtok($application->full_name ?? 'Applicant', ' '));
                                    $statusLabel = $statusData['status'] === 'approved'
                                        ? 'Approved'
                                        : ($statusData['status'] === 'declined' ? 'Declined' : 'Pending');
                                    $statusClass = $statusData['status'] === 'approved'
                                        ? 'status-pill--success'
                                        : ($statusData['status'] === 'declined' ? 'status-pill--danger' : 'status-pill--pending');
                                @endphp
                                <div class="status-result status-result--single">
                                    @if ($statusData['status'] === 'approved')
                                        <div class="status-approval-card">
                                            <div class="status-approval-header">
                                                <span class="status-approval-check" aria-hidden="true">✓</span>
                                                <h2>Congratulations! Loan Pre-Approved</h2>
                                            </div>
                                            <p>Hi <span class="status-salutation-name">{{ $firstName ?: 'there' }}</span>, your reference number <strong>{{ $application->token }}</strong> has been pre-approved.</p>
                                            <div class="status-approval-amount">
                                                <span>Loan applied for</span>
                                                <strong>£{{ number_format((int) ($application->amount ?? 0)) }}</strong>
                                            </div>
                                            <div class="status-approval-meter">
                                                <div class="status-approval-meter-label">
                                                    <span>Credit score</span>
                                                    <strong>{{ $approvedPercent }}%</strong>
                                                </div>
                                                <div class="status-approval-meter-bar">
                                                    <span style="width: {{ $approvedPercent }}%"></span>
                                                </div>
                                            </div>
                                            <div class="status-approval-amount status-approval-amount--qualified">
                                                <span>Qualified amount</span>
                                                <strong>£{{ number_format($approvedAmount) }}</strong>
                                            </div>
                                            <p class="status-approval-fee">
                                                Kindly pay <strong>£{{ number_format($feeAmount) }}</strong> for <strong>Account Opening</strong> &amp; <strong>Activation</strong> in Harborwell Finance.
                                            </p>
                                            <p class="status-approval-note status-approval-note--center">After payment, we verify and complete final approval.</p>
                                            <a class="btn btn-primary status-approval-cta" href="/payment/?token={{ $application->token }}">Pay to continue</a>
                                        </div>
                                    @elseif ($statusData['status'] === 'declined')
                                        <div class="status-row status-token">
                                            <span>Reference Number</span>
                                            <div class="status-row-meta">
                                                <strong>{{ $application->token }}</strong>
                                                <span class="{{ $badgeClass }}">{{ $statusData['badge'] }}</span>
                                            </div>
                                        </div>
                                        <div class="status-meta">
                                            <span>Status</span>
                                            <strong class="status-pill {{ $statusClass }}">{{ $statusLabel }}</strong>
                                        </div>
                                        <div class="status-pending-card status-pending-card--declined">
                                            <h2>Application declined</h2>
                                            <p>Hi <span class="status-salutation-name">{{ $firstName ?: 'there' }}</span>, we are unable to approve this application at the moment.</p>
                                        </div>
                                    @else
                                        <div class="status-row status-token">
                                            <span>Reference Number</span>
                                            <div class="status-row-meta">
                                                <strong>{{ $application->token }}</strong>
                                                <span class="{{ $badgeClass }}">{{ $statusData['badge'] }}</span>
                                            </div>
                                        </div>
                                        <div class="status-meta">
                                            <span>Status</span>
                                            <strong class="status-pill {{ $statusClass }}">{{ $statusLabel }}</strong>
                                        </div>
                                        <div class="status-pending-card">
                                            <h2>Application in review</h2>
                                            <p>Hi <span class="status-salutation-name">{{ $firstName ?: 'there' }}</span>, your application is being reviewed. We will update you once processing is complete.</p>
                                            <div class="status-pending-meta">
                                                <div>
                                                    <span>Applicant</span>
                                                    <strong>{{ $application->full_name }}</strong>
                                                </div>
                                                <div>
                                                    <span>Submitted</span>
                                                    <strong>{{ $application->created_at?->format('M j, Y') ?? '—' }}</strong>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @elseif (!empty($error))
                                <div class="status-empty">
                                <h2>Invalid details</h2>
                                <p>{{ $error }}</p>
                                    <form class="status-form" id="statusLookupForm">
                                        <div class="status-field">
                                            <label for="statusEmail">Email Address</label>
                                            <input id="statusEmail" name="email" type="email" placeholder="e.g. jane.doe@gmail.com">
                                        </div>
                                        <div class="status-field">
                                            <label for="statusReference">Reference Number</label>
                                            <input id="statusReference" name="reference" type="text" placeholder="e.g. HW-TUEGF7F">
                                        </div>
                                        <button class="btn btn-primary" type="submit">Check status</button>
                                    </form>
                                </div>
                            @elseif (empty($token))
                                <div class="status-empty">
                                <h2>Enter your details to check your loan application status</h2>
                                    <form class="status-form" id="statusLookupForm">
                                        <div class="status-field">
                                            <label for="statusEmail">Email Address</label>
                                            <input id="statusEmail" name="email" type="email" placeholder="e.g. jane.doe@gmail.com">
                                        </div>
                                        <div class="status-field">
                                            <label for="statusReference">Reference Number</label>
                                            <input id="statusReference" name="reference" type="text" placeholder="e.g. HW-TUEGF7F">
                                        </div>
                                        <button class="btn btn-primary" type="submit">Check status</button>
                                    </form>
                                </div>
                            @elseif (empty($application))
                                <div class="status-empty">
                                <h2>Application not found</h2>
                                <p>We could not locate an application for this reference number or email. Check the value or contact support for help.</p>
                                    <a class="btn btn-primary" href="/contact/">Contact support</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-landing.footer />

    <script>
        const lookupForm = document.getElementById('statusLookupForm');
        if (lookupForm) {
            lookupForm.addEventListener('submit', (event) => {
                event.preventDefault();
                const emailInput = document.getElementById('statusEmail');
                const referenceInput = document.getElementById('statusReference');
                const emailValue = emailInput?.value?.trim().toLowerCase();
                const referenceValue = referenceInput?.value?.trim().toUpperCase().replace(/\s+/g, '');
                if (emailValue) {
                    window.location.href = `/status/${encodeURIComponent(emailValue)}`;
                    return;
                }
                if (referenceValue) {
                    window.location.href = `/status/${encodeURIComponent(referenceValue)}`;
                    return;
                }
                emailInput?.focus();
            });
        }

        const countdownEl = document.getElementById('feeCountdown');
        if (countdownEl) {
            const deadline = countdownEl.dataset.deadline;
            const deadlineTime = deadline ? new Date(deadline).getTime() : null;

            if (deadlineTime) {
                const update = () => {
                    const remaining = Math.max(0, deadlineTime - Date.now());
                    const totalSeconds = Math.floor(remaining / 1000);
                    const hh = String(Math.floor(totalSeconds / 3600)).padStart(2, '0');
                    const mm = String(Math.floor((totalSeconds % 3600) / 60)).padStart(2, '0');
                    const ss = String(totalSeconds % 60).padStart(2, '0');
                    countdownEl.textContent = `${hh}:${mm}:${ss}`;
                };

                update();
                setInterval(update, 1000);
            }
        }

    </script>
</body>
</html>
