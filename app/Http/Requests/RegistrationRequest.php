<?php

    namespace App\Http\Requests;
    use Illuminate\Foundation\Http\FormRequest;

    class RegistrationRequest extends FormRequest
    {
        public function authorize(): bool
        {
            return true;
        }

        public function rules(): array
        {
            return [
                'name' => 'required|string|min:3|max:30|regex:/^[\pL\s]+$/u',
                'email' => 'required|string|email|max:255|unique:creators,email',
                'password' => 'required|string|min:8|confirmed',
                'bio' => 'nullable|string|regex:/^[a-zA-Z\s]+$/',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ];
        }

        public function messages(): array
        {
            return [
                'name.required' => 'Please enter your full name.',
                'name.min' => 'Your name must be at least 3 characters long.',
                'name.max' => 'Your name cannot exceed 30 characters.',
                'name.regex' => 'The name must only contain letters and spaces.',

                'email.required' => 'Please provide your email address.',
                'email.email' => 'Enter a valid email address.',
                'email.unique' => 'This email is already in use.',
                'email.max' => 'Your email address is too long.',

                'password.required' => 'Please choose a password.',
                'password.min' => 'Your password must be at least 8 characters.',
                'password.confirmed' => 'Password confirmation does not match.',

                'bio.regex' => 'The bio must only contain letters and spaces.',

                'image.image' => 'The file must be an image.',
                'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
                'image.max' => 'The image may not be greater than 2048 kilobytes.',
            ];
        }
    }
