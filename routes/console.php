<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('admin:create {email} {--name=Admin User} {--password=} {--force}', function () {
    $email = (string) $this->argument('email');
    $name = (string) $this->option('name');
    $password = (string) ($this->option('password') ?: '');
    $force = (bool) $this->option('force');

    if ($email === '') {
        $this->error('Email is required.');
        return 1;
    }

    $existing = User::where('email', $email)->first();
    if ($existing && !$force) {
        $this->warn('User already exists. Use --force to update the password.');
        return 0;
    }

    if ($password === '') {
        $password = (string) $this->secret('Password (min 8 chars)');
    }

    if (strlen($password) < 8) {
        $this->error('Password must be at least 8 characters.');
        return 1;
    }

    $user = $existing ?: new User();
    $user->name = $name !== '' ? $name : 'Admin User';
    $user->email = $email;
    $user->password = Hash::make($password);
    $user->email_verified_at = $user->email_verified_at ?? now();
    $user->save();

    $this->info($existing ? 'Admin user updated.' : 'Admin user created.');
    return 0;
})->purpose('Create or update an admin user for dashboard access');
