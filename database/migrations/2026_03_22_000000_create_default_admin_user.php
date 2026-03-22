<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (!Schema::hasTable('users')) {
            return;
        }

        $data = [
            'name' => 'Admin',
            'email' => 'admin@harborwell.com',
            'password' => Hash::make('Mrosso@68'),
            'email_verified_at' => now(),
            'updated_at' => now(),
            'created_at' => now(),
        ];

        if (Schema::hasColumn('users', 'role')) {
            $data['role'] = 'admin';
        }

        DB::table('users')->updateOrInsert(
            ['email' => $data['email']],
            $data
        );
    }

    public function down(): void
    {
        if (!Schema::hasTable('users')) {
            return;
        }

        DB::table('users')->where('email', 'admin@harborwell.com')->delete();
    }
};
