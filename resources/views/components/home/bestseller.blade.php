@props(['bestSellers', 'latestProducts', 'televisionSubCategory'])
<!-- Best Seller Product  -->
<section class="featured-product pt30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="main-title text-center text-lg-start">
                    <h2>Best Sellers</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="popular_listing_sliders ui_kit_tab style2">
                    <div class="nav nav-tabs mb30 justify-content-center justify-content-lg-end" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Top 10</button>
                        <button class="nav-link me-0" id=nav-bread-tab data-bs-toggle=tab data-bs-target=#nav-all role=tab aria-controls=nav-bread aria-selected=false>
                            All</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="popular_listing_sliders row ui_kit_tab style2">
                    <!-- Tab panes -->
                    <div class="tab-content col-lg-12" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="best_item_slider_shop_lising_page shop_item_5grid_slider dots_none owl-theme owl-carousel">
                                @foreach($bestSellers->take(5) as $product)
                                    <div class="item ovh">
                                        <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn" data-wow-duration=1.3s>
                                            <x-site.product :$product/>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-pane fade" id=nav-all role=tabpanel aria-labelledby=nav-bread-tab>
                            <div class="best_item_slider_shop_lising_page shop_item_5grid_slider slider_dib_sm nav_none_400 dots_none owl-theme owl-carousel">
                                @foreach($bestSellers->shuffle() as $product)
                                    <div class="item ovh">
                                        <div class="shop_item bdrtrb1 px-2 px-sm-3 wow fadeIn" data-wow-duration=1.3s>
                                            <x-site.product :$product/>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                    </div>
                        </div>
                    </div>
                </div>
            </div>
{{--        </div>--}}
{{--    </div>--}}
</section>
