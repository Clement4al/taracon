<div class="position-relative">
    <div class="input-group">
        <input class="form-control p-3" name="q" placeholder="Search products…" aria-label="search"
               value="{{ request('q') }}" wire:model.live="search">
        <button class="btn btn-outline-secondary p-3" type="button" id="search-icon-1">
            <i class="fa fa-search"></i>
        </button>
    </div>

    @if(!empty($search) && $products->count() > 0)
        <div class="search-suggestions position-absolute w-100 bg-white border border-top-0 shadow-sm" style="z-index: 1000; max-height: 300px; overflow-y: auto;">
            <ul class="list-unstyled m-0">
                @foreach($products as $product)
                    <li class="border-bottom">
                        <a href="{{ route('shop.show', $product) }}" class="text-decoration-none d-flex align-items-center p-3 hover-bg-light">
                            <div class="thumb me-3">
                                {{-- <img src="{{ $product->image?->thumbnail }}" alt="{{ $product->name }}" class="rounded" width="40" height="40"> --}}
                            </div>
                            <div class="info-product flex-grow-1">
                                <div class="item_title text-dark fw-medium">{{ $product->name }}</div>
                                <div class="price">
                                    <span class="sale text- fw-bold">
                                        ₦{{ number_format($product->price) }}
                                    </span>
                                </div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>


