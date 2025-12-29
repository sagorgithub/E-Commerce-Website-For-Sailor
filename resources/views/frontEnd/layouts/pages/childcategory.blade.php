@extends('frontEnd.layouts.master') 
@section('title',$childcategory->meta_title) 
@push('css')
<link rel="stylesheet" href="{{asset('public/frontEnd/css/jquery-ui.css')}}" />
<link href="https://fonts.googleapis.com/css2?family=Anek+Bangla:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
<style>
    :root {
        --zombie-primary: #555555;
        --zombie-secondary: #000000;
        --zombie-light: #ffffff;
        --zombie-dark: #333333;
        --zombie-success: #27ae60;
    }
    
    .zombie-product-card {
        border: none;
        overflow: hidden;
        transition: opacity 0.3s, transform 0.3s, background-color 0.3s;
        background-color: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        height: 100%;
        margin-bottom: 20px;
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
    }
    
    .zombie-product-title {
        font-family: 'Anek Bangla', sans-serif;
        font-size: 14px;
        font-weight: 400;
        color: var(--zombie-primary);
        margin-bottom: 0.1em;
        margin-top: 0.1em;
        box-sizing: border-box;
    }
    
    .zombie-product-price {
        color: var(--zombie-primary);
        font-weight: 400;
        font-size: 14px;
        margin: 0.5rem 0;
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
        margin-top: 1rem;
        gap: 0;
    }
    
    .zombie-btn-buy, .zombie-btn-cart {
        flex: 1;
        padding: 10px 5px;
        border: none;
        font-family: 'Anek Bangla', sans-serif;
        font-size: 14px;
        font-weight: 500;
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
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
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
        
        .zombie-btn-buy, .zombie-btn-cart {
            font-size: 12px;
            padding: 8px 3px;
        }
        
        .zombie-product-card {
            margin-bottom: 30px;
        }
        
        .zombiecoder-section-title {
            font-size: 1.2rem;
            padding: 10px 25px;
            margin-bottom: 30px;
        }
    }
</style>
@endpush 
@push('seo')
<meta name="app-url" content="{{route('products',$childcategory->slug)}}" />
<meta name="robots" content="index, follow" />
<meta name="description" content="{{ $childcategory->meta_description}}" />
<meta name="keywords" content="{{ $childcategory->slug }}" />

<!-- Twitter Card data -->
<meta name="twitter:card" content="product" />
<meta name="twitter:site" content="{{$childcategory->childcategoryName}}" />
<meta name="twitter:title" content="{{$childcategory->childcategoryName}}" />
<meta name="twitter:description" content="{{ $childcategory->meta_description}}" />
<meta name="twitter:creator" content="gomobd.com" />
<meta property="og:url" content="{{route('products',$childcategory->slug)}}" />
<meta name="twitter:image" content="{{asset($childcategory->image)}}" />

<!-- Open Graph data -->
<meta property="og:title" content="{{$childcategory->childcategoryName}}" />
<meta property="og:type" content="product" />
<meta property="og:url" content="{{route('products',$childcategory->slug)}}" />
<meta property="og:image" content="{{asset($childcategory->image)}}" />
<meta property="og:description" content="{{ $childcategory->meta_description}}" />
<meta property="og:site_name" content="{{$childcategory->childcategoryName}}" />
@endpush 
@section('content')
    <!-- Shopping Cart Icon -->
    


    <main>
        <section class="common-banner-main" style="background: url(&quot;https://objectstorage.ap-singapore-1.oraclecloud.com/n/aximxvolvk6d/b/sailorbucket/o/uploads/all/8AuNPukpGxC4kDWhkaKYpHs9gfJXmdsg8yVCzfmJ.jpg&quot;);">
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
                                                        <strong>{{ $childcategory->childcategoryName }}</strong>
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




        <section class="product-section">
            <div class="">
                <section class="shop-layout-main">
                    <div class="filter-toggle-btn">filter</div>
                    <div class="container-fluid">
                        <div class="row mb-tweenty sort-by-selection">
                                <div class="col-12">
                                        <div class="row g-3 align-items-center justify-content-end">
                                                <div class="col-auto"><label for="inputPassword6" class="col-form-label">sort by</label>
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
                                    <form action="" class="attribute-submit" onsubmit="return false">
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
                                                                                <input class="form-check-input category-checkbox" type="checkbox" id="{{$scategory->name}}" name="cat_id" value="{{ $scategory->id }}">
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
                                    </form>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 col-xl-10">
                                <div class="shop-grid-main">
                                    @forelse ($products as $key => $value)
                                            <div class="single-product">
                                                    <div class="image-box">
                                                            <a href="{{ route('product', $value->slug) }}">

                                                                    @php
                                                                        $oldPrice = $value->old_price;
                                                                        $newPrice = $value->new_price;

                                                                        if ($oldPrice > 0) {
                                                                                $discount = (($oldPrice - $newPrice) / $oldPrice) * 100;
                                                                                $discount = round($discount); // round kore integer %
                                                                        } else {
                                                                            $discount = 0;
                                                                        }
                                                                        $images = $value->images; // সব images
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
                                                                    <img src="{{ asset($secondImage) }}" alt="" class="img-fluid secondary-image">


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
                                                                                    <a class="nav-link" href="{{ route('product', $value->slug) }}">
                                                                                        <i class="icofont-cart-alt"></i>
                                                                                    </a>
                                                                            </li>
                                                                            <li class="nav-item">
                                                                                    <a href="javascript:void(0)" class="nav-link">
                                                                                        <i class="icofont-eye-alt quick-view-btn" data-id="{{ $value->id }}"></i>
                                                                                    </a>
                                                                            </li>
                                                                    </ul>
                                                            </div>
                                                    </div>
                                                    <div class="product-description">
                                                            <h4 class="product-name">
                                                                    <a
                                                                            href="{{ route('product', $value->slug) }}">{{ $value->name }}</a>
                                                            </h4>
                                                            <p class="price">৳ <span
                                                                            class="mr-2">{{ $value->new_price }}</span>
                                                                    <del>{{ $value->old_price }}</del>
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
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="custom_paginate">
                                    {{-- {{$products->links('pagination::bootstrap-4')}} --}}
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>

    </main>
@endsection

@push('script')
    <script>
        document.querySelectorAll('.category-checkbox').forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            let selected = [];
            document.querySelectorAll('.category-checkbox:checked').forEach(function(c) {
                selected.push(c.value);
            });

            let baseUrl = window.location.origin + window.location.pathname;

            if(selected.length > 0) {
                let url = baseUrl + '?category=' + selected.join(',');
                window.location.href = url;
            } else {
                window.location.href = baseUrl;
            }
        });
    });

    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script>
        $("#price-range").click(function() {
            $(".price-submit").submit();
        })
        $(".form-attribute").on('change click',function(){
            $(".attribute-submit").submit();
        })
        $(".sort").change(function() {
            $(".sort-form").submit();
        })
        $(".form-checkbox").change(function() {
            $(".subcategory-submit").submit();
        })
    </script>
    
<script type="text/javascript">
  $(document).ready(function() {
    $('#add_cart_btn_home').click(function() {
        gtag("event", "add_to_cart", {
            currency: "BDT",
            value: "1.5",
           tems: [
                    @foreach (Cart::instance('shopping')->content() as $cartInfo)
                        {
                            item_id: "{{$value->id}}",
                            item_name: "{{$value->name}}",
                            price: "{{$value->new_price}}",
                            currency: "BDT",
                            quantity: {{ $cartInfo->qty ?? 0 }}
                        },
                    @endforeach
                ]
        });
    });
});

</script>    
    
    <script>
        $(function() {
            $("#price-range").slider({
                step: 5,
                range: true,
                min: {{ $min_price }},
                max: {{ $max_price }},
                values: [
                    {{ request()->get('min_price') ? request()->get('min_price') : $min_price }},
                    {{ request()->get('max_price') ? request()->get('max_price') : $max_price }}
                ],
                slide: function(event, ui) {
                    $("#min_price").val(ui.values[0]);
                    $("#max_price").val(ui.values[1]);
                }
            });
            $("#min_price").val({{ request()->get('min_price') ? request()->get('min_price') : $min_price }});
            $("#max_price").val({{ request()->get('max_price') ? request()->get('max_price') : $max_price }});
            $("#priceRange").val($("#price-range").slider("values", 0) + " - " + $("#price-range").slider("values",
                1));

            $("#mobile-price-range").slider({
                step: 5,
                range: true,
                min: {{ $min_price }},
                max: {{ $max_price }},
                values: [
                    {{ request()->get('min_price') ? request()->get('min_price') : $min_price }},
                    {{ request()->get('max_price') ? request()->get('max_price') : $max_price }}
                ],
                slide: function(event, ui) {
                    $("#min_price").val(ui.values[0]);
                    $("#max_price").val(ui.values[1]);
                }
            });
            $("#min_price").val({{ request()->get('min_price') ? request()->get('min_price') : $min_price }});
            $("#max_price").val({{ request()->get('max_price') ? request()->get('max_price') : $max_price }});
            $("#priceRange").val($("#price-range").slider("values", 0) + " - " + $("#price-range").slider("values",
                1));

        });
    function add_to_cart(button,event) {
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