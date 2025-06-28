@props(['product'])

<div class="col-md-6 col-lg-4 col-xl-3">
    <div class="rounded position-relative fruite-item">
        <a href="{{ route('shop.show', $product) }}">
            <div class="fruite-img">
                <img src="img/fruite-item-5.jpg" class="img-fluid w-100 rounded-top" alt="">
            </div>
        </a>
        <div class="text-white bg-secondary px-3 py-1 rounded position-absolute" style="top: 10px; left: 10px;">tags</div>
        <a href="{{ route('shop.show', $product) }}">
            <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                <h4> {{ $product->name }} </h4>
    {{--            <h6> {{ $product->description }}</h6>--}}
    {{--            <h6>Lorem ipsum dolor sit amet consectetur </h6>--}}
                <div class="d-flex justify-content-between flex-lg-wrap">
                    <p class="text-dark fs-5 fw-bold mb-0">₦{{ $product->price }}</p>
                    <a href="#" class="btn border border-secondary rounded-pill px-3 text-primary"><i class="fa fa-shopping-bag me-2 text-primary"></i> Add to cart</a>
                </div>
            </div>
        </a>
    </div>
</div>
