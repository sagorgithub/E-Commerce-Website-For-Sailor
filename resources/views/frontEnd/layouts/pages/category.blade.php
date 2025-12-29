@extends('frontEnd.layouts.master')
{{-- @section('title',$category->meta_title) --}}
@if(Route::is('category'))
@section('title', $category->meta_title ?? 'Golnoze')
@elseif(Route::is('skinType'))
@section('title', $skintype->meta_title ?? 'Golnoze')
@elseif(Route::is('skinConcern'))
@section('title', $skinconcern->meta_title ?? 'Golnoze')
@endif



@section('content')




        <main>
                <section class="common-banner-main"
                        style="background: url(&quot;https://objectstorage.ap-singapore-1.oraclecloud.com/n/aximxvolvk6d/b/sailorbucket/o/uploads/all/8AuNPukpGxC4kDWhkaKYpHs9gfJXmdsg8yVCzfmJ.jpg&quot;);">
                        <div class="container">
                                <div class="row">
                                        <div class="col-12">
                                                <h4 class="d-none">view cart</h4>
                                        </div>
                                </div>
                        </div>
                        <section class="breadcrum-main mb-0">
                                <div class="container">
                                        <div class="row">
                                                <div class="col-12">
                                                        <nav aria-label="breadcrumb">
                                                                <ol class="breadcrumb d-none">
                                                                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                                                                        <li class="breadcrumb-item"><a>view cart </a></li>
                                                                </ol>
                                                        </nav>
                                                </div>
                                        </div>
                                </div>
                        </section>
                </section>
                <section class="shop-top-info most-used-tags">
                        <div class="container-fluid">
                                <div class="row ">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                                <h4>
                                                        @if(Route::is('category'))
                                                                <strong>{{ $category->name }}</strong>
                                                        @elseif(Route::is('skinType'))
                                                                <strong>{{ $skintype->name }}</strong>
                                                        @elseif(Route::is('skinConcern'))
                                                                <strong>{{ $skinconcern->name }}</strong>
                                                        @endif
                                                </h4>
                                        </div>
                                </div>
                        </div>
                </section>
                <section class="shop-layout-main">
                        <div class="filter-toggle-btn">filter</div>
                        <div class="container-fluid">
                                <div class="row mb-tweenty sort-by-selection">
                                        <div class="col-12">
                                                <div class="row g-3 align-items-center justify-content-end">
                                                        <div class="col-auto"><label for="inputPassword6"
                                                                        class="col-form-label">sort by</label>
                                                        </div>
                                                        <div class="page-sort col-auto">
                                                                <form action="" class="sort-form">
                                                                        <select name="sort" class="form-control form-select sort">
                                                                        <option value="1" @if(request()->get('sort')==1)selected @endif>Product: Latest</option>
                                                                        <option value="2" @if(request()->get('sort')==2)selected @endif>Product: Oldest</option>
                                                                        <option value="3" @if(request()->get('sort')==3)selected @endif>Price: High To Low</option>
                                                                        <option value="4" @if(request()->get('sort')==4)selected @endif>Price: Low To High</option>
                                                                        <option value="5" @if(request()->get('sort')==5)selected @endif>Name: A-Z</option>
                                                                        <option value="6" @if(request()->get('sort')==6)selected @endif>Name: Z-A</option>
                                                                        </select>
                                                                        <input type="hidden" name="min_price" value="{{request()->get('min_price')}}" />
                                                                        <input type="hidden" name="max_price" value="{{request()->get('max_price')}}" />
                                                                </form>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                                <div class="row">
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 col-xl-2 shop-sidebar-parent display-none">
                                                <div class="sidebar-main">

                                                        <div class="sidebar-accordion-main">
                                                                <div class="accordion" id="myAccordion">
                                                                        <div class="accordion-item">
                                                                                <h2 class="accordion-header">
                                                                                        <button class="accordion-button"
                                                                                                type="button"
                                                                                                data-bs-toggle="collapse"
                                                                                                data-bs-target="#collapseOne"
                                                                                                aria-expanded="true"
                                                                                                aria-controls="collapseOne">
                                                                                                Category
                                                                                        </button>
                                                                                </h2>
                                                                                <div id="collapseOne"
                                                                                        class="accordion-collapse collapse show"
                                                                                        data-bs-parent="#accordionExample">
                                                                                        <div class="accordion-body">
                                                                                                @foreach($menucategories as $scategory)
                                                                                                <div class="form-check">
                                                                                                        <input class="form-check-input" type="checkbox" id="{{$scategory->name}}" name="cat_id"
                                                                                                                value="1174">
                                                                                                                <label class="form-check-label" for="{{$scategory->name}}">{{$scategory->name}}</label>
                                                                                                </div>
                                                                                                @endforeach
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="accordion-item">
                                                                                <h2 class="accordion-header" id="headingTwo">
                                                                                        <button type="button"
                                                                                                class="accordion-button collapsed"
                                                                                                data-bs-toggle="collapse"
                                                                                                data-bs-target="#collapseTwo">Size</button>
                                                                                </h2>
                                                                                <div id="collapseTwo"
                                                                                        class="accordion-collapse collapse "
                                                                                        data-bs-parent="#myAccordion">
                                                                                        <div class="card-body" style="height: 10rem; overflow: hidden auto; scrollbar-width: thin;">
                                                                                                
                                                                                        @forelse ($all_sizes as $size)
                                                                                                <div class="form-check"><input
                                                                                                                class="form-check-input"
                                                                                                                type="checkbox"
                                                                                                                name="size"
                                                                                                                id="flexCheckDefault"
                                                                                                                value="l">
                                                                                                                <label
                                                                                                                class="form-check-label"
                                                                                                                for="flexCheckDefault">{{ $size->sizeName }}</label>
                                                                                                </div>
                                                                                        @endforeach
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="accordion-item">
                                                                                <h2 class="accordion-header" id="headingThree">
                                                                                        <button type="button"
                                                                                                class="accordion-button collapsed"
                                                                                                data-bs-toggle="collapse"
                                                                                                data-bs-target="#collapseThree">Color</button>
                                                                                </h2>
                                                                                <div id="collapseThree"
                                                                                        class="accordion-collapse collapse"
                                                                                        data-bs-parent="#myAccordion">
                                                                                        <div class="card-body"
                                                                                                style="height: 10rem; overflow: hidden auto; scrollbar-width: thin;">
                                                                                                @forelse ($all_colors as $color)
                                                                                                <div class="form-check"><input
                                                                                                                class="form-check-input"
                                                                                                                type="checkbox"
                                                                                                                name="color"
                                                                                                                id="flexCheckDefault"
                                                                                                                value="maroon"><label
                                                                                                                class="form-check-label"
                                                                                                                for="flexCheckDefault">{{ $color->colorName }}</label>
                                                                                                </div>
                                                                                                @endforeach
                                                                                        </div>
                                                                                </div>
                                                                        </div>
                                                                        
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 col-xl-10">
                                                <div class="shop-grid-main">
                                                        @forelse ($category->products as $product)
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
                                                                                        <a
                                                                                                href="{{ route('product', $product->slug) }}">{{ $product->name }}</a>
                                                                                </h4>
                                                                                <p class="price">৳ <span
                                                                                                class="mr-2">{{ $product->new_price }}</span>
                                                                                        <del>{{ $product->old_price }}</del>
                                                                                </p>
                                                                        </div>
                                                                        <div class="sailor-club-discount d-none">
                                                                                <div class="sailor-club-discount-logo"></div>
                                                                                <div class="discount">
                                                                                        <div>50</div>
                                                                                </div>
                                                                        </div>
                                                                        <div class="product-level-tag-flex">
                                                                                <div class="Sailor-label">Panjabi</div>
                                                                        </div>
                                                                </div>
                                                        @empty
                                                                <h4 class="text-danger">No products available in this category!</h4>
                                                        @endforelse

                                                </div>
                                        </div>
                                        
                                </div>
                        </div>
                </section>
        </main>





@endsection