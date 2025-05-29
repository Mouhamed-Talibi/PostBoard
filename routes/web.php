<?php

    use App\Http\Controllers\AppController;
    use App\Http\Controllers\AuthController;
    use Illuminate\Support\Facades\Route;

    // Home page
    Route::get('/', [AppController::class, 'index'])->name('home');

    // Auth routes 
    Route::name('auth.')->group(function () {
        // Authentication routes
        Route::get('login', [AuthController::class, 'showLoginForm'])->name('loginForm');
        Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('registrationForm');
        Route::post('register', [AuthController::class, 'register'])->name('register');
    });

    // Email verification routes
    Route::get('/verificationNotice', [AuthController::class, 'VerificationNotice'])->name('verificationNotice');
    Route::get('/verify_email/{hash}', [AuthController::class, 'verifyEmail'])->name('email.verify');