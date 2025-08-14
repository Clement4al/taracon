<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Taracon</title>
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
            /*background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);*/
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
            min-height: 600px;
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

        /*@keyframes float {*/
        /*    0%, 100% { transform: translateY(0px) rotate(0deg); }*/
        /*    50% { transform: translateY(-20px) rotate(5deg); }*/
        /*}*/

        .brand-content {
            text-align: center;
            z-index: 10;
            /*position: relative;*/
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
            color: #a8ff78;
        }

        .form-section {
            flex: 1;
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }

        .form-header {
            text-align: center;
            margin-bottom: 40px;
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
            margin-bottom: 25px;
            position: relative;
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
            padding: 16px 20px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
        }

        .form-control:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            background: white;
        }

        .input-group {
            position: relative;
        }

        .form-control.with-icon {
            padding-left: 20px;
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
            color: #667eea;
        }

        .form-options {
            display: flex;
            justify-content: between;
            align-items: center;
            margin-bottom: 30px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .remember-me input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #667eea;
        }

        .forgot-link {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .forgot-link:hover {
            color: #5a67d8;
        }

        .login-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(45deg, #28a745, #a2964b);
            border: none;
            border-radius: 12px;
            color: white;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 25px;
            position: relative;
            overflow: hidden;
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
        }

        .login-btn:active {
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
            margin-bottom: 30px;
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
            border-color: #667eea;
            background: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .register-link {
            text-align: center;
            color: #718096;
        }

        .register-link a {
            color: #667eea;
            text-decoration: none;
            font-weight: 600;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        @media (max-width: 768px) {
            .login-card {
                flex-direction: column;
                margin: 10px;
                min-height: auto;
            }

            .image-section {
                min-height: 300px;
                padding: 40px 30px;
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
                <p class="brand-tagline">Your Premium Shopping Destination</p>

                <ul class="features-list">
                    <li><i class="fas fa-check-circle"></i> Premium Quality Products</li>
                    <li><i class="fas fa-truck"></i> Fast & Free Delivery</li>
                    <li><i class="fas fa-shield-alt"></i> Secure Payment Gateway</li>
                    <li><i class="fas fa-headset"></i> 24/7 Customer Support</li>
                    <li><i class="fas fa-award"></i> Best Price Guarantee</li>
                </ul>
            </div>
        </div>

        <!-- Right Side - Login Form -->
        <div class="form-section">
            <div class="form-header">
                <h2 class="form-title">Welcome Back</h2>
                <p class="form-subtitle">Sign in to your account to continue shopping</p>
            </div>

            <form
                action="{{ route('api.login') }}"
                x-data @submit.prevent="$submit()"
                @then="location.reload()"
                class="form w-100"
                x-transition:enter
{{--                x-show="! forgot"--}}
                method="post"
            >
                <div class="form-group">
                    <label class="form-label" for="email">Email Address</label>
                    <div class="input-group">
{{--                        <i class="input-icon fas fa-envelope"></i>--}}
                        <input id="email" type="email" name="email"  class="form-control with-icon"  placeholder="Email" required>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-group">
{{--                        <i class="input-icon fas fa-lock"></i>--}}
                        <input id="password" name="password" type="password" class="form-control with-icon" placeholder="Password" required>
                        <button type="button" class="password-toggle" onclick="togglePassword()">
                            <i class="fas fa-eye" id="toggleIcon"></i>
                        </button>
                    </div>
                </div>

                <div class="form-options">
                    <div class="remember-me">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <a href="#" class="forgot-link">Forgot Password?</a>
                </div>

                <button type="submit" class="login-btn">
                    <i class="fas fa-sign-in-alt me-2"></i>
                    Log In
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

                <div class="register-link">
                    Don't have an account? <a href="{{ route('register') }}">Sign Up for free</a>
                </div>

            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleIcon = document.getElementById('toggleIcon');

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
{{--<script src="{{ asset('admin/plugins/global/plugins.bundle.js') }}"></script>--}}
{{--<script src="{{ asset('admin/js/scripts.bundle.js') }}"></script>--}}
<!--end::Global Javascript Bundle-->

<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('admin/js/custom/authentication/sign-in/general.js') }}"></script>
<script src="{{ asset('admin/js/custom/authentication/sign-up/general.js') }}"></script>

{{--@stack('scripts')--}}

<script src="https://unpkg.com/axios@1.4.0/dist/axios.min.js"></script>
<script src="{{ asset("js/request.js") }}?v=2.2"></script>

</body>
</html>
