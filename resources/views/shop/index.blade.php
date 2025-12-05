<x-site>
    <x-site.breadcrumbs title="Shop"/>
    <!-- Begin Hidden SideBar -->
    <div class="allfilter-hidden-sbar-left">
        <div class="hsidebar-header">
            <div class="sidebar-close-icon"><span class="flaticon-close"></span></div>
            <h4 class="title"><a href="{{ route('shop.index') }}">All Categories</a></h4>
        </div>
        <div class="hsidebar-content">
            <div class="leftside_navbar_content_details">
                <div class="leftside_navbar_menu department_version shop_listing_page_style">
                    <ul class="navbar-nav">
                        @foreach(app('categories') as $category)
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#{{ $category->slug }}" data-bs-toggle="collapse"
                                   role="button" aria-expanded="false" aria-controls="{{ $category->slug }}">
                                    {{ $category->name }} <i class="fa fa-plus arrow"></i>
                                </a>
                                <div class="collapse" id="{{ $category->slug }}">
                                    <ul class="nav nav-sm flex-column">
                                        @foreach($category->subCategories as $subCategory)
                                            <li class="nav-item pl10">
                                                <a href="{{ route('shop.index', ['sub-category'=> $subCategory]) }}"
                                                   class="nav-link">{{ $subCategory->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--End Hidden SideBar -->
    <!-- Listing Grid View -->
    <section class="our-listing pt0">
        <div class="container">
            <!-- End Banner -->
            <div class="row mt10">
                <div class="col-lg-3 col-xl-2 d-none d-lg-block">
                    <div class="sidebar_accordion_widget">
                        <div class="faq_according text-start">
                            <div class="accordion" id="accordionExample">
                                <h4>All Categories</h4>
                                <hr>
                                @foreach(app('categories') as $category)
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>
                                                <button class="btn btn-link" type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#{{ $category->slug }}" aria-expanded="true"
                                                        aria-controls="{{ $category->slug }}" title="{{ $category->name }}"
                                                >
                                                    {{ str($category->name)->limit(16) }}
                                                </button>
                                            </h4>
                                        </div>
                                        <div id="{{ $category->slug }}" class="collapse" aria-labelledby="headingZero"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <div class="left_sidebar_department_widgets">
                                                    <ul class="list-unstyled ps-0">
                                                        @foreach($category->subCategories as $subCategory)
                                                            <li class="container">
                                                                <a href="{{ route('shop.index', ['sub-category'=> $subCategory]) }}"
                                                                   class="child_list" title="{{ $subCategory->name }}"
                                                                   data-bs-toggle="tooltip"
                                                                >
                                                                    {{ str($subCategory->name)->limit(16) }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-xl-10 pl50 pl15-md">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="filter_components text-center text-lg-end">
                                <ul class="mb-2 mb-md-0">
                                    <li class="list-inline-item d-lg-none me-2 mb-3"><a class="all-filter-btn flter_btn" href="#"><span class="flaticon-sort me-2"></span>All Categories</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-12 col-md-6 col-lg-4 col-xl-3 p0 pl15-520">
                                    <div class="shop_item bdr1 m--1">
                                        <x-site.product :$product/>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        <div class="row">
                            {{ $products->withQueryString()->onEachSide(1)->links('shop.partials.pagination') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-site>
