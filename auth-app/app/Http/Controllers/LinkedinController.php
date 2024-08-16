<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class LinkedinController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('linkedin')->redirect();
    }

    public function callback()
    {
        try {
            $linkedinUser = Socialite::driver('linkedin')->user();

            $existingUser = User::where('linkedin_id', $linkedinUser->id)
                ->orWhere('email', $linkedinUser->email)
                ->first();

            if ($existingUser) {
                if (!$existingUser->linkedin_id) {
                    $existingUser->update(['linkedin_id' => $linkedinUser->id]);
                }
                Auth::login($existingUser);
            } else {
                $newUser = User::create([
                    'name' => $linkedinUser->name ?? $linkedinUser->nickname,
                    'email' => $linkedinUser->email,
                    'linkedin_id' => $linkedinUser->id,
                    'auth_type' => 'linkedin',
                    'password' => Hash::make(Str::random(10)),
                ]);

                Auth::login($newUser);
            }

            return redirect()->route('dashboard');
        } catch (\Exception $e) {
          
        }
    }
}
