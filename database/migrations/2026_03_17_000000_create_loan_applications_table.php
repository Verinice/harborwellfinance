<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('loan_applications', function (Blueprint $table) {
            $table->id();
            $table->string('token', 32)->unique();
            $table->string('full_name', 120);
            $table->string('email', 180);
            $table->unsignedInteger('amount');
            $table->string('purpose', 32);
            $table->string('ip_address', 45)->nullable();
            $table->string('status', 32)->default('processing_fee');
            $table->timestamp('status_updated_at')->nullable();
            $table->timestamp('processing_fee_due_at')->nullable();
            $table->timestamps();

            $table->index('ip_address');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('loan_applications');
    }
};
