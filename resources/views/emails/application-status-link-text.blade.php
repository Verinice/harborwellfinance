Hi {{ $application->full_name }},

Thanks for applying to Harborwell Finance. Here is your reference number:

{{ strtoupper($application->token) }}

Application summary
Applicant: {{ $application->full_name }}
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

We will email you when your application status changes. If you did not request this email, no action is required.

Need help? hello@harborwellfinance.co.uk
Harborwell Finance, London, United Kingdom
