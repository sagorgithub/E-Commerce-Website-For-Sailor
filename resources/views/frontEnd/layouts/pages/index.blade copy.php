@extends('frontEnd.layouts.master')

@section('title', 'Adora_Focus on quality')

@push('seo')
    <meta name="app-url" content="" />
    <meta name="robots" content="index, follow" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Open Graph data -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="{{ asset($generalsetting->white_logo) }}" />
    <meta property="og:description" content="" />
@endpush

@push('css')
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/owl.theme.default.min.css') }}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Anek+Bangla:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/zombie-style.css') }}" />
    <style>
        :root {
            --zombie-primary: #555555;
            --zombie-secondary: #000000;
            --zombie-light: #ffffff;
            --zombie-dark: #333333;
            --zombie-success: #27ae60;
        }
        
        body {
            font-family: 'Anek Bangla', sans-serif;
            background-color: #ffffff;
            color: var(--zombie-primary);
            margin: 0;
            padding: 0;
        }
        
        .container {
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
            margin-right: auto;
            margin-left: auto;
        }
        
        @media (min-width: 576px) {
            .container {
                max-width: 540px;
            }
        }
        
        @media (min-width: 768px) {
            .container {
                max-width: 720px;
            }
        }
        
        @media (min-width: 992px) {
            .container {
                max-width: 960px;
            }
        }
        
        @media (min-width: 1200px) {
            .container {
                max-width: 1140px;
            }
        }
        
        .row {
            display: flex;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        
        .col-6, .col-lg-3, .col-sm-12, .col-md-4, .col-lg-2 {
            position: relative;
            width: 100%;
            padding-right: 15px;
            padding-left: 15px;
        }
        
        .col-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }
        
        @media (min-width: 768px) {
            .col-md-4 {
                flex: 0 0 33.333333%;
                max-width: 33.333333%;
            }
        }
        
        @media (min-width: 992px) {
            .col-lg-3 {
                flex: 0 0 25%;
                max-width: 25%;
            }
            
            .col-lg-2 {
                flex: 0 0 16.666667%;
                max-width: 16.666667%;
            }
        }
        
        .mb-2, .mb-4 {
            margin-bottom: 0.5rem;
        }
        
        .mb-4 {
            margin-bottom: 1.5rem;
        }
        
        .mt-2 {
            margin-top: 0.5rem;
        }
        
        .mt-5 {
            margin-top: 3rem;
        }
        
        .text-center {
            text-align: center;
        }
        
        .zombie-header {
            background-color: #f5f5f5;
            color: var(--zombie-primary);
            padding: 2rem 0;
            margin-bottom: 2rem;
            text-align: center;
        }
        
        .zombie-header h1 {
            font-family: 'Lato', sans-serif;
            font-weight: 700;
            font-size: 1.25em;
            color: rgb(85, 85, 85);
            margin-bottom: 0.5em;
            margin-top: 0px;
        }
        
        .zombie-product-card {
            border: none;
            overflow: hidden;
            transition: opacity 0.3s, transform 0.3s, background-color 0.3s;
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            height: 100%;
            position: relative;
            margin-bottom: -8px;
        }

        .zombie-product-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }

        .zombie-product-img-container {
            height: 300px;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
            position: relative;
            cursor: pointer;
        }

        .zombie-product-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }

        .zombie-product-card:hover .zombie-product-img {
            transform: scale(1.05);
        }

        .zombie-product-img-placeholder {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100%;
            background-color: #f8f9fa;
            color: #999;
            font-family: 'Anek Bangla', sans-serif;
            font-size: 14px;
        }

        .zombie-product-title {
            font-family: 'Anek Bangla', sans-serif;
            font-size: 14px;
            font-weight: 400;
            color: var(--zombie-primary);
            margin-bottom: 0.5em;
            margin-top: 0.5em;
            text-align: center;
            box-sizing: border-box;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            text-overflow: ellipsis;
            height: 40px;
            cursor: pointer;
        }

        .zombie-product-price {
            color: var(--zombie-primary);
            font-weight: 400;
            font-size: 14px;
            margin: 0.8rem 0;
            text-align: center;
        }

        .zombie-original-price {
            text-decoration: line-through;
            color: #999;
            margin-right: 10px;
        }

        .zombie-discounted-price {
            color: var(--zombie-primary);
            font-weight: 600;
        }

        .zombie-btn-group {
            display: flex;
            margin-top: 1.2rem;
            gap: 5px;
            justify-content: center;
        }

        .zombie-btn-buy,
        .zombie-btn-cart {
            flex: 1;
            padding: 12px 8px;
            border: none;
            font-family: 'Anek Bangla', sans-serif;
            font-size: 14px;
            font-weight: 500;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .zombie-btn-buy {
            background-color: #f39c12;
            color: white;
        }

        .zombie-btn-buy:hover {
            background-color: #e67e22;
            color: white;
        }

        .zombie-btn-cart {
            background-color: var(--zombie-secondary);
            color: white;
        }

        .zombie-btn-cart:hover {
            background-color: #333;
            color: white;
        }

        .zombie-box-text {
            transition: opacity 0.3s, transform 0.3s, background-color 0.3s;
            font-size: 0.9em;
            padding-top: 0.7em;
            position: relative;
            width: 100%;
            text-align: center;
            box-sizing: border-box;
            padding: 7px;
            padding-bottom: 14px;
        }

        .zombie-cart-notification {
            position: fixed;
            bottom: 20px;
            right: 20px;
            background-color: var(--zombie-success);
            color: white;
            padding: 1rem 2rem;
            border-radius: 50px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            display: none;
            z-index: 1000;
            animation: zombie-fadeIn 0.5s ease;
        }

        @keyframes zombie-fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .zombie-cart-count {
            background-color: var(--zombie-secondary);
            color: white;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.8rem;
            position: absolute;
            top: -8px;
            right: -8px;
        }

        .zombie-cart-icon {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: white;
            color: var(--zombie-primary);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            z-index: 999;
            cursor: pointer;
        }

        .zombiecoder-section-title {
            background-color: #2c2c2c;
            color: #f4c430;
            padding: 15px 40px;
            font-size: 1.8rem;
            font-weight: bold;
            letter-spacing: 2px;
            position: relative;
            display: inline-block;
            margin-bottom: 50px;
            clip-path: polygon(0 0, calc(100% - 30px) 0, 100% 100%, 30px 100%);
        }
        
        .view_more_btn {
            display: inline-block;
            margin-bottom: 30px;
            padding: 10px 25px;
            background-color: #2c2c2c;
            color: #f4c430;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        
        .view_more_btn:hover {
            background-color: #f4c430;
            color: #2c2c2c;
        }
        
        .brand-card {
            height: 120px;
            padding: 15px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
        }
        
        .brand-card:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .brand-image {
            max-height: 70px;
            object-fit: contain;
            width: 100%;
        }
        
        .section-title-header {
            text-align: center;
            margin: 30px 0;
        }
        
        .section-title-name {
            font-size: 2rem;
            font-weight: bold;
            color: #333;
            position: relative;
            padding-bottom: 10px;
        }
        
        .section-title-name:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background-color: #f4c430;
        }
        
        .slider-section {
            margin-bottom: 30px;
        }
        
        .home-slider-container {
            overflow: hidden;
        }
        
        .slider-item img {
            width: 100%;
            height: auto;
        }
        
        .homeproduct {
            margin: 30px 0;
        }
        
        .sec_title {
            margin-bottom: 20px;
        }
        
        .topcategory {
            display: flex;
            overflow-x: auto;
            padding-bottom: 15px;
            margin-bottom: 30px;
        }
        
        .cat_item {
            flex: 0 0 auto;
            margin-right: 15px;
            text-align: center;
            width: 120px;
        }
        
        .cat_img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto 10px;
        }
        
        .cat_img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .cat_name a {
            color: #333;
            text-decoration: none;
            font-weight: 500;
        }
        
        /* Responsive adjustments */
        @media (max-width: 991px) {
            .zombie-product-img-container {
                height: 250px;
            }
            
            .zombie-btn-buy,
            .zombie-btn-cart {
                font-size: 12px;
                padding: 10px 5px;
            }
            
            .zombiecoder-section-title {
                font-size: 1.5rem;
                padding: 12px 30px;
                margin-bottom: 40px;
            }
        }
        
        @media (max-width: 767px) {
            .zombie-product-img-container {
                height: 220px;
            }
            
            .zombie-product-title {
                font-size: 13px;
                height: 36px;
            }
            
            .zombie-btn-buy,
            .zombie-btn-cart {
                font-size: 11px;
                padding: 8px 3px;
            }
            
            .zombiecoder-section-title {
                font-size: 1.3rem;
                padding: 10px 25px;
                margin-bottom: 30px;
            }
            
            .section-title-name {
                font-size: 1.7rem;
            }
        }
        
        @media (max-width: 575px) {
            .zombie-product-img-container {
                height: 200px;
            }
            
            .zombie-product-title {
                font-size: 12px;
                height: 32px;
            }
            
            .zombie-btn-buy,
            .zombie-btn-cart {
                font-size: 10px;
                padding: 8px 2px;
            }
            
            .zombie-box-text {
                padding: 10px;
            }
            
            .zombiecoder-section-title {
                font-size: 1.1rem;
                padding: 8px 20px;
                margin-bottom: 25px;
            }
            
            .section-title-name {
                font-size: 1.5rem;
            }
            
            .zombie-cart-icon {
                width: 40px;
                height: 40px;
                top: 15px;
                right: 15px;
            }
            
            .zombie-cart-count {
                width: 20px;
                height: 20px;
                font-size: 0.7rem;
            }
            /* ashik */
            .category-row .col{
                max-width: 130px;
            }
        }
        
        @media (max-width: 400px) {
            .zombie-product-img-container {
                height: 180px;
            }
            
            .zombie-product-title {
                font-size: 11px;
            }
            
            .zombie-btn-buy,
            .zombie-btn-cart {
                font-size: 9px;
                padding: 6px 1px;
            }
            
            .zombie-product-price {
                font-size: 12px;
            }

                
            /* ashik */
            .category-row .col{
                max-width: 120px;
            }
        }



        /* ashik */
        .category-row .col{
            padding: 0px;
            margin: 0px;
            width: 150px;
            height: 160px;
            /* overflow: hidden; */
        }

        .section-title {
            text-align: center;
            font-weight: 600;
            color: #343a40;
            margin-bottom: 2rem;
        }

        /* Featured Category Styles */
        .category-card {
            background-color: transparent;
            border-radius: 12px;
            padding: 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #e9ecef;
            height: 100%; 
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

        }

        .category-card:hover {
            transform: scale(1.01);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }
        .category-image{
            width: 100%;
            height: 85%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px;
        }
        .category-card img {
            max-width: 100%;
            width: auto;
            min-height: 100%;
            height: auto;
            max-height: 100%;
            object-fit: cover;
        }

        .category-title {
            min-height: 17%;
            padding: 10px 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            
        }
        .category-title p{
            margin: 0;
            font-size: 17px;
            font-weight: 600;
            color: #495057;
            margin-top: -10px;
        }

        .hrdivider {
        
            position: relative;
            margin-bottom: 20px;
            width: 100%;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .hrdivider hr{
            width: 50%;
            text-align: center;
            border: 1.5px solid #343a40;
        }

        .hrdivider h1 {
            position: absolute;
            top: 3px;
            background: #fff;
            padding: 0 20px;
            font-weight: bold;
            font-size: 23px;
        }

    </style>




@endpush

@section('content')


        <!-- Slider Section -->
        <section class="slider-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="home-slider-container">
                            <div class="main_slider owl-carousel">
                                @foreach ($sliders as $key => $value)
                                <div class="slider-item">
                                    <img src="{{ asset($value->image) }}" alt="" class="w-100" />
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider end -->

        <!-- Shopping Cart Icon -->
        <div class="zombie-cart-icon">
            <i class="fas fa-shopping-cart"></i>
            <span class="zombie-cart-count">0</span>
        </div>

        <!-- Cart Notification -->
        <div class="zombie-cart-notification">
            <i class="fas fa-check-circle me-2"></i> <span class="zombie-notification-text">Product added to cart!</span>
        </div>

        <!-- Top Categories Section Commented
        <section class="homeproduct">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="sec_title">
                            <h3 class="section-title-header">
                                <div class="timer_inner">
                                    <div class="">
                                        <span class="section-title-name"> Top Categories </span>
                                    </div>
                                </div>
                            </h3>
                        </div>
                    </div>

                    <div class="col-sm-12">
                        <div class="topcategory">
                            @foreach ($menucategories as $key => $value)
                            <div class="cat_item">
                                <div class="cat_img">
                                    <a href="{{ route('category', $value->slug) }}">
                                        <img src="{{ asset($value->image) }}" alt="" />
                                    </a>
                                </div>
                                <div class="cat_name">
                                    <a href="{{ route('category', $value->slug) }}">
                                        {{ $value->name }}
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                </div>
            </div>
        </section>
        -->



    <div class="container my-5">
        <div class="hrdivider">
            <hr/>
            <h1>Shop by Categories</h1>
        </div>
        <div class="category-row row justify-content-center row-cols-3 row-cols-sm-4 row-cols-md-8 row-cols-lg-8 gap-2 mb-5">

            <!-- Cleanser -->
            @foreach ($frontcategory as $category) 
                <a href="{{url('category/' . $category->slug)}}" class="col text-decoration-none">
                    <div class="category-card">
                        <div class="category-image">
                            <img src="{{ asset($category->image) }}" alt="Cleanser">
                        </div>
                        <div class="category-title">
                            <p>{{ $category->name }}</p>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>
    </div>
    
    <div class="container my-5">
        <div class="hrdivider">
            <hr/>
            <h1>Shop by Skin Types</h1>
        </div>

        
        <div class="category-row row row-cols-3 row-cols-sm-4 row-cols-md-6 row-cols-lg-8 gap-2 mb-5">

            <!-- Cleanser -->
            @foreach ($skintypes as $skintype) 
                <a href="{{url('skin-type/' . $skintype->name)}}" class="col text-decoration-none" 
                    style="
                            background-image: url('{{ asset($skintype->image) }}');
                            background-size: cover;          /* Makes the image cover the entire element */
                            background-position: center;     /* Centers the image */
                            background-repeat: no-repeat;    /* Prevents the image from repeating */
                        ">
                    <div class="category-card">
                        <div class="category-image">
                            {{-- <img src="{{ asset($skintype->image) }}" alt="Cleanser"> --}}
                        </div>
                        <div class="category-title">
                            <p>{{ $skintype->name }}</p>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>
    </div>
    
    <div class="container my-5">
        <div class="hrdivider">
            <hr/>
            <h1>Shop by Skin Concerne</h1>
        </div>

        
        <div class="category-row row row-cols-3 row-cols-sm-4 row-cols-md-6 row-cols-lg-8 gap-2 mb-5">

            <!-- Cleanser -->
            @foreach ($skinconcerns as $skinconcern) 
                <a href="{{url('skin-type/' . $skinconcern->name)}}" class="col text-decoration-none">
                    <div class="category-card">
                        <div class="category-image">
                            <img src="{{ asset($skinconcern->image) }}" alt="Cleanser">
                        </div>
                        <div class="category-title">
                            <p>{{ $skinconcern->name }}</p>
                        </div>
                    </div>
                </a>
            @endforeach

        </div







        <!-- Hot Deal Section -->
        <section class="container">
            <div class="text-center">
                <h2 class="zombiecoder-section-title">Hot Deal</h2>
            </div>

            <div class="row  gap-2 gap-md-3">
                @foreach ($hotdeal_top as $key => $value)
                <div class="col-6 col-lg-3 p-0">
                    <div class="zombie-product-card">
                        <a href="{{ route('product', $value->slug) }}" class="zombie-product-img-container">
                            {{-- @if($value->image && $value->image->image) --}}
                            <img src="{{ asset($value->image->image) }}" alt="{{ $value->name }}" class="zombie-product-img">
                            {{-- @else --}}
                            <div class="zombie-product-img-placeholder">
                                {{ Str::limit($value->name, 30) }}
                            </div>
                            {{-- @endif --}}
                        </a>
                        <div class="zombie-box-text">
                            <p class="zombie-product-title">{{ Str::limit($value->name, 80) }}</p>
                            <div class="zombie-product-price">
                                @if ($value->old_price)
                                <span class="zombie-original-price">৳ {{ $value->old_price }}</span>
                                @endif
                                <span class="zombie-discounted-price">৳ {{ $value->new_price }}</span>
                            </div>
                            <div class="zombie-btn-group">
                                @if (!$value->prosizes->isEmpty() || !$value->procolors->isEmpty())
                                <a href="{{ route('product', $value->slug) }}" class="zombie-btn-buy">BUY NOW</a>
                                <a href="{{ route('product', $value->slug) }}" class="zombie-btn-cart">ADD TO CART</a>
                                @else
                                <form action="{{ route('cart.store.buy') }}" method="POST" style="flex: 1;">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $value->id }}" />
                                    <input type="hidden" name="qty" value="1" />
                                    <button type="submit" class="zombie-btn-buy" style="width: 100%;">BUY NOW</button>
                                </form>

                                <form action="{{ route('cart.store') }}" method="POST" style="flex: 1;">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $value->id }}" />
                                    <input type="hidden" name="qty" value="1" />
                                    <button type="submit" class="zombie-btn-cart" style="width: 100%;" onclick="add_to_cart(this,event)">ADD TO CART</button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        

        <section class="py-5">
            <div class="container">
                <h2 class="text-center fw-bold mb-5">বিশেষ প্রোডাক্টস</h2>
                <div class="row g-4">
                    @foreach ($all_products as $key => $product)
                        <!-- Product Card 1 -->
                        <div class="col-sm-6 col-lg-3">
                            <div class="card h-100 border-0 shadow-sm beauty-product-card">
                                <div class="position-relative">
                                    <img src="{{ asset($product->image->image ?? 'https://placehold.co/400x400/f8bbd0/ffffff?text=Prduct') }}" class="card-img-top" alt="Product Image">
                                    <span class="badge bg-primary position-absolute top-0 end-0 m-2">
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
                                        {{ $discount }}%m
                                    </span>
                                    <div class="beauty-quick-view position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center" style="background-color: rgba(0,0,0,0.4);">
                                        <button class="btn btn-light rounded-pill">Quick View</button>
                                    </div>
                                </div>
                                <div class="card-body d-flex flex-column">
                                    <h3 class="card-title fs-5 fw-bold">{{ $product->name }}</h3>
                                    <div class="mt-auto">
                                        <div class="d-flex align-items-baseline">
                                            <p class="fs-4 fw-bold text-primary mb-0">{{ $product->new_price }}</p>
                                            <p class="ms-2 text-muted text-decoration-line-through">{{ $product->old_price }}</p>
                                        </div>
                                        <div class="d-grid gap-2 d-sm-flex mt-3">
                                            <button class="btn btn-outline-primary w-100 fw-bold beauty-btn-sm-text">Add to Cart</button>
                                            <button class="btn btn-primary w-100 fw-bold beauty-btn-sm-text">Buy Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        @foreach ($homeproducts as $homecat)
        <section class="container">
            <div class="text-center">
                <h2 class="zombiecoder-section-title">{{ $homecat->name }}</h2>
            </div>
            <div class="text-center">
                <a href="{{ route('category', $homecat->slug) }}" class="view_more_btn">View More</a>
            </div>

            <div class="row gap-2 gap-md-4">
                @foreach ($homecat->products as $key => $value)
                <div class="col-6 col-lg-3 p-0">
                    <div class="zombie-product-card">
                        <div class="zombie-product-img-container">
                            @if($value->image && $value->image->image)
                            <img src="{{ asset($value->image->image) }}" alt="{{ $value->name }}" class="zombie-product-img">
                            @else
                            <div class="zombie-product-img-placeholder">
                                {{ Str::limit($value->name, 30) }}
                            </div>
                            @endif
                        </div>
                        <div class="zombie-box-text">
                            <p class="zombie-product-title">{{ Str::limit($value->name, 80) }}</p>
                            <div class="zombie-product-price">
                                @if ($value->old_price)
                                <span class="zombie-original-price">৳ {{ $value->old_price }}</span>
                                @endif
                                <span class="zombie-discounted-price">৳ {{ $value->new_price }}</span>
                            </div>
                            <div class="zombie-btn-group">
                                @if (!$value->prosizes->isEmpty() || !$value->procolors->isEmpty())
                                <a href="{{ route('product', $value->slug) }}" class="zombie-btn-buy">BUY NOW</a>
                                <a href="{{ route('product', $value->slug) }}" class="zombie-btn-cart">ADD TO CART</a>
                                @else
                                <form action="{{ route('cart.store.buy') }}" method="POST" style="flex: 1;">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $value->id }}" />
                                    <input type="hidden" name="qty" value="1" />
                                    <button type="submit" class="zombie-btn-buy" style="width: 100%;">BUY NOW</button>
                                </form>

                                <form action="{{ route('cart.store') }}" method="POST" style="flex: 1;">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $value->id }}" />
                                    <input type="hidden" name="qty" value="1" />
                                    <button type="submit" class="zombie-btn-cart" style="width: 100%;" onclick="add_to_cart(this,event)">ADD TO CART</button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </section>
        @endforeach

        <!--brand section-->



        <!--brand section-->


        <div class="homeproduct">
            <div class="container mt-2">
                <h3 class="section-title-header">
                    <span class="section-title-name">Brand</span>
                </h3>
                <div class="row">
                    @foreach($brands as $brand)
                    <div class="col-6 col-md-4 col-lg-2 mb-2">
                        <div class="card brand-card d-flex align-items-center justify-content-center">
                            <img src="{{ $brand->image }}" class="card-img-top brand-image" alt="{{ $brand->name }}">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

@endsection @push('script')
<script src="{{ asset('public/frontEnd/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/frontEnd/js/jquery.syotimer.min.js') }}"></script>

<script>
    $(document).ready(function() {
        $(".main_slider").owlCarousel({
            items: 1,
            loop: true,
            dots: false,
            autoplay: true,
            nav: true,
            autoplayHoverPause: false,
            margin: 0,
            mouseDrag: true,
            smartSpeed: 8000,
            autoplayTimeout: 3000,
            animateOut: "fadeOutDown",
            animateIn: "slideInDown",

            navText: ["<i class='fa-solid fa-angle-left'></i>",
                "<i class='fa-solid fa-angle-right'></i>"
            ],
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(".hotdeals-slider").owlCarousel({
            margin: 15,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 3,
                    nav: true,
                },
                600: {
                    items: 3,
                    nav: false,
                },
                1000: {
                    items: 6,
                    nav: true,
                    loop: false,
                },
            },
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(".category-slider").owlCarousel({
            margin: 15,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 5,
                    nav: true,
                },
                600: {
                    items: 3,
                    nav: false,
                },
                1000: {
                    items: 8,
                    nav: true,
                    loop: false,
                },
            },
        });

        $(".product_slider").owlCarousel({
            margin: 15,
            items: 6,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    nav: false,
                },
                600: {
                    items: 5,
                    nav: false,
                },
                1000: {
                    items: 6,
                    nav: false,
                },
            },
        });
    });
</script>

<script>
    $("#simple_timer").syotimer({
        date: new Date(2015, 0, 1),
        layout: "hms",
        doubleNumbers: false,
        effectType: "opacity",

        periodUnit: "d",
        periodic: true,
        periodInterval: 1,
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#add_to_cart').click(function() {
            gtag("event", "add_to_cart", {
                currency: "BDT",
                value: "1.5",
                items: [
                    @foreach(Cart::instance('shopping')->content() as $cartInfo) {
                        item_id: "{{$cartInfo->id}}",
                        item_name: "{{$cartInfo->name}}",
                        price: "{{$cartInfo->price}}",
                        currency: "BDT",
                        quantity: {{$cartInfo->qty ?? 0}}
                    },
                    @endforeach
                ]
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#add_cart_btn_home').click(function() {
            gtag("event", "add_to_cart", {
                currency: "BDT",
                value: "1.5",
                items: [
                    @foreach(Cart::instance('shopping')->content() as $cartInfo) {
                        item_id: "{{$cartInfo->id}}",
                        item_name: "{{$cartInfo->name}}",
                        price: "{{$cartInfo->price}}",
                        currency: "BDT",
                        quantity: {{$cartInfo->qty ?? 0}}
                    },
                    @endforeach
                ]
            });
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#order_now').click(function() {
            gtag("event", "add_to_cart", {
                currency: "BDT",
                value: "1.5",
                items: [
                    @foreach(Cart::instance('shopping')->content() as $cartInfo) {
                        item_id: "{{$cartInfo->id}}",
                        item_name: "{{$cartInfo->name}}",
                        price: "{{$cartInfo->price}}",
                        currency: "BDT",
                        quantity: {{$cartInfo->qty ?? 0}}
                    },
                    @endforeach
                ]
            });
        });
    });
</script>

<script>
    function sendSuccess() {
        // size validation
        size = document.forms["formName"]["product_size"].value;
        if (size != "") {
            // access
        } else {
            toastr.warning("Please select any size");
            return false;
        }
        color = document.forms["formName"]["product_color"].value;
        if (color != "") {
            // access
        } else {
            toastr.error("Please select any color");
            return false;
        }
    }

    function add_to_cart(button, event) {
        event.preventDefault();
        var form = $(button).closest('form');
        var url = form.attr('action');
        var submit_button = $(button);

        submit_button.val(`Please Wait...`);

        submit_button.prop('disabled', true);
        $.ajax({
            url: url,
            method: form.attr('method'),
            data: form.serialize(),
            success: function(response) {
                if (response.success == true) {
                    toastr.success(response.message);
                    var cart_count = response.cart_count;
                    $('#cart_count').text(cart_count);

                    // Update zombie cart count
                    $('.zombie-cart-count').text(cart_count);

                    // Show notification
                    $('.zombie-notification-text').text("Product added to cart!");
                    $('.zombie-cart-notification').fadeIn();

                    // Hide notification after 3 seconds
                    setTimeout(function() {
                        $('.zombie-cart-notification').fadeOut();
                    }, 3000);

                    // Button animation
                    const originalHtml = submit_button.val();
                    submit_button.val('ADDED');
                    submit_button.css('background-color', '#27ae60');

                    // Reset button after 2 seconds
                    setTimeout(function() {
                        submit_button.val(originalHtml);
                        submit_button.css('background-color', '#000000');
                    }, 2000);
                }
                if (response.success == false) {
                    toastr.error(response.message);
                }
            },
            error: function(response) {
                toastr.error('Something went wrong!');
            },
            complete: function() {
                submit_button.val(`Add To Cart`);
                submit_button.prop('desabled', false);
            }
        });
    }

    // Cart icon click functionality
    $(document).ready(function() {
        $('.zombie-cart-icon').click(function() {
            var cartCount = $('.zombie-cart-count').text();
            alert('You have ' + cartCount + ' items in your cart!');
        });
    });
</script>













@endpush