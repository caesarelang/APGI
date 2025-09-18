<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    /**
     * Redirect to Google OAuth
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle Google OAuth callback
     */
    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Check if user already exists
            $user = User::where('email', $googleUser->getEmail())->first();

            if ($user) {
                // Update user info if needed
                $user->update([
                    'name' => $googleUser->getName(),
                    'google_id' => $googleUser->getId(),
                    'avatar' => $googleUser->getAvatar(),
                ]);
            } else {
                // Create new user
                $user = User::create([
                    'name' => $googleUser->getName(),
                    'email' => $googleUser->getEmail(),
                    'google_id' => $googleUser->getId(),
                    'avatar' => $googleUser->getAvatar(),
                    'email_verified_at' => now(),
                    'password' => bcrypt(str()->random(16)), // Random password
                ]);
            }

            // Login user
            Auth::login($user, true);

            return redirect()->intended('/')->with('success', 'Login berhasil!');

        } catch (\Exception $e) {
            return redirect('/')->with('error', 'Login gagal. Silakan coba lagi.');
        }
    }

    /**
     * Show user profile page
     */
    public function profile()
    {
        // Set SEO meta tags for profile page
        \Artesaos\SEOTools\Facades\SEOMeta::setTitle('Profile - ' . config('app.name'));
        \Artesaos\SEOTools\Facades\SEOMeta::setDescription('User profile page for ' . auth()->user()->name);
        \Artesaos\SEOTools\Facades\SEOMeta::setCanonical(url('/profile'));
        
        return view('profile');
    }

    /**
     * Logout user
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('success', 'Logout berhasil!');
    }
}
