<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Middleware\AuthUser;


Route::view('/register', 'auth/register')->name('register');
Route::view('/login', 'auth/login')->name('login');
Route::post('/login', [UserController::class, 'login'])->name('post-login');

Route::view('/error/403', 'Error/403')->name('403');

Route::resource('User', UserController::class);

Route::middleware([AuthUser::class])->group(function (){
    Route::view('/', 'dashboard')->name('dashboard');
});
