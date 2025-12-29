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
                           <x-site.search-bar id="search"/>
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
                                        <div class="icon"><span class="far fa-cart-shopping fz17"></span><span class="badge heading-color">
                                        <livewire:cart-count />
                                        </span></div>
                                        <div class="details">
                                            <p class="subtitle">
                                                <livewire:cart-price />
                                            </p>
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
<livewire:cart-modal />

<!-- Main Header Nav For Mobile -->
<div id="page" class="stylehome1">
    <div class="mobile-menu">
        <div class="header stylehome1 home7_style">
            <div class="menu_and_widgets">
                <div class="mobile_menu_bar float-start"> <a class="menubar" href="#menu"><span></span></a> <a class="mobile_logo"                              href="{{ route('home') }}">Taracon<span class="text-thm">.</span></a>
                </div>
                <div class="mobile_menu_widget_icons">
                    <ul class="cart mt15">
                        {{--                            <li class="list-inline-item"> <a class="cart_btn signin-filter-btn" href="#"><span class="icon flaticon-profile"></span></a> </li>--}}
                        {{--                            <li class="list-inline-item"> <a class="cart_btn cart-filter-btn" href="#"><span class="icon"><img src="images/icons/flaticon-shopping-cart.svg" alt=""></span><span class="badge bgc-thm">2</span></a> </li>--}}
                        @auth()
                            <li class=list-inline-item>
                                <a class="cart_btn" href="{{ route('dashboard') }}">
                                    <span class="icon flaticon-profile"></span>
                                </a>
                            </li>
                        @else
                            <li class=list-inline-item>
                                <a class="cart_btn signin-filter-btn" href="#">
                                    <span class="icon flaticon-profile"></span>
                                </a>
                            </li>
                        @endauth
                        <li class=list-inline-item>
                            <a class="cart_btn cart-filter-btn" href="#">
                                <span class=icon>
                                    <img src="{{ asset('images/icons/flaticon-shopping-cart.svg') }}" alt="">
                                </span>
                                <span class="badge bgc-thm">
                                    <livewire:cart-count />
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="mobile_menu_search_widget">
                <div class="header_middle_advnc_search">
                    <div class="container search_form_wrapper">
                        <div class="row">
                            <div>
                                <div class="top-search text-start">
                                    <form action="#" method="get" class="form-search" accept-charset="utf-8">
                                        <div class="box-search">
                                            <input class="form_control" type="text" name="search" placeholder="Search products…">
                                            <div class="search-suggestions text-start">
                                                <div class="box-suggestions">
                                                    <ul>
                                                        @foreach(app('featured_products')->take('4') as $product)
                                                            <a href="{{ route('shop.show', $product) }}">
                                                                <li>
                                                                    <div class="thumb">
                                                                        <img src="{{ $product->images->first()?->thumbnail }}" alt="{{ $product->name }}">
                                                                    </div>
                                                                    <div class="info-product">
                                                                        <div class="item_title">{{ $product->name }}</div>
                                                                        <div class="price">
                                                                             <span class="sale">
                                                                                           ₦{{ number_format($product->price) }}
                                                                                 </span>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </a>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                <!-- /.box-suggestions -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div>
                                <div class="advscrh_frm_btn ">
                                    <button type="submit" class="btn search-btn"><span class="flaticon-search"></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="posr">
                <div class="mobile_menu_close_btn"><span class="flaticon-close"></span></div>
            </div>
        </div>
    </div>

    <!-- /.mobile-menu view -->
    <nav id="menu" class="stylehome3">
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('shop.index') }}">Shop</a></li>
            <li><a href="{{ route('home') }}">Our Stores</a></li>
            <li><a href="{{ route('about-us') }}">About us</a></li>
            <li><a href="{{ route('contact-us') }}">Contact Us</a></li>

            <li class="title my-3 bb1 pl20 fz20 fw500 pb-3">Top Categories</li>
            @foreach(app('categories') as $category)
                <li><span>{{ $category->name }}</span>
                    <ul>
                        @foreach($category->subCategories as $subCategory)
                            <li><a href="{{ route('shop.index', ['sub-category'=> $subCategory]) }}">
                                    {{ $subCategory->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
                            <li><a class="tdu text-thm1 text-capitalize" href="#">See More <i class="far fa-angle-down"></i></a></li>
            <!-- Only for Mobile View -->
        </ul>
    </nav>
</div>

<div class="body_content_wrapper position-relative">

    <header class="header-nav menu_style_home_one main-menu light_blue">
        <nav class=posr>
            <div class="container posr menu_bdrt1">
                <div class=menu-toggle>
                    <button type=button id=menu-btn>
                        <span class=icon-bar></span>
                        <span class=icon-bar></span>
                        <span class=icon-bar></span>
                    </button>
                </div>
                <div class="posr logo1 home1_style">
                    <div id=mega-menu>
                        <a class=btn-mega href="#">
                            <img class=me-2 src="{{ asset('images/desktop-nav-menu-white.svg') }}" alt="Desktop Menu Icon">
                            <span class="fw500 fz16 color-white vam">Browse Categories</span>
                        </a>
                        <ul class=menu>
                            @foreach(app('categories') as $category)
                                <li>
                                    <a class=dropdown href="{{ route('shop.index', ['category'=> $category]) }}">
                                        <span class=menu-title>{{ $category->name }}</span>
                                    </a>
                                    <div class=drop-menu>
                                        <div class=one-third>
                                            <div class=cat-title>{{ $category->name }}</div>
                                            <ul class=mb20>
                                                @foreach($category->subCategories as $subCategory)
                                                    <li>
                                                        <a href="{{ route('shop.index', ['sub-category'=> $subCategory]) }}">
                                                            {{ $subCategory->name }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <ul id=respMenu class="ace-responsive-menu menu_list_custom_code wa pl200" data-menu-style=horizontal>
                    <x-nav-link href="{{ route('home') }}" route="home">Home</x-nav-link>
                    <x-nav-link href="{{ route('shop.index') }}" route="shop.*">Shop</x-nav-link>
                    <x-nav-link href="{{ route('stores') }}" route="stores">Our Stores</x-nav-link>
                    <x-nav-link href="{{ route('about-us') }}" route="about-us">About Us</x-nav-link>
                    <x-nav-link href="{{ route('contact-us') }}" route="contact-us">Contact Us</x-nav-link>
                </ul>
            </div>
        </nav>
    </header>

{{--    <!-- Home Design -->--}}

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
