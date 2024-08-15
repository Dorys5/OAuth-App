<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
            $user = Socialite::driver('google')->user();
            $existingUser = User::where('google_id', $user->id)->first();
            // @dd($existingUser);

            if ($existingUser) {
                Auth::login($existingUser);
                return redirect()->route('dashboard');
            } else {
                $googleUser = User::create([
                    'name' => $user->name,
                    'nickname' => $user->nickname,
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'auth_type' => 'google',
                    'password' => Hash::make(Str::random(10))
                ]);

                Auth::login($googleUser);

                return view("dashboard");
            }
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors('Une erreur est survenue lors de la connexion avec GitHub.');
        }
    }
}
