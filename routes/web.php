<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('auth/google', [LoginController::class, 'redirectToGoogle'])->middleware('guest');
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback'])->middleware('guest');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth'); // Protect with authentication

Route::get('/login', function () {
    return view('login');
})->name('login')->middleware('guest'); // Only for guests

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

Route::get('/', function () {
    return view('welcome');
});
