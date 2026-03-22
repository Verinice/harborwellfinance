<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\StatusController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calculator', function () {
    return view('calculator');
});

Route::get('/loans', function () {
    return view('loans');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/status', [StatusController::class, 'index']);
Route::get('/status/{token}', [StatusController::class, 'show'])->where('token', '[^/]+');

Route::get('/apply', [ApplicationController::class, 'create']);
Route::post('/apply', [ApplicationController::class, 'store']);
Route::get('/apply/received/{token?}', [ApplicationController::class, 'received'])->where('token', '[A-Za-z0-9-]+');

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/testimonials', function () {
    return view('testimonials');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/payment', [PaymentController::class, 'show']);

Route::get('/dashboard', [DashboardController::class, 'index']);
Route::post('/dashboard/{application}/status', [DashboardController::class, 'update'])->whereNumber('application');
Route::post('/dashboard/{application}/delete', [DashboardController::class, 'destroy'])->whereNumber('application');

Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');
