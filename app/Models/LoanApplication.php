<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoanApplication extends Model
{
    protected $attributes = [
        'status' => 'submitted',
    ];

    protected $fillable = [
        'token',
        'full_name',
        'email',
        'phone_number',
        'identity_type',
        'id_number',
        'income',
        'amount',
        'term_months',
        'pay_period',
        'purpose',
        'ip_address',
        'status',
        'status_updated_at',
        'processing_fee_due_at',
        'credit_score_percent',
        'approved_percentage',
        'processing_fee_amount',
        'processing_fee_paid_at',
    ];

    protected $casts = [
        'status_updated_at' => 'datetime',
        'processing_fee_due_at' => 'datetime',
        'processing_fee_paid_at' => 'datetime',
    ];

}
