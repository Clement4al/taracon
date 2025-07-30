<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <meta charset=utf-8>
    <meta http-equiv=X-UA-Compatible content="IE=edge">
    <meta name=viewport content="width=device-width,initial-scale=1">
{{--    <meta name="description" content="{{ $description ?? site('description') }}">--}}
    <meta name="keywords" content="{{ $keywords ?? '' }}">
    <meta name="author" content="Newton Job - 07011227815">
{{--    <meta property="og:site_name" content="{{ config('app.name') }}"/>--}}
    <meta property="og:title" content="{{ $title ?? '' }}"/>
    <meta property="og:description" content="{{ $description ?? '' }}"/>
    <meta property="og:image" content="{{ $image ?? '' }}"/>
{{--    <title>{{ $title ?? config('app.name') }}</title>--}}
    <meta property="og:locale" content="en_US"/>

    <!--Bensu favicon-->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/img/logo/favicon.png') }}">
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="{{ asset('/img/logo/favicon.png') }}">
{{--    <link rel="canonical" href="{{ route('home') }}"/>--}}

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('admin/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
          type="text/css"/>
    <link href="{{ asset('admin/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <!--end::Vendor Stylesheets-->

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->

    <script defer src="https://unpkg.com/alpinejs@3.12.0/dist/cdn.min.js"></script>
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="app-blank app-blank">
<!--begin::Theme mode setup on page load-->
<script>
    var defaultThemeMode = "light";
    var themeMode;

    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
        } else {
            if (localStorage.getItem("data-bs-theme") !== null) {
                themeMode = localStorage.getItem("data-bs-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }

        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }

        document.documentElement.setAttribute("data-bs-theme", themeMode);
    }
</script>
<!--end::Theme mode setup on page load-->

<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Aside-->
        <div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center"
             style="background-image: url('{{ asset('admin/media/misc/auth-bg.png') }}')">
            <!--begin::Content-->
            <div class="d-flex flex-column p-6 p-lg-10 w-100">
                <!--begin::Logo-->
                <a href="" class="mb-0 mt-10 pt-5 mb-lg-20 text-center">
                    <span class="text-white" style="font-size: 50px; font-family: sans-serif; font-weight: 800">BENSU</span>
                </a>
                <!--end::Logo-->
                <!--begin::Image-->
                <img class="d-none d-lg-block mx-auto w-300px w-lg-75 w-xl-500px mb-10 mb-lg-20" src="{{ asset('images/resource/about43.png') }}" alt=""/>
                <!--end::Image-->
                <!--begin::Title-->
                <h1 class="d-none d-lg-block text-white fs-2qx fw-bold text-center mb-7">
                    Fast, Convenient and Authentic
                </h1>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="d-none d-lg-block text-white fs-base text-center">
                    Good quality electronics makes life <span class="text-warning">easier</span> and the quality of your
                    work <span class="text-warning">a lot better.</span><br>
                    On <span class="text-warning">Bensu</span>, you can find <span class="text-warning">authentic, long-lasting</span>
                    electronic appliances.<br>
                    We are your one-stop shop for <span class="text-warning">quality</span> electronics.
                </div>
                <!--end::Text-->
            </div>
            <!--end::Content-->
        </div>
        <!--begin::Aside-->
        <!--begin::Body-->
        <div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10">
            <div class="d-flex flex-center flex-column flex-lg-row-fluid">
                <div class="w-lg-500px p-10">
                    {{ $slot }}
                </div>
            </div>
            <!--begin::Footer-->
            <div class="d-flex flex-center flex-wrap px-5">
                <!--begin::Links-->
                <div class="d-flex fw-semibold text-primary fs-base">
                    <a href="" class="px-5">Home</a>
                    <a href="" class="px-5">About Us</a>
                    <a href="}" class="px-5">Contact Us</a>
                </div>
                <!--end::Links-->
            </div>
            <!--end::Footer-->
        </div>
        <!--end::Body-->
    </div>
</div>
<!--end::Root-->

<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{ asset('admin/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('admin/js/scripts.bundle.js') }}"></script>
<!--end::Global Javascript Bundle-->

<!--begin::Custom Javascript(used for this page only)-->
<script src="{{ asset('admin/js/custom/authentication/sign-in/general.js') }}"></script>
<script src="{{ asset('admin/js/custom/authentication/sign-up/general.js') }}"></script>

@stack('scripts')

<script src="https://unpkg.com/axios@1.4.0/dist/axios.min.js"></script>
<script src="{{ asset("js/request.js") }}?v=2.2"></script>

</body>
<!--end::Body-->
</html>
