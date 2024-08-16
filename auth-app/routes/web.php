<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\FacebookController;
use App\Http\Controllers\GithubController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\LinkedinController;
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

Route::get('auth/google', [GoogleController::class,'redirect'])->name('google.login');
Route::get('auth/google/callback', [GoogleController::class, 'callback']);

Route::get('linkedin', [LinkedinController::class,'redirect'])->name('linkedin.login');
Route::get('linkedin/callback', [LinkedinController::class, 'callback'])->name('linked.user');


Route::get('auth/facebook', [FacebookController::class,'redirect'])->name('facebook.login');
Route::get('auth/facebook/callback', [FacebookController::class, 'callback']);


