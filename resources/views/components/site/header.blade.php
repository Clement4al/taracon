<!-- header Top -->
<!-- header middle -->
<div class="header_middle home3_style bt1 bb1 pt20 pb20 dn-992">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-xxl-3">
                <div class="header_top_logo_home3">
                    <div class="logo">Taracon<span class="color-light-green">.</span></div>
                </div>
            </div>
            <div class="col-lg-5 col-xxl-5">
                <div class="header_middle_advnc_search">
                    <div class="search_form_wrapper home7_style">
                        <div class="row">
                            <div class="col-auto pr0">
                                <div class="actegory">
                                    <select class="selectpicker" id="selectbox_alCategory">
                                        <option value="AllCategory">All Category</option>
                                        @foreach(app('categories') as $category)
                                            <option value="{{ $category->slug }}" @selected(request('category') == $category->slug)>
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                           <x-site.search-bar />
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xxl-4 pr0-lg">
                <div class="hm_log_fav_cart_widget justify-content-center">
                    <div class="wrapper">
                        <ul class="mb0">
                            @auth()
                                <li class=list-inline-item> <a class="header_top_iconbox home7_style " href="{{ route('dashboard') }}">
                                        <div class="d-block d-md-flex">
                                            <div class=icon><span class=flaticon-profile></span></div>
                                            <div class=details>
                                                <p class=subtitle>{{ user()->first_name  }}</p>
                                                <h5 class=title>{{ user()->last_name  }}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @else
                                <li class="list-inline-item"> <a class="header_top_iconbox home7_style signin-filter-btn" href="#">
                                        <div class="d-block d-md-flex">
                                            <div class="icon"><span class="flaticon-profile"></span></div>
                                            <div class="details">
                                                <p class="subtitle">Sign In</p>
                                                <h5 class="title">Account</h5>
                                            </div>
                                        </div>
                                    </a> </li>
                            @endauth
{{--                            <li class="list-inline-item"> <a class="header_top_iconbox home7_style" href="page-account-wishlist.html">--}}
{{--                                    <div class="d-block d-md-flex">--}}
{{--                                        <div class="icon"><span class="flaticon-heart"></span></div>--}}
{{--                                        <div class="details">--}}
{{--                                            <p class="subtitle">Wishlist</p>--}}
{{--                                            <h5 class="title">My Items</h5>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a> </li>--}}

                            <li class="list-inline-item"> <a class="header_top_iconbox home7_style cart-filter-btn" href="#">
                                    <div class="d-block d-md-flex">
                                        <div class="icon"><span class="far fa-cart-shopping fz17"></span><span class="badge heading-color">2</span></div>
                                        <div class="details">
                                            <p class="subtitle">$200.99</p>
                                            <h5 class="title">Total</h5>
                                        </div>
                                    </div>
                                </a> </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Main Header Nav -->
<header class="header-nav menu_style_home_one menu_home5_style athome7 main-menu">
    <!-- Ace Responsive Menu -->
    <nav class="posr">
        <div class="container posr menu_bdrt1">
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <button type="button" id="menu-btn"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            </div>
            <div class="posr logo1 home7_style">
                <div class="bgc-light-green pt-2" id="mega-menu"> <a class="btn-mega home7_style d-flex justify-content-between align-items-center ps-3" href="#"> <img src="images/desktop-nav-menu-white.svg" alt="Desktop Menu Icon"> <span class="fw500 fz16 color-white vam">Browse Categories</span> <span class="far fa-angle-down me-3 color-white"></span> </a>
                    <ul class="menu">
                    </ul>
                </div>
            </div>
            <!-- Responsive Menu Structure-->
            <ul id="respMenu" class="ace-responsive-menu menu_list_custom_code wa pl300 pl220-lg" data-menu-style="horizontal">
                <li class="visible_list"> <a href="#"><span class="title">Home</span></a></li>
                <li class="megamenu_style"> <a href="#"><span class="title">Shop</span></a></li>
                <li class="visible_list"> <a href="#"><span class="title">Our Stores</span></a></li>

                <li class="visible_list"> <a href="#"><span class="title">Blog</span></a>
                    <ul>
                        <li><a href="page-blog-grid.html">Blog Grid</a></li>
                        <li><a href="page-blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
                    </ul>
                </li>
                <li class="visible_list"> <a href="#"><span class="title">About Us</span></a></li>
                <li class="visible_list"> <a href="#"><span class="title">Contact Us</span></a></li>
            </ul>
            <ul id="respMenu2" class="ace-responsive-menu widget_menu_home2 wa" data-menu-style="horizontal">
                <li class="list-inline-item list_c me-0"><a href="#">Hot Deals</a></li>
                <li class="list-inline-item list_c me-0"><a href="#">Top Categories</a></li>
                <li class="list-inline-item list_c me-0"><a href="#">Best Sellers</a></li>
                <li class="list-inline-item list_c me-0"><a href="#">New Arrivals</a></li>
            </ul>
        </div>
    </nav>
</header>

<!-- Body Ovelay Behind Sidebar -->
<div class="hiddenbar-body-ovelay"></div>
<!-- Sign In Hiddn SideBar -->
<div class="signin-hidden-sbar">
    <div class="hsidebar-header">
        <div class="sidebar-close-icon"><span class="flaticon-close"></span></div>
        <h4 class="title">Sign-In</h4>
    </div>
    <div class="hsidebar-content">
        <div class="log_reg_form sidebar_area">
            <div class="login_form">
                <form id="signin-form" action="{{ route('api.login') }}" method="POST" x-data @submit.prevent="$submit()" @then="location.reload()">
{{--                    <form action="{{ route('api.login') }}"--}}
{{--                            x-data @submit.prevent="$submit()"--}}
{{--                            @then="location.reload()"--}}
{{--                            class="form w-100"--}}
{{--                            x-transition:enter--}}
{{--                            --}}{{--x-show="! forgot"--}}
{{--                            method="post"--}}
{{--                    >--}}
                    <div class="mb-2 mr-sm-2">
                        <label class="form-label">Email</label>
                        <input id="email" name="email" type="email" class=form-control placeholder="Enter email address..." required>
                    </div>
                    <!--begin::Input group-->
                    <div class="fv-row mb-4" data-kt-password-meter="true">
                        <!--begin::Wrapper-->
                        <div class="mb-1">
                            <label for="password" class=form-label>Password</label>
                            <!--begin::Input wrapper-->
                            <div class="position-relative mb-3">
                                <input id="password" name="password" type="password" class="form-control" placeholder="Enter Password..."/>
                                <span class="position-absolute translate-middle top-50 end-0" onclick="togglePasswordVisibility()">
                                    <i class="bi bi-eye-slash fs-5"></i>
                                    <i class="bi bi-eye fs-5 d-none"></i>
                                </span>
                            </div>
                            <!--end::Input wrapper-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group--->
                    <div class="custom-control custom-checkbox">
                        <input type=checkbox name="remember" class=custom-control-input id=remember>
                        <label class=custom-control-label for=remember>Remember me</label>
                        <a class="btn-fpswd float-end" href="#">Forgot Password?</a>
                    </div>
                    <button type=submit class="btn btn-log btn-thm mt20">Sign In</button>
                    <p class="text-center mb25 mt10">Don't have an account? <a href="{{ route('register') }}">Create account</a></p>
                    <div class="hr_content">
                        <hr>
                        <span class="hr_top_text">or</span> </div>
                    <ul class="login_with_social text-center mt30 mb0">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-google"></i></a></li>
                    </ul>
                </form>
            </div>
        </div>
    </div>
</div>
<!--End Sign In Hiddn SideBar -->

@push('scripts')
    <script>
        const togglePasswordVisibility = () => {
            const passwordInput = $('#password');
            passwordInput.attr('type', (i, val) => (val === 'password' ? 'text' : 'password'));
            $('.bi-eye, .bi-eye-slash').toggleClass('d-none');
            passwordInput.focus();
        };
    </script>
@endpush
