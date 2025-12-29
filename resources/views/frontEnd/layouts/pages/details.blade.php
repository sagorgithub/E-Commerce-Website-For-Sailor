@extends('frontEnd.layouts.master')
@section('title', $details->name)
@push('seo')
    <meta name="app-url" content="{{ route('product', $details->slug) }}" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="{{ $details->meta_description }}" />
    <meta name="keywords" content="{{ $details->slug }}" />

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="product" />
    <meta name="twitter:site" content="{{ $details->name }}" />
    <meta name="twitter:title" content="{{ $details->name }}" />
    <meta name="twitter:description" content="{{ $details->meta_description }}" />
    <meta name="twitter:creator" content="gomobd.com" />
    <meta property="og:url" content="{{ route('product', $details->slug) }}" />
    <meta name="twitter:image" content="{{ asset($details->image->image) }}" />

    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $details->name }}" />
    <meta property="og:type" content="product" />
    <meta property="og:url" content="{{ route('product', $details->slug) }}" />
    <meta property="og:image" content="{{ asset($details->image->image) }}" />
    <meta property="og:description" content="{{ $details->meta_description }}" />
    <meta property="og:site_name" content="{{ $details->name }}" />
@endpush


@section('content')



    <main>
        <section class="breadcrum-main">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/">Home</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </section>
        <section class="details-main d-non">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="custom-details-slider">
                            <div class="product-details">

                                <!-- Thumbnail -->
                                <div class="slider-nav">
                                    @foreach ($details->images as $image)
                                        <div class="slick-list" style="outline: none; width: 80px;">
                                            <img src="{{ asset($image->image) }}"
                                                class="img-fluid variant-img"
                                                alt="product" style="width: 100%; display: inline-block;" >
                                        </div>
                                    @endforeach
                                </div>

                                <!-- Main Image -->
                                <div class="slider-for">
                                    @foreach ($details->images as $image)
                                        <div class="slick-list">
                                            <figure class="iiz zoom-container">
                                                <img class="iiz__img img-fluid zoom-img" src="{{ asset($image->image) }}" alt="product" id="mainImage">

                                                <span class="iiz__btn iiz__hint"></span>
                                            </figure>
                                        </div>
                                    @endforeach
                                </div>

                                <script src="https://unpkg.com/js-image-zoom@0.7.0/js-image-zoom.js"></script>

                                <script>
                                    var options = {
                                        width: 500,
                                        zoomWidth: 500,
                                        scale: 1.8,
                                        offset: { vertical: 0, horizontal: 10 }
                                    };

                                    new ImageZoom(document.getElementById("img-container"), options);
                                </script>


                            </div>


                            <script>
                                $(document).ready(function () {

                                    if ($('.slider-for').length && $('.slider-nav').length) {

                                        $('.slider-for').slick({
                                            slidesToShow: 1,
                                            slidesToScroll: 1,
                                            arrows: false,
                                            fade: true,
                                            asNavFor: '.slider-nav'
                                        });

                                        $('.slider-nav').slick({
                                            slidesToShow: 4,
                                            slidesToScroll: 1,
                                            asNavFor: '.slider-for',
                                            vertical: true,
                                            focusOnSelect: true
                                        });

                                    }

                                });
                            </script>


                            <div class="product-info-main fluid__instructions" style="position: relative;">
                                <div class="product-title-flex">
                                    <div class="title-box">
                                        <h4> {{ $details->name }} </h4>
                                        <div class="sku-flex">
                                            <div class="sku">SKU : {{ $details->product_code }} </div>
                                            <div class="rating">
                                                <ul class="nav">
                                                    <li class="nav-item"><a class="nav-link disabled">(
                                                        @php
                                                            $averageRating = $reviews->avg('ratting');
                                                            $filledStars = floor($averageRating);
                                                            $emptyStars = 5 - $filledStars;
                                                        @endphp
                                                        
                                                        @if ($averageRating >= 0 && $averageRating <= 5)
                                                            @for ($i = 1; $i <= $filledStars; $i++)
                                                                <i class="fas fa-star"></i>
                                                            @endfor
                                                        
                                                            @if ($averageRating == $filledStars)
                                                                {{-- If averageRating is an integer, don't display half star --}}
                                                            @else
                                                                <i class="far fa-star-half-alt"></i>
                                                            @endif
                                                        
                                                            @for ($i = 1; $i <= $emptyStars; $i++)
                                                                <i class="far fa-star"></i>
                                                            @endfor
                                                        
                                                            <span>{{ number_format($averageRating, 2) }}/5</span>
                                                        @else
                                                            <span>Invalid rating range</span>
                                                        @endif
                                                        )</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="icon-box"><a href="javascript:void(0)"><i
                                                class="fa-solid fa-share-nodes"></i></a>
                                        <div class="pop-share-main">
                                            <ul class="nav">
                                                <li class="nav-item fb"><a class="nav-link" href="#"><i
                                                            class="fa-brands fa-facebook-f"></i></a></li>
                                                <li class="nav-item twiter"><a class="nav-link" href="#"><i
                                                            class="fa-brands fa-twitter"></i></a></li>
                                                <li class="nav-item printerest"><a class="nav-link" href="#"><i
                                                            class="fa-brands fa-pinterest-p"></i></a></li>
                                                <li class="nav-item insta me-0"><a class="nav-link" href="#"><i
                                                            class="fa-brands fa-instagram"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="price">
                                    
                                    ৳ {{ $details->new_price }}<del class="text-danger mx-2">{{ ($details->old_price) }}</del>
                                    
                                    @if($details->old_price)
                                        @php $discount=(((($details->old_price)-($details->new_price))*100) / ($details->old_price)) @endphp 
                                        <span>({{ number_format($discount, 0) }}%)</span>
                                    @endif

                                </div>
                                <div class="sailor-membership d-none">
                                    <div class="membership-bg"></div>
                                    <div class="membership-content-flex">
                                        <div class="club-price">৳1592</div>
                                        <div class="separator"></div>
                                        <div class="membership-tips">
                                            <a href="javascript:void(0)">join for exclusive 20% off</a>
                                        </div>
                                    </div>
                                </div>

                                <form id="addToCartForm" action="{{ route('customer.cart') }}" method="POST">
                                     @csrf
                                    <!-- শুধু এটুকু রাখো -->
                                    <input type="hidden" name="id" value="{{ $details->id }}">
                                    <input type="hidden" name="product_color" value="{{ $productcolors->first()->color->colorName }}">



                                    
                                    @if ($details->pro_unit)
                                    <div class="pro_unig">
                                        <label>Unit: {{ $details->pro_unit }}</label>
                                    </div>
                                    @endif
                                    <div class="pro_brand">
                                        <p>Brand :
                                            {{ $details->brand ? $details->brand->name : 'N/A' }}
                                        </p>
                                    </div>







                                    





                                    <div class="mt-md-2 mt-2">
                                        <div class="del_charge_area">
                                            <div class="alert alert-info text-xs">
                                                <div class="flext_area">
                                                    <i class="fa-solid fa-cubes"></i>
                                                    <div>

                                                        @foreach ($shippingcharge as $key => $value)
                                                        <span>{{ $value->name }} <br /></span>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="size-lists m-0">
                                            
                                        @foreach ($productcolors as $procolor)
                                        <h5>Color : {{ $procolor->color ? $procolor->color->colorName : '' }} </h5>
                                        @endforeach
                                    </div>
                                    <div class="size-lists m-0">
                                        <h5>size</h5>
                                        <ul class="nav">
                                            @foreach ($productsizes as $prosize)
                                            <li class="nav-item ">
                                                <a class=" nav-link" href="javascript:void(0)">
                                                    <div class="selector-item">
                                                        <input type="radio"
                                                            name="product_size"
                                                            value="{{ $prosize->size->sizeName }}"
                                                            required>
                                                        <label>{{ $prosize->size->sizeName }}</label>
                                                    </div>
                                                </a>
                                                <div class="custom-tooltips">
                                                    <h5>product measurement</h5>
                                                    <ul>
                                                        <li>shoulder <span>14.2 inch</span></li>
                                                        <li>lenght: <span>41.3 inch</span></li>
                                                        <li>Sleeve</li>
                                                        <li>Bust: <span>38.2 inch</span></li>
                                                        <li>cuff : <span>7.1-17.3 inch</span></li>
                                                        <li>belt length: <span>70.9 inch</span></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="size-chart-btn d-none">
                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                            data-bs-target="#SizechartModal">
                                            <i class="fa-solid fa-ruler-horizontal"></i>
                                            size guid</a>
                                    </div>
                                    <script>
                                        document.addEventListener('DOMContentLoaded', function () {
                                            const navLinks = document.querySelectorAll('.nav-link');

                                            navLinks.forEach(link => {
                                                link.addEventListener('click', function () {

                                                    // সব active remove
                                                    navLinks.forEach(l => l.classList.remove('active'));

                                                    // current active
                                                    this.classList.add('active');

                                                    // radio auto checked
                                                    const radio = this.querySelector('input[type="radio"]');
                                                    if (radio) {
                                                        radio.checked = true;
                                                    }
                                                });
                                            });
                                        });
                                    </script>

                                    <style>
                                        ul.nav li.nav-item a.nav-link.active {
                                            background: #4d4d4d;
                                            color: #fff;
                                        }
                                        .selector-item input[type="radio"] {
                                            display: none;
                                        }
                                    </style>

                                    {{-- <div class="size-lists no-border pt-0 mt-0 d-none">
                                        <h5>shipping type</h5>
                                        <ul class="nav">
                                            <li class="nav-item"><a class="nav-link active mb-0" href="#">international
                                                    shipping</a></li>
                                            <li class="nav-item"><a class="nav-link mb-0" href="#">quick ship</a></li>
                                        </ul>
                                    </div> --}}
                                    <div class="add-bag-flex">
                                        <div class="add-bag">
                                                <input type="hidden" name="id"
                                                    value="{{ $details->id }}" />
                                                     
                                                <input type="hidden" name="qty" value="1" />
                                                <input type="button" class="btn add-to-bag-btn"
                                                    onclick="add_to_cart_details(this,event)"
                                                    name="add_cart" value="add to bag" />
                                            {{-- <button class="btn add-to-bag-btn" onclick="document.getElementById('buyNowForm').submit();">add to bag</button> --}}
                                        </div>
                                        <div class="bg-lightadd-wishlist ">
                                            <button class="add-wishlist">
                                                <i class="fa-regular fa-heart"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <div class="shipping-policy">
                                    <div class="shipping-title-flex"></div>
                                    <div class="shipping-process-flex">
                                        <div class="box">
                                            <p></p>
                                        </div>
                                        <div class="box">
                                            <p class="mb-0"></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="shipping-policy d-none">
                                    <div class="shipping-title-flex">
                                        <div class="icon">
                                            <img src="/assets/images/icon/free-delivery.png" alt="">
                                        </div>
                                        <h5>free return &amp; exchange</h5>
                                    </div><a href="javascript:void(0)" class="learn-more">Learn More</a>
                                </div>
                                <div class="detaiils-description">
                                    <div class="accordion" id="myAccordion">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne">details</button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse"
                                                data-bs-parent="#myAccordion">
                                                <div class="accordion-body">
                                                    {{ $details->description }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo"><button type="button"
                                                    class="accordion-button collapsed" data-bs-toggle="modal"
                                                    data-bs-target="#modalInfo">size guide</button></h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse "
                                                data-bs-parent="#myAccordion">
                                                <div class="card-body"><img
                                                        src="https://backend.sailor.clothing/assets/img/thimnail.jpg" alt=""
                                                        class="img-fluid"></div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree"><button type="button"
                                                    class="accordion-button collapsed">availability in store</button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse "
                                                data-bs-parent="#myAccordion"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="review-main">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="common-title">
                            <h2>customer reviews (0)</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="review-overview">
                            <div class="left-box">
                                <h5>average rating</h5>
                                <div class="rating">
                                    <ul class="nav">
                                        <li class="nav-item"><a class="nav-link disabled">0</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="right-box">
                                <h5>Did the item fit well?</h5>
                                <div class="progress-flex">
                                    <div class="title">small</div>
                                    <div class="progress-bar-wrap">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="value">0%</div>
                                </div>
                                <div class="progress-flex">
                                    <div class="title">true to size</div>
                                    <div class="progress-bar-wrap">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                                style="width: 100%;"></div>
                                        </div>
                                    </div>
                                    <div class="value">100%</div>
                                </div>
                                <div class="progress-flex">
                                    <div class="title">large</div>
                                    <div class="progress-bar-wrap">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <div class="value">0%</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="review-tabs-main">
                            <div class="left-box">
                                <ul class="nav nav-tabs" id="reviewTab" role="tablist">
                                    <li class="nav-item" role="presentation"><button class="nav-link active"
                                            id="all-review-tab" data-bs-toggle="tab" data-bs-target="#all-review-tab-pane"
                                            type="button" role="tab" aria-controls="all-review-tab-pane"
                                            aria-selected="true">all reviews
                                            (0)</button></li>
                                </ul>
                            </div>
                            <div class="right-box">
                                <div class="single-sort">
                                    <div class="row"><label for="rating" class="col-sm-4 col-form-label">rating</label>
                                        <div class="col-sm-8"><select class="form-select form-control"
                                                aria-label="Default select example">
                                                <option value="">all</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select></div>
                                    </div>
                                </div>
                                <div class="single-sort">
                                    <div class="row"><label for="" class="col-sm-4 col-form-label">sort by</label>
                                        <div class="col-sm-8"><select class="form-select form-control"
                                                aria-label="Default select example">
                                                <option value="">recommend</option>
                                                <option value="asc_rating"> ASC </option>
                                                <option value="desc_rating">DESC</option>
                                                <option value="most_helpful">MOST HELP FUL</option>
                                                <option value="recent">Recent</option>
                                                <option value="older">Older</option>
                                            </select></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="tab-content" id="reviewTabContent">
                            <div class="tab-pane fade show active" id="all-review-tab-pane" role="tabpanel"
                                aria-labelledby="all-review-tab" tabindex="0"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="suggested-product-main">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="common-title">
                            <h2>Suggested Category</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="suggested-product-wrapper">
                            <h3 class="product-not-found">No Product Found</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="recentview-product-main">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="common-title">
                            <h2>customer recently viewed</h2>
                        </div>
                    </div>
                </div>
                <div class="customer-slider overflow-hidden">
                    <div class="swiper-wrapper">

                        @foreach ($products as $key => $product)
                            <div class="swiper-slide">
                                <div class="swiper-slide-active">
                                    <div class="single-product">
                                        <div class="card">
                                            <div class="product-image">
                                                <a href="{{ route('product', $product->slug) }}">
                                                    <img src="{{ asset($product->image->image ?? 'https://placehold.co/400x400/f8bbd0/ffffff?text=Prduct') }}" alt=""
                                                        class="img-fluid primary-image">
                                                </a><a class="btn add-towish-btn ">
                                                    <i class="fa-regular fa-heart"></i>
                                                </a>
                                                <div class="product-view-sets">
                                                    <ul class="nav">
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0)" class="nav-link">
                                                                <i class="icofont-cart-alt"></i>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0)" class="nav-link">
                                                                <i class="icofont-eye-alt" data-bs-toggle="modal"
                                                                    data-bs-target="#productQuickView"></i>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0)" class="nav-link">
                                                                <i class="icofont-law-alt-1"></i>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-description">
                                                <h4 class="product-name">
                                                    <a href="{{ route('product', $product->slug) }}">{{ $product->name }}</a>
                                                </h4>
                                                
                                                @php
                                                    $oldPrice = $product->old_price;
                                                    $newPrice = $product->new_price;
                                                    
                                                    if ($oldPrice > 0) {
                                                        $discount = (($oldPrice - $newPrice) / $oldPrice) * 100;
                                                        $discount = round($discount); // round kore integer %
                                                    } else {
                                                        $discount = 0;
                                                    }
                                                @endphp
                                                <p class="price">৳ <span>{{ $product->new_price }}</span> <span><del>{{ $product->new_price }}</del></span> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>
        <div class="modal fade" id="SizechartModal" tabindex="-1" aria-labelledby="SizechartModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="SizechartModalLabel">Size Chart</h1><button type="button"
                            class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body"><img src="https://backend.sailor.clothing/assets/img/thimnail.jpg" alt=""
                            class="img-fluid"></div>
                </div>
            </div>
        </div>
        <div class="modal fade details-modal" id="modalInfo" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content "><button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="common-fieldset-main mb-0">
                            <fieldset class="common-fieldset">
                                <legend class="rounded"> size chart</legend><img
                                    src="https://backend.sailor.clothing/assets/img/thimnail.jpg" alt="" class="img-fluid">
                            </fieldset>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="modalAvailability" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content"><button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                    <div class="modal-body">
                        <div class="common-fieldset-main">
                            <div class="d-flex justify-content-center"><img
                                    src="https://objectstorage.ap-singapore-1.oraclecloud.com/n/aximxvolvk6d/b/sailorbucket/o/uploads/all/pzxAondERxaF70NAFGvdYV0Ce0eSLNkQfwsaDSBo.jpg"
                                    class=" h-25 w-25 img-fluid mb-3 mx-auto"></div>
                            <fieldset class="common-fieldset">
                                <legend class="rounded"> Stock Availability</legend>
                                <div class="table-responsive"></div>
                            </fieldset>
                        </div>
                        <div class="w-100 text-center"><button class="continue-btn ">Store Location</button></div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
    function add_to_cart_details(button, event) {
        event.preventDefault();
        event.stopPropagation();

        // Size validation
        if (!$('input[name="product_size"]:checked').val()) {
            toastr.error('অনুগ্রহ করে সাইজ নির্বাচন করুন');
            return false;
        }

        let $btn = $(button);
        let $form = $btn.closest('form');

        // Button loading
        $btn.val('Please wait...');
        $btn.prop('disabled', true);

        $.ajax({
            url: $form.attr('action'),
            type: 'POST',
            data: $form.serialize(),
            dataType: 'json'
        })
        .done(function (res) {
            if (res.success) {
                toastr.success(res.message);

                // ✅ Cart count update safely
                if ($('#cart_count').length) {
                    $('#cart_count').text(res.cart_count);
                }
            } else {
                toastr.error(res.message || 'Add to cart failed');
            }
        })
        .fail(function () {
            toastr.error('সার্ভার সমস্যা হয়েছে');
        })
        .always(function () {
            // 🔥 ALWAYS reset button
            $btn.val('add to bag');
            $btn.prop('disabled', false);
        });

        
                    location.reload();
    }
    </script>







    <script type="text/javascript">
        window.dataLayer = window.dataLayer || [];
        dataLayer.push({
            ecommerce: null
        });
        dataLayer.push({
            event: "view_item",
            ecommerce: {
                items: [{
                    item_name: "{{ $details->name }}",
                    item_id: "{{ $details->id }}",
                    price: "{{ $details->new_price }}",
                    item_brand: "{{ $details->brand?$details->brand->name:'' }}",
                    item_category: "{{ $details->category->name }}",
                    item_variant: "{{ $details->pro_unit }}",
                    currency: "BDT",
                    quantity: {{ $details->stock ?? 0 }}
                }],
                impression: [
                    @foreach ($products as $value)
                        {
                            item_name: "{{ $value->name }}",
                            item_id: "{{ $value->id }}",
                            price: "{{ $value->new_price }}",
                            item_brand: "{{ $details->brand?$details->brand->name:'' }}",
                            item_category: "{{ $value->category ? $value->category->name : '' }}",
                            item_variant: "{{ $value->pro_unit }}",
                            currency: "BDT",
                            quantity: {{ $value->stock ?? 0 }}
                        },
                    @endforeach
                ]
            }
        });
    </script>
@endsection