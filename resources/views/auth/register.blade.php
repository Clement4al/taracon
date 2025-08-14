<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Taracon</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <script defer src="https://unpkg.com/alpinejs@3.12.0/dist/cdn.min.js"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            /*background: linear-gradient(135deg, #4ade80 0%, #eab308 100%);*/
            min-height: 100vh;
            overflow-x: hidden;
        }

        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            overflow: hidden;
            max-width: 1200px;
            width: 100%;
            display: flex;
            min-height: 700px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .image-section {
            flex: 1;
            background: linear-gradient(45deg, #28a745, #a2964b);
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 60px 40px;
            color: white;
            overflow: hidden;
        }
        .brand-content {
            text-align: center;
            z-index: 10;
            position: relative;
        }

        .brand-logo {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
            background: linear-gradient(45deg, #fff, #f0f8ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .brand-tagline {
            font-size: 1.3rem;
            margin-bottom: 30px;
            opacity: 0.9;
            font-weight: 300;
        }

        .features-list {
            list-style: none;
            text-align: left;
            max-width: 300px;
        }

        .features-list li {
            padding: 8px 0;
            display: flex;
            align-items: center;
            font-size: 1rem;
            opacity: 0.9;
        }

        .features-list i {
            margin-right: 12px;
            color: #fbbf24;
        }

        .form-section {
            flex: 1;
            padding: 20px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 10px;
        }

        .form-subtitle {
            color: #718096;
            font-size: 1.1rem;
            font-weight: 400;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-row {
            display: flex;
            gap: 15px;
        }

        .form-row .form-group {
            flex: 1;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: #2d3748;
            font-size: 0.95rem;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #ffffff;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
        }

        .form-control:focus {
            outline: none;
            border-color: #22c55e;
            box-shadow: 0 0 0 3px rgba(34, 197, 94, 0.1);
            background: white;
        }

        .input-group {
            position: relative;
        }

        .form-control.with-icon {
            /*padding-left: 50px;*/
        }

        .password-toggle {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            background: none;
            border: none;
            color: #a0aec0;
            cursor: pointer;
            z-index: 2;
            transition: color 0.3s ease;
        }

        .password-toggle:hover {
            color: #22c55e;
        }

        .form-options {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 25px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .terms-agreement {
            display: flex;
            align-items: flex-start;
            gap: 8px;
            text-align: left;
        }

        .terms-agreement input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #22c55e;
            margin-top: 2px;
        }

        .terms-agreement label {
            font-size: 0.9rem;
            color: #4a5568;
            line-height: 1.4;
        }

        .terms-agreement a {
            color: #22c55e;
            text-decoration: none;
        }

        .terms-agreement a:hover {
            text-decoration: underline;
        }

        .register-btn {
            width: 100%;
            padding: 12px;
            background: linear-gradient(45deg, #28a745, #a2964b);
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 25px;
            position: relative;
            overflow: hidden;
        }

        .register-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(34, 197, 94, 0.3);
        }

        .register-btn:active {
            transform: translateY(0);
        }

        .divider {
            text-align: center;
            margin: 25px 0;
            position: relative;
            color: #a0aec0;
        }

        .divider::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background: #e2e8f0;
        }

        .divider span {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 0 20px;
            font-size: 0.9rem;
        }

        .social-login {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
        }

        .social-btn {
            flex: 1;
            padding: 14px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            color: #4a5568;
            text-decoration: none;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s ease;
        }

        .social-btn:hover {
            /*border-color: #22c55e;*/
            background: #3a53ae;
            color: #ffffff;
            transform: translateY(-2px);
            /*box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);*/
        }

        .login-link {
            text-align: center;
            color: #718096;
            margin-bottom: 20px;
        }

        .login-link a {
            color: #22c55e;
            text-decoration: none;
            font-weight: 600;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid #e2e8f0;
        }

        .footer-links a {
            color: #718096;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: #22c55e;
        }

        @media (max-width: 768px) {
            .login-card {
                flex-direction: column;
                margin: 10px;
                min-height: auto;
            }

            .form-section {
                padding: 40px 30px;
            }

            .form-title {
                font-size: 2rem;
            }

            .brand-logo {
                font-size: 2.5rem;
            }

            .form-row {
                flex-direction: column;
                gap: 0;
            }

            .footer-links {
                gap: 20px;
            }
        }
    </style>
</head>
<body>
<div class="login-container">
    <div class="login-card">
        <!-- Left Side - Product Showcase -->
        <div class="image-section">

            <div class="brand-content">
                <h1 class="brand-logo">Taracon</h1>
                <p class="brand-tagline">Your Shopping Destination</p>

                <ul class="features-list">
                    <li><i class="fas fa-check-circle"></i> Premium Quality Products</li>
                    <li><i class="fas fa-truck"></i> Fast & Free Delivery</li>
                    <li><i class="fas fa-shield-alt"></i> Secure Payment Gateway</li>
                    <li><i class="fas fa-headset"></i> 24/7 Customer Support</li>
                    <li><i class="fas fa-award"></i> Best Price Guarantee</li>
                </ul>
            </div>
        </div>

        <!-- Right Side - Register Form -->
        <div class="form-section">
            <div class="form-header">
                <h2 class="form-title">Create Account</h2>
{{--                <p class="form-subtitle">Join us today and start your premium shopping experience</p>--}}
            </div>

            <form
                action="{{ route('api.register') }}"
                x-data @submit.prevent="$submit()"
                @then="location.reload()"
                class="form w-100"
                method="post"
                id="signup-form"
                >
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="firstName">First Name</label>
                        <div class="input-group">
{{--                            <i class="input-icon fas fa-user"></i>--}}
                            <input id="first-name" type="text" name="first_name"  class="form-control with-icon " placeholder="First Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="lastName">Last Name</label>
                        <div class="input-group">
{{--                            <i class="input-icon fas fa-user"></i>--}}
                            <input id="last-name" type="text" name="last_name" class="form-control with-icon" placeholder="Last Name" required>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="email">Email</label>
                    <div class="input-group">
{{--                        <i class="input-icon fas fa-envelope"></i>--}}
                        <input  id="email" type="email"  name="email" class="form-control with-icon" placeholder="Email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="phone">Phone Number</label>
                    <div class="input-group">
{{--                        <i class="input-icon fas fa-phone"></i>--}}
                        <input id="phone" type="tel"  name="phone" class="form-control with-icon" placeholder="Enter your phone number" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label" for="password">Password</label>
                        <div class="input-group">
{{--                            <i class="input-icon fas fa-lock"></i>--}}
                            <input type="password" id="password" name="password" class="form-control with-icon" placeholder="Password" required>
                            <button type="button" class="password-toggle" onclick="togglePassword('password', 'toggleIcon1')">
                                <i class="fas fa-eye" id="toggleIcon1"></i>
                            </button>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="confirmPassword">Confirm Password</label>
                        <div class="input-group">
{{--                            <i class="input-icon fas fa-lock"></i>--}}
                            <input type="password" id="confirmPassword"  name="password_confirmation" class="form-control with-icon" placeholder="Confirm Password" required>
                            <button type="button" class="password-toggle" onclick="togglePassword('confirmPassword', 'toggleIcon2')">
                                <i class="fas fa-eye" id="toggleIcon2"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="form-options">
                    <div class="terms-agreement">
                        <input type="checkbox" id="terms" required>
                        <label for="terms">I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a></label>
                    </div>
                </div>

                <button type="submit" class="register-btn">
                    <i class="fas fa-user-plus me-2"></i>
                    Create Account
                </button>

                <div class="divider">
                    <span>or continue with</span>
                </div>

                <div class="social-login">
                    <a href="#" class="social-btn">
                        <i class="fab fa-google"></i>
                        Google
                    </a>
                    <a href="#" class="social-btn">
                        <i class="fab fa-facebook-f"></i>
                        Facebook
                    </a>
                </div>

                <div class="login-link">
                    Already have an account? <a href="{{ route('login') }}">Sign In</a>
                </div>

                <div class="footer-links">
                    <a href="{{ route('home') }}">Home</a>
                    <a href="{{ route('about-us') }}">About</a>
                    <a href="{{ route('contact-us') }}">Contact</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
    function togglePassword(inputId, iconId) {
        const passwordInput = document.getElementById(inputId);
        const toggleIcon = document.getElementById(iconId);

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            toggleIcon.classList.remove('fa-eye');
            toggleIcon.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            toggleIcon.classList.remove('fa-eye-slash');
            toggleIcon.classList.add('fa-eye');
        }
    }

</script>

<!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('admin/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('admin/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->

<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('admin/js/custom/authentication/sign-in/general.js') }}"></script>
<script src="{{ asset('admin/js/custom/authentication/sign-up/general.js') }}"></script>

{{--@stack('scripts')--}}

<script src="https://unpkg.com/axios@1.4.0/dist/axios.min.js"></script>
<script src="{{ asset("js/request.js") }}?v=2.2"></script>

</body>
</html>
