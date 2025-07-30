<!-- Spinner Start -->
<div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->

<!-- Login Offcanvas -->
<div class="offcanvas offcanvas-end" data-bs-backdrop="true" data-bs-keyboard="true" tabindex="-1" id="offcanvasLogin" aria-labelledby="Login">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title fw-bold text-warning" id="offcanvasLoginLabel">
            <i class="fas fa-user-circle me-2"></i>My Account
        </h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-4">
        <!-- Login Form -->
        <div id="loginForm">
            <div class="text-center mb-4">
                <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <i class="fas fa-user fa-2x text-warning "></i>
                </div>
                <h4 class="fw-bold mb-2">Welcome Back</h4>
                <p class="text-muted">Sign in to your account</p>
            </div>

            <form>
                <div class="mb-3">
                    <label for="email" class="form-label fw-semibold">Email</label>
                    <div class="input-group">
                        <span class="input-group-text border-end-0 bg-transparent">
                            <i class="fas fa-envelope text-muted"></i>
                        </span>
                        <input type="email" class="form-control border-start-0" id="email" placeholder="Enter your email" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label fw-semibold">Password</label>
                    <div class="input-group">
                        <span class="input-group-text border-end-0 bg-transparent">
                            <i class="fas fa-lock text-muted"></i>
                        </span>
                        <input type="password" class="form-control border-start-0" id="password" placeholder="Enter your password" required>
                        <button class="btn border-start-0 bg-transparent" type="button" id="togglePassword">
                            <i class="fas fa-eye text-muted"></i>
                        </button>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="rememberMe">
                        <label class="form-check-label text-muted" for="rememberMe">
                            Remember me
                        </label>
                    </div>
                    <a href="#" class="text-primary text-decoration-none" onclick="showForgotPassword()">
                        Forgot password?
                    </a>
                </div>

                <button type="submit" class="btn btn-warning w-100 py-3 fw-semibold mb-3">
                    <i class="fas fa-sign-in-alt me-2"></i>Sign In
                </button>

                <div class="text-center">
                    <p class="text-muted mb-3">Don't have an account?</p>
                    <button type="button" class="btn btn-outline-primary w-100 py-2" onclick="showSignupForm()">
                        <i class="fas fa-user-plus me-2"></i>Create New Account
                    </button>
                </div>

                <hr class="my-4">

                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-outline-danger">
                        <i class="fab fa-google me-2"></i>Continue with Google
                    </button>
                    <button type="button" class="btn btn-outline-primary">
                        <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                    </button>
                </div>
            </form>
        </div>

        <!-- Sign Up Form (Hidden by default) -->
        <div id="signupForm" style="display: none;">
            <div class="text-center mb-4">
                <div class="bg-success bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <i class="fas fa-user-plus fa-2x text-success"></i>
                </div>
                <h4 class="fw-bold mb-2">Create Account</h4>
                <p class="text-muted">Join us today</p>
            </div>

            <form>
                <div class="row mb-3">
                    <div class="col-6">
                        <label for="firstName" class="form-label fw-semibold">First Name</label>
                        <input type="text" class="form-control" id="firstName" placeholder="First name" required>
                    </div>
                    <div class="col-6">
                        <label for="lastName" class="form-label fw-semibold">Last Name</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Last name" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="signupEmail" class="form-label fw-semibold">Email Address</label>
                    <div class="input-group">
                        <span class="input-group-text border-end-0 bg-transparent">
                            <i class="fas fa-envelope text-muted"></i>
                        </span>
                        <input type="email" class="form-control border-start-0" id="signupEmail" placeholder="Enter your email" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="signupPassword" class="form-label fw-semibold">Password</label>
                    <div class="input-group">
                        <span class="input-group-text border-end-0 bg-transparent">
                            <i class="fas fa-lock text-muted"></i>
                        </span>
                        <input type="password" class="form-control border-start-0" id="signupPassword" placeholder="Create password" required>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="confirmPassword" class="form-label fw-semibold">Confirm Password</label>
                    <div class="input-group">
                        <span class="input-group-text border-end-0 bg-transparent">
                            <i class="fas fa-lock text-muted"></i>
                        </span>
                        <input type="password" class="form-control border-start-0" id="confirmPassword" placeholder="Confirm password" required>
                    </div>
                </div>

                <div class="form-check mb-4">
                    <input class="form-check-input" type="checkbox" id="agreeTerms" required>
                    <label class="form-check-label text-muted" for="agreeTerms">
                        I agree to the <a href="#" class="text-primary">Terms of Service</a> and <a href="#" class="text-primary">Privacy Policy</a>
                    </label>
                </div>

                <button type="submit" class="btn btn-success w-100 py-3 fw-semibold mb-3">
                    <i class="fas fa-user-plus me-2"></i>Create Account
                </button>

                <div class="text-center">
                    <p class="text-muted mb-0">Already have an account?</p>
                    <button type="button" class="btn btn-link text-primary p-0" onclick="showLoginForm()">
                        Sign in here
                    </button>
                </div>
            </form>
        </div>

        <!-- Forgot Password Form (Hidden by default) -->
        <div id="forgotPasswordForm" style="display: none;">
            <div class="text-center mb-4">
                <div class="bg-warning bg-opacity-10 rounded-circle d-inline-flex align-items-center justify-content-center mb-3" style="width: 80px; height: 80px;">
                    <i class="fas fa-key fa-2x text-warning"></i>
                </div>
                <h4 class="fw-bold mb-2">Reset Password</h4>
                <p class="text-muted">Enter your email to receive reset instructions</p>
            </div>

            <form>
                <div class="mb-4">
                    <label for="resetEmail" class="form-label fw-semibold">Email Address</label>
                    <div class="input-group">
                        <span class="input-group-text border-end-0 bg-transparent">
                            <i class="fas fa-envelope text-muted"></i>
                        </span>
                        <input type="email" class="form-control border-start-0" id="resetEmail" placeholder="Enter your email" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-warning w-100 py-3 fw-semibold mb-3">
                    <i class="fas fa-paper-plane me-2"></i>Send Reset Link
                </button>

                <div class="text-center">
                    <button type="button" class="btn btn-link text-primary p-0" onclick="showLoginForm()">
                        <i class="fas fa-arrow-left me-1"></i>Back to Sign In
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Navbar start -->
<div class="container-fluid fixed-top">
    <div class="container topbar bg-primary d-none d-lg-block">
        <div class="d-flex justify-content-between">
            <div class="top-info ps-2">
                <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">123 Street, Taraba State</a></small>
                <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">support@taracon.com</a></small>
            </div>
            <div class="top-link pe-2">
                <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                <a href="#" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
            </div>
        </div>
    </div>
    <div class="container px-0">
        <nav class="navbar navbar-light bg-white navbar-expand-xl">
            <a href="/" class="navbar-brand">
                <h1 class="display-6 mb-0 logo-gradient">Taracon</h1>
            </a>
            <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars text-primary"></span>
            </button>
            <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                <div class="navbar-nav mx-auto">
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="/shop" :active="request()->is('shop')">Shop</x-nav-link>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Categories</a>
                        <div class="dropdown-menu m-0 bg-secondary rounded-0">
                            <a href="cart.html" class="dropdown-item">Cart</a>
                            <a href="chackout.html" class="dropdown-item">Checkout</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404 Page</a>
                        </div>
                    </div>
                    <x-nav-link href="/about-us" :active="request()->is('about-us')">About Us</x-nav-link>
                    <x-nav-link href="/contact-us" :active="request()->is('contact-us')">Contact Us</x-nav-link>
                </div>
                <div class="d-flex m-3 me-0">
                    <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button>
                    <!-- Updated User Icon with Login Sidebar Trigger -->
                    <a href="#" class="my-auto" data-bs-toggle="offcanvas" data-bs-target="#offcanvasLogin" aria-controls="offcanvasLogin">
                        <i class="fas fa-user fa-2x"></i>
                    </a>
                    <a href="/cart" class="position-relative ms-4 my-auto">
                        <i class="fa fa-shopping-bag fa-2x"></i>
                        <span class="position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1" style="top: -5px; left: 15px; height: 20px; min-width: 20px;">
                            <livewire:cart-count />
                        </span>
                    </a>
{{--                    <div class="cart text-end d-none d-lg-block dropdown my-auto">--}}
{{--                        <button class="border-0 bg-transparent d-flex flex-column gap-2 lh-1" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasCart" aria-controls="offcanvasCart">--}}
{{--                            <span class="fs-6 text-muted dropdown-toggle">Your Cart</span>--}}
{{--                            <span class="cart-total fs-5 fw-bold">$1290.00</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->

<x-site.search-bar id="search"/>

<script>
    // Prevent event bubbling on user icon click
    document.addEventListener('DOMContentLoaded', function() {
        const userIcon = document.querySelector('[data-bs-target="#offcanvasLogin"]');
        if (userIcon) {
            userIcon.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();
            });
        }
    });

    // Toggle password visibility
    document.getElementById('togglePassword')?.addEventListener('click', function() {
        const password = document.getElementById('password');
        const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
        password.setAttribute('type', type);

        const icon = this.querySelector('i');
        icon.classList.toggle('fa-eye');
        icon.classList.toggle('fa-eye-slash');
    });

    // Form switching functions
    function showSignupForm() {
        document.getElementById('loginForm').style.display = 'none';
        document.getElementById('signupForm').style.display = 'block';
        document.getElementById('forgotPasswordForm').style.display = 'none';
    }

    function showLoginForm() {
        document.getElementById('loginForm').style.display = 'block';
        document.getElementById('signupForm').style.display = 'none';
        document.getElementById('forgotPasswordForm').style.display = 'none';
    }

    function showForgotPassword() {
        document.getElementById('loginForm').style.display = 'none';
        document.getElementById('signupForm').style.display = 'none';
        document.getElementById('forgotPasswordForm').style.display = 'block';
    }
</script>
