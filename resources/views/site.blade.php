<!doctype html>
<html dir=ltr lang=en>
<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width,initial-scale=1">
    <meta name="description" content="{{ site('description') }}">
    <meta name="author" content="Newton Job - 2347011227815">

    <meta property="og:site_name" content="{{ config('app.name') }}"/>
    <meta property="og:url" content="{{ url()->current() }}"/>
    <meta property="og:type" content="ecommerce"/>

    @empty($og)
        <meta property="og:title" content="{{ config('app.name') }}" />
        <meta property="og:description" content="{{ site('description') }}" />
        <meta property="og:image" content="{{ asset('images/banner/og.jpg') }}" />
    @else
        {{ $og }}
    @endempty

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
    <link rel=preconnect href="https://fonts.googleapis.com">
    <link rel=preconnect href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500&family=Poppins:wght@700&display=swap" rel=stylesheet>
    <link rel=stylesheet href="{{ asset('css/responsive.css') }}">
    <!-- stylesheets  -->
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}">
    <title>{{ config('app.name') }}</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/img/logo/favicon.png') }}">
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="{{ asset('/img/logo/favicon.png') }}">
    <link href="{{ asset('/img/logo/favicon.png') }}" rel=apple-touch-icon>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <livewire:styles />

    <style>
        .hero {
            background: #D1ECFD url("{{ asset('images/home/bg-circle.svg') }}") no-repeat bottom right;
            /*			background-color: #fde8ed;*/
            background-size: 75% !important;
            height: 600px;
            padding: 24px 0 20px 0;
            position: relative;
            padding-left: 40px;
        }

        .hero1 {
            background: url("{{ cloudinary_url('bensu/slider/1', ['width' => 800]) }}") no-repeat bottom right;
            background-size: 63% auto;
            height: 100%;
            display: inline-block;
            width: 100%;
        }

        .hero3 {
            background: #D1ECFD url("{{ cloudinary_url('bensu/slider/2', ['width' => 800]) }}") no-repeat 88%;
            background-size: 50% !important;
            position: relative;
            height: 600px;
        }

        .dark_blue {
            background-color: #0e246c !important;
        }

        .light_blue{
            background-color: #1a56cf !important;
        }

        .title-56 {
            height: 56px !important;
        }
    </style>
</head>
<body>
<div class="wrapper ovh">
    <div class=preloader></div>

    <x-site.header />

    <div class="body_content_wrapper position-relative pt30 ">

        {{ $slot }}

    </div>

    <x-site.footer />

    <a class=scrollToHome href="#"><i class="fas fa-angle-up"></i></a>
</div>

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

<livewire:scripts />

@stack('scripts')

<script>
    $('.y-menu[href="{{ url()->current() }}"]').css('color', '#f5c34b');
</script>
</body>
</html>
