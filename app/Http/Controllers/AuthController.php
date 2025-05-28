<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class AuthController extends Controller
    {
        // login form 
        public function showLoginForm() {
            return view('auth.login');
        }

        // regiteration form 
        public function showRegistrationForm() {
            return view('auth.register');
        }
    }
