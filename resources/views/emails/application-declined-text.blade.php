Hi {{ $application->full_name }},

Thank you for your interest in Harborwell Finance. After careful review, we are unable to approve your application at this time.

You can review the outcome and next steps here:
{{ $statusUrl }}

What happens next:
- Review your status link for details and next steps.
- You are welcome to reapply if your circumstances change.
- Our support team can answer questions about the process.

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

If you believe this update is in error, reply to this email and our team will review.

Need help? hello@harborwellfinance.co.uk
Harborwell Finance, London, United Kingdom
