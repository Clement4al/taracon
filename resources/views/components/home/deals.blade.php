@props(['discountedProducts'])
<!-- Delivery Divider -->
<section class="deliver-divider pt70 pb70">
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="main-title d-block d-lg-flex text-center text-lg-start">
                    <h2 class="">Hot Deals</h2>
                    <div class="deal_countdown">
                        <ul class="deal_counter home7_style bgc-thm" id="timer">
                            <li class="list-inline-item me-2 days"></li>
                            <li class="list-inline-item me-2"><span class="title"> :</span></li>
                            <li class="list-inline-item me-2 hours"></li>
                            <li class="list-inline-item me-2"><span class="title"> :</span></li>
                            <li class="list-inline-item me-2 minutes"></li>
                            <li class="list-inline-item me-2"><span class="title"> :</span></li>
                            <li class="list-inline-item me-2 seconds"></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="main-title text-center text-lg-end mb-5"> <a class="title_more_btn mt10" href="page-shop-list-v2.html">View All</a> </div>
            </div>
        </div>

        <div class="row">
                <div class="col-lg-12">
                    <div class="best_item_slider_shop_lising_page navi_pagi_bottom_center shop_item_5grid_slider navi_hvr_bdr_none owl-carousel owl-theme">
                        @foreach($discountedProducts as $product)
                        <div class="item">
                            <div class="shop_item home7_style bdrtrb1 px-2 px-sm-3">
                                 <x-site.product :$product/>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
        </div>
    </div>
</section>
