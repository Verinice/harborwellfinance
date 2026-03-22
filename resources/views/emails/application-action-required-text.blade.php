Hi {{ $application->full_name }},

We need one quick step from you to keep your Harborwell Finance application moving.

Complete your next step here:
{{ $statusUrl }}

@isset($application->processing_fee_due_at)
Complete by {{ $application->processing_fee_due_at->format('M j, Y') }}
@endisset
If you have already completed this step, you can ignore this email.

Application summary
Applicant: {{ $application->full_name }}
Application ID: #{{ $application->id }}
@isset($application->amount)
Requested amount: GBP {{ number_format((float) $application->amount, 0) }}
@endisset
@isset($application->term_months)
Term: {{ $application->term_months }} months
@endisset
@isset($application->pay_period)
Pay period: {{ ucwords(str_replace('_', ' ', $application->pay_period)) }}
@endisset
@isset($application->purpose)
Purpose: {{ $application->purpose }}
@endisset
@isset($application->created_at)
Submitted: {{ $application->created_at->format('M j, Y') }}
@endisset

We will email you when your application status changes. If you did not request this update, no action is required.

Need help? hello@harborwellfinance.co.uk
Harborwell Finance, London, United Kingdom
