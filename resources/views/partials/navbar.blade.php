<!-- Navbar -->
<nav class="navbar navbar-expand-lg sticky-top shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html">
            <img src=" {{ asset("images/logo.png") }}" class="img-fluid" style="width: 60px; height: 60px;">
        </a>  
        <!-- Mobile toggle button -->
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Desktop menu (visible on lg screens and up) -->
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active fw-bold" aria-current="page" href="{{ route('home') }}">Home</a> 
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="#hotels">Posts</a>  
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link" href="findRoom.html">Find Post</a>  
                </li>
                <li class="nav-item px-2">
                    <a class="nav-link login rounded-pill px-3" href="login.html">Login</a>  
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Offcanvas Menu (for mobile) -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            <img src=" {{ asset("images/logo.png") }}" class="img-fluid mx-auto" style="width: 60px; height: 60px;">
        </h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
                <a class="nav-link active mobile-nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mobile-nav-link" href="#hotels">Posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mobile-nav-link" href="findRoom.html">Find POst</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mobile-nav-link" href="login.html">Login</a>
            </li>
        </ul>
    </div>
        </div>