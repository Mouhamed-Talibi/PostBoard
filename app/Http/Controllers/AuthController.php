<?php

    namespace App\Http\Controllers;

    use App\Http\Requests\RegistrationRequest;
    use App\Mail\CreatorConfirmation;
    use App\Models\Creator;
    use Illuminate\Foundation\Auth\EmailVerificationRequest;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Hash;
    use Illuminate\Support\Facades\Mail;

    class AuthController extends Controller
    {
        // Show login form 
        public function showLoginForm() {
            return view('auth.login');
        }

        // Show registration form 
        public function showRegistrationForm() {
            return view('auth.register');
        }

        // Handle registration 
        public function register(RegistrationRequest $request) {
            $registrationFields = $request->validated();
            $registrationFields['password'] = Hash::make($registrationFields['password']);

            // Handle image upload
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = uniqid() . '.' . $image->getClientOriginalExtension();
                $path = $image->storeAs('uploads/creators', $imageName, 'public');
                $registrationFields['image'] = $path;
            } else {
                $registrationFields['image'] = 'uploads/creators/default-image.jpg';
            }

            // Create creator
            $creator = Creator::create($registrationFields);

            // mailing 
            $mailer = new CreatorConfirmation($creator);
            Mail::to($creator->email)->send($mailer);
            return redirect()->route('verificationNotice');
        }

        // verify email 
        public function verifyEmail(String $hash) {
            [$creatorId, $creatorName, $created_at] = explode('/', base64_decode($hash));
            // comparing creator data with data stored in db
            $creator = Creator::findOrFail($creatorId);
            if($creator->id == $creatorId && $creator->name == $creatorName && $creator->created_at == $created_at) {
                $creator->fill([
                    'email_verified_at' => date("Y-m-d h-m-s"),
                    'status' => "verified",
                ]);
                $verified = $creator->save();
                if($verified) {
                    return redirect()->route('auth.loginForm')->with('success', "$creatorName , your Email Has Been Verified Successfully !");
                } else {
                    return to_route('verificationNotice');
                } 
            } 
            elseif ($creator->email_verified_at !== null) {
                return redirect()->route('auth.loginForm');
            } else {
                return "something wrong";
            }
        }

        // Show verification notice 
        public function verificationNotice() {
            return view('auth.verificationNotice');
        }

        // verificationNotice 
        public function verifcationNotice() {
            return view('auth.verificationNotice');
        }
    }