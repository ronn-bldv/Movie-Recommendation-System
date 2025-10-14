<?php

use App\Http\Controllers\Socialite\ProviderCallbackController;
use App\Http\Controllers\Socialite\ProviderRedirectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/auth', function () {
    return view('auth');
})->name('auth');

// Redirect to provider (Google/Facebook)
Route::get('/auth/{provider}/redirect', ProviderRedirectController::class)->name('auth.redirect');

// Callback from provider
Route::get('/auth/{provider}/callback', ProviderCallbackController::class)->name('auth.callback');

Route::get('/home', function () {
    return view('home', ['user' => Auth::user()]);
})->name('home');

Route::post('/register', [AuthController::class, 'register'])
    ->name('register');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login');

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');

Route::get('/login', [AuthController::class, 'login'])
    ->name('login');
