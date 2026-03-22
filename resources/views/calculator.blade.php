<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Harborwell Finance') }} | Loan Calculator</title>
    <meta name="description" content="Calculate repayments with Harborwell Finance's loan calculator. Adjust amount, term, and payment frequency to preview monthly costs.">
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
<body id="top" class="page-calculator">
    <x-landing.header />

    <main>
        <x-landing.calculator />
    </main>

    <x-landing.footer />

    <script>
        const navToggle = document.getElementById('navToggle');
        const nav = document.getElementById('siteNav');

        if (navToggle && nav) {
            navToggle.addEventListener('click', () => {
                const isOpen = nav.classList.toggle('is-open');
                navToggle.setAttribute('aria-expanded', String(isOpen));
            });

            document.querySelectorAll('#primaryNav a').forEach((link) => {
                link.addEventListener('click', () => {
                    if (window.innerWidth < 768) {
                        nav.classList.remove('is-open');
                        navToggle.setAttribute('aria-expanded', 'false');
                    }
                });
            });
        }

        const amountRange = document.getElementById('loanAmountRange');
        const termRange = document.getElementById('loanTermRange');
        const amountInput = document.getElementById('loanAmountInput');
        const termInput = document.getElementById('loanTermInput');
        const payPeriod = document.getElementById('payPeriod');
        const loanPurpose = document.getElementById('loanPurpose');
        const paymentPerPeriod = document.getElementById('paymentPerPeriod');
        const totalInterest = document.getElementById('totalInterest');
        const totalRepayment = document.getElementById('totalRepayment');
        const applyLink = document.querySelector('[data-apply-link]');
        const termMaxLabel = document.querySelector('[data-term-max]');
        const amountMinLabel = document.querySelector('[data-amount-min]');
        const amountMaxLabel = document.querySelector('[data-amount-max]');
        const urlParams = new URLSearchParams(window.location.search);
        const purposeParam = urlParams.get('purpose');

        const formatCurrency = (value, decimals = 0) =>
            new Intl.NumberFormat('en-GB', {
                style: 'currency',
                currency: 'GBP',
                minimumFractionDigits: decimals,
                maximumFractionDigits: decimals,
            }).format(value);

        const getPeriodConfig = (period) => {
            switch (period) {
                case 'weekly':
                    return { label: 'Weekly', periodsPerYear: 52 };
                case 'biweekly':
                    return { label: 'Every 2 weeks', periodsPerYear: 26 };
                case 'daily':
                    return { label: 'Daily', periodsPerYear: 365 };
                default:
                    return { label: 'Monthly', periodsPerYear: 12 };
            }
        };

        const getAnnualRate = (purpose) => {
            switch (purpose) {
                case 'emergency':
                    return 0.04;
                case 'asset':
                    return 0.05;
                case 'business':
                    return 0.06;
                case 'personal':
                default:
                    return 0.06;
            }
        };

        const getTermLimit = (purpose) => (purpose === 'emergency' ? 6 : 24);

        const getAmountLimit = (purpose) => {
            switch (purpose) {
                case 'emergency':
                    return { min: 1000, max: 10000 };
                case 'business':
                    return { min: 3000, max: 100000 };
                case 'asset':
                    return { min: 5000, max: 200000 };
                case 'personal':
                default:
                    return { min: 1000, max: 30000 };
            }
        };

        const clamp = (value, min, max) => Math.min(Math.max(value, min), max);

        const applyAmountLimit = (purposeValue) => {
            if (!amountRange || !amountInput) return;
            const limits = getAmountLimit(purposeValue);
            amountRange.min = String(limits.min);
            amountRange.max = String(limits.max);
            amountInput.min = String(limits.min);
            amountInput.max = String(limits.max);
            if (amountMinLabel) amountMinLabel.textContent = formatCurrency(limits.min, 0);
            if (amountMaxLabel) amountMaxLabel.textContent = formatCurrency(limits.max, 0);
            const currentValue = Number(amountInput.value || amountRange.value || limits.min);
            const clamped = clamp(currentValue, limits.min, limits.max);
            amountRange.value = clamped;
            if (document.activeElement !== amountInput || amountInput.value === '') {
                amountInput.value = clamped;
            }
        };

        const applyTermLimit = (purposeValue) => {
            if (!termRange || !termInput) return;
            const maxTerm = getTermLimit(purposeValue);
            termRange.max = String(maxTerm);
            termInput.max = String(maxTerm);
            if (termMaxLabel) termMaxLabel.textContent = String(maxTerm);
            const currentValue = Number(termRange.value || termInput.value || 1);
            const clamped = clamp(currentValue, Number(termRange.min), maxTerm);
            termRange.value = clamped;
            termInput.value = clamped;
        };

        const applyQueryDefaults = () => {
            const amountParam = urlParams.get('amount');
            const termParam = urlParams.get('term');
            const periodParam = urlParams.get('period');
            const purposeParam = urlParams.get('purpose');

            if (amountParam && amountRange) {
                const value = Number(amountParam);
                if (!Number.isNaN(value)) {
                    const clamped = clamp(value, Number(amountRange.min), Number(amountRange.max));
                    amountRange.value = clamped;
                    if (amountInput) amountInput.value = clamped;
                }
            }

            if (periodParam && payPeriod) {
                const allowed = ['monthly'];
                if (allowed.includes(periodParam)) {
                    payPeriod.value = periodParam;
                }
            }

            if (purposeParam && loanPurpose) {
                const allowed = ['personal', 'business', 'emergency', 'asset'];
                if (allowed.includes(purposeParam)) {
                    loanPurpose.value = purposeParam;
                }
            }

            const activePurpose = loanPurpose?.value || purposeParam || 'personal';
            applyAmountLimit(activePurpose);
            applyTermLimit(activePurpose);

            if (termParam && termRange) {
                const value = Number(termParam);
                if (!Number.isNaN(value)) {
                    const clamped = clamp(value, Number(termRange.min), Number(termRange.max));
                    termRange.value = clamped;
                    if (termInput) termInput.value = clamped;
                }
            }
        };

        const updateCalculator = () => {
            if (!amountRange || !termRange || !payPeriod) return;

            const purposeValue = loanPurpose?.value || purposeParam || 'personal';
            applyAmountLimit(purposeValue);
            applyTermLimit(purposeValue);
            const minAmount = Number(amountRange.min);
            const maxAmount = Number(amountRange.max);
            const typedAmount = Number(amountInput?.value);
            const hasValidTypedAmount =
                !Number.isNaN(typedAmount) && typedAmount >= minAmount && typedAmount <= maxAmount;
            const principal = hasValidTypedAmount ? typedAmount : Number(amountRange.value);
            const termMonths = Number(termRange.value);
            const annualRate = getAnnualRate(purposeValue);
            const periodConfig = getPeriodConfig(payPeriod.value);
            const periods = (termMonths / 12) * periodConfig.periodsPerYear;
            const periodRate = annualRate / periodConfig.periodsPerYear;

            let payment = 0;
            if (periodRate === 0) {
                payment = principal / periods;
            } else {
                payment = principal * (periodRate / (1 - Math.pow(1 + periodRate, -periods)));
            }
            const totalPay = payment * periods;
            const interest = totalPay - principal;

            if (amountInput && (document.activeElement !== amountInput || amountInput.value === '')) {
                amountInput.value = principal;
            }
            if (termInput) termInput.value = termMonths;
            if (paymentPerPeriod) paymentPerPeriod.textContent = formatCurrency(payment, 2);
            if (totalInterest) totalInterest.textContent = formatCurrency(interest, 2);
            if (totalRepayment) totalRepayment.textContent = formatCurrency(totalPay, 2);
            if (applyLink) {
                applyLink.href = '/loans/';
            }
        };

        [amountRange, termRange, payPeriod, loanPurpose].forEach((input) => {
            if (input) {
                input.addEventListener('input', updateCalculator);
            }
        });

        if (amountInput && amountRange) {
            amountInput.addEventListener('input', () => {
                const value = Number(amountInput.value);
                if (Number.isNaN(value)) return;
                const minValue = Number(amountRange.min);
                const maxValue = Number(amountRange.max);
                if (value >= minValue && value <= maxValue) {
                    amountRange.value = value;
                }
                updateCalculator();
            });
            amountInput.addEventListener('blur', () => {
                const value = Number(amountInput.value);
                if (Number.isNaN(value)) {
                    amountInput.value = amountRange.value;
                    return;
                }
                const clamped = clamp(value, Number(amountRange.min), Number(amountRange.max));
                amountInput.value = clamped;
                amountRange.value = clamped;
                updateCalculator();
            });
        }

        if (termInput && termRange) {
            termInput.addEventListener('input', () => {
                const value = Number(termInput.value);
                if (Number.isNaN(value)) return;
                const clamped = clamp(value, Number(termRange.min), Number(termRange.max));
                termRange.value = clamped;
                updateCalculator();
            });
        }
        applyQueryDefaults();
        updateCalculator();
    </script>
</body>
</html>
