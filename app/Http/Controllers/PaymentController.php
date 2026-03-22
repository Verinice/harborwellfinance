<?php

namespace App\Http\Controllers;

use App\Models\LoanApplication;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function show(Request $request)
    {
        $token = $request->query('token');
        $application = null;

        if ($token) {
            $application = LoanApplication::where('token', $token)->first();
        }

        $statusUrl = $application
            ? url('/status/' . $application->token)
            : url('/status');

        return view('payment', [
            'application' => $application,
            'statusUrl' => $statusUrl,
            'token' => $token,
        ]);
    }
}
