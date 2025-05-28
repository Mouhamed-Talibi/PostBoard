<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\RegistrationRequest;
    use App\Models\Creator;
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
            $registrationFields['password'] = $hashedPassword;

            // checking image 
            if(isset($registrationFields['image'])) {
                $imagePath = $request->file('image')->store('uploads/creators', 'public');
                $registrationFields['image'] = $imagePath;
            } 
            else {
                $registrationFields['image'] = "uploads/creators/default-image.jpg";
            }

            // register 
            $creator = Creator::create($registrationFields);
            return to_route("verification.notice");
        }
    }
