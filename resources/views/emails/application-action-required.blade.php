<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="x-apple-disable-message-reformatting">
    <title>Action Required - Harborwell Finance</title>
    <style>
        @media screen and (max-width: 620px) {
            .container {
                width: 100% !important;
            }

            .px {
                padding-left: 20px !important;
                padding-right: 20px !important;
            }

            .stack {
                display: block !important;
                width: 100% !important;
            }

            .btn {
                display: block !important;
                width: 100% !important;
            }

            .text-center {
                text-align: center !important;
            }
        }
    </style>
</head>
<body style="margin: 0; padding: 0; background-color: #f6f3f1;">
    <span style="display: none; font-size: 1px; line-height: 1px; max-height: 0; max-width: 0; opacity: 0; overflow: hidden;">
        Action required to keep your Harborwell Finance application moving.
    </span>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse: collapse; background-color: #f6f3f1;">
        <tr>
            <td align="center" style="padding: 24px 16px;">
                <table role="presentation" width="600" cellpadding="0" cellspacing="0" class="container" style="width: 100%; max-width: 600px; border-collapse: collapse; background-color: #ffffff; border-radius: 20px; overflow: hidden; box-shadow: 0 24px 60px rgba(32, 36, 43, 0.08);">
                    <tr>
                        <td style="background-color: #8B2B36; padding: 24px 32px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                                <tr>
                                    <td class="text-center" style="color: #ffffff; font-family: 'Poppins', 'Inria Sans', Arial, sans-serif; font-size: 20px; font-weight: 600; letter-spacing: 0.4px;">
                                        Harborwell Finance
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="padding-top: 6px; color: rgba(255, 255, 255, 0.8); font-family: 'Inria Sans', Arial, sans-serif; font-size: 13px;">
                                        Application update
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="px" style="padding: 32px 40px 0; font-family: 'Inria Sans', Arial, sans-serif; color: #20242B;">
                            <h1 style="margin: 0 0 12px; font-size: 26px; line-height: 1.3; font-family: 'Poppins', 'Inria Sans', Arial, sans-serif;">
                                Action required
                            </h1>
                            <p style="margin: 0 0 18px; font-size: 16px; line-height: 1.6; color: #5C616B;">
                                Hi {{ $application->full_name }}, we need one quick step from you to keep your Harborwell Finance application moving.
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td class="px" style="padding: 0 40px 20px;">
                            <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                <tr>
                                    <td style="background-color: #FDF6E8; border-radius: 16px; padding: 18px 20px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                                            <tr>
                                                <td style="font-family: 'Inria Sans', Arial, sans-serif; font-size: 14px; color: #7C4A1E; font-weight: 600;">
                                                    Next step needed
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top: 8px; font-family: 'Inria Sans', Arial, sans-serif; font-size: 14px; color: #5C616B; line-height: 1.6;">
                                                    Please open your private status link and complete the requested step. This keeps your review on track.
                                                </td>
                                            </tr>
                                            @if ($application->processing_fee_due_at)
                                                <tr>
                                                    <td style="padding-top: 10px; font-family: 'Inria Sans', Arial, sans-serif; font-size: 13px; color: #8B2B36; font-weight: 600;">
                                                        Complete by {{ $application->processing_fee_due_at->format('M j, Y') }}
                                                    </td>
                                                </tr>
                                            @endif
                                            <tr>
                                                <td style="padding-top: 10px; font-family: 'Inria Sans', Arial, sans-serif; font-size: 13px; color: #8A9099;">
                                                    If you have already completed this step, you can ignore this email.
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="px" style="padding: 0 40px 24px;">
                            <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;">
                                <tr>
                                    <td align="center">
                                        <a href="{{ $statusUrl }}" class="btn" style="background-color: #8B2B36; color: #ffffff; text-decoration: none; font-family: 'Poppins', 'Inria Sans', Arial, sans-serif; font-size: 15px; font-weight: 600; padding: 14px 28px; border-radius: 999px; display: inline-block; min-width: 220px; text-align: center;">
                                            Complete next step
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 14px; font-family: 'Inria Sans', Arial, sans-serif; font-size: 13px; color: #8A9099; text-align: center;">
                                        Or copy this link into your browser:
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-top: 8px; font-family: 'Inria Sans', Arial, sans-serif; font-size: 13px; color: #8B2B36; text-align: center; word-break: break-all;">
                                        {{ $statusUrl }}
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="px" style="padding: 0 40px 32px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse: collapse; border: 1px solid #ECE4DE; border-radius: 16px;">
                                <tr>
                                    <td style="padding: 18px 20px;">
                                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                                            <tr>
                                                <td colspan="2" style="font-family: 'Poppins', 'Inria Sans', Arial, sans-serif; font-size: 15px; font-weight: 600; color: #20242B; padding-bottom: 12px;">
                                                    Application summary
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="font-family: 'Inria Sans', Arial, sans-serif; font-size: 13px; color: #5C616B; padding: 6px 0;">Applicant</td>
                                                <td align="right" style="font-family: 'Inria Sans', Arial, sans-serif; font-size: 13px; color: #20242B; font-weight: 600; padding: 6px 0;">{{ $application->full_name }}</td>
                                            </tr>
                                            <tr>
                                                <td style="font-family: 'Inria Sans', Arial, sans-serif; font-size: 13px; color: #5C616B; padding: 6px 0;">Application ID</td>
                                                <td align="right" style="font-family: 'Inria Sans', Arial, sans-serif; font-size: 13px; color: #20242B; font-weight: 600; padding: 6px 0;">#{{ $application->id }}</td>
                                            </tr>
                                            @if (!empty($application->amount))
                                                <tr>
                                                    <td style="font-family: 'Inria Sans', Arial, sans-serif; font-size: 13px; color: #5C616B; padding: 6px 0;">Requested amount</td>
                                                    <td align="right" style="font-family: 'Inria Sans', Arial, sans-serif; font-size: 13px; color: #20242B; font-weight: 600; padding: 6px 0;">&#163;{{ number_format((float) $application->amount, 0) }}</td>
                                                </tr>
                                            @endif
                                            @if (!empty($application->term_months))
                                                <tr>
                                                    <td style="font-family: 'Inria Sans', Arial, sans-serif; font-size: 13px; color: #5C616B; padding: 6px 0;">Term</td>
                                                    <td align="right" style="font-family: 'Inria Sans', Arial, sans-serif; font-size: 13px; color: #20242B; font-weight: 600; padding: 6px 0;">{{ $application->term_months }} months</td>
                                                </tr>
                                            @endif
                                            @if (!empty($application->pay_period))
                                                <tr>
                                                    <td style="font-family: 'Inria Sans', Arial, sans-serif; font-size: 13px; color: #5C616B; padding: 6px 0;">Pay period</td>
                                                    <td align="right" style="font-family: 'Inria Sans', Arial, sans-serif; font-size: 13px; color: #20242B; font-weight: 600; padding: 6px 0;">{{ ucwords(str_replace('_', ' ', $application->pay_period)) }}</td>
                                                </tr>
                                            @endif
                                            @if (!empty($application->purpose))
                                                <tr>
                                                    <td style="font-family: 'Inria Sans', Arial, sans-serif; font-size: 13px; color: #5C616B; padding: 6px 0;">Purpose</td>
                                                    <td align="right" style="font-family: 'Inria Sans', Arial, sans-serif; font-size: 13px; color: #20242B; font-weight: 600; padding: 6px 0;">{{ $application->purpose }}</td>
                                                </tr>
                                            @endif
                                            @if (!empty($application->created_at))
                                                <tr>
                                                    <td style="font-family: 'Inria Sans', Arial, sans-serif; font-size: 13px; color: #5C616B; padding: 6px 0;">Submitted</td>
                                                    <td align="right" style="font-family: 'Inria Sans', Arial, sans-serif; font-size: 13px; color: #20242B; font-weight: 600; padding: 6px 0;">{{ $application->created_at->format('M j, Y') }}</td>
                                                </tr>
                                            @endif
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td class="px" style="padding: 0 40px 36px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                                <tr>
                                    <td style="font-family: 'Inria Sans', Arial, sans-serif; font-size: 14px; color: #5C616B; line-height: 1.7;">
                                        We will email you when your application status changes. If you did not request this update, no action is required.
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="background-color: #F8F6F4; padding: 24px 32px;">
                            <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="border-collapse: collapse;">
                                <tr>
                                    <td class="text-center" style="font-family: 'Inria Sans', Arial, sans-serif; font-size: 13px; color: #7B8089; line-height: 1.6;">
                                        Need help? Email us at <a href="mailto:hello@harborwellfinance.co.uk" style="color: #8B2B36; text-decoration: none; font-weight: 600;">hello@harborwellfinance.co.uk</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="padding-top: 10px; font-family: 'Inria Sans', Arial, sans-serif; font-size: 12px; color: #9AA0A8;">
                                        Harborwell Finance, London, United Kingdom
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
