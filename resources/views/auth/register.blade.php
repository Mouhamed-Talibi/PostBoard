<x-master title="Register">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center gap-2 mt-5">
            <form action="{{ route('auth.register') }}" method="POST" class="col-md-6 col-lg-7 border border-primary rounded-5 text-light py-5 px-4" enctype="multipart/form-data">
                @csrf

                {{-- form title --}}
                <div class="form-title">
                    <h3 class="text-center mb-4">Post Board / <span class="text-info">Register</span></h3>
                </div>

                {{-- Full Name --}}
                <div class="form-group mb-3">
                    <label for="" class="mb-2"><strong>Full Name</strong></label>
                    <input type="text" name="name" class="form-control" placeholder="your full name" value="{{ old('name') }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                {{-- Email --}}
                <div class="form-group mb-3">
                    <label for="" class="mb-2"><strong>Email</strong></label>
                    <input type="email" name="email" class="form-control" placeholder="you@gmail.com" value="{{ old('email') }}">
                    @error('email')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                {{-- Password --}}
                <div class="form-group mb-3">
                    <label for="" class="mb-2"><strong>Password</strong></label>
                    <input type="password" name="password" class="form-control" placeholder="your password">
                    @error('password')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                {{-- Password Confirmation --}}
                <div class="form-group mb-3">
                    <label for="" class="mb-2"><strong>Password Confirmation</strong></label>
                    <input type="password" name="password_confirmation" class="form-control" placeholder="rewrite your password">
                    @error('password_confirmation')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                {{-- Bio --}}
                <div class="form-group mb-3">
                    <label for="" class="mb-2"><strong>Your Bio</strong></label>
                    <textarea name="bio" class="form-control" placeholder="Optional - you can add it later">{{ old('bio') }}</textarea>
                    @error('bio')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                {{-- Image --}}
                <div class="form-group mb-3">
                    <label for="" class="mb-2"><strong>Your Image</strong></label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                    @error('image')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                {{-- Submit Button --}}
                <div class="submit text-center mt-4">
                    <button type="submit" class="btn btn-primary w-50">Register</button>
                </div>

                {{-- Login Link --}}
                <div class="login-link">
                    <p class="text-center mt-3">Already Have Account? <a href="{{ route('auth.loginForm') }}" class="text-decoration-none text-info">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</x-master>
