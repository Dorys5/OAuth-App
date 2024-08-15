<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\GithubController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';

Route::get('auth/github', [GithubController::class,'redirect'])->name('github.login');
Route::get('auth/github/callback', [GithubController::class, 'callback']);

