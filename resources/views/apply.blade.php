<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Harborwell Finance') }} | Loan Application</title>
    <meta name="description" content="Apply for a Harborwell Finance loan in minutes. Submit your details and receive your reference number to track progress.">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#f2f6ff">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
<body id="top" class="page-apply">
    <x-landing.header />

    <main>
        <section class="apply-section">
            <div class="container">
                <div class="apply-header">
                    <h1 class="apply-title" data-apply-title>Loan application.</h1>
                    <p class="apply-subtitle" data-apply-subtitle>Complete the steps below to receive your reference number and track progress.</p>
                </div>

                <div class="apply-card apply-card--steps">
                    <div class="apply-stepper" aria-label="Application steps">
                        <ol class="apply-stepper-track">
                            <li>
                                <button class="apply-stepper-step is-active" type="button" data-step-button="0">
                                    <span class="apply-stepper-index">1</span>
                                    <span class="apply-stepper-label">Personal Info</span>
                                </button>
                            </li>
                            <li>
                                <button class="apply-stepper-step" type="button" data-step-button="1" disabled>
                                    <span class="apply-stepper-index">2</span>
                                    <span class="apply-stepper-label" data-step-label="details">Purpose Details</span>
                                </button>
                            </li>
                            <li>
                                <button class="apply-stepper-step" type="button" data-step-button="2" disabled>
                                    <span class="apply-stepper-index">3</span>
                                    <span class="apply-stepper-label">Employment Info</span>
                                </button>
                            </li>
                            <li>
                                <button class="apply-stepper-step" type="button" data-step-button="3" disabled>
                                    <span class="apply-stepper-index">4</span>
                                    <span class="apply-stepper-label">Loan Details</span>
                                </button>
                            </li>
                            <li>
                                <button class="apply-stepper-step" type="button" data-step-button="4" disabled>
                                    <span class="apply-stepper-index">5</span>
                                    <span class="apply-stepper-label">Calculator</span>
                                </button>
                            </li>
                            <li>
                                <button class="apply-stepper-step" type="button" data-step-button="5" disabled>
                                    <span class="apply-stepper-index">6</span>
                                    <span class="apply-stepper-label">Review &amp; Submit</span>
                                </button>
                            </li>
                        </ol>
                    </div>

                    <div class="apply-form-panel">
                        <form class="apply-form apply-form--steps" id="applyForm" method="post" action="/apply" novalidate>
                            @csrf
                            <div class="apply-step-panel is-active" data-step-panel="0">
                                <div class="apply-step-header">
                                    <h2>Personal Info</h2>
                                    <p>Tell us who you are so we can set up your emergency loan request.</p>
                                </div>
                                <div class="apply-step-grid">
                                    <div class="apply-field">
                                        <label for="fullName">Full name</label>
                                        <input id="fullName" name="fullName" type="text" placeholder="e.g. Priya Patel" required>
                                    </div>
                                    <div class="apply-field">
                                        <label for="phoneNumber">Phone number</label>
                                        <input id="phoneNumber" name="phoneNumber" type="tel" placeholder="+44 712 345 678" required>
                                    </div>
                                    <div class="apply-field-row apply-span-full">
                                        <div class="apply-field">
                                            <label for="email">Email address</label>
                                            <input id="email" name="email" type="email" placeholder="e.g. priya.patel@email.co.uk" required>
                                        </div>
                                        <div class="apply-field">
                                        <label for="identityType">Document type</label>
                                        <select id="identityType" name="identityType" required>
                                            <option value="" selected disabled>Select one</option>
                                            <option value="national_id">NIN (National Insurance Number)</option>
                                            <option value="passport">Passport</option>
                                            <option value="driver_license">Driver's licence</option>
                                        </select>
                                    </div>
                                    <div class="apply-field">
                                        <label for="idNumber">Document number</label>
                                        <input id="idNumber" name="idNumber" type="text" placeholder="Select a document type first" required>
                                    </div>
                                    </div>
                                </div>
                                <div class="apply-step-actions">
                                    <div class="apply-step-spacer"></div>
                                    <button class="btn btn-primary" type="button" data-step-next>Continue</button>
                                </div>
                            </div>

                            <div class="apply-step-panel" data-step-panel="1" hidden>
                                <div class="apply-step-header">
                                    <h2 data-purpose-title>Purpose Details</h2>
                                    <p data-purpose-copy>Tell us a bit more so we can tailor the response.</p>
                                </div>
                                <div class="apply-purpose-panel" data-purpose-panel="emergency">
                                    <div class="apply-step-grid">
                                        <div class="apply-field">
                                            <label for="emergencyType">Emergency type</label>
                                            <select id="emergencyType" name="emergencyType" data-purpose-required="emergency">
                                                <option value="" selected disabled>Select one</option>
                                                <option value="medical">Medical</option>
                                                <option value="home-repair">Home repair</option>
                                                <option value="car-repair">Car repair</option>
                                                <option value="rent">Rent or housing</option>
                                                <option value="utilities">Utilities</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                        <div class="apply-field">
                                            <label for="urgency">Urgency</label>
                                            <select id="urgency" name="urgency" data-purpose-required="emergency">
                                                <option value="" selected disabled>Select timeline</option>
                                                <option value="immediate">Immediate (24-48 hours)</option>
                                                <option value="week">Within 7 days</option>
                                                <option value="month">Within 30 days</option>
                                            </select>
                                        </div>
                                        <div class="apply-field apply-span-full">
                                            <label for="emergencyNotes">Description of the emergency (optional)</label>
                                            <textarea id="emergencyNotes" name="emergencyNotes" rows="4" placeholder="Briefly describe the emergency and how you plan to use the funds."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="apply-purpose-panel" data-purpose-panel="personal" hidden>
                                    <div class="apply-step-grid">
                                        <div class="apply-field">
                                            <label for="personalGoal">What is this loan for?</label>
                                            <select id="personalGoal" name="personalGoal" data-purpose-required="personal">
                                                <option value="" selected disabled>Select one</option>
                                                <option value="travel">Travel</option>
                                                <option value="education">Education</option>
                                                <option value="home-improvement">Home improvement</option>
                                                <option value="wedding">Wedding</option>
                                                <option value="debt">Debt consolidation</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                        <div class="apply-field">
                                            <label for="personalTimeline">When do you need the funds?</label>
                                            <select id="personalTimeline" name="personalTimeline" data-purpose-required="personal">
                                                <option value="" selected disabled>Select timeline</option>
                                                <option value="immediate">Immediately</option>
                                                <option value="month">Within 30 days</option>
                                                <option value="quarter">Within 3 months</option>
                                            </select>
                                        </div>
                                        <div class="apply-field apply-span-full">
                                            <label for="personalNotes">Additional details</label>
                                            <textarea id="personalNotes" name="personalNotes" rows="4" placeholder="Tell us more about your plans."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="apply-purpose-panel" data-purpose-panel="business" hidden>
                                    <div class="apply-step-grid">
                                        <div class="apply-field">
                                            <label for="businessName">Business name</label>
                                            <input id="businessName" name="businessName" type="text" placeholder="e.g. Harborwell Studio" data-purpose-required="business">
                                        </div>
                                        <div class="apply-field">
                                            <label for="businessIndustry">Industry</label>
                                            <input id="businessIndustry" name="businessIndustry" type="text" placeholder="e.g. Retail, Healthcare" data-purpose-required="business">
                                        </div>
                                        <div class="apply-field">
                                            <label for="businessYears">Years in operation</label>
                                            <input id="businessYears" name="businessYears" type="number" min="0" step="1" placeholder="e.g. 3" data-purpose-required="business">
                                        </div>
                                        <div class="apply-field">
                                            <label for="businessRevenue">Average monthly revenue</label>
                                            <div class="apply-input-group">
                                                <span class="apply-input-prefix" aria-hidden="true">£</span>
                                                <input id="businessRevenue" name="businessRevenue" type="number" min="0" step="100" placeholder="e.g. 12000" data-purpose-required="business">
                                            </div>
                                        </div>
                                        <div class="apply-field apply-span-full">
                                            <label for="businessUse">How will you use the funds?</label>
                                            <textarea id="businessUse" name="businessUse" rows="4" placeholder="Inventory, hiring, equipment, growth initiatives, etc."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="apply-purpose-panel" data-purpose-panel="asset" hidden>
                                    <div class="apply-step-grid">
                                        <div class="apply-field">
                                            <label for="assetType">Asset type</label>
                                            <select id="assetType" name="assetType" data-purpose-required="asset">
                                                <option value="" selected disabled>Select one</option>
                                                <option value="vehicle">Vehicle</option>
                                                <option value="property">Property</option>
                                                <option value="equipment">Equipment</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                        <div class="apply-field">
                                            <label for="assetValue">Estimated asset value</label>
                                            <div class="apply-input-group">
                                                <span class="apply-input-prefix" aria-hidden="true">£</span>
                                                <input id="assetValue" name="assetValue" type="number" min="0" step="100" placeholder="e.g. 18000" data-purpose-required="asset">
                                            </div>
                                        </div>
                                        <div class="apply-field">
                                            <label for="assetOwnership">Ownership status</label>
                                            <select id="assetOwnership" name="assetOwnership" data-purpose-required="asset">
                                                <option value="" selected disabled>Select one</option>
                                                <option value="owned">Owned outright</option>
                                                <option value="financed">Financed</option>
                                                <option value="leased">Leased</option>
                                            </select>
                                        </div>
                                        <div class="apply-field apply-span-full">
                                            <label for="assetNotes">Additional details</label>
                                            <textarea id="assetNotes" name="assetNotes" rows="4" placeholder="Tell us about the asset and any relevant notes."></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="apply-step-actions">
                                    <button class="btn btn-outline" type="button" data-step-prev>Back</button>
                                    <button class="btn btn-primary" type="button" data-step-next>Continue</button>
                                </div>
                            </div>

                            <div class="apply-step-panel" data-step-panel="2" hidden>
                                <div class="apply-step-header">
                                    <h2>Employment Info</h2>
                                    <p>We use this to verify affordability and income stability.</p>
                                </div>
                                <div class="apply-step-grid">
                                    <div class="apply-field">
                                        <label for="employmentStatus">Employment status</label>
                                        <select id="employmentStatus" name="employmentStatus" required>
                                            <option value="" selected disabled>Select status</option>
                                            <option value="full-time">Full-time</option>
                                            <option value="part-time">Part-time</option>
                                            <option value="self-employed">Self-employed</option>
                                            <option value="contractor">Contractor</option>
                                            <option value="student">Student</option>
                                            <option value="unemployed">Unemployed</option>
                                            <option value="retired">Retired</option>
                                        </select>
                                    </div>
                                    <div class="apply-field">
                                        <label for="employerName">Employer name (optional)</label>
                                        <input id="employerName" name="employerName" type="text" placeholder="e.g. Atlantic Health">
                                    </div>
                                    <div class="apply-field">
                                        <label for="jobTitle">Job title (optional)</label>
                                        <input id="jobTitle" name="jobTitle" type="text" placeholder="e.g. Care Coordinator">
                                    </div>
                                    <div class="apply-field">
                                        <label for="monthlyIncome">Monthly income</label>
                                        <div class="apply-input-group">
                                            <span class="apply-input-prefix" aria-hidden="true">£</span>
                                            <input id="monthlyIncome" name="monthlyIncome" type="number" min="0" step="100" inputmode="numeric" placeholder="e.g. 2800" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="apply-step-actions">
                                    <button class="btn btn-outline" type="button" data-step-prev>Back</button>
                                    <button class="btn btn-primary" type="button" data-step-next>Continue</button>
                                </div>
                            </div>

                            <div class="apply-step-panel" data-step-panel="3" hidden>
                                <div class="apply-step-header">
                                    <h2>Loan Details</h2>
                                    <p>Emergency loans are fixed-rate with clear repayment windows.</p>
                                </div>
                                <div class="apply-step-grid">
                                    <div class="apply-field" id="amountField">
                                        <label for="amount">Desired loan amount</label>
                                        <div class="apply-input-group">
                                            <span class="apply-input-prefix" aria-hidden="true">£</span>
                                            <input id="amount" name="amount" type="number" min="1000" max="30000" step="100" placeholder="e.g. 7500" required>
                                        </div>
                                    </div>
                                    <div class="apply-field" id="purposeField">
                                        <label for="purpose">Loan purpose</label>
                                        <select id="purpose" name="purpose" required>
                                            <option value="personal">Personal</option>
                                            <option value="emergency">Emergency</option>
                                            <option value="business">Business</option>
                                            <option value="asset">Asset-backed</option>
                                        </select>
                                    </div>
                                    <div class="apply-field" id="termField">
                                        <label for="termMonths">Loan term</label>
                                        <select id="termMonths" name="term_months" required>
                                            <option value="1" selected>1 month</option>
                                            <option value="2">2 months</option>
                                            <option value="3">3 months</option>
                                            <option value="4">4 months</option>
                                            <option value="5">5 months</option>
                                            <option value="6">6 months</option>
                                            <option value="7">7 months</option>
                                            <option value="8">8 months</option>
                                            <option value="9">9 months</option>
                                            <option value="10">10 months</option>
                                            <option value="11">11 months</option>
                                            <option value="12">12 months</option>
                                            <option value="13">13 months</option>
                                            <option value="14">14 months</option>
                                            <option value="15">15 months</option>
                                            <option value="16">16 months</option>
                                            <option value="17">17 months</option>
                                            <option value="18">18 months</option>
                                            <option value="19">19 months</option>
                                            <option value="20">20 months</option>
                                            <option value="21">21 months</option>
                                            <option value="22">22 months</option>
                                            <option value="23">23 months</option>
                                            <option value="24">24 months</option>
                                        </select>
                                    </div>
                                    <div class="apply-field" id="periodField">
                                        <label for="payPeriod">Pay period</label>
                                        <select id="payPeriod" name="pay_period" required>
                                            <option value="monthly" selected>Monthly</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="apply-step-actions">
                                    <button class="btn btn-outline" type="button" data-step-prev>Back</button>
                                    <button class="btn btn-primary" type="button" data-step-next>Continue</button>
                                </div>
                            </div>

                            <div class="apply-step-panel" data-step-panel="4" hidden>
                                <div class="apply-step-header">
                                    <h2>Calculator</h2>
                                    <p>Estimated repayment based on emergency loan pricing.</p>
                                </div>
                                <div class="apply-calc-card">
                                    <div class="apply-calc-row">
                                        <span>Payment per <span id="applyCalcPeriod">month</span></span>
                                        <strong id="applyCalcPayment">£0.00</strong>
                                    </div>
                                    <div class="apply-calc-row">
                                        <span>Total interest <span id="applyCalcApr">0%</span></span>
                                        <strong id="applyCalcInterest">£0.00</strong>
                                    </div>
                                    <div class="apply-calc-row">
                                        <span>Total repayment</span>
                                        <strong id="applyCalcTotal">£0.00</strong>
                                    </div>
                                </div>
                                <p class="apply-note apply-span-full">Estimates use the current product APR and update automatically when you adjust loan details.</p>
                                <div class="apply-step-actions">
                                    <button class="btn btn-outline" type="button" data-step-prev>Back</button>
                                    <button class="btn btn-primary" type="button" data-step-next>Continue</button>
                                </div>
                            </div>

                            <div class="apply-step-panel" data-step-panel="5" hidden>
                                <div class="apply-step-header">
                                    <h2>Review &amp; Submit</h2>
                                    <p>Double-check your information before sending.</p>
                                </div>
                                <div class="apply-review-grid">
                                    <div>
                                        <span class="apply-review-label">Full name</span>
                                        <strong id="reviewFullName">—</strong>
                                    </div>
                                    <div>
                                        <span class="apply-review-label">Email</span>
                                        <strong id="reviewEmail">—</strong>
                                    </div>
                                    <div>
                                        <span class="apply-review-label">Phone number</span>
                                        <strong id="reviewPhone">—</strong>
                                    </div>
                                    <div>
                                        <span class="apply-review-label">ID document</span>
                                        <strong id="reviewIdNumber">—</strong>
                                    </div>
                                    <div>
                                        <span class="apply-review-label">Monthly income</span>
                                        <strong id="reviewIncome">—</strong>
                                    </div>
                                    <div>
                                        <span class="apply-review-label">Loan amount</span>
                                        <strong id="reviewAmount">—</strong>
                                    </div>
                                    <div>
                                        <span class="apply-review-label">Loan purpose</span>
                                        <strong id="reviewPurpose">—</strong>
                                    </div>
                                    <div>
                                        <span class="apply-review-label">Purpose detail</span>
                                        <strong id="reviewPurposeDetail">—</strong>
                                    </div>
                                    <div>
                                        <span class="apply-review-label">Loan term</span>
                                        <strong id="reviewTerm">—</strong>
                                    </div>
                                    <div>
                                        <span class="apply-review-label">Pay period</span>
                                        <strong id="reviewPeriod">—</strong>
                                    </div>
                                </div>
                                <div class="apply-consent">
                                    <input id="terms" name="terms" type="checkbox" value="1" required>
                                    <label for="terms">I agree to the <a href="/terms/">Terms</a> and <a href="/privacy/">Privacy Policy</a>.</label>
                                </div>
                                <p class="apply-note">Your reference number will be shown once submitted.</p>
                                <div class="apply-error" id="applyError" role="alert" hidden></div>
                                <div class="apply-step-actions">
                                    <button class="btn btn-outline" type="button" data-step-prev>Back</button>
                                    <button class="btn btn-primary apply-submit" type="submit">
                                        <span class="apply-submit-text">Submit application</span>
                                        <span class="apply-spinner" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </section>
    </main>

    <x-landing.footer />

    <div class="apply-snackbar" id="applySnackbar" role="status" aria-live="polite" aria-atomic="true" hidden>
        <span id="applySnackbarMessage"></span>
    </div>

    <script>
        const applyForm = document.getElementById('applyForm');
        const applyError = document.getElementById('applyError');
        const applySnackbar = document.getElementById('applySnackbar');
        const applySnackbarMessage = document.getElementById('applySnackbarMessage');

        const applyTitle = document.querySelector('[data-apply-title]');
        const applySubtitle = document.querySelector('[data-apply-subtitle]');
        const detailsStepLabel = document.querySelector('[data-step-label="details"]');

        const fullNameInput = document.getElementById('fullName');
        const phoneNumberInput = document.getElementById('phoneNumber');
        const emailInput = document.getElementById('email');
        const identityTypeInput = document.getElementById('identityType');
        const idNumberInput = document.getElementById('idNumber');
        const monthlyIncomeInput = document.getElementById('monthlyIncome');
        const amountInput = document.getElementById('amount');
        const amountField = document.getElementById('amountField');
        const termMonthsInput = document.getElementById('termMonths');
        const payPeriodInput = document.getElementById('payPeriod');
        const termField = document.getElementById('termField');
        const periodField = document.getElementById('periodField');
        const purposeField = document.getElementById('purposeField');
        const purposeInput = document.getElementById('purpose');
        const purposeTitle = document.querySelector('[data-purpose-title]');
        const purposeCopy = document.querySelector('[data-purpose-copy]');
        const purposePanels = Array.from(document.querySelectorAll('[data-purpose-panel]'));

        const applyCalcPeriod = document.getElementById('applyCalcPeriod');
        const applyCalcPayment = document.getElementById('applyCalcPayment');
        const applyCalcInterest = document.getElementById('applyCalcInterest');
        const applyCalcTotal = document.getElementById('applyCalcTotal');
        const applyCalcApr = document.getElementById('applyCalcApr');

        const reviewFullName = document.getElementById('reviewFullName');
        const reviewEmail = document.getElementById('reviewEmail');
        const reviewPhone = document.getElementById('reviewPhone');
        const reviewIdNumber = document.getElementById('reviewIdNumber');
        const reviewIncome = document.getElementById('reviewIncome');
        const reviewAmount = document.getElementById('reviewAmount');
        const reviewPurpose = document.getElementById('reviewPurpose');
        const reviewPurposeDetail = document.getElementById('reviewPurposeDetail');
        const reviewTerm = document.getElementById('reviewTerm');
        const reviewPeriod = document.getElementById('reviewPeriod');

        const stepButtons = Array.from(document.querySelectorAll('[data-step-button]'));
        const stepPanels = Array.from(document.querySelectorAll('[data-step-panel]'));
        const nextButtons = Array.from(document.querySelectorAll('[data-step-next]'));
        const prevButtons = Array.from(document.querySelectorAll('[data-step-prev]'));
        const termsInput = document.getElementById('terms');

        let currentStep = 0;
        let maxStepReached = 0;
        const storagePrefix = 'hw_apply_v1_';

        const requiredFields = applyForm ? Array.from(applyForm.querySelectorAll('[required], [data-purpose-required]')) : [];
        requiredFields.forEach((field) => {
            field.dataset.baseRequired = field.hasAttribute('required') ? 'true' : 'false';
            if (field.hasAttribute('required')) {
                field.dataset.required = 'true';
            }
            field.required = false;
        });

        const purposeConfig = {
            emergency: {
                title: 'Emergency loan application.',
                subtitle: 'Complete the steps below to receive your reference number and track progress.',
                detailsLabel: 'Emergency Details',
                detailsTitle: 'Emergency Details',
                detailsCopy: 'Share the urgent situation so we can tailor the response.',
                label: 'Emergency loan',
                detailLabel: (valueMap) => valueMap.emergencyType || 'Emergency request',
                rate: 0.04,
            },
            personal: {
                title: 'Personal loan application.',
                subtitle: 'Plan your next move with a fixed-rate personal loan.',
                detailsLabel: 'Personal Plans',
                detailsTitle: 'Personal Plans',
                detailsCopy: 'Let us know what you are planning so we can tailor terms.',
                label: 'Personal loan',
                detailLabel: (valueMap) => valueMap.personalGoal || 'Personal plans',
                rate: 0.06,
            },
            business: {
                title: 'Business loan application.',
                subtitle: 'Tell us about your business so we can support your growth.',
                detailsLabel: 'Business Details',
                detailsTitle: 'Business Details',
                detailsCopy: 'Share key business facts to speed up underwriting.',
                label: 'Business loan',
                detailLabel: (valueMap) => valueMap.businessName || 'Business funding',
                rate: 0.06,
            },
            asset: {
                title: 'Asset-backed loan application.',
                subtitle: 'Provide asset details so we can structure your financing.',
                detailsLabel: 'Asset Details',
                detailsTitle: 'Asset Details',
                detailsCopy: 'Tell us about the asset you are financing.',
                label: 'Asset-backed loan',
                detailLabel: (valueMap) => valueMap.assetType || 'Asset financing',
                rate: 0.05,
            },
        };

        const termLimitConfig = {
            emergency: 6,
            personal: 24,
            business: 24,
            asset: 24,
        };

        const amountLimitConfig = {
            personal: { min: 1000, max: 30000 },
            emergency: { min: 1000, max: 10000 },
            business: { min: 3000, max: 100000 },
            asset: { min: 5000, max: 200000 },
        };

        const getTermLimit = (purpose) => termLimitConfig[purpose] || 24;
        const getAmountLimit = (purpose) => amountLimitConfig[purpose] || amountLimitConfig.personal;

        const getTermStart = (purpose) => (purpose === 'emergency' ? 2 : 6);
        const getTermStep = (purpose) => (purpose === 'emergency' ? 2 : 6);

        const applyAmountLimit = (purpose) => {
            if (!amountInput) return;
            const limits = getAmountLimit(purpose);
            amountInput.min = String(limits.min);
            amountInput.max = String(limits.max);
            if (!amountInput.value) {
                return;
            }
            const currentValue = Number(amountInput.value);
            const nextValue = Math.min(Math.max(Number.isNaN(currentValue) ? limits.min : currentValue, limits.min), limits.max);
            if (String(nextValue) !== amountInput.value) {
                amountInput.value = String(nextValue);
            }
        };

        const normalizeTermValue = (purpose, value) => {
            const maxTerm = getTermLimit(purpose);
            const start = getTermStart(purpose);
            const step = getTermStep(purpose);
            const numericValue = Number.isNaN(value) ? start : value;
            if (numericValue <= start) return start;
            if (numericValue >= maxTerm) return maxTerm;
            if (step <= 1) return numericValue;
            const stepsFromStart = Math.floor((numericValue - start) / step);
            return Math.min(maxTerm, start + stepsFromStart * step);
        };

        const buildTermOptions = (max, start, step) => {
            const fragment = document.createDocumentFragment();
            for (let i = start; i <= max; i += step) {
                const option = document.createElement('option');
                option.value = String(i);
                option.textContent = `${i} ${i === 1 ? 'month' : 'months'}`;
                fragment.appendChild(option);
            }
            return fragment;
        };

        const syncTermOptions = (purpose) => {
            if (!termMonthsInput) return;
            const maxTerm = getTermLimit(purpose);
            const start = getTermStart(purpose);
            const step = getTermStep(purpose);
            const currentValue = Number(termMonthsInput.value || start);
            termMonthsInput.innerHTML = '';
            termMonthsInput.appendChild(buildTermOptions(maxTerm, start, step));
            const nextValue = normalizeTermValue(purpose, currentValue);
            termMonthsInput.value = String(nextValue);
        };

        const clampTermValue = (purpose) => {
            if (!termMonthsInput) return;
            const currentValue = Number(termMonthsInput.value || 1);
            const nextValue = normalizeTermValue(purpose, currentValue);
            if (termMonthsInput.value !== String(nextValue)) {
                termMonthsInput.value = String(nextValue);
            }
        };

        let currentPurpose = 'personal';

        const fieldMap = [
            { key: 'fullName', el: fullNameInput },
            { key: 'phoneNumber', el: phoneNumberInput },
            { key: 'email', el: emailInput },
            { key: 'identityType', el: identityTypeInput },
            { key: 'idNumber', el: idNumberInput },
            { key: 'monthlyIncome', el: monthlyIncomeInput },
            { key: 'emergencyType', el: document.getElementById('emergencyType') },
            { key: 'urgency', el: document.getElementById('urgency') },
            { key: 'incidentDate', el: document.getElementById('incidentDate') },
            { key: 'emergencyNotes', el: document.getElementById('emergencyNotes') },
            { key: 'personalGoal', el: document.getElementById('personalGoal') },
            { key: 'personalTimeline', el: document.getElementById('personalTimeline') },
            { key: 'personalNotes', el: document.getElementById('personalNotes') },
            { key: 'businessName', el: document.getElementById('businessName') },
            { key: 'businessIndustry', el: document.getElementById('businessIndustry') },
            { key: 'businessYears', el: document.getElementById('businessYears') },
            { key: 'businessRevenue', el: document.getElementById('businessRevenue') },
            { key: 'businessUse', el: document.getElementById('businessUse') },
            { key: 'assetType', el: document.getElementById('assetType') },
            { key: 'assetValue', el: document.getElementById('assetValue') },
            { key: 'assetOwnership', el: document.getElementById('assetOwnership') },
            { key: 'assetNotes', el: document.getElementById('assetNotes') },
            { key: 'employmentStatus', el: document.getElementById('employmentStatus') },
            { key: 'employerName', el: document.getElementById('employerName') },
            { key: 'jobTitle', el: document.getElementById('jobTitle') },
            { key: 'amount', el: amountInput },
            { key: 'termMonths', el: termMonthsInput },
            { key: 'payPeriod', el: payPeriodInput },
            { key: 'purpose', el: purposeInput },
        ];

        const canRestoreField = (field) => {
            if (!field) return false;
            if (field.readOnly) return false;
            if (field.getAttribute('aria-readonly') === 'true') return false;
            return true;
        };

        const getStorageKey = (purpose) => `${storagePrefix}${purpose}`;

        const saveFormState = () => {
            if (!applyForm) return;
            const data = {};
            fieldMap.forEach(({ key, el }) => {
                if (!el) return;
                data[key] = el.value;
            });
            data.currentStep = currentStep;
            data.maxStepReached = maxStepReached;
            data.currentPurpose = currentPurpose;
            try {
                localStorage.setItem(getStorageKey(currentPurpose), JSON.stringify(data));
                localStorage.setItem(`${storagePrefix}lastPurpose`, currentPurpose);
            } catch (error) {
                // Ignore storage errors (private mode, quota exceeded)
            }
        };

        const loadFormState = (purpose) => {
            let stored = null;
            try {
                stored = localStorage.getItem(getStorageKey(purpose));
            } catch (error) {
                stored = null;
            }
            if (!stored) return;
            let parsed = null;
            try {
                parsed = JSON.parse(stored);
            } catch (error) {
                parsed = null;
            }
            if (!parsed) return;
            fieldMap.forEach(({ key, el }) => {
                if (!el || !(key in parsed)) return;
                if (!canRestoreField(el)) return;
                const nextValue = parsed[key];
                if ((typeof nextValue === 'string' || typeof nextValue === 'number') && String(nextValue).length > 0) {
                    if (el.tagName === 'SELECT') {
                        const hasOption = Array.from(el.options).some((option) => option.value === String(nextValue));
                        if (hasOption) {
                            el.value = String(nextValue);
                        }
                    } else {
                        el.value = String(nextValue);
                    }
                }
            });

            if (parsed.currentPurpose && purposeConfig[parsed.currentPurpose]) {
                currentPurpose = parsed.currentPurpose;
            }

            if (typeof parsed.maxStepReached === 'number') {
                maxStepReached = Math.min(parsed.maxStepReached, stepPanels.length - 1);
            }
            if (typeof parsed.currentStep === 'number') {
                currentStep = Math.min(parsed.currentStep, stepPanels.length - 1);
            }
            return true;
        };

        const setPanelRequired = (panel) => {
            requiredFields.forEach((field) => {
                field.required = false;
            });
            if (!panel) return;
            panel.querySelectorAll('[data-required="true"]').forEach((field) => {
                field.required = true;
            });
        };

        const validatePanel = (panel) => {
            if (!panel) return true;
            if ((identityTypeInput && panel.contains(identityTypeInput)) || (idNumberInput && panel.contains(idNumberInput))) {
                if (!validateIdentityInputs(true)) {
                    return false;
                }
            }
            const fields = Array.from(panel.querySelectorAll('[data-required="true"]'));
            for (const field of fields) {
                if (!field.checkValidity()) {
                    field.reportValidity();
                    return false;
                }
            }
            return true;
        };

        const formatCurrency = (value, decimals = 2) =>
            new Intl.NumberFormat('en-GB', {
                style: 'currency',
                currency: 'GBP',
                minimumFractionDigits: decimals,
                maximumFractionDigits: decimals,
            }).format(value);

        const getPeriodConfig = (period) => {
            switch (period) {
                case 'weekly':
                    return { label: 'week', periodsPerYear: 52 };
                case 'biweekly':
                    return { label: '2 weeks', periodsPerYear: 26 };
                case 'daily':
                    return { label: 'day', periodsPerYear: 365 };
                default:
                    return { label: 'month', periodsPerYear: 12 };
            }
        };

        const identityConfig = {
            national_id: {
                label: 'NIN (National Insurance Number)',
                pattern: '^[A-CEGHJ-PR-TW-Z]{2}\\d{6}[A-D]$',
                placeholder: 'e.g. QQ123456C',
                title: 'Enter a valid NIN (National Insurance Number), e.g. QQ123456C.',
                inputMode: 'text',
            },
            passport: {
                label: 'Passport',
                pattern: '^\\d{9}$',
                placeholder: 'e.g. 123456789',
                title: 'Enter a valid 9-digit passport number.',
                inputMode: 'numeric',
            },
            driver_license: {
                label: "Driver's licence",
                pattern: '^[A-Z]{5}\\d{6}[A-Z]\\d{2}[A-Z]{2}\\d{2}$',
                placeholder: 'e.g. SMITH801010A99AA',
                title: 'Enter a valid UK driving licence number.',
                inputMode: 'text',
            },
        };

        const normalizeIdentityNumber = (value, type) => {
            let nextValue = String(value || '');
            if (type === 'passport') {
                return nextValue.replace(/\D/g, '');
            }
            return nextValue.replace(/\s+/g, '').toUpperCase();
        };

        const applyIdentityConfig = () => {
            if (!idNumberInput) return;
            const type = identityTypeInput?.value;
            const config = type ? identityConfig[type] : null;
            if (!config) {
                idNumberInput.removeAttribute('pattern');
                idNumberInput.removeAttribute('title');
                idNumberInput.placeholder = 'Select a document type first';
                idNumberInput.inputMode = 'text';
                return;
            }
            idNumberInput.setAttribute('pattern', config.pattern);
            idNumberInput.setAttribute('title', config.title);
            idNumberInput.placeholder = config.placeholder;
            idNumberInput.inputMode = config.inputMode;
            const normalized = normalizeIdentityNumber(idNumberInput.value, type);
            if (normalized !== idNumberInput.value) {
                idNumberInput.value = normalized;
            }
        };

        const validateIdentityInputs = (showMessages = false) => {
            if (!identityTypeInput || !idNumberInput) return true;
            const type = identityTypeInput.value;
            let isValid = true;

            if (!type) {
                identityTypeInput.setCustomValidity('Select a document type.');
                if (idNumberInput.value) {
                    idNumberInput.setCustomValidity('Select a document type first.');
                } else {
                    idNumberInput.setCustomValidity('');
                }
                isValid = false;
            } else {
                identityTypeInput.setCustomValidity('');
                const config = identityConfig[type];
                const normalized = normalizeIdentityNumber(idNumberInput.value, type);
                if (!idNumberInput.value) {
                    idNumberInput.setCustomValidity('');
                } else if (config && !new RegExp(config.pattern).test(normalized)) {
                    idNumberInput.setCustomValidity(config.title);
                    isValid = false;
                } else {
                    idNumberInput.setCustomValidity('');
                }
            }

            if (showMessages) {
                if (!identityTypeInput.checkValidity()) {
                    identityTypeInput.reportValidity();
                    return false;
                }
                if (!idNumberInput.checkValidity()) {
                    idNumberInput.reportValidity();
                    return false;
                }
            }

            return isValid;
        };

        const formatLabel = (value) => {
            if (!value) return '';
            return String(value)
                .replace(/[-_]/g, ' ')
                .replace(/\b\w/g, (char) => char.toUpperCase());
        };

        const updateCalculator = () => {
            if (!applyCalcPayment || !amountInput || !termMonthsInput || !payPeriodInput) return;
            const principal = Math.max(0, Number(amountInput.value || 0));
            const termMonths = Math.max(1, Number(termMonthsInput.value || 1));
            const periodKey = payPeriodInput.value || 'monthly';
            const periodConfig = getPeriodConfig(periodKey);
            const rateConfig = purposeConfig[currentPurpose] || purposeConfig.emergency;
            const rateValue = rateConfig?.rate ?? 0.04;
            const periods = Math.max(1, (termMonths / 12) * periodConfig.periodsPerYear);
            const timeInYears = termMonths / 12;
            const interest = principal * rateValue * timeInYears;
            const totalPay = principal + interest;
            const payment = totalPay / periods;
            const aprPercent = Math.round(rateValue * 100);

            if (applyCalcPeriod) {
                applyCalcPeriod.textContent = periodConfig.label;
            }
            applyCalcPayment.textContent = formatCurrency(payment);
            applyCalcInterest.textContent = formatCurrency(interest);
            applyCalcTotal.textContent = formatCurrency(totalPay);
            if (applyCalcApr) {
                applyCalcApr.textContent = `${aprPercent}%`;
            }
        };

        const clearFormState = (options = {}) => {
            fieldMap.forEach(({ key, el }) => {
                if (!el) return;
                if (options.keepPurpose && key === 'purpose') return;
                if (!canRestoreField(el)) return;
                if (el.tagName === 'SELECT') {
                    const emptyOption = Array.from(el.options).find((option) => option.value === '');
                    if (emptyOption) {
                        el.value = '';
                    } else {
                        el.selectedIndex = 0;
                    }
                } else if (el.type === 'checkbox') {
                    el.checked = false;
                } else {
                    el.value = '';
                }
            });
            if (termsInput) {
                termsInput.checked = false;
            }
            currentStep = 0;
            maxStepReached = 0;
        };

        const setPurpose = (nextPurpose, options = {}) => {
            const normalized = purposeConfig[nextPurpose] ? nextPurpose : 'personal';
            currentPurpose = normalized;
            if (purposeInput) {
                purposeInput.value = normalized;
            }
            const config = purposeConfig[normalized];
            if (applyTitle) {
                applyTitle.textContent = config.title;
            }
            if (applySubtitle) {
                applySubtitle.textContent = config.subtitle;
            }
            if (detailsStepLabel) {
                detailsStepLabel.textContent = config.detailsLabel;
            }
            if (purposeTitle) {
                purposeTitle.textContent = config.detailsTitle;
            }
            if (purposeCopy) {
                purposeCopy.textContent = config.detailsCopy;
            }
            purposePanels.forEach((panel) => {
                const isMatch = panel.dataset.purposePanel === normalized;
                panel.hidden = !isMatch;
            });

            requiredFields.forEach((field) => {
                const baseRequired = field.dataset.baseRequired === 'true';
                const purposeRequired = field.dataset.purposeRequired;
                const matchesPurpose = purposeRequired
                    ? purposeRequired.split(' ').includes(normalized)
                    : false;
                if (baseRequired || matchesPurpose) {
                    field.dataset.required = 'true';
                } else {
                    delete field.dataset.required;
                }
            });

            applyAmountLimit(normalized);
            syncTermOptions(normalized);

            if (options.lock && purposeField) {
                purposeField.classList.add('is-locked');
                purposeInput?.setAttribute('aria-readonly', 'true');
                if (purposeInput) purposeInput.tabIndex = -1;
            } else {
                purposeField?.classList.remove('is-locked');
                purposeInput?.removeAttribute('aria-readonly');
                if (purposeInput) purposeInput.tabIndex = 0;
            }

            if (stepPanels.length) {
                setPanelRequired(stepPanels[currentStep]);
            }
            updateCalculator();
            updateReview();

            if (options.loadFromStorage) {
                const restored = loadFormState(normalized);
                if (!restored && options.clearIfEmpty) {
                    clearFormState({ keepPurpose: true });
                }
                if (options.resetStep) {
                    setStep(currentStep);
                }
            }

            clampTermValue(normalized);
        };

        const updateReview = () => {
            if (!reviewFullName) return;
            reviewFullName.textContent = fullNameInput?.value || '—';
            if (reviewEmail) reviewEmail.textContent = emailInput?.value || '—';
            if (reviewPhone) reviewPhone.textContent = phoneNumberInput?.value || '—';
            if (reviewIdNumber) {
                const identityLabels = {
                    national_id: identityConfig.national_id.label,
                    passport: identityConfig.passport.label,
                    driver_license: identityConfig.driver_license.label,
                };
                const idValue = idNumberInput?.value || '';
                const typeValue = identityTypeInput?.value || '';
                const typeLabel = identityLabels[typeValue] || '';
                if (typeLabel && idValue) {
                    reviewIdNumber.textContent = `${typeLabel} · ${idValue}`;
                } else if (idValue) {
                    reviewIdNumber.textContent = idValue;
                } else {
                    reviewIdNumber.textContent = '—';
                }
            }
            if (reviewIncome) {
                const incomeValue = Number(monthlyIncomeInput?.value || 0);
                reviewIncome.textContent = incomeValue ? formatCurrency(incomeValue, 0) : '—';
            }
            if (reviewAmount) {
                const amountValue = Number(amountInput?.value || 0);
                reviewAmount.textContent = amountValue ? formatCurrency(amountValue, 0) : '—';
            }
            if (reviewPurpose) reviewPurpose.textContent = purposeConfig[currentPurpose]?.label || 'Loan';
            if (reviewPurposeDetail) {
                const valueMap = {};
                fieldMap.forEach(({ key, el }) => {
                    if (el) valueMap[key] = el.value;
                });
                const detailValue = purposeConfig[currentPurpose]?.detailLabel?.(valueMap);
                reviewPurposeDetail.textContent = detailValue ? formatLabel(detailValue) : '—';
            }
            if (reviewTerm) {
                const termValue = termMonthsInput?.value;
                reviewTerm.textContent = termValue ? `${termValue} months` : '—';
            }
            if (reviewPeriod) {
                const periodValue = payPeriodInput?.value || 'monthly';
                const labelMap = {
                    monthly: 'Monthly',
                    biweekly: 'Every 2 weeks',
                    weekly: 'Weekly',
                    daily: 'Daily',
                };
                reviewPeriod.textContent = labelMap[periodValue] || '—';
            }
        };

        const setStep = (index) => {
            if (!stepPanels.length) return;
            if (index < 0 || index >= stepPanels.length) return;
            currentStep = index;
            stepPanels.forEach((panel, panelIndex) => {
                const isActive = panelIndex === index;
                panel.hidden = !isActive;
                panel.classList.toggle('is-active', isActive);
            });
            stepButtons.forEach((button, buttonIndex) => {
                const isActive = buttonIndex === index;
                button.classList.toggle('is-active', isActive);
                button.classList.toggle('is-complete', buttonIndex < index);
                button.disabled = buttonIndex > maxStepReached;
                if (isActive) {
                    button.setAttribute('aria-current', 'step');
                } else {
                    button.removeAttribute('aria-current');
                }
            });
            setPanelRequired(stepPanels[index]);
            updateCalculator();
            updateReview();
            saveFormState();
        };

        const urlParams = new URLSearchParams(window.location.search);
        const amountParam = urlParams.get('amount');
        const termParam = urlParams.get('term');
        const periodParam = urlParams.get('period');
        const purposeParam = urlParams.get('purpose');

        if (amountInput && amountParam) {
            const amountPurpose = purposeParam || purposeInput?.value || 'personal';
            applyAmountLimit(amountPurpose);
            const parsedAmount = Number(amountParam);
            if (!Number.isNaN(parsedAmount)) {
                const minValue = Number(amountInput.min || 0);
                const maxValue = Number(amountInput.max || 0);
                let nextValue = parsedAmount;
                if (!Number.isNaN(minValue) && minValue) {
                    nextValue = Math.max(nextValue, minValue);
                }
                if (!Number.isNaN(maxValue) && maxValue) {
                    nextValue = Math.min(nextValue, maxValue);
                }
                amountInput.value = nextValue;
                amountInput.readOnly = true;
                amountField?.classList.add('is-locked');
            }
        }

        if (termMonthsInput && termParam) {
            const parsedTerm = Number(termParam);
            const maxTerm = getTermLimit(purposeParam || purposeInput?.value || 'personal');
            if (!Number.isNaN(parsedTerm) && parsedTerm >= 1 && parsedTerm <= maxTerm) {
                const normalized = normalizeTermValue(purposeParam || purposeInput?.value || 'personal', parsedTerm);
                termMonthsInput.value = String(normalized);
                termMonthsInput.setAttribute('aria-readonly', 'true');
                termMonthsInput.tabIndex = -1;
                termField?.classList.add('is-locked');
            }
        }

        if (payPeriodInput && periodParam) {
            const allowed = ['monthly', 'biweekly', 'weekly', 'daily'];
            if (allowed.includes(periodParam)) {
                payPeriodInput.value = periodParam;
                payPeriodInput.setAttribute('aria-readonly', 'true');
                payPeriodInput.tabIndex = -1;
                periodField?.classList.add('is-locked');
            }
        }

        let initialPurpose = 'personal';
        if (purposeParam && purposeConfig[purposeParam]) {
            initialPurpose = purposeParam;
        } else if (purposeInput?.value && purposeConfig[purposeInput.value]) {
            initialPurpose = purposeInput.value;
        } else {
            try {
                const lastPurpose = localStorage.getItem(`${storagePrefix}lastPurpose`);
                if (lastPurpose && purposeConfig[lastPurpose]) {
                    initialPurpose = lastPurpose;
                }
            } catch (error) {
                // ignore
            }
        }

        setPurpose(initialPurpose, { lock: Boolean(purposeParam) });
        const restoredInitial = loadFormState(initialPurpose);
        if (!restoredInitial) {
            clearFormState({ keepPurpose: true });
        }
        applyIdentityConfig();

        const syncInputs = () => {
            validateIdentityInputs(false);
            updateCalculator();
            updateReview();
            saveFormState();
        };

        [fullNameInput, phoneNumberInput, emailInput, identityTypeInput, idNumberInput, monthlyIncomeInput, amountInput].forEach((input) => {
            if (input) {
                input.addEventListener('input', syncInputs);
            }
        });

        if (monthlyIncomeInput) {
            monthlyIncomeInput.addEventListener('input', () => {
                const digitsOnly = monthlyIncomeInput.value.replace(/[^\d]/g, '');
                if (monthlyIncomeInput.value !== digitsOnly) {
                    monthlyIncomeInput.value = digitsOnly;
                }
            });
        }
        if (identityTypeInput) {
            identityTypeInput.addEventListener('change', () => {
                applyIdentityConfig();
                syncInputs();
            });
        }
        if (idNumberInput) {
            idNumberInput.addEventListener('input', () => {
                const type = identityTypeInput?.value || '';
                idNumberInput.value = normalizeIdentityNumber(idNumberInput.value, type);
                applyIdentityConfig();
                syncInputs();
            });
        }
        [termMonthsInput, payPeriodInput].forEach((input) => {
            if (input) {
                input.addEventListener('change', syncInputs);
            }
        });

        if (purposeInput) {
            purposeInput.addEventListener('change', () => {
                if (purposeField?.classList.contains('is-locked')) return;
                setPurpose(purposeInput.value, { loadFromStorage: true, clearIfEmpty: true, resetStep: true });
                saveFormState();
            });
        }

        if (applyForm && stepPanels.length) {
            setStep(currentStep);

            nextButtons.forEach((button) => {
                button.addEventListener('click', () => {
                    const panel = stepPanels[currentStep];
                    if (!validatePanel(panel)) return;
                    maxStepReached = Math.max(maxStepReached, currentStep + 1);
                    setStep(currentStep + 1);
                });
            });

            prevButtons.forEach((button) => {
                button.addEventListener('click', () => {
                    setStep(currentStep - 1);
                });
            });

            stepButtons.forEach((button, index) => {
                button.addEventListener('click', () => {
                    if (index > maxStepReached) return;
                    setStep(index);
                });
            });
        }

        syncInputs();

        if (applyForm) {
            const submitButton = applyForm.querySelector('button[type="submit"]');
            let snackbarTimer = null;

            const setSubmitting = (isSubmitting) => {
                if (!submitButton) {
                    return;
                }
                submitButton.classList.toggle('is-loading', isSubmitting);
                submitButton.disabled = isSubmitting;
                if (isSubmitting) {
                    applyForm.setAttribute('aria-busy', 'true');
                } else {
                    applyForm.removeAttribute('aria-busy');
                }
            };

            const showSnackbar = (message, type = 'error') => {
                if (!applySnackbar || !applySnackbarMessage) {
                    return;
                }
                applySnackbar.classList.remove('is-error', 'is-success', 'is-info');
                applySnackbar.classList.add(`is-${type}`);
                applySnackbarMessage.textContent = message;
                applySnackbar.hidden = false;
                applySnackbar.classList.add('is-visible');
                if (snackbarTimer) {
                    clearTimeout(snackbarTimer);
                }
                snackbarTimer = setTimeout(() => {
                    applySnackbar.classList.remove('is-visible');
                    snackbarTimer = setTimeout(() => {
                        applySnackbar.hidden = true;
                    }, 250);
                }, 3200);
            };

            const resetRequiredToStep = () => {
                if (!stepPanels.length) return;
                setPanelRequired(stepPanels[currentStep]);
            };

        const validateAllSteps = () => {
            requiredFields.forEach((field) => {
                field.required = field.dataset.required === 'true';
            });
            validateIdentityInputs(false);
            if (!applyForm.checkValidity()) {
                const firstInvalid = applyForm.querySelector(':invalid');
                if (firstInvalid) {
                        const panel = firstInvalid.closest('[data-step-panel]');
                        const panelIndex = panel ? stepPanels.indexOf(panel) : -1;
                        if (panelIndex >= 0) {
                            maxStepReached = Math.max(maxStepReached, panelIndex);
                            setStep(panelIndex);
                        }
                        firstInvalid.reportValidity();
                    }
                    resetRequiredToStep();
                    return false;
                }
                return true;
            };

            const submitApplication = async () => {
                if (submitButton?.classList.contains('is-loading')) {
                    return;
                }
                if (!validateAllSteps()) {
                    return;
                }

                if (applyError) {
                    applyError.hidden = true;
                    applyError.textContent = '';
                }

                const token = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

                try {
                    setSubmitting(true);
                    const response = await fetch('/apply', {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': token || '',
                            'Accept': 'application/json'
                        },
                        body: new FormData(applyForm)
                    });

                    const payload = await response.json();

                    const redirectTarget = '/apply/received';

                    if (!response.ok) {
                        if (payload?.status_url || payload?.token) {
                            if (payload?.message) {
                                showSnackbar(payload.message, 'info');
                            }
                            localStorage.removeItem(getStorageKey(currentPurpose));
                            window.location.href = redirectTarget;
                            return;
                        }
                        showSnackbar(payload?.message || 'Unable to submit. Please try again.', 'error');
                        setSubmitting(false);
                        return;
                    }

                    if (payload?.status_url || payload?.token) {
                        localStorage.removeItem(getStorageKey(currentPurpose));
                        window.location.href = redirectTarget;
                        return;
                    }

                    showSnackbar('Unable to submit. Please try again.', 'error');
                    setSubmitting(false);
                } catch (error) {
                    showSnackbar('Unable to submit. Please try again.', 'error');
                    setSubmitting(false);
                }
            };

            applyForm.addEventListener('submit', async (event) => {
                event.preventDefault();
                if (!validateAllSteps()) {
                    return;
                }
                submitApplication();
            });
        }

    </script>
</body>
</html>
