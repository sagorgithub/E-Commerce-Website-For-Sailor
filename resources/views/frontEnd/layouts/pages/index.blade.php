@extends('frontEnd.layouts.master')

@section('title', 'Sailor | Sailing Life')

@section('content')



    <main>
        @if($videos)
        <section class="main-section">
            <div class="main-swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        {{-- <video class="w-full h-100" src="https://prod.saralifestyle.com/Images/Content/343cd17391ec4e6d89c2a08bd423a622.mp4" autoplay="" loop="" playsinline="" preload="metadata" loading="lazy" aria-label="Exclusive Collection Video"></video> --}}

                        {{-- <iframe width="560" height="315" src="https://www.youtube.com/embed/BJaToeEUueQ?si=SSZFsnZgBb6s9tgG&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe> --}}

                        {{-- {{ $videos = Video::whereJsonContains('pages', 'home')->get() }} --}}
                        {{-- @foreach($videos as $video) --}}
                        <a target="_self" href="">
                            {{-- <img alt="" class="img-fluid" src="{{ asset('/frontEnd/images/slider.jpg') }}"> --}}
                            <video
                                id="myVideo"
                                class="w-full h-screen object-cover"
                                autoplay
                                loop
                                muted
                                playsinline>
                                <source src="{{ asset('storage/'.$videos->video) }}" type="video/mp4">
                                {{-- <source src="https://prod.saralifestyle.com/Images/Content/30b406d0fa2d44b3bad763f3f2e22fd8.mp4" type="video/mp4"> --}}
                            </video>

                            {{-- <button onclick="openFullscreen()">Fullscreen</button> --}}

                            <script>
                            function openFullscreen() {
                            const video = document.getElementById("myVideo");
                            if (video.requestFullscreen) {
                                video.requestFullscreen();
                            } else if (video.webkitRequestFullscreen) {
                                video.webkitRequestFullscreen();
                            }
                            }
                            </script>

                        </a>
                        {{-- @endforeach --}}
                    </div>
                    {{-- <div class="swiper-slide">
                        <a target="_self" href="#">
                            <img alt="" class="img-fluid" src="{{ asset('/frontEnd/images/slider.jpg') }}">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a target="_self" href="#">
                            <img alt="" class="img-fluid" src="{{ asset('/frontEnd/images/slider.jpg') }}">
                        </a>
                    </div> --}}
                </div>
            </div>
        </section>
        @endif

        {{-- <section class="ad-banner mb-0">
            <div class="container-fluid px-0">
                <div class="row g-0">
                    <div class="col-md-6 col-12">
                        <a href="">
                            <img src="{{ asset('/frontEnd/images/add.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-md-6 col-12">
                        <a href="">
                            <img src="{{ asset('/frontEnd/images/add.jpg') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </section> --}}

        <section class="trending-categories-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="common-title">
                            <h2>Trending categories</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="trending-category">
                            <div class="trending-slider-wrapper">
                                <div class="single_category swiper">
                                    <div class="swiper-wrapper">
                                        <!-- categories -->
                                        @foreach ($menucategories as $category)
                                            <div class="swiper-slide" role="group" aria-label=""
                                                style="width: 369.2px; margin-right: 10px;">
                                                <div class="single-category-main">
                                                    <div class="single-category">
                                                        <a href="{{url('category/' . $category->slug)}}">
                                                            <img src="{{ asset($category->image) }}" alt="">
                                                        </a>
                                                        <div class="category-description">
                                                            <h3 class="parent-category">
                                                                <a href="{{url('category/' . $category->slug)}}"
                                                                    class="text-truncate">{{ $category->name }}<svg width="24"
                                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M5 12H19" stroke="black" stroke-width="2"
                                                                            stroke-linecap="round" stroke-linejoin="round">
                                                                        </path>
                                                                        <path d="M12 5L19 12L12 19" stroke="black"
                                                                            stroke-width="2" stroke-linecap="round"
                                                                            stroke-linejoin="round">
                                                                        </path>
                                                                    </svg>
                                                                </a>
                                                            </h3>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>




                                    <div class="swiper-button-prev">
                                        <svg class="swiper-navigation-icon" width="11" height="20" viewBox="0 0 11 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.38296 20.0762C0.111788 19.805 0.111788 19.3654 0.38296 19.0942L9.19758 10.2796L0.38296 1.46497C0.111788 1.19379 0.111788 0.754138 0.38296 0.482966C0.654131 0.211794 1.09379 0.211794 1.36496 0.482966L10.4341 9.55214C10.8359 9.9539 10.8359 10.6053 10.4341 11.007L1.36496 20.0762C1.09379 20.3474 0.654131 20.3474 0.38296 20.0762Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <div class="swiper-button-next">
                                        <svg class="swiper-navigation-icon" width="11" height="20" viewBox="0 0 11 20"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M0.38296 20.0762C0.111788 19.805 0.111788 19.3654 0.38296 19.0942L9.19758 10.2796L0.38296 1.46497C0.111788 1.19379 0.111788 0.754138 0.38296 0.482966C0.654131 0.211794 1.09379 0.211794 1.36496 0.482966L10.4341 9.55214C10.8359 9.9539 10.8359 10.6053 10.4341 11.007L1.36496 20.0762C1.09379 20.3474 0.654131 20.3474 0.38296 20.0762Z"
                                                fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="new-arrval-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="common-title">
                            <h2>new arrivals</h2>
                            <a class="text-end nav-link see-all-lg" href="/category/undefined">See All</a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @foreach ($frontcategory as $key => $category)
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link {{ $key == 0 ? 'active' : '' }}" data-bs-toggle="tab"
                                        data-bs-target="#tab-{{ $category->id }}" type="button" role="tab">
                                        {{ $category->name }}
                                    </button>
                                </li>
                            @endforeach
                        </ul>

                        <div class="tab-content" id="myTabContent">

                            @foreach ($frontcategory as $key => $category)
                                <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="tab-{{ $category->id }}"
                                    role="tabpanel" tabindex="0">

                                    <a class="text-end nav-link see-all-lg d-none"
                                        href="{{ route('category', $category->slug) }}">
                                        See All
                                    </a>

                                    <div class="swiper product-swiper">
                                        <div class="swiper-wrapper">

                                            @forelse ($category->products as $product)
                                                <div class="swiper-slide" role="group" aria-label=""
                                                    style="width: 369.2px; margin-right: 10px;">
                                                    <div class="single-product">
                                                        <div class="card">
                                                            <div class="product-image">
                                                                <a href="{{ route('product', $product->slug) }}">
                                                                    <img src="{{ asset($product->image->image ?? 'https://placehold.co/400x400/f8bbd0/ffffff?text=Prduct') }}"
                                                                        alt="" class="img-fluid primary-image">
                                                                </a>
                                                                <a class="btn add-towish-btn ">
                                                                    <i class="fa-regular fa-heart"></i>
                                                                </a>
                                                                <div class="product-view-sets">
                                                                    <ul class="nav">
                                                                        <li class="nav-item">
                                                                            <a href="{{ route('product', $product->slug) }}" class="nav-link">
                                                                                <i class="icofont-cart-alt"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                            <a href="javascript:void(0)" class="nav-link quick-view-btn"
                                                                                data-id="{{ $product->id }}"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#productQuickView">
                                                                                    <i class="icofont-eye-alt"></i>
                                                                            </a>
                                                                        </li>
                                                                        {{-- <li class="nav-item">
                                                                            <a href="javascript:void(0)" class="nav-link">
                                                                                <i class="icofont-law-alt-1"></i>
                                                                            </a>
                                                                        </li> --}}
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-description">
                                                                <h4 class="product-name">
                                                                    <a
                                                                        href="{{ route('product', $product->slug) }}">{{ $product->name }}</a>
                                                                </h4>
                                                                <p class="price">৳ <span>{{ $product->new_price }}</span> </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <p class="text-center">No products found</p>
                                            @endforelse

                                        </div>

                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>

                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
                <div class="row common-see-all-row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                        <a class=" common-see-all-sm" href="/category/undefined">See All</a>
                    </div>
                </div>
            </div>
        </section>


        <section class="new-arrval-main fantastic-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="common-title mb-35">
                            <div class="fantastic d-flex align-items-center">
                                <img src="{{ asset('/frontEnd/images/fire.gif') }}" alt="" class="img-fluid">
                                <h2>Sale</h2>
                            </div>
                            <a class="text-end nav-link see-all-lg" href="/shop?circular_items=1">See All <i
                                    class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="flas-counter"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                @foreach ($hotdeal_top as $key => $product)
                                    <div class="swiper-slide" role="group" aria-label=""
                                        style="width: 369.2px; margin-right: 10px;">
                                        <div class="single-product">
                                            <div class="image-box">
                                                    <a href="{{ route('product', $product->slug) }}">

                                                            @php
                                                                    $oldPrice = $product->old_price;
                                                                    $newPrice = $product->new_price;

                                                                    if ($oldPrice > 0) {
                                                                            $discount = (($oldPrice - $newPrice) / $oldPrice) * 100;
                                                                            $discount = round($discount); // round kore integer %
                                                                    } else {
                                                                            $discount = 0;
                                                                    }
                                                                    $images = $product->images; // সব images
                                                                    // main image (প্রথম)
                                                                    $firstImage = $images->first()->image ?? 'https://placehold.co/400x400/f8bbd0/ffffff?text=Product';

                                                                    // secondary image (random, first বাদ দিয়ে)
                                                                    if($images->count() > 1) {
                                                                            $secondImage = $images->skip(1)->random()->image;
                                                                    } else {
                                                                            $secondImage = $firstImage; // না থাকলে main image দেখাবে
                                                                    }
                                                            @endphp

                                                            <img src="{{ asset($firstImage) }}">
                                                            <img src="{{ asset($secondImage ?? 'https://placehold.co/400x400/f8bbd0/ffffff?text=Prduct') }}" alt="" class="img-fluid secondary-image">


                                                            @if ($discount > 0)
                                                                    <div class="flashsale-tag">
                                                                            <span
                                                                                    class="value">{{ $discount }}</span>
                                                                            <span class="percent"> %</span>
                                                                            <span class="off">off</span>
                                                                    </div>
                                                            @endif

                                                    </a>
                                                    <a class="btn add-towish-btn ">
                                                            <i class="fa-regular fa-heart"></i>
                                                    </a>
                                                    <div class="product-view-sets">
                                                            <ul class="nav">
                                                                    <li class="nav-item">
                                                                            <a class="nav-link"
                                                                                    href="{{ route('product', $product->slug) }}">
                                                                                    <i class="icofont-cart-alt"></i>
                                                                            </a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                            <a href="javascript:void(0)"
                                                                                    class="nav-link">
                                                                                    <i class="icofont-eye-alt quick-view-btn"
                                                                                            data-id="{{ $product->id }}"></i>
                                                                            </a>
                                                                    </li>
                                                            </ul>
                                                    </div>
                                            </div>
                                            <div class="product-description">
                                                <h4 class="product-name">
                                                    <a href="{{ route('product', $product->slug) }}">{{ $product->name }}</a>
                                                </h4>
                                                <p class="price">৳ <span class="mr-2">{{ $product->new_price }}</span>
                                                    <del>{{ $product->old_price }}</del> </p>
                                            </div>
                                            <div class="sailor-club-discount d-none">
                                                <div class="sailor-club-discount-logo"></div>
                                                <div class="discount">
                                                    <div>50</div>
                                                </div>
                                            </div>
                                            <div class="product-level-tag-flex"></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>


                            <div class="swiper-button-prev">
                                <svg class="swiper-navigation-icon" width="11" height="20" viewBox="0 0 11 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.38296 20.0762C0.111788 19.805 0.111788 19.3654 0.38296 19.0942L9.19758 10.2796L0.38296 1.46497C0.111788 1.19379 0.111788 0.754138 0.38296 0.482966C0.654131 0.211794 1.09379 0.211794 1.36496 0.482966L10.4341 9.55214C10.8359 9.9539 10.8359 10.6053 10.4341 11.007L1.36496 20.0762C1.09379 20.3474 0.654131 20.3474 0.38296 20.0762Z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>
                            <div class="swiper-button-next">
                                <svg class="swiper-navigation-icon" width="11" height="20" viewBox="0 0 11 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.38296 20.0762C0.111788 19.805 0.111788 19.3654 0.38296 19.0942L9.19758 10.2796L0.38296 1.46497C0.111788 1.19379 0.111788 0.754138 0.38296 0.482966C0.654131 0.211794 1.09379 0.211794 1.36496 0.482966L10.4341 9.55214C10.8359 9.9539 10.8359 10.6053 10.4341 11.007L1.36496 20.0762C1.09379 20.3474 0.654131 20.3474 0.38296 20.0762Z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="row common-see-all-row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><a class="common-see-all-sm"
                            href="/shop?featured=1">See All</a></div>
                </div>
            </div>
        </section>



        <section class="doublead-banner-main my-35">
            <div class="container-fluid">
                <div class="row g-1 g-lg-4">
                    <div class="col-6">
                        <div class="double-add-flex">
                            <a href="#">
                                <img src="{{ asset('/frontEnd/images/b1.jpg') }}" alt="" class="img-fluid"></a>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="double-add-flex">
                            <a href="#">
                                <img src="{{ asset('/frontEnd/images/b2.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="new-arrval-main mb-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="common-title mb-35">
                            <h2>Customer Reviews</h2>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <div class="flas-counter"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="customer-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="single-product">
                                        <div class="card">
                                            <div class="product-image" style="min-height: unset;">
                                                <a href="/#">
                                                    <img src="{{ asset('/frontEnd/images/r.jpg') }}" alt=""
                                                        class="img-fluid primary-image"></a>
                                            </div>
                                            <div class="product-description d-none">
                                                <h4 class="product-name"><a href="/#">good</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-product">
                                        <div class="card">
                                            <div class="product-image" style="min-height: unset;">
                                                <a href="/#">
                                                    <img src="{{ asset('/frontEnd/images/r.jpg') }}" alt=""
                                                        class="img-fluid primary-image"></a>
                                            </div>
                                            <div class="product-description d-none">
                                                <h4 class="product-name"><a href="/#">good</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-product">
                                        <div class="card">
                                            <div class="product-image" style="min-height: unset;">
                                                <a href="/#">
                                                    <img src="{{ asset('/frontEnd/images/r.jpg') }}" alt=""
                                                        class="img-fluid primary-image"></a>
                                            </div>
                                            <div class="product-description d-none">
                                                <h4 class="product-name"><a href="/#">good</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-product">
                                        <div class="card">
                                            <div class="product-image" style="min-height: unset;">
                                                <a href="/#">
                                                    <img src="{{ asset('/frontEnd/images/r.jpg') }}" alt=""
                                                        class="img-fluid primary-image"></a>
                                            </div>
                                            <div class="product-description d-none">
                                                <h4 class="product-name"><a href="/#">good</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="single-product">
                                        <div class="card">
                                            <div class="product-image" style="min-height: unset;">
                                                <a href="/#">
                                                    <img src="{{ asset('/frontEnd/images/r.jpg') }}" alt=""
                                                        class="img-fluid primary-image">
                                                </a>
                                            </div>
                                            <div class="product-description d-none">
                                                <h4 class="product-name"><a href="/#">good</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
                <div class="row common-see-all-row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center"><a class="common-see-all-sm"
                            href="/shop?featured=1">See All</a></div>
                </div>
            </div>
        </section>


        <section class="megazin-main new-arrval-main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="blog-header">
                            <h3>magazine </h3>
                            <p>latest blog from sailor </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide" role="" style="width: 369.2px; margin-right: 10px;">
                                    <div class="megazin-box">
                                        <div class="megazine-bg"
                                            style="background: url('{{ asset('/frontEnd/images/blog.png') }}') no-repeat;">
                                            <div class="megazine-content">
                                                <h5>admin</h5>
                                                <h3>
                                                    <a href="javascript:void(0)">Excepteur non dolore</a>
                                                </h3>
                                                <p>Explicabo Neque ips232</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="" style="width: 369.2px; margin-right: 10px;">
                                    <div class="megazin-box">
                                        <div class="megazine-bg"
                                            style="background: url('{{ asset('/frontEnd/images/blog.png') }}') no-repeat;">
                                            <div class="megazine-content">
                                                <h5>admin</h5>
                                                <h3>
                                                    <a href="javascript:void(0)">Excepteur non dolore</a>
                                                </h3>
                                                <p>Explicabo Neque ips232</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="" style="width: 369.2px; margin-right: 10px;">
                                    <div class="megazin-box">
                                        <div class="megazine-bg"
                                            style="background: url('{{ asset('/frontEnd/images/blog.png') }}') no-repeat;">
                                            <div class="megazine-content">
                                                <h5>admin</h5>
                                                <h3>
                                                    <a href="javascript:void(0)">Excepteur non dolore</a>
                                                </h3>
                                                <p>Explicabo Neque ips232</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="" style="width: 369.2px; margin-right: 10px;">
                                    <div class="megazin-box">
                                        <div class="megazine-bg"
                                            style="background: url('{{ asset('/frontEnd/images/blog.png') }}') no-repeat;">
                                            <div class="megazine-content">
                                                <h5>admin</h5>
                                                <h3>
                                                    <a href="javascript:void(0)">Excepteur non dolore</a>
                                                </h3>
                                                <p>Explicabo Neque ips232</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="" style="width: 369.2px; margin-right: 10px;">
                                    <div class="megazin-box">
                                        <div class="megazine-bg"
                                            style="background: url('{{ asset('/frontEnd/images/blog.png') }}') no-repeat;">
                                            <div class="megazine-content">
                                                <h5>admin</h5>
                                                <h3>
                                                    <a href="javascript:void(0)">Excepteur non dolore</a>
                                                </h3>
                                                <p>Explicabo Neque ips232</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide" role="" style="width: 369.2px; margin-right: 10px;">
                                    <div class="megazin-box">
                                        <div class="megazine-bg"
                                            style="background: url('{{ asset('/frontEnd/images/blog.png') }}') no-repeat;">
                                            <div class="megazine-content">
                                                <h5>admin</h5>
                                                <h3>
                                                    <a href="javascript:void(0)">Excepteur non dolore</a>
                                                </h3>
                                                <p>Explicabo Neque ips232</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="swiper-button-prev">
                                <svg class="swiper-navigation-icon" width="11" height="20" viewBox="0 0 11 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.38296 20.0762C0.111788 19.805 0.111788 19.3654 0.38296 19.0942L9.19758 10.2796L0.38296 1.46497C0.111788 1.19379 0.111788 0.754138 0.38296 0.482966C0.654131 0.211794 1.09379 0.211794 1.36496 0.482966L10.4341 9.55214C10.8359 9.9539 10.8359 10.6053 10.4341 11.007L1.36496 20.0762C1.09379 20.3474 0.654131 20.3474 0.38296 20.0762Z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>
                            <div class="swiper-button-next">
                                <svg class="swiper-navigation-icon" width="11" height="20" viewBox="0 0 11 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M0.38296 20.0762C0.111788 19.805 0.111788 19.3654 0.38296 19.0942L9.19758 10.2796L0.38296 1.46497C0.111788 1.19379 0.111788 0.754138 0.38296 0.482966C0.654131 0.211794 1.09379 0.211794 1.36496 0.482966L10.4341 9.55214C10.8359 9.9539 10.8359 10.6053 10.4341 11.007L1.36496 20.0762C1.09379 20.3474 0.654131 20.3474 0.38296 20.0762Z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection