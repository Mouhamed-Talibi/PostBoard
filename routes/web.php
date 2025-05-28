<?php

    use App\Http\Controllers\AppController;
    use App\Http\Controllers\AuthController;
    use Illuminate\Support\Facades\Route;

    // home page
    Route::get('/', [AppController::class, 'index'])->name('home');

    // auth routes 
    Route::name('auth.')->group(function () {
        Route::get('login', [AuthController::class, 'showLoginForm'])->name('loginForm');
        Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('registrationForm');
        Route::post('register', [AuthController::class, 'register'])->name('register');
    });