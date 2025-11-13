<!-- Top Category -->
<section class="top-category pb30 pt20">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="main-title text-center text-sm-start">
                    <h2>Top Categories</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="main-title text-center text-sm-end mb-5"> <a class="title_more_btn mt10" href="page-shop-list-v2.html">View All Categories</a> </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shop_item_8grid_slider nav_none dots_none">
                    @foreach (app('categories')->take(8) as $category)
                        <div class="item wow fadeInUp" data-wow-duration="{{ (0.3 * $loop->iteration) . 's' }}">
                        <a href="{{ url("shop?category={$category->slug}") }}">
                                <div class="iconbox home7_style">
                                    <div class="icon"><img src="{{ $category->image }}" alt="Category Image"></div>
                                    <div class="details">
                                        <h5 class="title">{{ $category->name }}</h5>
{{--                                        <p class="subtitle">29 items</p>--}}
                                    </div>
                                </div>
                             </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row ovh mt70">
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-duration=.8s>
                <div class="banner_one home1_style color3 mb30">
                    <div class=thumb>
                        <img class="float-end" height="240" width="248" src="{{asset('images/resources/wrapper.png')}}" alt=smartwatch>
                    </div>
                    <div class=details>
                        <h3 class=title>Wrapper (Clothing)</h3>
                        <a href="{{ url('shop?sub-category=laptop') }}" class=shop_btn>Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-duration=1s>
                <div class="banner_one home1_style color2 mb30">
                    <div class="thumb style1">
                        <img class="float-end" height="240" width="248" src="{{asset('images/resources/rice.png')}}" alt=smartwatch>
                    </div>
                    <div class=details>
                        <h3 class=title>Groceries & Essentials</h3>
                        <a href="{{ url('shop?sub-category=solar') }}" class=shop_btn>Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-duration=1.2s>
                <div class="banner_one home1_style color1 mb30">
                    <div class="thumb style1">
                        <img class="float-end" height="240" width="248" src="{{asset('images/resources/fashion.png')}}" alt="air-conditioner">
                    </div>
                    <div class=details>
                        <h3 class=title>Fashion</h3>
                        <a href="{{ url('shop?sub-category=air-conditioners') }}" class=shop_btn>Shop Now</a>
                    </div>
                </div>
            </div>
        </div>

{{--        <div class="row mt70">--}}
{{--            <div class="col-xl-6">--}}
{{--                <div class="banner_one home5_style athome7 mb30 bdrs6">--}}
{{--                    <div class="thumb"><img class="w100" src="https://creativelayers.net/themes/zeomart-html/images/banner/3.jpg" alt="3.jpg"></div>--}}
{{--                    <div class="details">--}}
{{--                        <p class="para heading-color">Save up to 50% off on your first order</p>--}}
{{--                        <h3 class="title">Fashion<br class="d-none d-lg-block"></h3>--}}
{{--                        <a href="page-shop-list-v1.html" class="shop_btn">Shop Now</a> </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 col-xl-3">--}}
{{--                <div class="banner_one home1_style athome7 color4 mb30">--}}
{{--                    <div class="thumb"> <img class="float-end" src="https://creativelayers.net/themes/zeomart-html/images/banner/pineapple.png" alt="pineapple"> </div>--}}
{{--                    <div class="details">--}}
{{--                        <p class="para heading-color">Oganic</p>--}}
{{--                        <h3 class="title">Groceries & Essentials</h3>--}}
{{--                        <a href="page-shop-list-v1.html" class="shop_btn">Shop Now</a> </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-lg-6 col-xl-3">--}}
{{--                <div class="banner_one home1_style athome7 color5 mb30">--}}
{{--                    <div class="thumb"> <img class="float-end" src="https://creativelayers.net/themes/zeomart-html/images/banner/sweet-shake.png" alt="smartdevice.png">--}}
{{--                        <div class="off_banner"><img src="https://creativelayers.net/themes/zeomart-html/images/banner/off-banner2.png" alt="Off Banner"></div>--}}
{{--                    </div>--}}
{{--                    <div class="details">--}}
{{--                        <p class="para heading-color">Only This Week</p>--}}
{{--                        <h3 class="title">Grains</h3>--}}
{{--                        <a href="" class="shop_btn">Shop Now</a> </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</section>
