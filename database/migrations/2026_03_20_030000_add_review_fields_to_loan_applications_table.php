<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('loan_applications', function (Blueprint $table) {
            $table->unsignedTinyInteger('credit_score_percent')->nullable()->after('processing_fee_due_at');
            $table->unsignedTinyInteger('approved_percentage')->nullable()->after('credit_score_percent');
            $table->unsignedInteger('processing_fee_amount')->default(80)->after('approved_percentage');
            $table->timestamp('processing_fee_paid_at')->nullable()->after('processing_fee_amount');
        });
    }

    public function down(): void
    {
        Schema::table('loan_applications', function (Blueprint $table) {
            $table->dropColumn([
                'credit_score_percent',
                'approved_percentage',
                'processing_fee_amount',
                'processing_fee_paid_at',
            ]);
        });
    }
};
