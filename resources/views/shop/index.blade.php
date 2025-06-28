<x-layout>
    <!-- Single Page Header start -->
    <div class="container-fluid page-header py-5">
        <h1 class="text-center text-white display-6">Shop</h1>
        <ol class="breadcrumb justify-content-center mb-0">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active text-white">Shop</li>
        </ol>
    </div>
    <!-- Single Page Header End -->
    <!-- Fruits Shop Start-->
    <div class="container-fluid fruite py-5">
        <div class="container py-5">
            <h1 class="mb-4"> Browse Categories  </h1>
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row g-4">
                        <div class="col-xl-3">
                            <div class="input-group w-100 mx-auto d-flex">
                                <input type="search" class="form-control p-3" placeholder="search products..." aria-describedby="search-icon-1">
                                <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                        <div class="col-6"></div>
                        <div class="col-xl-3">
                            <div class="bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4">
                                <label for="fruits">Default Sorting:</label>
                                <select id="fruits" name="fruitlist" class="border-0 form-select-sm bg-light me-3" form="fruitform">
                                    <option value="volvo">Nothing</option>
                                    <option value="saab">Popularity</option>
                                    <option value="opel">Organic</option>
                                    <option value="audi">Fantastic</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-3">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <h4>All Categories</h4>
                                        <div class="accordion" id="categoryAccordion">
                                            @foreach($categories as $category)
                                                @php
                                                    // Check if any subcategory is active
                                                    $isActiveCategory = $category->subCategories->contains(function ($subCategory) use ($currentSubCategorySlug) {
                                                        return $subCategory->slug === $currentSubCategorySlug;
                                                    });
                                                @endphp

                                                <div class="accordion-item mb-2">
                                                    <h2 class="accordion-header" id="heading-{{ $category->id }}">
                                                        <button
                                                            class="accordion-button {{ !$isActiveCategory ? 'collapsed' : '' }}"
                                                            type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapse-{{ $category->id }}"
                                                            aria-expanded="{{ $isActiveCategory ? 'true' : 'false' }}"
                                                            aria-controls="collapse-{{ $category->id }}"
                                                        >
                                                            {{ $category->name }}
                                                        </button>
                                                    </h2>

                                                    <div
                                                        id="collapse-{{ $category->id }}"
                                                        class="accordion-collapse collapse {{ $isActiveCategory ? 'show' : '' }}"
                                                        aria-labelledby="heading-{{ $category->id }}"
                                                        data-bs-parent="#categoryAccordion"
                                                    >
                                                        <div class="accordion-body">
                                                            <ul class="list-unstyled ps-2 mb-0">
                                                                @foreach($category->subCategories as $subCategory)
                                                                    <li>
                                                                        <a href="{{ route('shop.index', ['sub-category' => $subCategory->slug]) }}"
                                                                           class="{{ $subCategory->slug === $currentSubCategorySlug ? 'fw-bold text-primary' : '' }}">
                                                                            {{ $subCategory->name }}
                                                                        </a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-9">
                            <div class="row g-4 justify-content-center">
                                @foreach($products as $product)
                                    <x-site.product :$product/>
                                @endforeach
                                {{ $products->withQueryString()->onEachSide(1)->links('shop.partials.pagination', ['products' => $products]) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fruits Shop End-->
</x-layout>
