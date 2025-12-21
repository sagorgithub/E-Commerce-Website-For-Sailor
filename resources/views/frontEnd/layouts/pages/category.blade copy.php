@extends('frontEnd.layouts.master') 
{{-- @section('title',$category->meta_title)  --}}
@if(Route::is('category'))
    @section('title', $category->meta_title)
@elseif(Route::is('skinType'))
    @section('title', $skintype->meta_title)
@elseif(Route::is('skinConcern'))
    @section('title', $skinconcern->meta_title)
@endif

@push('css')
<link rel="stylesheet" href="{{asset('public/frontEnd/css/jquery-ui.css')}}" />
<link href="https://fonts.googleapis.com/css2?family=Anek+Bangla:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
<style>
    :root {
        --zombie-primary: #1ca3ac;
        --zombie-secondary: #f39c12;
        --zombie-light: #ffffff;
        --zombie-dark: #333333;
        --zombie-success: #27ae60;
    }

    /* Button Styles */
    .buy-now-btn {
        background-color: var(--zombie-secondary);
        color: white;
        border: none;
        padding: 10px 15px;
        width: 100%;
        font-family: 'Anek Bangla', sans-serif;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .buy-now-btn:hover {
        background-color: #e67e22;
    }

    .add_cart_btn_home {
        background-color: var(--zombie-primary);
        color: white;
        border: none;
        padding: 10px 15px;
        width: 100%;
        font-family: 'Anek Bangla', sans-serif;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.3s ease;
        cursor: pointer;
    }

    .add_cart_btn_home:hover {
        background-color: #178f97;
    }

    /* Sidebar Styles */
    .filter_sidebar {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .accordion-button {
        background-color: var(--zombie-primary) !important;
        color: white !important;
        border: none;
        border-radius: 4px !important;
        font-family: 'Anek Bangla', sans-serif;
    }

    .accordion-button:not(.collapsed) {
        background-color: var(--zombie-primary) !important;
        color: white !important;
    }

    .accordion-button::after {
        filter: brightness(0) invert(1);
    }

    .cust_according_body {
        padding: 15px;
        background: #f8f9fa;
        border-radius: 0 0 4px 4px;
    }

    #price-range .ui-slider-range {
        background: var(--zombie-primary);
    }

    #price-range .ui-slider-handle {
        border-color: var(--zombie-primary);
    }

    /* Zombie Product Card Styles */
    .zombie-product-card {
        border: none;
        overflow: hidden;
        transition: opacity 0.3s, transform 0.3s, background-color 0.3s;
        background-color: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        height: 100%;
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
    }

    .zombie-product-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
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
        flex-direction: column;
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
        gap: 0;
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
        background-color: #000;
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
    }

    /* Responsive adjustments */
    @media (max-width: 549px) {
        .zombie-box-text {
            font-size: 85%;
            padding-left: 10px;
            padding-right: 10px;
        }

        .zombie-product-img-container {
            height: 250px;
        }

        .zombie-btn-buy,
        .zombie-btn-cart {
            font-size: 12px;
            padding: 8px 3px;
        }

        .zombie-product-card {
            /* margin-bottom: 30px; */
        }
    }
</style>
@endpush

@section('content')
<!-- Shopping Cart Icon -->
<div class="zombie-cart-icon">
    <i class="fas fa-shopping-cart"></i>
    <span class="zombie-cart-count">0</span>
</div>

<!-- Product Listing Section -->
<section class="product-section">
    <div class="container">
        <div class="sorting-section">
            <div class="row">
                <div class="col-sm-6">
                    <div class="category-breadcrumb d-flex align-items-center">
                        <a href="{{ route('home') }}">Home</a>
                        <span>/</span>
                        @if(Route::is('category'))
                            <strong>{{ $category->name }}</strong>
                        @elseif(Route::is('skinType'))
                            <strong>{{ $skintype->name }}</strong>
                        @elseif(Route::is('skinConcern'))
                            <strong>{{ $skinconcern->name }}</strong>
                        @endif
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="showing-data">
                                <span>Showing {{ $products->firstItem() }}-{{ $products->lastItem() }} of {{ $products->total() }} Results</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="filter_sort">
                                <div class="filter_btn">
                                    <i class="fa fa-list-ul"></i>
                                </div>
                                <div class="page-sort">
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
                </div>
            </div>
        </div>  
        
        <div class="row">
            <div class="col-sm-3 filter_sidebar">
                <div class="filter_close"><i class="fa fa-long-arrow-left"></i> Filter</div>
                <form action="
                    @if (Route::is('skinType'))
                        {{ route('skinType.filter', $skintype->name) }}
                    @endif
                 " class="attribute-submit" method="POST">
                    @csrf
                    <div class="sidebar_item wraper__item">
                        <div class="accordion" id="category_sidebar">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseCat" aria-expanded="true" aria-controls="collapseOne">
                                        {{-- {{ $category->name }} --}}
                                        @if(Route::is('category'))
                                            {{ $category->name }}
                                        @elseif(Route::is('skinType'))
                                            {{ $skintype->name }}
                                        @elseif(Route::is('skinConcern'))
                                            {{ $skinconcern->name }}
                                        @endif
                                    </button>
                                </h2>
                                @if (Route::is('category'))
                                    <div id="collapseCat" class="accordion-collapse collapse show"
                                        data-bs-parent="#category_sidebar">
                                        <div class="accordion-body cust_according_body">
                                            <ul>
                                                @foreach ($category->subcategories as $key => $subcat)
                                                    <li>
                                                        <a href="{{ route('subcategory', $subcat->slug) }}">{{ $subcat->subcategoryName }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--sidebar item end-->
                    <div class="sidebar_item wraper__item">
                        <div class="accordion" id="price_sidebar">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsePrice" aria-expanded="true" aria-controls="collapseOne">
                                        Price
                                    </button>
                                </h2>
                                <div id="collapsePrice" class="accordion-collapse collapse show"
                                    data-bs-parent="#price_sidebar">
                                    <div class="accordion-body cust_according_body">
                                        <div class="category-filter-box category__wraper" id="categoryFilterBox">
                                            <div class="category-filter-item">
                                                <div class="filter-body">
                                                    <div class="slider-box">
                                                        <div action="" class="price-submit">
                                                            <div class="filter-price-inputs">
                                                                <p class="min-price">৳<input type="text"
                                                                        name="min_price" id="min_price" readonly="" />
                                                                </p>
                                                                <p class="max-price">৳<input type="text"
                                                                        name="max_price" id="max_price" readonly="" />
                                                                </p>
                                                            </div>
    
                                                            <div id="price-range" class="slider form-attribute"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--sidebar item end-->
                    <div class="sidebar_item wraper__item">
                        <div class="accordion" id="filter_sidebar">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseFilter" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Filter
                                    </button>
                                </h2>
                                <div id="collapseFilter" class="accordion-collapse collapse show"
                                    data-bs-parent="#filter_sidebar">
                                    <div class="accordion-body cust_according_body">
                                        <div class="filter-body">
                                            <div action="" class="subcategory-submit">
                                                <ul class="space-y-3">
                                                    @if (Route::is('category'))

                                                        @foreach ($subcategories as $subcategory)
                                                            <li class="subcategory-filter-list">
                                                                <label for="{{ $subcategory->slug . '-' . $subcategory->id }}" class="subcategory-filter-label">
                                                                    {{-- The redundant inner @if has been removed from here --}}
                                                                    <input class="form-checkbox form-attribute"
                                                                        id="{{ $subcategory->slug . '-' . $subcategory->id }}"
                                                                        name="subcategory[]" value="{{ $subcategory->id }}"
                                                                        type="checkbox"
                                                                        @if (is_array(request()->get('subcategory')) && in_array($subcategory->id, request()->get('subcategory'))) checked @endif />
                                                                    <p class="subcategory-filter-name">
                                                                        {{ $subcategory->subcategoryName }}
                                                                    </p>
                                                                </label>
                                                            </li>
                                                        @endforeach

                                                    @elseif (Route::is('skinType'))

                                                        @foreach ($skintypeAll as $skintype)
                                                            <li class="subcategory-filter-list">
                                                                <label for="{{ $skintype->name . '-' . $skintype->id }}" class="subcategory-filter-label">
                                                                    {{-- The redundant inner @if has been removed from here --}}
                                                                    <input class="form-checkbox form-attribute"
                                                                        id="{{ $skintype->name . '-' . $skintype->name }}"
                                                                        name="skintype[]" value="{{ $skintype->name }}"
                                                                        type="checkbox"
                                                                        @if (is_array(request()->get('skintype')) && in_array($skintype->name, request()->get('skintype'))) checked @endif />
                                                                    <p class="subcategory-filter-name">
                                                                        {{ $skintype->name }}
                                                                    </p>
                                                                </label>
                                                            </li>
                                                        @endforeach

                                                    @elseif (Route::is('skinConcern'))

                                                        @foreach ($skinconcernAll as $skinconcern)
                                                            <li class="subcategory-filter-list">
                                                                <label for="{{ $skinconcern->name . '-' . $skinconcern->id }}" class="subcategory-filter-label">
                                                                    {{-- The redundant inner @if has been removed from here --}}
                                                                    <input class="form-checkbox form-attribute"
                                                                        id="{{ $skintype->name . '-' . $skinconcern->id }}"
                                                                        name="skinconcern[]" value="{{ $skinconcern->id }}"
                                                                        type="checkbox"
                                                                        @if (is_array(request()->get('skintype')) && in_array($skinconcern->id, request()->get('skinconcern'))) checked @endif />
                                                                    <p class="subcategory-filter-name">
                                                                        {{ $skinconcern->name }}
                                                                    </p>
                                                                </label>
                                                            </li>
                                                        @endforeach

                                                    @endif {{-- <-- Make sure to close the entire conditional block --}}
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--sidebar item end-->
                    {{-- <button type="submit">
                        filter
                    </button> --}}
                    <input type="submit" value="filter">
                </form>
            </div>
            <div class="col-sm-9">
                <div class="row">
                    @foreach ($products as $key => $value)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="zombie-product-card">
                            <div class="zombie-product-img-container">
                                @if($value->image && $value->image->image)
                                <img src="{{ asset($value->image->image) }}" alt="{{ $value->name }}" class="zombie-product-img">
                                @else
                                <div class="zombie-product-img-placeholder">
                                    <i class="fas fa-image" style="font-size: 48px; color: #ccc;"></i>
                                    <p style="margin-top: 10px; font-size: 12px;">{{ Str::limit($value->name, 30) }}</p>
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
                <div class="row">
                    <div class="col-sm-12">
                        <div class="custom_paginate">
                            {{ $products->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection