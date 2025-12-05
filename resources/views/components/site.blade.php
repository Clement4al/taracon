<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="ecommerce">
    <meta name="description" content="Taracon">
    <!-- css file -->
    <link rel=stylesheet href="{{ asset('css/bootstrap.min.css') }}">
    <link rel=stylesheet href="{{ asset('css/ace-responsive-menu.css') }}">
    <link rel=stylesheet href="{{ asset('css/menu.css') }}">
    <link rel=stylesheet href="{{ asset('css/fontawesome.css') }}">
    <link rel=stylesheet href="{{ asset('css/flaticon.css') }}">
    <link rel=stylesheet href="{{ asset('css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel=stylesheet href="{{ asset('css/animate.css') }}">
    <link rel=stylesheet href="{{ asset('css/slider.css') }}">
    <link rel=stylesheet href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&amp;family=Poppins:wght@700&amp;display=swap" rel="stylesheet">
    <!-- Responsive stylesheet -->
    <link rel=stylesheet href="{{ asset('css/responsive.css') }}">

    @livewireStyles
<style>
    .light_blue {
        background-color: #28a745 !important;
    }
</style>
    <!-- Title -->
    <title>Taracon</title>
    <!-- Favicon -->
{{--    <link href="{{ asset('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />   --}}

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

</head>

<body data-spy="scroll">
<div class="wrapper ovh">
    <div class="preloader"></div>
    <x-site.header />

{{--    <!-- Sign Up Hiddn SideBar -->--}}
{{--    <div class="signup-hidden-sbar">--}}
{{--        <div class="hsidebar-header">--}}
{{--            <div class="sidebar-close-icon"><span class="flaticon-close"></span></div>--}}
{{--            <h4 class="title">Create Your Account</h4>--}}
{{--        </div>--}}
{{--        <div class="hsidebar-content">--}}
{{--            <div class="log_reg_form sidebar_area">--}}
{{--                <div class="sign_up_form">--}}
{{--                    <form action="#">--}}
{{--                        <div class="form-group">--}}
{{--                            <label class="form-label">First Name</label>--}}
{{--                            <input type="text" class="form-control" placeholder="First Name">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label class="form-label">Last Name</label>--}}
{{--                            <input type="text" class="form-control" placeholder="First Name">--}}
{{--                        </div>--}}
{{--                        <div class="form-group">--}}
{{--                            <label class="form-label">Your Email</label>--}}
{{--                            <input type="email" class="form-control" placeholder="Enter your email">--}}
{{--                        </div>--}}
{{--                        <div class="form-group mb20">--}}
{{--                            <label class="form-label">Password</label>--}}
{{--                            <input type="password" class="form-control" placeholder="Enter a password">--}}
{{--                        </div>--}}
{{--                        <button type="submit" class="btn btn-signup btn-thm">Create Account</button>--}}
{{--                        <p class="text-center mb25 mt10">Already have an account? <a href="page-login.html">Sign in</a></p>--}}
{{--                        <div class="hr_content">--}}
{{--                            <hr>--}}
{{--                            <span class="hr_top_text">or</span> </div>--}}
{{--                        <ul class="login_with_social text-center mt30 mb0">--}}
{{--                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>--}}
{{--                            <li class="list-inline-item"><a href="#"><i class="fab fa-google"></i></a></li>--}}
{{--                            <li class="list-inline-item"><a href="#"><i class="fab fa-x-twitter"></i></a></li>--}}
{{--                            <li class="list-inline-item"><a href="#"><i class="fab fa-apple"></i></a></li>--}}
{{--                        </ul>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!--End Sign Up Hiddn SideBar -->

          {{ $slot }}

{{--        <!-- Our Partners -->--}}
{{--        <section id="our-partners" class="our-partners pt0 pb60">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-12">--}}
{{--                        <div class="text-center mb35">--}}
{{--                            <h5 class="fz16">Trusted by the world’s best</h5>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-md-4 col-lg-2">--}}
{{--                        <div class="partner_item mb30-sm"> <img src="https://creativelayers.net/themes/zeomart-html/images/partners/1.png" alt="1.png"> </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-md-4 col-lg-2">--}}
{{--                        <div class="partner_item mb30-sm"> <img src="https://creativelayers.net/themes/zeomart-html/images/partners/2.png" alt="2.png"> </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-md-4 col-lg-2">--}}
{{--                        <div class="partner_item mb30-sm"> <img src="https://creativelayers.net/themes/zeomart-html/images/partners/3.png" alt="3.png"> </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-md-4 col-lg-2">--}}
{{--                        <div class="partner_item mb30-sm"> <img src="https://creativelayers.net/themes/zeomart-html/images/partners/4.png" alt="4.png"> </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-md-4 col-lg-2">--}}
{{--                        <div class="partner_item mb30-sm"> <img src="https://creativelayers.net/themes/zeomart-html/images/partners/5.png" alt="5.png"> </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-sm-6 col-md-4 col-lg-2">--}}
{{--                        <div class="partner_item mb30-sm"> <img src="https://creativelayers.net/themes/zeomart-html/images/partners/6.png" alt="6.png"> </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--        --}}
        <x-site.subscription />

       <x-site.footer />

        <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a> </div>
</div>
<!-- Wrapper End -->
@livewireScripts

<script src="{{ asset('js/jquery-3.6.0.js') }}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.0.min.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
<script src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
<script src="{{ asset('js/ace-responsive-menu.js') }}"></script>
<script src="{{ asset('js/isotop.js') }}"></script>
<script src="{{ asset('js/parallax.js') }}"></script>
<script src="{{ asset('js/jquery-scrolltofixed-min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>
<script src="{{ asset('js/scrollbalance.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>

<!-- shop scripts -->
<script src="{{ asset('js/parallax.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>
<script src="{{ asset('js/pricing-slider.js') }}"></script>
<!-- about scripts -->
<script src="{{ asset('js/jquery.counterup.js') }}"></script>
<!-- scripts for shop.show -->
<script src="{{ asset('js/jquery.ez-plus.js') }}"></script>

<script src="https://unpkg.com/axios@1.4.0/dist/axios.min.js"></script>
<script src="{{ asset("js/request.js") }}?v=2.2"></script>
@stack('scripts')

</body>
</html>
