<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GithubController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('github')->redirect();
    }

    public function callback()
    {
        
        try {
            $user = Socialite::driver('github')->user();

            $existingUser = User::where('email', $user->email)->first();

            if ($existingUser) {
                Auth::login($existingUser);
                return redirect()->route('dashboard');
            } else {
                $gitUser = User::create([
                    'name' => $user->nickname,
                    'nickname' => $user->nickname,
                    'email' => $user->email,
                    'auth_type' => 'github',
                    'password' => Hash::make(Str::random(10))
                ]);

                Auth::login($gitUser);
                return view("dasboard");
            }
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors('Une erreur est survenue lors de la connexion avec GitHub.');
        }
    }
}
