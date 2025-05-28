<x-master title="Register">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center gap-2 mt-5">
            <form action="" method="POST" class="col-md-6 col-lg-7 border border-primary rounded-5 text-light py-5 px-4">
                @csrf

                {{-- form title --}}
                <div class="form-title">
                    <h3 class="text-center mb-4">Post Board / <span class="text-info">Register</span></h3>
                </div>

                <div class="form-group mb-3">
                    <label for="" class="mb-2"><strong>Full Name</strong></label>
                    <input type="text" name="name" id="" class="form-control" placeholder="your full name" value="{{old('name')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="mb-2"><strong>Email</strong></label>
                    <input type="email" name="email" id="" class="form-control" placeholder="you@gmail.com" value=" {{old('email')}}">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="mb-2"><strong>Password</strong></label>
                    <input type="password" name="password" id="" class="form-control" placeholder="your password">
                </div>
                <div class="form-group mb-3">
                    <label for="" class="mb-2"><strong>Password Confirmation</strong></label>
                    <input type="password" name="password_confirmation" id="" class="form-control" placeholder="rewrite your password">
                </div>

                {{-- sbumit button --}}
                <div class="submit text-center mt-4">
                    <button type="submit" class="btn btn-primary w-50">Regitser</button>
                </div>

                {{-- login link --}}
                <div class="login-link">
                    <p class="text-center mt-3">Already Have Account ? <a href="{{ route('auth.loginForm') }}" class="text-decoration-none text-info">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</x-master>