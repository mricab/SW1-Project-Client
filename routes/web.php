<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WorkspaceController;

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

Route::prefix('workspace')->group(function () {
    Route::get('/home',      [WorkspaceController::class, 'home'])->name('workspace.home');
    Route::get('/search',    [WorkspaceController::class, 'search'])->name('workspace.search');
    Route::get('/categories',[WorkspaceController::class, 'categories'])->name('workspace.categories');
    Route::get('/upload',    [WorkspaceController::class, 'upload'])->name('workspace.upload');
});
