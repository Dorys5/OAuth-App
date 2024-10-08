<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {

        try {
            $googleUser = Socialite::driver('google')->user();
            $existingUser = User::where('email', $googleUser->email)->first();

            if ($existingUser) {
                Auth::login($existingUser);
            } else {
                $newUser = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'google_id' => $googleUser->id,
                    'auth_type' => 'google',
                    'password' => Hash::make(Str::random(10))
                ]);

                Auth::login($newUser);
            }

            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors('Une erreur est survenue lors de la connexion avec Google.');
        }
    }
}
