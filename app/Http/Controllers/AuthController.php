<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\RegistrationRequest;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;

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

        // regitration handler 
        public function register(RegistrationRequest $request) {
            // getting regsitration fields
            $registrationFields = $request->validated();

            // hashing password
            $hashedPassword = Hash::make($registrationFields['password']);

            // checking or image 
            if(isset($registrationFields['image'])) {
                $imagePath = $request->file('image')->store('uploads/creators', 'public');
                $registrationFields['image'] = $imagePath;
            }
            $registrationFields['password'] = $hashedPassword;
            dd($registrationFields);
        }
    }
