<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Login and Register routes
Route::view('/register', 'auth/register')->name('register');
Route::view('/login', 'auth/login')->name('login');
Route::post('/login', [UserController::class, 'login'])->name('post-login'); // Add this route

// Dashboard route
Route::view('/', 'dashboard')->middleware('auth:sanctum')->name('dashboard');

// User routes
Route::post('user/login', [UserController::class, 'login'])->name('User-login');
Route::resource('User', UserController::class);
