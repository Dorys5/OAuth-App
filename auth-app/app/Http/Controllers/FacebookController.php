<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class FacebookController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callback()
    {

        try {
            $facebooUser = Socialite::driver('google')->user();
            $existingUser = User::where('email', $facebooUser->email)->first();

            if ($existingUser) {
                Auth::login($existingUser);
            } else {
                $newUser = User::create([
                    'name' => $facebooUser->name,
                    'email' => $facebooUser->email,
                    'google_id' => $facebooUser->id,
                    'auth_type' => 'google',
                    'password' => Hash::make(Str::random(10))
                ]);

                Auth::login($newUser);
            }

            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors('Une erreur est survenue lors de la connexion avec facebook.');
        }
    }
}
