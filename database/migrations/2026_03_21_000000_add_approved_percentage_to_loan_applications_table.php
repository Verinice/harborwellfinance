<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('loan_applications', function (Blueprint $table) {
            if (!Schema::hasColumn('loan_applications', 'approved_percentage')) {
                $table->unsignedTinyInteger('approved_percentage')->nullable()->after('processing_fee_due_at');
            }
        });
    }

    public function down(): void
    {
        Schema::table('loan_applications', function (Blueprint $table) {
            if (Schema::hasColumn('loan_applications', 'approved_percentage')) {
                $table->dropColumn('approved_percentage');
            }
        });
    }
};
