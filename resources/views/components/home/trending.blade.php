@props(['latestProducts'])
<!-- Trending Products -->
<section class="trending-product pt0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-title">
                    <h2 class="title">Featured Product</h2>
                </div>
                <div class="best_item_slider_shop_lising_page navi_pagi_top_right shop_item_5grid_slider owl-theme owl-carousel">
                    @foreach(app('featured_products') as $product)
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
</section>
