 <div class="thumb pb30">
            @if($product->discount > 0)
                <h3 class="badge" style="background-color: #f5c34b; color: black; padding: 10px; position: absolute; left: 20px;" >
                    -{{ $product->discount }}%
                </h3>
            @endif
            <a href="{{ route('shop.show', $product) }}">
                <img src="{{ $product->images->first()?->medium }}" alt="product image">
            </a>
            <div class="thumb_info home6_style gray_style">
                <ul class="mb0">
                    <li><a href=""><span class="flaticon-show"></span></a></li>
                </ul>
            </div>
            <div class="shop_item_cart_btn d-grid">
                <form action="{{ route('api.products.cart.store', $product) }}" method="post" x-data @submit.prevent="$submit()"
                      @then="$dispatch('cart-updated')">
                    <button class="btn btn-light-green btn-lg w-100">Add to Cart</button>
                </form>
{{--                <a href="page-shop-cart.html" class="btn btn-light-green">Add to Cart</a>--}}
            </div>
        </div>
        <div class="details">
            <div class="sub_title">{{ $product->subcategory?->name }}</div>
            <div class="title title-56">
                <a href="{{ route('shop.show', $product) }}">{{ $product->name }}</a>
            </div>
            <div class="si_footer">
                <div class="price">
                    ₦{{ number_format($product->price) }}
                    @if($product->discount > 0)
                        <small>
                            <del>₦{{ number_format($product->initial_price) }}</del>
                        </small>
                    @endif
                </div>
            </div>
        </div>
