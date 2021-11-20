<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/**
 *
 * Welcome Page and Authentication Views
 *
 */

Route::view('/',            'welcome/welcome')->name('welcome');
Route::view('/login',       'auth/login')->name('login');
Route::view('/register',    'auth/register')->name('register');

/**
 *
 * AuthenticationController Calls
 *
 */
Route::prefix('auth')->group(function () {
    Route::post('/register', [AuthController::class, 'register'])->name('auth.register');
    Route::post('/login',    [AuthController::class, 'login'])->name('auth.login');
    Route::post('/logout',   [AuthController::class, 'logout'])->name('auth.logout');
});
