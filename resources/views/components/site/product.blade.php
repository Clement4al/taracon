<div class="col-md-6 col-lg-6 col-xl-4">
    <div class="rounded position-relative fruite-item">
        <div class="fruite-img">
            <a href="{{ route('shop.show', $product) }}">
                <img src="{{ asset('img/fruite-item-5.jpg') }}"
                     class="img-fluid w-100 rounded-top" alt="">
            </a>
        </div>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute"
             style="top: 10px; left: 10px;">tags
        </div>
        <a href="{{ route('shop.show', $product) }}">
            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                <a href="{{ route('shop.show', $product) }}">
                    <h4>{{ $product->name }}</h4>
                </a>
                <a href="{{ route('shop.show', $product) }}">This are actually fresh products</a>
                <div
                    class="d-flex justify-content-between align-items-start mt-4 flex-wrap">
                    <!-- Left Section: Price + Discount -->
                    <div class="d-flex flex-column">
                        <p class="text-dark fs-5 fw-bold mb-1">
                            ₦{{ number_format($product->price) }}</p>
                        @if($product->discount > 0)
                            <small>
                                <del class="text-muted">
                                    ₦{{ number_format($product->discount) }}</del>
                            </small>
                        @endif
                    </div>
                    <!-- Right Section: Add to Cart Button -->
                    <a href="#" onclick="addTag('grape')"
                       class="btn border border-secondary rounded-pill px-3 text-primary ms-auto mt-2 mt-lg-0">
                        <i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart
                    </a>
                </div>
            </div>
        </a>
    </div>
</div>

<script>
    function addTag(productId){
        alert(productId);
    }
</script>


