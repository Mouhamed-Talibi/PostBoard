<!-- Bootstrap Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <!-- Brand -->
        <a class="navbar-brand" href="#">PostBoard</a>

        <!-- Toggler for mobile view -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse justify-content-center justify-content-lg-end" id="navbarNav">
            <ul class="navbar-nav">

                {{-- Shared links --}}
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">All Posts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Find Post</a>
                </li>

                {{-- Logged in users - access all links --}}
                @auth
                    <li class="nav-item">
                        <a class="nav-link" href="#">Create Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link logout" href="#">Logout</a>
                    </li>
                @endauth

                {{-- guest links - Not logged in users --}}
                @guest
                    <li class="nav-item">
                        <a class="nav-link login" href="#">Login</a>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
