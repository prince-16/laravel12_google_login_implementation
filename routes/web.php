<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::get('auth/google', [LoginController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [LoginController::class, 'handleGoogleCallback']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth'); // Protect with authentication middleware


// Define a login route with a name
Route::get('/login', function () {
    return view('login'); // Create a login.blade.php file in resources/views/
})->name('login');

Route::get('/logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->name('logout');

Route::get('/', function () {
    return view('welcome');
});
