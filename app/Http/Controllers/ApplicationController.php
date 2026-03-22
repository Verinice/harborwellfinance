<?php

namespace App\Http\Controllers;

use App\Mail\ApplicationStatusLink;
use App\Models\LoanApplication;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
    public function create(Request $request)
    {
        return view('apply');
    }

    public function received(Request $request, ?string $token = null)
    {
        $application = null;
        if ($token) {
            $application = LoanApplication::where('token', $token)->first();
        }

        $statusId = $application?->token ?? $token;
        $nin = null;
        if ($application && $application->identity_type === 'national_id') {
            $nin = $application->id_number;
        }

        return view('apply-received', [
            'statusId' => $statusId,
            'nin' => $nin,
        ]);
    }

    public function store(Request $request)
    {
        $ip = (string) $request->ip();

        $validated = $request->validate([
            'fullName' => ['required', 'string', 'max:120'],
            'email' => ['required', 'email', 'max:180'],
            'phoneNumber' => ['required', 'string', 'max:32', function ($attribute, $value, $fail) {
                $normalized = preg_replace('/\s+/', '', (string) $value);
                $normalized = preg_replace('/^\+44\(0\)/', '+44', $normalized);

                if (str_starts_with($normalized, '+44')) {
                    $digits = substr($normalized, 3);
                    if (!preg_match('/^7\d{8,9}$/', $digits)) {
                        $fail('Enter a valid UK mobile number.');
                    }
                    return;
                }

                if (str_starts_with($normalized, '07')) {
                    $digits = substr($normalized, 2);
                    if (!preg_match('/^\d{8,9}$/', $digits)) {
                        $fail('Enter a valid UK mobile number.');
                    }
                    return;
                }

                $fail('Enter a valid UK mobile number.');
            }],
            'identityType' => ['required', 'in:national_id,passport,driver_license'],
            'idNumber' => ['required', 'string', 'max:40', function ($attribute, $value, $fail) use ($request) {
                $type = $request->input('identityType');
                $normalized = strtoupper(preg_replace('/\s+/', '', (string) $value));
                $patterns = [
                    'national_id' => '/^[A-CEGHJ-PR-TW-Z]{2}\d{6}[A-D]$/',
                    'passport' => '/^\d{9}$/',
                    'driver_license' => '/^[A-Z]{5}\d{6}[A-Z]\d{2}[A-Z]{2}\d{2}$/',
                ];
                if (!isset($patterns[$type])) {
                    return;
                }
                if ($type === 'passport') {
                    $normalized = preg_replace('/\D/', '', $normalized);
                }
                if (!preg_match($patterns[$type], $normalized)) {
                    $labels = [
                        'national_id' => 'NIN (National Insurance Number)',
                        'passport' => 'passport number',
                        'driver_license' => 'driving licence number',
                    ];
                    $label = $labels[$type] ?? 'ID number';
                    $fail('Enter a valid ' . $label . '.');
                }
            }],
            'monthlyIncome' => ['required', 'numeric', 'min:0', 'max:1000000'],
            'amount' => ['required', 'numeric', 'min:1000', 'max:200000', function ($attribute, $value, $fail) use ($request) {
                $purpose = $request->input('purpose');
                $limits = [
                    'personal' => ['min' => 1000, 'max' => 30000],
                    'emergency' => ['min' => 1000, 'max' => 10000],
                    'business' => ['min' => 3000, 'max' => 100000],
                    'asset' => ['min' => 5000, 'max' => 200000],
                ];
                $limit = $limits[$purpose] ?? $limits['personal'];
                $amount = (float) $value;
                if ($amount < $limit['min'] || $amount > $limit['max']) {
                    $fail('Enter a loan amount within the allowed range for this loan type.');
                }
            }],
            'term_months' => ['nullable', 'integer', 'min:1', 'max:24', function ($attribute, $value, $fail) use ($request) {
                if ($value === null || $value === '') {
                    return;
                }
                $purpose = $request->input('purpose');
                $maxTerm = $purpose === 'emergency' ? 6 : 24;
                if ((int) $value > $maxTerm) {
                    $fail('Select a loan term within the allowed range for this loan type.');
                }
            }],
            'pay_period' => ['nullable', 'in:monthly,biweekly,weekly,daily'],
            'purpose' => ['required', 'in:personal,business,emergency,asset'],
            'terms' => ['accepted'],
        ]);

        $normalizedEmail = strtolower($validated['email']);
        $normalizedIdNumber = strtoupper(preg_replace('/\s+/', '', $validated['idNumber']));
        if ($validated['identityType'] === 'passport') {
            $normalizedIdNumber = preg_replace('/\D/', '', $normalizedIdNumber);
        }
        $existingIdentity = LoanApplication::where('identity_type', $validated['identityType'])
            ->where('id_number', $normalizedIdNumber)
            ->latest('created_at')
            ->first();
        $existing = LoanApplication::where('email', $normalizedEmail)->latest('created_at')->first();

        if ($existingIdentity) {
            return response()->json([
                'message' => 'We already have an application with this identity document. Use your email and reference number to check updates.',
            ], 409);
        }

        if ($existing) {
            $statusUrl = url('/status/' . $existing->token);
            try {
                Mail::to($normalizedEmail)->queue(new ApplicationStatusLink($existing, $statusUrl));
            } catch (\Throwable $error) {
                report($error);
            }
            return response()->json([
                'message' => 'We already have an application with this email. We emailed your reference number and status link again.',
                'token' => $existing->token,
                'status_url' => $statusUrl,
            ], 409);
        }

        $token = $this->generateToken();
        $now = now();

        try {
            $application = LoanApplication::create([
                'token' => $token,
                'full_name' => $validated['fullName'],
                'email' => $normalizedEmail,
                'phone_number' => $validated['phoneNumber'],
                'identity_type' => $validated['identityType'],
                'id_number' => $normalizedIdNumber,
                'income' => (int) $validated['monthlyIncome'],
                'amount' => (int) $validated['amount'],
                'term_months' => isset($validated['term_months']) ? (int) $validated['term_months'] : null,
                'pay_period' => $validated['pay_period'] ?? null,
                'purpose' => $validated['purpose'],
                'ip_address' => $ip ?: null,
                'status' => 'submitted',
                'status_updated_at' => $now,
            ]);
        } catch (QueryException $error) {
            if ($this->isUniqueConstraintViolation($error)) {
                $statusUrl = null;
                $existing = LoanApplication::where('email', $normalizedEmail)->latest('created_at')->first();
                if ($existing) {
                    $statusUrl = url('/status/' . $existing->token);
                    try {
                        Mail::to($normalizedEmail)->queue(new ApplicationStatusLink($existing, $statusUrl));
                    } catch (\Throwable $mailError) {
                        report($mailError);
                    }
                }

                if (!$existing) {
                    $existingIdentity = LoanApplication::where('identity_type', $validated['identityType'])
                        ->where('id_number', $normalizedIdNumber)
                        ->latest('created_at')
                        ->first();
                }

                if ($existingIdentity && !$existing) {
                    return response()->json([
                        'message' => 'We already have an application with this identity document. Use your email and reference number to check updates.',
                    ], 409);
                }

                return response()->json([
                    'message' => 'We already have an application with this email. We emailed your reference number and status link again.',
                    'token' => $existing?->token,
                    'status_url' => $statusUrl,
                ], 409);
            }

            throw $error;
        }

        $statusUrl = url('/status/' . $application->token);
        try {
            Mail::to($application->email)->queue(new ApplicationStatusLink($application, $statusUrl));
        } catch (\Throwable $error) {
            report($error);
        }

        return response()->json([
            'token' => $application->token,
            'status_url' => $statusUrl,
        ]);
    }

    private function generateToken(): string
    {
        $chars = 'ABCDEFGHJKMNPQRSTUVWXYZ23456789';

        do {
            $token = 'HW-';
            for ($i = 0; $i < 8; $i += 1) {
                $token .= $chars[random_int(0, strlen($chars) - 1)];
            }
        } while (LoanApplication::where('token', $token)->exists());

        return $token;
    }

    private function isUniqueConstraintViolation(QueryException $error): bool
    {
        $code = (string) $error->getCode();

        return in_array($code, ['23000', '23505'], true);
    }
}
