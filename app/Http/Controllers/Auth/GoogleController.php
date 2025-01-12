<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class GoogleController extends Controller
{
    public function redirectToGoogle()
    {
        /** @var \Laravel\Socialite\Two\GoogleProvider  */
        $driver = Socialite::driver('google');
        return $driver->stateless()->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            /** @var \Laravel\Socialite\Two\GoogleProvider  */
            $driver = Socialite::driver('google');
            $googleUser = $driver->stateless()->user();

            // Find or create user in the database
            $user = User::firstOrCreate(
                ['email' => $googleUser->getEmail()],
                [
                    'name' => $googleUser->getName(),
                    'google_id' => $googleUser->getId(),
                    'avatar' => $googleUser->getAvatar(),
                    'email_verified_at' => now(),
                ]
            );

            Auth::login($user);

            $role = $user->roles->first()->name;
            if ($role) return redirect()->to(env('FRONTEND_URL') . '/management/' . $role);

            return redirect()->to(env('FRONTEND_URL') . '/');
        } catch (\Exception $e) {
            return redirect()->to(env('FRONTEND_URL') . '/');
        }
    }
}
