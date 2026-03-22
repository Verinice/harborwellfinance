<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('loan_applications', function (Blueprint $table) {
            $table->string('emergency_type', 64)->nullable()->after('income');
            $table->string('urgency', 32)->nullable()->after('emergency_type');
            $table->date('incident_date')->nullable()->after('urgency');
            $table->text('emergency_notes')->nullable()->after('incident_date');

            $table->string('personal_goal', 64)->nullable()->after('emergency_notes');
            $table->string('personal_timeline', 32)->nullable()->after('personal_goal');
            $table->text('personal_notes')->nullable()->after('personal_timeline');

            $table->string('business_name', 120)->nullable()->after('personal_notes');
            $table->string('business_industry', 120)->nullable()->after('business_name');
            $table->unsignedSmallInteger('business_years')->nullable()->after('business_industry');
            $table->unsignedInteger('business_revenue')->nullable()->after('business_years');
            $table->text('business_use')->nullable()->after('business_revenue');

            $table->string('asset_type', 64)->nullable()->after('business_use');
            $table->unsignedInteger('asset_value')->nullable()->after('asset_type');
            $table->string('asset_ownership', 32)->nullable()->after('asset_value');
            $table->text('asset_notes')->nullable()->after('asset_ownership');
        });
    }

    public function down(): void
    {
        Schema::table('loan_applications', function (Blueprint $table) {
            $table->dropColumn([
                'emergency_type',
                'urgency',
                'incident_date',
                'emergency_notes',
                'personal_goal',
                'personal_timeline',
                'personal_notes',
                'business_name',
                'business_industry',
                'business_years',
                'business_revenue',
                'business_use',
                'asset_type',
                'asset_value',
                'asset_ownership',
                'asset_notes',
            ]);
        });
    }
};
