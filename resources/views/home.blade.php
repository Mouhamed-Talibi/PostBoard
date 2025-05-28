<x-master title="home">
    <div class="container-fluid py-5 p-5">
        <div class="row mt-5 justify-content-center align-items-center gap-2">
            <div class="col-md-6 col-lg-5 text-white">
                <div class="hero-text">
                    <h1>Welcome To <span>Post Board</span></h1>
                    <p>
                        Here where you can find an topic you're looking for from well educated and trusted people.
                    </p>
                    <p>
                        Feel free to explore the posts, comment on them, and share your thoughts with the community.
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="hero-image">
                    <img src="{{ asset('images/laptop.jpg')}}" class="img-fluid rounded-5" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="posting">
        <div class="container-fluid">
            <div class="row justify-content-center align-items-center gap-2">
                <div class="col-md-6 col-lg-5">
                    <img src="{{ asset('images/account.jpg')}}" class="img-fluid rounded-5" alt="">
                </div>
                <div class="col-md-6 col-lg-5 text-white">
                    <h3>Start <span>Posting</span> Now</h3>
                    <div class="links mt-3">
                        <a href="{{ route('auth.loginForm') }}" class="btn btn-outline-primary">Login</a>
                        <a href=" {{ route('auth.registrationForm') }}" class="btn btn-success">Create One Easily</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>