<x-master title="Login">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center gap-2 mt-5">
            <form action="" method="POST" class="col-md-6 col-lg-7 border border-primary rounded-5 text-light py-5 px-4">
                @csrf

                {{-- form title --}}
                <div class="form-title">
                    <h3 class="text-center mb-4">Post Board / <span class="text-info">Login</span></h3>
                </div>

                <div class="form-group mb-3">
                    <label for="" class="mb-2"><strong>Email</strong></label>
                    <input type="email" name="email" id="" class="form-control" placeholder="you@gmail.com" value=" {{old('email')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="mb-2"><strong>Password</strong></label>
                    <input type="password" name="password" id="" class="form-control" placeholder="your password">
                </div>

                {{-- forget password --}}
                <div class="password-forget text-end mb-4">
                    <a href="" class="text-decoration-none text-info">Forget Password?</a>
                </div>

                {{-- sbumit button --}}
                <div class="submit text-center">
                    <button type="submit" class="btn btn-primary w-50">Login</button>
                </div>

                {{-- register link --}}
                <div class="registation-link">
                    <p class="text-center mt-3">Don't have an account? <a href="{{ route('auth.registrationForm') }}" class="text-decoration-none text-info">Register Now</a></p>
                </div>
            </form>
        </div>
    </div>
</x-master>