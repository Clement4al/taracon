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
    <!-- Title -->
    <title>Taracon</title>
    <!-- Favicon -->
{{--    <link href="{{ asset('images/favicon.ico') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />   --}}

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script defer src="https://unpkg.com/alpinejs@3.12.0/dist/cdn.min.js"></script>
</head>

<body data-spy="scroll">
<div class="wrapper ovh">
    <div class="preloader"></div>

    <x-site.header />
   <x-site.cart-modal />
        <div class="hsidebar_footer_content">
            <div class="list_last_content">
                    <a href="#" class="cart_btns btn btn-white">View Cart</a> <a href="#" class="checkout_btns btn btn-thm">Checkout</a> </div>
            </div>
{{--        </div>--}}
    </div>
    <!--End Your Cart Hiddn SideBar -->
    <!-- Sign Up Hiddn SideBar -->
    <div class="signup-hidden-sbar">
        <div class="hsidebar-header">
            <div class="sidebar-close-icon"><span class="flaticon-close"></span></div>
            <h4 class="title">Create Your Account</h4>
        </div>
        <div class="hsidebar-content">
            <div class="log_reg_form sidebar_area">
                <div class="sign_up_form">
                    <form action="#">
                        <div class="form-group">
                            <label class="form-label">First Name</label>
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Last Name</label>
                            <input type="text" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Your Email</label>
                            <input type="email" class="form-control" placeholder="Enter your email">
                        </div>
                        <div class="form-group mb20">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder="Enter a password">
                        </div>
                        <button type="submit" class="btn btn-signup btn-thm">Create Account</button>
                        <p class="text-center mb25 mt10">Already have an account? <a href="page-login.html">Sign in</a></p>
                        <div class="hr_content">
                            <hr>
                            <span class="hr_top_text">or</span> </div>
                        <ul class="login_with_social text-center mt30 mb0">
                            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-google"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-x-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fab fa-apple"></i></a></li>
                        </ul>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--End Sign Up Hiddn SideBar -->

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
{{--                                    <livewire:cart-count />--}}
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
                                                            <li>
                                                                <div class="thumb"> <img src="images/listing/sf1.png" alt="sf1.png"> </div>
                                                                <div class="info-product">
                                                                    <div class="item_title">Sony DJ Headphones 4334205465, Black, Standard</div>
                                                                    <div class="price"><span class="sale">$32.50</span></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="thumb"> <img src="images/listing/sf2.png" alt="sf2.png"> </div>
                                                                <div class="info-product">
                                                                    <div class="item_title">Sony E-Mount Full Frame FE 24-70mm f/2.8 GM II G Master</div>
                                                                    <div class="price"><span class="sale">$32.50</span></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="thumb"> <img src="images/listing/sf3.png" alt="sf3.png"> </div>
                                                                <div class="info-product">
                                                                    <div class="item_title">TV 55" 4-Series 4K UHD smart TV</div>
                                                                    <div class="price"><span class="sale">$32.50</span></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="thumb"> <img src="images/listing/sf4.png" alt="sf4.png"> </div>
                                                                <div class="info-product">
                                                                    <div class="item_title">Hugolog Baby Monitor, 2K Security Camera, PT Cameras for</div>
                                                                    <div class="price"><span class="sale">$32.50</span></div>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="thumb"> <img src="images/listing/sf5.png" alt="sf5.png"> </div>
                                                                <div class="info-product">
                                                                    <div class="item_title">Apple iPhone Retina 6s Plus 64GB</div>
                                                                    <div class="price"><span class="sale">$32.50</span></div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.box-suggestions -->
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div>
                                    <div class="advscrh_frm_btn">
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

        <!-- /.mobile-menu -->
        <nav id="menu" class="stylehome1">
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('shop.index') }}">Shop</a></li>
{{--                <li><a href="{{ route('storeswfew') }}">Our Stores</a></li>--}}
                <li><a href="{{ route('about-us') }}">About us</a></li>
                <li><a href="{{ route('contact-us') }}">Contact Us</a></li>

                <li class="title my-3 bb1 pl20 fz20 fw500 pb-3">CATEGORIES</li>
                <li><span><i class="flaticon-cooking mr20"></i>Home & Kitchen</span>
                    <ul>
                        <li><a href="page-shop-list-v1.html">Home & Kitchen</a></li>
                    </ul>
                </li>
                <li><span><i class="flaticon-smartphone-1 mr20"></i>Electronics</span>
                    <ul>
                        <li><a href="page-shop-list-v1.html">Electronics</a></li>
                    </ul>
                </li>
                <li><span><i class="flaticon-bride-dress mr20"></i>Clothing & Accessories</span>
                    <ul>
                        <li><a href="page-shop-list-v1.html">Clothing & Accessories</a></li>
                    </ul>
                </li>
                <li><span><i class="flaticon-volleyball mr20"></i>Sport & Outdoor</span>
                    <ul>
                        <li><a href="page-shop-list-v1.html">Sport & Outdoor</a></li>
                    </ul>
                </li>
                <li><span><i class="flaticon-groceries mr20"></i>Grocery & Market</span>
                    <ul>
                        <li><a href="page-shop-list-v1.html">Grocery & Market</a></li>
                    </ul>
                </li>
{{--                <li><a class="tdu text-thm1 text-capitalize" href="#">See More <i class="far fa-angle-down"></i></a></li>--}}
                <!-- Only for Mobile View -->
            </ul>
        </nav>
    </div>
    <div class="body_content_wrapper position-relative">
        <!-- Home Design -->
        <section class="home-one">
            <div class="container">
                <div class="row">
                    <div class="col-xl-2 dn-lg">
                        <div class="mega_button_dropdown_menu active home7_style">
                            <ul class="menu bdrs0066">
                                <li class="list"> <a class="dropdown" href="#"> <span class="menu-icn flaticon-diamond"></span> <span class="menu-title">Today’s Hot Deals</span> </a>
                                    <div class="drop-menu">
                                        <div class="one-third">
                                            <div class="cat-title">Electronics</div>
                                            <ul class="mb20">
                                                <li><a href="#">Shop All</a></li>
                                            </ul>
                                            <div class="cat-title">TV & Video</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop all TVs</a></li>
                                                <li><a href="#">TVs by Size</a></li>
                                                <li><a href="#">Smart TVs</a></li>
                                                <li><a href="#">Roku TVs</a></li>
                                                <li><a href="#">Streaming</a></li>
                                                <li><a href="#">TV Mounts & Accessories</a></li>
                                                <li><a href="#">DVD & Blu-Ray Players</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Computers</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop All Computers</a></li>
                                                <li><a href="#">Laptops</a></li>
                                                <li><a href="#">Chromebook</a></li>
                                                <li><a href="#">PC Gaming</a></li>
                                                <li><a href="#">Desktops</a></li>
                                                <li><a href="#">Monitors</a></li>
                                                <li><a href="#">Networking</a></li>
                                                <li><a href="#">Computer Accessories</a></li>
                                                <li><a href="#">Computer Components</a></li>
                                                <li><a href="#">Tax Software</a></li>
                                                <li><a href="#">Computer Software</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Cell Phones</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop All Cell Phones</a></li>
                                                <li><a href="#">Wireless Deals</a></li>
                                                <li><a href="#">5G Phones</a></li>
                                                <li><a href="#">iPhone</a></li>
                                                <li><a href="#">Galaxy Phones</a></li>
                                                <li><a href="#">Phone Chargers & Power Banks</a></li>
                                                <li><a href="#">Grips & Phone Stands</a></li>
                                                <li><a href="#">Phone Cables</a></li>
                                                <li><a href="#">Car Mounts</a></li>
                                                <li><a href="#">iPhone Accessories</a></li>
                                                <li><a href="#">Cell Phone Accessory Deals</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Smart Home</div>
                                            <ul class="mb20">
                                                <li><a href="#">Shop All Smart Home</a></li>
                                                <li><a href="#">Smart Assistants & Hubs</a></li>
                                                <li><a href="#">Smart Security</a></li>
                                                <li><a href="#">Smart Energy & Lighting</a></li>
                                            </ul>
                                            <div class="cat-title">Photo Services</div>
                                            <ul class="mb0">
                                                <li><a href="#">All Photo Services</a></li>
                                                <li><a href="#">Same Day Services</a></li>
                                                <li><a href="#">Photo Cards</a></li>
                                                <li><a href="#">Photo Gifts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="list"> <a class="dropdown" href="#"> <span class="menu-icn flaticon-cooking"></span> <span class="menu-title">Home & Kitchen</span> </a>
                                    <div class="drop-menu">
                                        <div class="one-third">
                                            <div class="cat-title">Electronics</div>
                                            <ul class="mb20">
                                                <li><a href="#">Shop All</a></li>
                                            </ul>
                                            <div class="cat-title">TV & Video</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop all TVs</a></li>
                                                <li><a href="#">TVs by Size</a></li>
                                                <li><a href="#">Smart TVs</a></li>
                                                <li><a href="#">Roku TVs</a></li>
                                                <li><a href="#">Streaming</a></li>
                                                <li><a href="#">TV Mounts & Accessories</a></li>
                                                <li><a href="#">DVD & Blu-Ray Players</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Computers</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop All Computers</a></li>
                                                <li><a href="#">Laptops</a></li>
                                                <li><a href="#">Chromebook</a></li>
                                                <li><a href="#">PC Gaming</a></li>
                                                <li><a href="#">Desktops</a></li>
                                                <li><a href="#">Monitors</a></li>
                                                <li><a href="#">Networking</a></li>
                                                <li><a href="#">Computer Accessories</a></li>
                                                <li><a href="#">Computer Components</a></li>
                                                <li><a href="#">Tax Software</a></li>
                                                <li><a href="#">Computer Software</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Cell Phones</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop All Cell Phones</a></li>
                                                <li><a href="#">Wireless Deals</a></li>
                                                <li><a href="#">5G Phones</a></li>
                                                <li><a href="#">iPhone</a></li>
                                                <li><a href="#">Galaxy Phones</a></li>
                                                <li><a href="#">Phone Chargers & Power Banks</a></li>
                                                <li><a href="#">Grips & Phone Stands</a></li>
                                                <li><a href="#">Phone Cables</a></li>
                                                <li><a href="#">Car Mounts</a></li>
                                                <li><a href="#">iPhone Accessories</a></li>
                                                <li><a href="#">Cell Phone Accessory Deals</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Smart Home</div>
                                            <ul class="mb20">
                                                <li><a href="#">Shop All Smart Home</a></li>
                                                <li><a href="#">Smart Assistants & Hubs</a></li>
                                                <li><a href="#">Smart Security</a></li>
                                                <li><a href="#">Smart Energy & Lighting</a></li>
                                            </ul>
                                            <div class="cat-title">Photo Services</div>
                                            <ul class="mb0">
                                                <li><a href="#">All Photo Services</a></li>
                                                <li><a href="#">Same Day Services</a></li>
                                                <li><a href="#">Photo Cards</a></li>
                                                <li><a href="#">Photo Gifts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="list"> <a class="dropdown" href="#"> <span class="menu-icn flaticon-armchair"></span> <span class="menu-title">Home & Furniture</span> </a>
                                    <div class="drop-menu">
                                        <div class="one-third">
                                            <div class="cat-title">Electronics</div>
                                            <ul class="mb20">
                                                <li><a href="#">Shop All</a></li>
                                            </ul>
                                            <div class="cat-title">TV & Video</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop all TVs</a></li>
                                                <li><a href="#">TVs by Size</a></li>
                                                <li><a href="#">Smart TVs</a></li>
                                                <li><a href="#">Roku TVs</a></li>
                                                <li><a href="#">Streaming</a></li>
                                                <li><a href="#">TV Mounts & Accessories</a></li>
                                                <li><a href="#">DVD & Blu-Ray Players</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Computers</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop All Computers</a></li>
                                                <li><a href="#">Laptops</a></li>
                                                <li><a href="#">Chromebook</a></li>
                                                <li><a href="#">PC Gaming</a></li>
                                                <li><a href="#">Desktops</a></li>
                                                <li><a href="#">Monitors</a></li>
                                                <li><a href="#">Networking</a></li>
                                                <li><a href="#">Computer Accessories</a></li>
                                                <li><a href="#">Computer Components</a></li>
                                                <li><a href="#">Tax Software</a></li>
                                                <li><a href="#">Computer Software</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Cell Phones</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop All Cell Phones</a></li>
                                                <li><a href="#">Wireless Deals</a></li>
                                                <li><a href="#">5G Phones</a></li>
                                                <li><a href="#">iPhone</a></li>
                                                <li><a href="#">Galaxy Phones</a></li>
                                                <li><a href="#">Phone Chargers & Power Banks</a></li>
                                                <li><a href="#">Grips & Phone Stands</a></li>
                                                <li><a href="#">Phone Cables</a></li>
                                                <li><a href="#">Car Mounts</a></li>
                                                <li><a href="#">iPhone Accessories</a></li>
                                                <li><a href="#">Cell Phone Accessory Deals</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Smart Home</div>
                                            <ul class="mb20">
                                                <li><a href="#">Shop All Smart Home</a></li>
                                                <li><a href="#">Smart Assistants & Hubs</a></li>
                                                <li><a href="#">Smart Security</a></li>
                                                <li><a href="#">Smart Energy & Lighting</a></li>
                                            </ul>
                                            <div class="cat-title">Photo Services</div>
                                            <ul class="mb0">
                                                <li><a href="#">All Photo Services</a></li>
                                                <li><a href="#">Same Day Services</a></li>
                                                <li><a href="#">Photo Cards</a></li>
                                                <li><a href="#">Photo Gifts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="list"> <a class="dropdown" href="#"> <span class="menu-icn flaticon-smartphone-1"></span> <span class="menu-title">Electronics</span> </a>
                                    <div class="drop-menu">
                                        <div class="one-third">
                                            <div class="cat-title">Electronics</div>
                                            <ul class="mb20">
                                                <li><a href="#">Shop All</a></li>
                                            </ul>
                                            <div class="cat-title">TV & Video</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop all TVs</a></li>
                                                <li><a href="#">TVs by Size</a></li>
                                                <li><a href="#">Smart TVs</a></li>
                                                <li><a href="#">Roku TVs</a></li>
                                                <li><a href="#">Streaming</a></li>
                                                <li><a href="#">TV Mounts & Accessories</a></li>
                                                <li><a href="#">DVD & Blu-Ray Players</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Computers</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop All Computers</a></li>
                                                <li><a href="#">Laptops</a></li>
                                                <li><a href="#">Chromebook</a></li>
                                                <li><a href="#">PC Gaming</a></li>
                                                <li><a href="#">Desktops</a></li>
                                                <li><a href="#">Monitors</a></li>
                                                <li><a href="#">Networking</a></li>
                                                <li><a href="#">Computer Accessories</a></li>
                                                <li><a href="#">Computer Components</a></li>
                                                <li><a href="#">Tax Software</a></li>
                                                <li><a href="#">Computer Software</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Cell Phones</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop All Cell Phones</a></li>
                                                <li><a href="#">Wireless Deals</a></li>
                                                <li><a href="#">5G Phones</a></li>
                                                <li><a href="#">iPhone</a></li>
                                                <li><a href="#">Galaxy Phones</a></li>
                                                <li><a href="#">Phone Chargers & Power Banks</a></li>
                                                <li><a href="#">Grips & Phone Stands</a></li>
                                                <li><a href="#">Phone Cables</a></li>
                                                <li><a href="#">Car Mounts</a></li>
                                                <li><a href="#">iPhone Accessories</a></li>
                                                <li><a href="#">Cell Phone Accessory Deals</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Smart Home</div>
                                            <ul class="mb20">
                                                <li><a href="#">Shop All Smart Home</a></li>
                                                <li><a href="#">Smart Assistants & Hubs</a></li>
                                                <li><a href="#">Smart Security</a></li>
                                                <li><a href="#">Smart Energy & Lighting</a></li>
                                            </ul>
                                            <div class="cat-title">Photo Services</div>
                                            <ul class="mb0">
                                                <li><a href="#">All Photo Services</a></li>
                                                <li><a href="#">Same Day Services</a></li>
                                                <li><a href="#">Photo Cards</a></li>
                                                <li><a href="#">Photo Gifts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="list"> <a class="dropdown" href="#"> <span class="menu-icn flaticon-bride-dress"></span> <span class="menu-title">Clothing & Accessories</span> </a>
                                    <div class="drop-menu">
                                        <div class="one-third">
                                            <div class="cat-title">Electronics</div>
                                            <ul class="mb20">
                                                <li><a href="#">Shop All</a></li>
                                            </ul>
                                            <div class="cat-title">TV & Video</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop all TVs</a></li>
                                                <li><a href="#">TVs by Size</a></li>
                                                <li><a href="#">Smart TVs</a></li>
                                                <li><a href="#">Roku TVs</a></li>
                                                <li><a href="#">Streaming</a></li>
                                                <li><a href="#">TV Mounts & Accessories</a></li>
                                                <li><a href="#">DVD & Blu-Ray Players</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Computers</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop All Computers</a></li>
                                                <li><a href="#">Laptops</a></li>
                                                <li><a href="#">Chromebook</a></li>
                                                <li><a href="#">PC Gaming</a></li>
                                                <li><a href="#">Desktops</a></li>
                                                <li><a href="#">Monitors</a></li>
                                                <li><a href="#">Networking</a></li>
                                                <li><a href="#">Computer Accessories</a></li>
                                                <li><a href="#">Computer Components</a></li>
                                                <li><a href="#">Tax Software</a></li>
                                                <li><a href="#">Computer Software</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Cell Phones</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop All Cell Phones</a></li>
                                                <li><a href="#">Wireless Deals</a></li>
                                                <li><a href="#">5G Phones</a></li>
                                                <li><a href="#">iPhone</a></li>
                                                <li><a href="#">Galaxy Phones</a></li>
                                                <li><a href="#">Phone Chargers & Power Banks</a></li>
                                                <li><a href="#">Grips & Phone Stands</a></li>
                                                <li><a href="#">Phone Cables</a></li>
                                                <li><a href="#">Car Mounts</a></li>
                                                <li><a href="#">iPhone Accessories</a></li>
                                                <li><a href="#">Cell Phone Accessory Deals</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Smart Home</div>
                                            <ul class="mb20">
                                                <li><a href="#">Shop All Smart Home</a></li>
                                                <li><a href="#">Smart Assistants & Hubs</a></li>
                                                <li><a href="#">Smart Security</a></li>
                                                <li><a href="#">Smart Energy & Lighting</a></li>
                                            </ul>
                                            <div class="cat-title">Photo Services</div>
                                            <ul class="mb0">
                                                <li><a href="#">All Photo Services</a></li>
                                                <li><a href="#">Same Day Services</a></li>
                                                <li><a href="#">Photo Cards</a></li>
                                                <li><a href="#">Photo Gifts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="list"> <a class="dropdown" href="#"> <span class="menu-icn flaticon-heart-beat"></span> <span class="menu-title">Health & Beauty</span> </a>
                                    <div class="drop-menu">
                                        <div class="one-third">
                                            <div class="cat-title">Electronics</div>
                                            <ul class="mb20">
                                                <li><a href="#">Shop All</a></li>
                                            </ul>
                                            <div class="cat-title">TV & Video</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop all TVs</a></li>
                                                <li><a href="#">TVs by Size</a></li>
                                                <li><a href="#">Smart TVs</a></li>
                                                <li><a href="#">Roku TVs</a></li>
                                                <li><a href="#">Streaming</a></li>
                                                <li><a href="#">TV Mounts & Accessories</a></li>
                                                <li><a href="#">DVD & Blu-Ray Players</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Computers</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop All Computers</a></li>
                                                <li><a href="#">Laptops</a></li>
                                                <li><a href="#">Chromebook</a></li>
                                                <li><a href="#">PC Gaming</a></li>
                                                <li><a href="#">Desktops</a></li>
                                                <li><a href="#">Monitors</a></li>
                                                <li><a href="#">Networking</a></li>
                                                <li><a href="#">Computer Accessories</a></li>
                                                <li><a href="#">Computer Components</a></li>
                                                <li><a href="#">Tax Software</a></li>
                                                <li><a href="#">Computer Software</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Cell Phones</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop All Cell Phones</a></li>
                                                <li><a href="#">Wireless Deals</a></li>
                                                <li><a href="#">5G Phones</a></li>
                                                <li><a href="#">iPhone</a></li>
                                                <li><a href="#">Galaxy Phones</a></li>
                                                <li><a href="#">Phone Chargers & Power Banks</a></li>
                                                <li><a href="#">Grips & Phone Stands</a></li>
                                                <li><a href="#">Phone Cables</a></li>
                                                <li><a href="#">Car Mounts</a></li>
                                                <li><a href="#">iPhone Accessories</a></li>
                                                <li><a href="#">Cell Phone Accessory Deals</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Smart Home</div>
                                            <ul class="mb20">
                                                <li><a href="#">Shop All Smart Home</a></li>
                                                <li><a href="#">Smart Assistants & Hubs</a></li>
                                                <li><a href="#">Smart Security</a></li>
                                                <li><a href="#">Smart Energy & Lighting</a></li>
                                            </ul>
                                            <div class="cat-title">Photo Services</div>
                                            <ul class="mb0">
                                                <li><a href="#">All Photo Services</a></li>
                                                <li><a href="#">Same Day Services</a></li>
                                                <li><a href="#">Photo Cards</a></li>
                                                <li><a href="#">Photo Gifts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="list"> <a class="dropdown" href="#"> <span class="menu-icn flaticon-volleyball"></span> <span class="menu-title">Sport & Outdoor</span> </a>
                                    <div class="drop-menu">
                                        <div class="one-third">
                                            <div class="cat-title">Electronics</div>
                                            <ul class="mb20">
                                                <li><a href="#">Shop All</a></li>
                                            </ul>
                                            <div class="cat-title">TV & Video</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop all TVs</a></li>
                                                <li><a href="#">TVs by Size</a></li>
                                                <li><a href="#">Smart TVs</a></li>
                                                <li><a href="#">Roku TVs</a></li>
                                                <li><a href="#">Streaming</a></li>
                                                <li><a href="#">TV Mounts & Accessories</a></li>
                                                <li><a href="#">DVD & Blu-Ray Players</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Computers</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop All Computers</a></li>
                                                <li><a href="#">Laptops</a></li>
                                                <li><a href="#">Chromebook</a></li>
                                                <li><a href="#">PC Gaming</a></li>
                                                <li><a href="#">Desktops</a></li>
                                                <li><a href="#">Monitors</a></li>
                                                <li><a href="#">Networking</a></li>
                                                <li><a href="#">Computer Accessories</a></li>
                                                <li><a href="#">Computer Components</a></li>
                                                <li><a href="#">Tax Software</a></li>
                                                <li><a href="#">Computer Software</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Cell Phones</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop All Cell Phones</a></li>
                                                <li><a href="#">Wireless Deals</a></li>
                                                <li><a href="#">5G Phones</a></li>
                                                <li><a href="#">iPhone</a></li>
                                                <li><a href="#">Galaxy Phones</a></li>
                                                <li><a href="#">Phone Chargers & Power Banks</a></li>
                                                <li><a href="#">Grips & Phone Stands</a></li>
                                                <li><a href="#">Phone Cables</a></li>
                                                <li><a href="#">Car Mounts</a></li>
                                                <li><a href="#">iPhone Accessories</a></li>
                                                <li><a href="#">Cell Phone Accessory Deals</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Smart Home</div>
                                            <ul class="mb20">
                                                <li><a href="#">Shop All Smart Home</a></li>
                                                <li><a href="#">Smart Assistants & Hubs</a></li>
                                                <li><a href="#">Smart Security</a></li>
                                                <li><a href="#">Smart Energy & Lighting</a></li>
                                            </ul>
                                            <div class="cat-title">Photo Services</div>
                                            <ul class="mb0">
                                                <li><a href="#">All Photo Services</a></li>
                                                <li><a href="#">Same Day Services</a></li>
                                                <li><a href="#">Photo Cards</a></li>
                                                <li><a href="#">Photo Gifts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="list"> <a class="dropdown" href="#"> <span class="menu-icn flaticon-groceries"></span> <span class="menu-title">Grocery & Market</span> </a>
                                    <div class="drop-menu">
                                        <div class="one-third">
                                            <div class="cat-title">Electronics</div>
                                            <ul class="mb20">
                                                <li><a href="#">Shop All</a></li>
                                            </ul>
                                            <div class="cat-title">TV & Video</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop all TVs</a></li>
                                                <li><a href="#">TVs by Size</a></li>
                                                <li><a href="#">Smart TVs</a></li>
                                                <li><a href="#">Roku TVs</a></li>
                                                <li><a href="#">Streaming</a></li>
                                                <li><a href="#">TV Mounts & Accessories</a></li>
                                                <li><a href="#">DVD & Blu-Ray Players</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Computers</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop All Computers</a></li>
                                                <li><a href="#">Laptops</a></li>
                                                <li><a href="#">Chromebook</a></li>
                                                <li><a href="#">PC Gaming</a></li>
                                                <li><a href="#">Desktops</a></li>
                                                <li><a href="#">Monitors</a></li>
                                                <li><a href="#">Networking</a></li>
                                                <li><a href="#">Computer Accessories</a></li>
                                                <li><a href="#">Computer Components</a></li>
                                                <li><a href="#">Tax Software</a></li>
                                                <li><a href="#">Computer Software</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Cell Phones</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop All Cell Phones</a></li>
                                                <li><a href="#">Wireless Deals</a></li>
                                                <li><a href="#">5G Phones</a></li>
                                                <li><a href="#">iPhone</a></li>
                                                <li><a href="#">Galaxy Phones</a></li>
                                                <li><a href="#">Phone Chargers & Power Banks</a></li>
                                                <li><a href="#">Grips & Phone Stands</a></li>
                                                <li><a href="#">Phone Cables</a></li>
                                                <li><a href="#">Car Mounts</a></li>
                                                <li><a href="#">iPhone Accessories</a></li>
                                                <li><a href="#">Cell Phone Accessory Deals</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Smart Home</div>
                                            <ul class="mb20">
                                                <li><a href="#">Shop All Smart Home</a></li>
                                                <li><a href="#">Smart Assistants & Hubs</a></li>
                                                <li><a href="#">Smart Security</a></li>
                                                <li><a href="#">Smart Energy & Lighting</a></li>
                                            </ul>
                                            <div class="cat-title">Photo Services</div>
                                            <ul class="mb0">
                                                <li><a href="#">All Photo Services</a></li>
                                                <li><a href="#">Same Day Services</a></li>
                                                <li><a href="#">Photo Cards</a></li>
                                                <li><a href="#">Photo Gifts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="list"> <a class="dropdown" href="#"> <span class="menu-icn flaticon-remote-control"></span> <span class="menu-title">Toy & Video Games</span> </a>
                                    <div class="drop-menu">
                                        <div class="one-third">
                                            <div class="cat-title">Electronics</div>
                                            <ul class="mb20">
                                                <li><a href="#">Shop All</a></li>
                                            </ul>
                                            <div class="cat-title">TV & Video</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop all TVs</a></li>
                                                <li><a href="#">TVs by Size</a></li>
                                                <li><a href="#">Smart TVs</a></li>
                                                <li><a href="#">Roku TVs</a></li>
                                                <li><a href="#">Streaming</a></li>
                                                <li><a href="#">TV Mounts & Accessories</a></li>
                                                <li><a href="#">DVD & Blu-Ray Players</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Computers</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop All Computers</a></li>
                                                <li><a href="#">Laptops</a></li>
                                                <li><a href="#">Chromebook</a></li>
                                                <li><a href="#">PC Gaming</a></li>
                                                <li><a href="#">Desktops</a></li>
                                                <li><a href="#">Monitors</a></li>
                                                <li><a href="#">Networking</a></li>
                                                <li><a href="#">Computer Accessories</a></li>
                                                <li><a href="#">Computer Components</a></li>
                                                <li><a href="#">Tax Software</a></li>
                                                <li><a href="#">Computer Software</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Cell Phones</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop All Cell Phones</a></li>
                                                <li><a href="#">Wireless Deals</a></li>
                                                <li><a href="#">5G Phones</a></li>
                                                <li><a href="#">iPhone</a></li>
                                                <li><a href="#">Galaxy Phones</a></li>
                                                <li><a href="#">Phone Chargers & Power Banks</a></li>
                                                <li><a href="#">Grips & Phone Stands</a></li>
                                                <li><a href="#">Phone Cables</a></li>
                                                <li><a href="#">Car Mounts</a></li>
                                                <li><a href="#">iPhone Accessories</a></li>
                                                <li><a href="#">Cell Phone Accessory Deals</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Smart Home</div>
                                            <ul class="mb20">
                                                <li><a href="#">Shop All Smart Home</a></li>
                                                <li><a href="#">Smart Assistants & Hubs</a></li>
                                                <li><a href="#">Smart Security</a></li>
                                                <li><a href="#">Smart Energy & Lighting</a></li>
                                            </ul>
                                            <div class="cat-title">Photo Services</div>
                                            <ul class="mb0">
                                                <li><a href="#">All Photo Services</a></li>
                                                <li><a href="#">Same Day Services</a></li>
                                                <li><a href="#">Photo Cards</a></li>
                                                <li><a href="#">Photo Gifts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="list"> <a class="dropdown" href="#"> <span class="menu-icn flaticon-feeding-bottle"></span> <span class="menu-title">Babies & Moms</span> </a>
                                    <div class="drop-menu">
                                        <div class="one-third">
                                            <div class="cat-title">Electronics</div>
                                            <ul class="mb20">
                                                <li><a href="#">Shop All</a></li>
                                            </ul>
                                            <div class="cat-title">TV & Video</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop all TVs</a></li>
                                                <li><a href="#">TVs by Size</a></li>
                                                <li><a href="#">Smart TVs</a></li>
                                                <li><a href="#">Roku TVs</a></li>
                                                <li><a href="#">Streaming</a></li>
                                                <li><a href="#">TV Mounts & Accessories</a></li>
                                                <li><a href="#">DVD & Blu-Ray Players</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Computers</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop All Computers</a></li>
                                                <li><a href="#">Laptops</a></li>
                                                <li><a href="#">Chromebook</a></li>
                                                <li><a href="#">PC Gaming</a></li>
                                                <li><a href="#">Desktops</a></li>
                                                <li><a href="#">Monitors</a></li>
                                                <li><a href="#">Networking</a></li>
                                                <li><a href="#">Computer Accessories</a></li>
                                                <li><a href="#">Computer Components</a></li>
                                                <li><a href="#">Tax Software</a></li>
                                                <li><a href="#">Computer Software</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Cell Phones</div>
                                            <ul class="mb0">
                                                <li><a href="#">Shop All Cell Phones</a></li>
                                                <li><a href="#">Wireless Deals</a></li>
                                                <li><a href="#">5G Phones</a></li>
                                                <li><a href="#">iPhone</a></li>
                                                <li><a href="#">Galaxy Phones</a></li>
                                                <li><a href="#">Phone Chargers & Power Banks</a></li>
                                                <li><a href="#">Grips & Phone Stands</a></li>
                                                <li><a href="#">Phone Cables</a></li>
                                                <li><a href="#">Car Mounts</a></li>
                                                <li><a href="#">iPhone Accessories</a></li>
                                                <li><a href="#">Cell Phone Accessory Deals</a></li>
                                            </ul>
                                        </div>
                                        <div class="one-third">
                                            <div class="cat-title">Smart Home</div>
                                            <ul class="mb20">
                                                <li><a href="#">Shop All Smart Home</a></li>
                                                <li><a href="#">Smart Assistants & Hubs</a></li>
                                                <li><a href="#">Smart Security</a></li>
                                                <li><a href="#">Smart Energy & Lighting</a></li>
                                            </ul>
                                            <div class="cat-title">Photo Services</div>
                                            <ul class="mb0">
                                                <li><a href="#">All Photo Services</a></li>
                                                <li><a href="#">Same Day Services</a></li>
                                                <li><a href="#">Photo Cards</a></li>
                                                <li><a href="#">Photo Gifts</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-10 ps-0 ps-xl-5">
                        <div class="main-banner-wrapper home1_style athome7 bdrs6 ovh mb-4 mb-xl-0">
                            <div class="banner-style-one dots_none owl-theme owl-carousel">
                                <div class="slide slide-one" style="background-image: url(images/home/4.jpg);height: 500px;">
                                    <div class="container">
                                        <div class="row home-content">
                                            <div class="col-lg-6 offset-lg-1"> <span class="tag home7_style">Weekend Promotions</span>
                                                <h3 class="banner-title">Get fresh food, <br>
                                                    stylish fabrics.</h3>
                                                <p>secure POS services from stores you know and trust. </p>
                                                <p>We go to the market so you dont have to.</p>
                                                <a href="page-shop-cart.html" class="btn banner-btn home7_style btn-light-green bdrs6">Shop Now</a> </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide slide-one" style="background-image: url(images/home/4.jpg);height: 500px;">
                                    <div class="container">
                                        <div class="row home-content">
                                            <div class="col-lg-6 offset-lg-1"> <span class="tag home7_style">Weekend Promotions</span>
                                                <h3 class="banner-title">Get fresh food, <br>
                                                    stylish fabrics.</h3>
                                                    <p>secure POS services from stores you know and trust. </p>
                                                     <p>We go to the market so you dont have to.</p>
{{--                                                <p>What takes us hours to make is yours to enjoy in minutes.</p>--}}
                                                <a href="page-shop-cart.html" class="btn banner-btn home7_style btn-light-green bdrs6">Shop Now</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-btn-block banner-carousel-btn"> <span class="carousel-btn left-btn"><i class="fas fa-chevron-left left"></i></span> <span class="carousel-btn right-btn"><i class="fas fa-chevron-right right"></i></span> </div>
                            <!-- /.carousel-btn-block banner-carousel-btn -->
                        </div>
                        <!-- /.main-banner-wrapper -->
                    </div>
                </div>
            </div>
        </section>

        <!-- Extra Features -->
        <section class="features pt30 pb20 mt30">
            <div class="container">
                <div class="bdr1 bdrs6">
                    <div class="row">
                        <div class="col-sm-6 col-xl-3">
                            <div class="icon_boxes home_style athome7 pt-4 d-flex justify-content-center">
                                <div class="icon"> <span class="flaticon-fast-delivery"></span> </div>
                                <div class="details">
                                    <h5 class="title">Free Shipping</h5>
                                    <p class="para">Free Shipping To Special Locations</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="icon_boxes home_style athome7 pt-4 d-flex justify-content-center">
                                <div class="icon"> <span class="flaticon-shield"></span> </div>
                                <div class="details">
                                    <h5 class="title">Money Guarantee</h5>
                                    <p class="para">You have 30 days to return goods.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-3">
                            <div class="icon_boxes home_style athome7 pt-4 d-flex justify-content-center">
                                <div class="icon"> <span class="flaticon-credit-card"></span> </div>
                                <div class="details">
                                    <h5 class="title">Flexible Payment</h5>
                                    <p class="para">We ensure Secure payments with secure security cards.</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-xl-3">
                            <div class="icon_boxes home_style athome7 pt-4 d-flex justify-content-center">
                                <div class="icon"> <span class="flaticon-headphones"></span> </div>
                                <div class="details">
                                    <h5 class="title">Online Support</h5>
                                    <p class="para">Contact Us 24hours</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
