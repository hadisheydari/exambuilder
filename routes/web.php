<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Middleware\RoleMiddleware;
use App\Http\Middleware\AuthUser;

Route::view('/register', 'auth.register')->name('register');
Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [UserController::class, 'login'])->name('post-login');

Route::get('/', function () {
    if (auth()->check()) {
        $role = auth()->user()->role;
        return $role === 'teacher' ? redirect()->route('Teacher_dashboard') :
            ($role === 'student' ? redirect()->route('Student_dashboard') : redirect()->route('login'));
    }
    return redirect()->route('login');
})->name('dashboard');

Route::view('/error/403', 'Error.403')->name('403');

Route::resource('User', UserController::class);

Route::middleware([AuthUser::class])->group(function () {
    Route::middleware([RoleMiddleware::class . ':teacher'])->prefix('teacher')->group(function () {
        Route::view('/', 'Teacher.teacher_dashboard')->name('Teacher_dashboard');
    });

    Route::middleware([RoleMiddleware::class . ':student'])->prefix('student')->group(function () {
        Route::view('/', 'Student.student_dashboard')->name('Student_dashboard');
    });
});
