<footer class="footer text-soft-white pt-4">
    <div class="container-fluid">
        <div class="row text-center">
            <!-- Brand & Description -->
            <div class="col-md-4 mb-4">
                <h3 class="text-soft-blue mb-3">PostBoard</h3>
                <p>Your go-to place for sharing and discovering ideas.</p>
                <p class="mt-2">
                    Here you can share your thoughts, ideas, and stories with the world. Join our community and start posting today!
                </p>
            </div>

            <!-- Links -->
            <div class="col-md-4 mb-4">
                <h3 class="text-soft-green mb-3 fw-bold">Quick Links</h3>
                <ul class="list-unstyled">
                    <li><a href="#" class="footer-link">Home</a></li>
                    <li><a href="#" class="footer-link">All Posts</a></li>
                    <li><a href="#" class="footer-link">Login</a></li>
                    @auth
                        <li><a href="#" class="footer-link">Create Post</a></li>
                        <li><a href="#" class="footer-link">My Posts</a></li>
                    @endauth
                </ul>
            </div>

            <!-- Contact or Info -->
            <div class="col-md-4 mb-4">
                <h3 class="text-soft-green mb-3 fw-bold">Connect</h3>
                <p><i class="fa-solid fa-envelope fs-4 px-3"></i> support@postboard.com</p>
                <p><i class="fa-solid fa-phone-volume fs-4 px-3"></i> +212 633908104</p>
            </div>
        </div>
        <hr class="text-light-50 mx-auto w-50">
        <p class="text-center text-soft-white">&copy; {{ date('Y') }} - PostBoard. All rights reserved.</p>
    </div>
</footer>
