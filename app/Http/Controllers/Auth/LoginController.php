<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class LoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

        public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            $user = User::updateOrCreate(
                ['email' => $googleUser->getEmail()],  // Check if email already exists
                [
                    'name' => $googleUser->getName(),
                    'google_id' => $googleUser->getId(),  // Store Google ID
                    'password' => Hash::make(Str::random(16)), // Generate a random password
                ]
            );

            Auth::login($user);

            return redirect()->route('dashboard'); // Redirect to dashboard or home page
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Google login failed. Please try again.');
        }
    }
}
