<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css">
    <link rel="stylesheet" href="/assets/fonts/bebas-font.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@icon/icofont@1.0.1-alpha.1/icofont.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <title>@yield('') {{$generalsetting->name}}</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <meta name="next-head-count" content="11">
    <link rel="apple-touch-icon" href="/icon.png">
    <meta name="theme-color" content="#fff">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <style id="__jsx-dc0f4aac11d231c9">
        @media(max-width:414px) {
            .copyright.jsx-dc0f4aac11d231c9 p.jsx-dc0f4aac11d231c9 {
                font-size: 10px !important
            }

            .copyright.jsx-dc0f4aac11d231c9 p.jsx-dc0f4aac11d231c9 a.jsx-dc0f4aac11d231c9 {
                font-size: 10px !important
            }
        }

        @media screen and (max-width:991px) {
            .copyright.jsx-dc0f4aac11d231c9 {
                margin-bottom: 60px !important
            }

            .copyright.jsx-dc0f4aac11d231c9 p.jsx-dc0f4aac11d231c9 {
                font-size: 12px !important
            }

            .copyright.jsx-dc0f4aac11d231c9 p.jsx-dc0f4aac11d231c9 a.jsx-dc0f4aac11d231c9 {
                font-size: 12px !important
            }
        }
    </style>
    <link rel="shortcut icon" href="{{asset($generalsetting->favicon)}}" alt="Super Ecommerce Favicon" />
    <meta name="author" content="Super Ecommerce" />
    <link rel="canonical" href="" />
    @stack('seo')
    @stack('css')
    <link rel="stylesheet" href="{{asset('frontEnd/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('frontEnd/css/animate.css')}}" />
    <link rel="stylesheet" href="{{asset('frontEnd/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontEnd/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontEnd/css/owl.theme.default.min.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontEnd/css/mobile-menu.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontEnd/css/select2.min.css')}}" />
    <!-- toastr css -->
    <link rel="stylesheet" href="{{asset('/backEnd/assets/css/toastr.min.css')}}" />

    <link rel="stylesheet" href="{{asset('/frontEnd/css/wsit-menu.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontEnd/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontEnd/css/responsive.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontEnd/css/main.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontEnd/css/modern-product-design.css')}}" />
    <link rel="stylesheet" href="{{asset('frontEnd/css/zombie-style.css')}}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <meta name="facebook-domain-verification" content="38f1w8335btoklo88dyfl63ba3st2e" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .carousel-control-next,
        .carousel-control-prev {
            width: 5%;

            .slider-btn {
                background: var(--gradient-primary);
                color: white !important;
                font-size: 1.5rem;
                padding: 10px;
                border-radius: 10px;
            }
        }

        .btn-primary {
            background-color: var(--primary-color) !important;
            background: var(--gradient-primary) !important;
            color: var(--white) !important;
            border-color: var(--primary-color);
        }

        /* --- Product Card Styles --- */
        .beauty-product-card {
            transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
        }

        .beauty-product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15), 0 0 0 2px rgba(229, 46, 138, 0.3) !important;
        }

        .beauty-product-card .beauty-quick-view {
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .beauty-product-card:hover .beauty-quick-view {
            opacity: 1;
        }

        .beauty-btn-sm-text {
            font-size: 0.85rem;
        }

        .btn-outline-primary {
            --bs-btn-color: var(--primary-color);
            --bs-btn-border-color: var(--primary-color);
            --bs-btn-hover-bg: var(--primary-color);
            --bs-btn-hover-border-color: var(--primary-color);
        }

        .text-primary {
            color: var(--primary-color) !important;
        }

        .price-text {
            color: var(--price-color) !important;
        }

        .bg-primary {
            background-color: var(--primary-color) !important;
        }

        /* --- Customer Sidebar Styles --- */
        .beauty-sidebar-menu .list-group-item {
            border-radius: 0.5rem;
            margin-bottom: 5px;
            border: 1px solid transparent;
            font-weight: 500;
        }

        .beauty-sidebar-menu .list-group-item.active {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            color: var(--white);
        }

        .beauty-sidebar-menu .list-group-item:not(.active):hover {
            background-color: #f8f0f5;
            color: var(--primary-color);
        }

        .beauty-sidebar-menu .list-group-item i {
            font-size: 1.1rem;
            vertical-align: middle;
        }
    </style>

    @foreach($pixels as $pixel)
        <!-- Facebook Pixel Code -->
        <script>
            !(function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = "2.0";
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s);
            })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
            fbq("init", "{{{$pixel->code}}}");
            fbq("track", "PageView");
        </script>
        <noscript>
            <img height="1" width="1" style="display: none;"
                src="https://www.facebook.com/tr?id={{{$pixel->code}}}&ev=PageView&noscript=1" />
        </noscript>
        <!-- End Facebook Pixel Code -->
    @endforeach


    @foreach($gtm_code as $gtm)
        <!-- Google tag (gtag.js) -->
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-{{ $gtm->code }}');
        </script>
        <!-- End Google Tag Manager -->
    @endforeach


    <link rel="stylesheet" href="{{asset('/frontEnd/css/style_tow.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontEnd/css/style.css')}}" />
    <link rel="stylesheet" href="{{asset('/frontEnd/fonts/bebas-regular-webfont.woff2')}}">

    <link rel="stylesheet" href="{{ asset('frontEnd/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('frontEnd/css/slick-theme.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.js" type="text/javascript"></script>
    <script src="https://cdn-script.com/ajax/libs/jquery/3.7.1/jquery.min.js" type="text/javascript"></script>
    <link href="https://fonts.cdnfonts.com/css/bebas" rel="stylesheet">
    <style>
        .main-slider img.img-fluid {
            width: 100% !important;
            height: auto !important;
            background-size: cover;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body>
    <header>
        <section class="top-header" style="background: rgb(43, 45, 66);">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h3><a href="" target="_blank"><span>Step into the Festive Season with Sailor</span></a>
                        </h3>
                    </div>
                </div>
            </div>
        </section>
        <section class="first-nav">
            <nav class="navbar navbar-expand-lg bg-white">
                <div class="container">
                    <span class="navbar-text">Sailing Life</span>
                    <ul class="navbar-nav ms-auto mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/login">log in</a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="/page/about-us">about us</a>
                        </li>
                        <li class="nav-item d-none d-lg-none">
                            <a class="nav-link" href="/blog">blog</a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="/login">my wishlist</a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="/cart">cart</a>
                        </li>
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link" href="/compare">compare(0)</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>
        <section class="middle-nav" id="top_fixe">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <div class="row align-items-center">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-2">
                        <a href="{{route('home')}}">
                            <div class="logo-box">
                                <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 205.24 115.79">
                                    <defs></defs>
                                    <path class="cls-1"
                                        d="M35.1 95.53a14.7 14.7 0 01-4.32 10.85 16.43 16.43 0 01-11.88 4.47A16.54 16.54 0 017 106.42a14.61 14.61 0 01-4.6-10.89V86.2h11.74v15.91c0 4 1.58 6 4.76 6s4.54-2 4.54-6v-11.5c0-4.85-1.37-8.58-4.1-11.3L7 67.15c-3.08-3-4.62-7.51-4.62-13.35v-7.2a14.65 14.65 0 014.5-10.93q4.46-4.41 11.72-4.41t11.74 4.41a14.68 14.68 0 014.47 10.93v9.32H23.15V40c0-4-1.52-6-4.55-6s-4.46 2-4.46 6v10.33c0 4.86 1.34 8.58 4 11.23l12.34 12.16c3.1 3.1 4.62 7.55 4.62 13.42zM78 110.1H62.47V108a12.48 12.48 0 01-8.47 2.85c-8.32 0-12.46-4.57-12.46-13.78V79.72c0-9.64 5.76-14.5 17.29-14.5h3.61V40c0-4-1.47-6-4.41-6s-4.33 2-4.33 6v15.92H42V46.6q0-7 4.36-11.15c2.92-2.76 6.81-4.19 11.7-4.19s8.84 1.43 11.74 4.19 4.34 6.49 4.34 11.15v60.79zm-15.48-4.82V68H59c-3.81 0-5.72 2-5.72 5.92v28.21c0 3.79 1.35 5.72 4 5.72a7.31 7.31 0 005.19-2.57zM99.86 110.1H80.63l3.78-2.71V34.72L80.63 32h15.5v75.4zM107 107.39V5h15.4l-3.73 2.7v99.74l3.73 2.71h-19.24zM161.7 95.53a14.39 14.39 0 01-4.8 10.89 18.89 18.89 0 01-24.31 0 14.25 14.25 0 01-4.84-10.89V46.6a14.11 14.11 0 014.84-10.88 18.79 18.79 0 0124.31 0 14.24 14.24 0 014.8 10.88zm-11.7 6.58V40c0-4-1.75-6-5.22-6s-5.27 2-5.27 6v62.1c0 4 1.75 6 5.27 6s5.22-1.95 5.22-5.99zM202.4 55.92h-11.74V40c0-3.84-1.19-5.75-3.59-5.75-1.56 0-3.13.86-4.68 2.56v70.57l3.8 2.71H166.9l3.82-2.71V34.72L166.9 32h15.49v2.14a12.25 12.25 0 018.27-2.87q11.75 0 11.74 13.78z">
                                    </path>
                                    <path class="cls-2" d="M96.13 23.86h-15.5l3.78-2.68L96.13 5.84v18z" fill="#d02128">
                                    </path>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5">
                        <div class="search-box-flex">
                            <div class="search-box">
                                <input type="search" class="form-control search-input" placeholder="Search" value="">
                            </div>
                            <div class="d-none">

                            </div>
                            <div class="dropdown-box">
                                <select class="form-select form-contol" aria-label="Default select example">
                                    <option value="">categories</option>


                                    @foreach($menucategories as $scategory)
                                        <option value="{{$scategory->name}}">{{$scategory->name}}</option>
                                    @endforeach


                                </select>
                            </div>
                            <div class="search-btn-box">
                                <button class="btn search-btn">
                                    <i class="icofont-search"></i>
                                </button>
                            </div>
                        </div>
                        <button type="button" class="btn mobile-search-btn">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-2">
                        <div class="support-icon-flex">
                            <div class="icon">
                                <i class="icofont-ui-call"></i>
                            </div>
                            <div class="text">
                                <p>call us now</p>
                                <h5><a class="text-black" href="tel:01777702000">01777702000</a></h5>
                            </div>
                        </div>
                    </div>
                    @php $subtotal = Cart::instance('shopping')->subtotal(); @endphp
                    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-3">
                        <div class="icon-sets">
                            <ul class="nav justify-content-end">
                                <li class="nav-item">
                                    <a class="nav-link" href="/login">
                                        <i class="fa-regular fa-heart"></i>
                                        <sup class="badge badge-pill">
                                            <span> 0 </span>
                                        </sup>
                                    </a>
                                </li>
                                <li class="nav-item position-relative">
                                    <a class="nav-link" href="{{route('customer.cart')}}">
                                        <i class="icofont-cart"></i>
                                        <sup class="badge badge-pill">
                                            <span class="text-d2">
                                                {{Cart::instance('shopping')->count()}}
                                            </span>
                                        </sup>
                                    </a>
                                    <div class="shopping-bag-main">
                                        <div class="shopping-title">
                                            <h3>Shopping bag ({{Cart::instance('shopping')->count()}})</h3>
                                        </div>
                                        {{-- <div class="shopping-scrol" data-simplebar="true">
                                            <h6>Add Something to Cart</h6>
                                        </div> --}}
                                        <div class="shopping-scrol" data-simplebar="true">
                                            @foreach (Cart::instance('shopping')->content() as $value)
                                                <div class="card mb-3">
                                                    <div class="row g-0">
                                                        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                                            <img src="{{ asset($value->options->image) }}" class="img-fluid"
                                                                alt="">
                                                        </div>
                                                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
                                                            <div class="card-body">
                                                                <div class="products-namebox">
                                                                    <h3 class="name">
                                                                        <a
                                                                            href="{{ route('product', $value->options->slug) }}">{{ Str::limit($value->name, 20) }}</a>
                                                                    </h3>
                                                                    <h3 class="price">৳ {{ $value->price }} </h3>
                                                                </div>
                                                                <div class="price-description">
                                                                    <h3>Qty: {{ $value->qty }}</h3>
                                                                    <h3>Variant: {{ $value->options->product_size }}</h3>
                                                                </div>
                                                                <div class="remove-product w-100">
                                                                    <a href="#" data-id="{{ $value->rowId }}"
                                                                        class="remove-item cart_remove">
                                                                        <i class="fa-regular fa-trash-can"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                        <script>
                                            $(document).on("click", ".cart_remove", function (e) {
                                                e.preventDefault();

                                                let rowId = $(this).data("id");

                                                $.ajax({
                                                    url: "{{ route('cart.remove') }}",
                                                    type: "GET",
                                                    data: { rowId: rowId },
                                                    success: function (response) {
                                                        $(".cartlist").html(response);
                                                    }
                                                });
                                                location.reload();
                                            });

                                        </script>
                                        <div class="amount-box">
                                            <h3 class="text-start"> subtotal </h3>
                                            <h3 class="text-end">৳ {{$subtotal}} </h3>
                                        </div>
                                        <div class="button-sets">
                                            <a class="btn btn-outline-primary view-shopping"
                                                href="{{route('customer.cart')}}">view shopping bag</a>
                                            <a class="btn btn-secondary checkout"
                                                href="{{route('customer.checkout')}}">checkout</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="final-nav">
            <nav class="navbar navbar-expand-lg ">
                <div class="container">
                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1"
                        id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel"
                        style="max-width: 70%">
                        <ul class="navbar-nav show-lg">
                            {{-- @foreach($menucategories as $scategory)
                            <li class="nav-item dropdown has-megamenu">
                                <a class="nav-link dropdown-toggle "
                                    href="{{url('category/' . $scategory->slug)}}">{{$scategory->name}}
                                    @if($scategory->subcategories->count() > 0)
                                    <div class="dropdown-menu megamenu " role="menu">
                                        <div class="row g-3">
                                            <div class="col-xs-12 col-md-12 col-md-12 col-lg-12">
                                                <div class="menugrid-main">
                                                    <div class="gridbox-single">
                                                        <div class="left-image-box">
                                                            <a href="#" class="">
                                                                <img src="{{ asset('/frontEnd/images/singapore.jpg') }}"
                                                                    alt="" class="img-fluid">
                                                            </a>
                                                        </div>
                                                    </div>

                                                    @foreach($scategory->subcategories->take(4) as $subcategory)
                                                    <div class="gridbox-single">
                                                        <div class="col-megamenu">
                                                            <h6 class="title">
                                                                <a href="/category/clearance-sale-2025-men-collection">Men
                                                                    Collection</a>
                                                            </h6>
                                                            <ul class="list-unstyled"></ul>
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                    <div class="gridbox-single">
                                                        <a href="#" class="">
                                                            <img src="{{ asset('/frontEnd/images/sailorbucket.jpg') }}"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </div>
                                                    <div class="gridbox-single">
                                                        <a href="#" class="">
                                                            <img src="{{ asset('/frontEnd/images/sailorbucket.jpg') }}"
                                                                alt="" class="img-fluid">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </a>
                            </li>
                            @endforeach --}}

                            @foreach($menucategories as $scategory)
                                <li class="nav-item dropdown has-megamenu">
                                    <a class="nav-link dropdown-toggle" href="{{ url('category/' . $scategory->slug) }}">
                                        {{ $scategory->name }}
                                        @if($scategory->subcategories->count() > 0)
                                            <div class="dropdown-menu megamenu" role="menu">
                                                <div class="row g-3">
                                                    <div class="col-12">
                                                        <div class="menugrid-main">

                                                            {{-- Left Image --}}
                                                            <div class="gridbox-single left-image-box">
                                                                <a href="#">
                                                                    <img src="{{ asset('/frontEnd/images/singapore.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </div>

                                                            {{-- Subcategories --}}
                                                            @php
                                                                $subcategories = $scategory->subcategories;
                                                                $maxColumns = 4;
                                                            @endphp

                                                            @foreach($subcategories->take($maxColumns) as $subcategory)
                                                                <div class="gridbox-single">
                                                                    <div class="col-megamenu">
                                                                        <h6 class="title">
                                                                            <a href="{{url('subcategory/' . $subcategory->slug)}}">
                                                                                {{$subcategory->subcategoryName}}
                                                                            </a>
                                                                        </h6>
                                                                        <ul class="list-unstyled">

                                                                            @foreach($subcategory->childcategories as $childcat)
                                                                                <li class="childcategory">
                                                                                    <a href="{{url('products/' . $childcat->slug)}}"
                                                                                        class="menu-childcategory-name">{{$childcat->childcategoryName}}</a>
                                                                                </li>
                                                                            @endforeach
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            @endforeach

                                                            {{-- খালি column যদি কম থাকে --}}
                                                            @for($i = $subcategories->count(); $i < $maxColumns; $i++)
                                                                <div class="gridbox-single"></div>
                                                            @endfor

                                                            {{-- Right Images --}}
                                                            <div class="gridbox-single">
                                                                <a href="#">
                                                                    <img src="{{ asset('/frontEnd/images/sailorbucket.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </div>
                                                            <div class="gridbox-single">
                                                                <a href="#">
                                                                    <img src="{{ asset('/frontEnd/images/sailorbucket.jpg') }}"
                                                                        alt="" class="img-fluid">
                                                                </a>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    </a>
                                </li>
                            @endforeach




                            <li class="nav-item d-xl-none d-lg-none d-md-block d-sm-block d-xs-block">
                                <a class="nav-link" href="/?cat_id=">About Us</a>
                            </li>
                            <li class="nav-item d-xl-none d-lg-none d-md-block d-sm-block d-xs-block">
                                <a class="nav-link" href="/blog">Blog</a>
                            </li>
                        </ul>

                        <div class="MobileMenu-main">
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                @foreach($menucategories as $scategory)
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapse{{$scategory->id}}"
                                                aria-expanded="false" aria-controls="flush-collapse{{$scategory->id}}">
                                                <a href="{{url('category/' . $scategory->slug)}}">{{$scategory->name}}</a>
                                            </button>
                                        </h2>
                                        @if($scategory->subcategories->count() > 0)
                                            <div id="flush-collapse{{$scategory->id}}" class="accordion-collapse collapse"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">
                                                    <ul>
                                                        @foreach($scategory->subcategories as $subcategory)
                                                            <li class="parent-subcategory">
                                                                <a href="{{url('subcategory/' . $subcategory->slug)}}"
                                                                    class="menu-subcategory-name">{{$subcategory->subcategoryName}}</a>
                                                                @if($subcategory->childcategories->count() > 0)
                                                                    <span class="menu-subcategory-toggle"><i
                                                                            class="fa fa-chevron-down"></i></span>
                                                                @endif
                                                                <ul class="third-nav" style="display: none;">
                                                                    @foreach($subcategory->childcategories as $childcat)
                                                                        <li class="childcategory">
                                                                            <a href="{{url('products/' . $childcat->slug)}}"
                                                                                class="menu-childcategory-name">{{$childcat->childcategoryName}}</a>
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </section>


    </header>




    <div id="content">
        @yield('content')
    </div>

    <!-- Footer Section -->




    <footer class="jsx-dc0f4aac11d231c9 footer-main">
        <div class="jsx-dc0f4aac11d231c9 container-fluid">
            <div class="jsx-dc0f4aac11d231c9 row">
                <div class="jsx-dc0f4aac11d231c9 col-xs-12 col-sm-6 col-md-4 col-lg-3 footer-col">
                    <div class="jsx-dc0f4aac11d231c9 footer-title">
                        <h3 class="jsx-dc0f4aac11d231c9">CONTACT INFO </h3>
                    </div>
                    <div class="jsx-dc0f4aac11d231c9 footer-navs">
                        <ul class="jsx-dc0f4aac11d231c9 nav flex-column">
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a href="#"
                                    class="jsx-dc0f4aac11d231c9 nav-link ">NINAKABBO 227/A Tejgaon-Gulshan Link Road
                                    Postal Code: 1208 Dhaka, Bangladesh</a></li>
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a href="#"
                                    class="jsx-dc0f4aac11d231c9 nav-link">+8801777758704,+8801777758713</a></li>
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a href="#"
                                    class="jsx-dc0f4aac11d231c9 nav-link text-lowercase">hello@sailor.com.bd</a>
                            </li>
                        </ul>
                        <div class="jsx-dc0f4aac11d231c9 footer-social-icons">
                            <ul class="jsx-dc0f4aac11d231c9">
                                <li class="jsx-dc0f4aac11d231c9 nav-item first-nav-social-icon"><a
                                        href="https://www.facebook.com/sailinglife.sailor"
                                        class="jsx-dc0f4aac11d231c9 nav-link"><i
                                            class="jsx-dc0f4aac11d231c9 icofont-facebook"></i></a></li>
                                <li class="jsx-dc0f4aac11d231c9 nav-item first-nav-social-icon"><a
                                        href="https://www.instagram.com/sailor.bd"
                                        class="jsx-dc0f4aac11d231c9 nav-link"><i
                                            class="jsx-dc0f4aac11d231c9 icofont-instagram"></i></a></li>
                                <li class="jsx-dc0f4aac11d231c9 nav-item first-nav-social-icon"><a
                                        href="https://www.youtube.com/@SailorbyEpyllion"
                                        class="jsx-dc0f4aac11d231c9 nav-link"><i
                                            class="jsx-dc0f4aac11d231c9 icofont-youtube"></i></a></li>
                                <li class="jsx-dc0f4aac11d231c9 nav-item first-nav-social-icon"><a
                                        href="https://www.linkedin.com/company/sailor-by-epyllion/"
                                        class="jsx-dc0f4aac11d231c9 nav-link"><i
                                            class="jsx-dc0f4aac11d231c9 icofont-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="jsx-dc0f4aac11d231c9 col-xs-12 col-sm-6 col-md-4 col-lg-3 footer-col">
                    <div class="jsx-dc0f4aac11d231c9 footer-title">
                        <h3 class="jsx-dc0f4aac11d231c9">know us</h3>
                    </div>
                    <div class="jsx-dc0f4aac11d231c9 footer-navs">
                        <ul class="jsx-dc0f4aac11d231c9 nav flex-column">
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a class="nav-link " href="/page/who-we-are">Who
                                    we are</a></li>
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a class="nav-link "
                                    href="/page/Sailor-Club">Sailor Club</a></li>
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a class="nav-link "
                                    href="/page/Brand-Social-Responsibilities-BSR">Brand Social Responsibilities
                                    (BSR)</a></li>
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a class="nav-link " href="/page/Join-Us">Join
                                    Us</a></li>
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a class="nav-link " href="/page/blog">Blog</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="jsx-dc0f4aac11d231c9 col-xs-12 col-sm-6 col-md-4 col-lg-3 footer-col">
                    <div class="jsx-dc0f4aac11d231c9 footer-title">
                        <h3 class="jsx-dc0f4aac11d231c9">shopping information</h3>
                    </div>
                    <div class="jsx-dc0f4aac11d231c9 footer-navs">
                        <ul class="jsx-dc0f4aac11d231c9 nav flex-column">
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a class="nav-link "
                                    href="/page/privacy-policy">Privacy Policy Page</a></li>
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a class="nav-link " href="/page/Size-Guide">Size
                                    Guide</a></li>
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a class="nav-link " href="/page/how-to-shop">How
                                    to Shop</a></li>
                        </ul>
                    </div>
                </div>
                <div class="jsx-dc0f4aac11d231c9 col-xs-12 col-sm-6 col-md-4 col-lg-3 footer-col">
                    <div class="jsx-dc0f4aac11d231c9 footer-title">
                        <h3 class="jsx-dc0f4aac11d231c9">SERVICE INFORMATION </h3>
                    </div>
                    <div class="jsx-dc0f4aac11d231c9 footer-navs">
                        <ul class="jsx-dc0f4aac11d231c9 nav flex-column">
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a class="nav-link "
                                    href="/page/return-policy">Return and Exchange</a></li>
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a class="nav-link "
                                    href="/page/Shipping--Charges">Shipping &amp; Charges</a></li>
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a class="nav-link "
                                    href="/page/Customer-Service">Customer Service</a></li>
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a class="nav-link "
                                    href="/page/Terms-and-Conditions">Terms and Conditions</a></li>
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a class="nav-link " href="/store-locator">Store
                                    Locator</a></li>
                        </ul>
                    </div>
                </div>
                <div class="jsx-dc0f4aac11d231c9 col-xs-12 col-sm-6 col-md-4 col-lg-3 footer-col d-none">
                    <div class="jsx-dc0f4aac11d231c9 footer-title">
                        <h3 class="jsx-dc0f4aac11d231c9">category</h3>
                    </div>
                    <div class="jsx-dc0f4aac11d231c9 footer-navs">
                        <ul class="jsx-dc0f4aac11d231c9 nav flex-column">
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a class="nav-link " href="#">Clearance Sale
                                    2025</a></li>
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a class="nav-link "
                                    href="/category/eid-ul-adha-collection25-iad0d">Latest Collection/25</a></li>
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a class="nav-link "
                                    href="/category/sale-offer-2025">Sale Offer</a></li>
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a class="nav-link " href="#">Winter/25</a></li>
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a class="nav-link " href="#">MEN</a></li>
                            <li class="jsx-dc0f4aac11d231c9 nav-item"><a class="nav-link " href="#">WOMEN</a></li>
                        </ul>
                    </div>
                </div>
                <div class="jsx-dc0f4aac11d231c9 col-xs-12 col-sm-6 col-md-4 col-lg-3 footer-col d-none  ">
                    <div class="jsx-dc0f4aac11d231c9 footer-title">
                        <h3 class="jsx-dc0f4aac11d231c9">subscribe us</h3>
                    </div>
                    <div class="jsx-dc0f4aac11d231c9 footer-navs">
                        <div class="jsx-dc0f4aac11d231c9 form-group">
                            <p class="jsx-dc0f4aac11d231c9 mb-3">Keep yourself updated with the latest Sailor News,
                                Fashion Updates and Blogs! Subscribe here!</p><input type="email"
                                id="exampleFormControlInput1" placeholder="Type your email"
                                class="jsx-dc0f4aac11d231c9 form-control" value=""><button
                                class="jsx-dc0f4aac11d231c9 btn text-white btn-outline-secondary mt-2">Follow
                                Us</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <section style="padding:15px 0px;background:#3b3d56;border-top:1px dotted #fff"
        class="jsx-dc0f4aac11d231c9 copyright">
        <div class="jsx-dc0f4aac11d231c9 container">
            <div class="jsx-dc0f4aac11d231c9 row">
                <div class="jsx-dc0f4aac11d231c9 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <p style="margin-bottom:0px;color:#fff;font-size:14px;text-transform:capitalize"
                        class="jsx-dc0f4aac11d231c9 text-center text-md-start">Copyright ©<!-- -->2025<!-- -->
                        Sailor. All rights reserved</p>
                </div>
                <div class="jsx-dc0f4aac11d231c9 col-xs-12 col-sm-12 col-md-6 col-lg-6">
                    <p style="margin-bottom:0px;color:#fff;font-size:14px;text-transform:capitalize;text-align:end"
                        class="jsx-dc0f4aac11d231c9 text-center text-md-end">system design &amp; developed by :
                        <a href="https://vida.com.bd/" target="_blank" style="color:#d41f27"
                            class="jsx-dc0f4aac11d231c9">&nbsp; Vida Technology.</a>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="fixmenu-main">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/wishlist">
                                <i class="fa-regular fa-heart"></i>
                                <span class="badge badge-pill bg-info"><sup>0</sup></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/cart">
                                <i class="icofont-cart-alt"></i>
                                <span class="badge badge-pill bg-danger"><sup>0</sup></span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">
                                <i class="far fa-user"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


        <div id="custom-modal"></div>
    <div id="page-overlay"></div>
    <div id="loading">
        <div class="custom-loader"></div>
    </div>


    <script>
        $(document).on("click", ".cart_remove", function (e) {
            e.preventDefault();

            let rowId = $(this).data("id");

            $.ajax({
                url: "{{ route('cart.remove') }}",
                type: "GET",
                data: { rowId: rowId },
                success: function (response) {
                    $(".cartlist").html(response);
                }
            });
            location.reload(); -
        });
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    {{--
    <script src="/assets/js/script.js" defer=""></script> --}}

    <script src="{{asset('/frontEnd/js/script.js')}}"></script>


    <script src="{{ asset('frontEnd/js/jquery.min.js') }}"></script>
    <script src="{{ asset('frontEnd/js/slick.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>



    <script src="{{asset('/frontEnd/js/jquery-3.6.3.min.js')}}"></script>
    <script src="{{asset('/frontEnd/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/frontEnd/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('/frontEnd/js/mobile-menu.js')}}"></script>
    <script src="{{asset('/frontEnd/js/wsit-menu.js')}}"></script>
    <script src="{{asset('/frontEnd/js/mobile-menu-init.js')}}"></script>
    <script src="{{asset('/frontEnd/js/wow.min.js')}}"></script>
    <script>
        new WOW().init();
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- feather icon -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
    <script>
        feather.replace();
    </script>
    <script src="{{asset('/backEnd/assets/js/toastr.min.js')}}"></script>
    {!! Toastr::message() !!} @stack('script')
    <script>
        $(".quick-view-btn").on("click", function () {
            var id = $(this).data("id");
            $("#loading").show();
            if (id) {
                $.ajax({
                    type: "GET",
                    data: {
                        id: id
                    },
                    url: "{{route('quickview')}}",
                    success: function (data) {
                        if (data) {
                            $("#custom-modal").html(data);
                            $("#custom-modal").show();
                            $("#loading").hide();
                            $("#page-overlay").show();
                        }
                    },
                });
            }
        });
    </script>
    <!-- quick view end -->
    <!-- cart js start -->
    <script>
        $(".addcartbutton").on("click", function () {
            var id = $(this).data("id");
            var qty = 1;
            if (id) {
                $.ajax({
                    cache: "false",
                    type: "GET",
                    url: "{{url('add-to-cart')}}/" + id + "/" + qty,
                    dataType: "json",
                    success: function (data) {
                        if (data) {
                            toastr.success('Success', 'Product add to cart successfully');
                            return cart_count() + mobile_cart();
                        }
                    },
                });
            }
        });
        $(".cart_store").on("click", function () {
             
        event.preventDefault();
        event.stopPropagation();

            var id = $(this).data("id");
            var qty = $(this).parent().find("input").val();
            if (id) {
                $.ajax({
                    type: "GET",
                    data: {
                        id: id,
                        qty: qty ? qty : 1
                    },
                    url: "{{route('cart.store')}}",
                    // success: function (data) {
                    //     if (data) {
                    //         toastr.success('Success', 'Product add to cart succfully');
                    //         return cart_count() + mobile_cart();
                    //     }
                    // },
                    
                })
        .done(function (res) {
            if (res.success) {
                toastr.success(res.message);
                
                location.reload();
                // return cart_count() + mobile_cart();
            }})}
        });





//sagor vai

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
            url: '{{ route('customer.cart') }}',
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
    

//sagor vai






        $(".cart_remove").on("click", function () {
            var id = $(this).data("id");
            if (id) {
                $.ajax({
                    type: "GET",
                    data: {
                        id: id
                    },
                    url: "{{route('cart.remove')}}",
                    success: function (data) {
                        if (data) {
                            $(".cartlist").html(data);
                            return cart_count() + mobile_cart() + cart_summary();
                        }
                    },
                });
            }
        });

        $(".cart_increment").on("click", function () {
            var id = $(this).data("id");
            if (id) {
                $.ajax({
                    type: "GET",
                    data: {
                        id: id
                    },
                    url: "{{route('cart.increment')}}",
                    success: function (data) {
                        if (data) {
                            $(".cartlist").html(data);
                            return cart_count() + mobile_cart();
                        }
                    },
                });
            }
        });

        $(".cart_decrement").on("click", function () {
            var id = $(this).data("id");
            if (id) {
                $.ajax({
                    type: "GET",
                    data: {
                        id: id
                    },
                    url: "{{route('cart.decrement')}}",
                    success: function (data) {
                        if (data) {
                            $(".cartlist").html(data);
                            return cart_count() + mobile_cart();
                        }
                    },
                });
            }
        });

        function cart_count() {
            $.ajax({
                type: "GET",
                url: "{{route('cart.count')}}",
                success: function (data) {
                    if (data) {
                        $("#cart-qty").html(data);
                    } else {
                        $("#cart-qty").empty();
                    }
                },
            });
        }

        function mobile_cart() {
            $.ajax({
                type: "GET",
                url: "{{route('mobile.cart.count')}}",
                success: function (data) {
                    if (data) {
                        $(".mobilecart-qty").html(data);
                    } else {
                        $(".mobilecart-qty").empty();
                    }
                },
            });
        }

        function cart_summary() {
            $.ajax({
                type: "GET",
                url: "{{route('shipping.charge')}}",
                dataType: "html",
                success: function (response) {
                    $(".cart-summary").html(response);
                },
            });
        }
    </script>
    <!-- cart js end -->
    <script>
        $(".search_click").on("keyup change", function () {
            var keyword = $(".search_keyword").val();
            $.ajax({
                type: "GET",
                data: {
                    keyword: keyword
                },
                url: "{{route('livesearch')}}",
                success: function (products) {
                    if (products) {
                        $(".search_result").html(products);
                    } else {
                        $(".search_result").empty();
                    }
                },
            });
        });
        $(".msearch_click").on("keyup change", function () {
            var keyword = $(".msearch_keyword").val();
            $.ajax({
                type: "GET",
                data: {
                    keyword: keyword
                },
                url: "{{route('livesearch')}}",
                success: function (products) {
                    if (products) {
                        $("#loading").hide();
                        $(".search_result").html(products);
                    } else {
                        $(".search_result").empty();
                    }
                },
            });
        });
    </script>
    <!-- search js start -->
    <script></script>
    <script></script>
    <script>
        $(".district").on("change", function () {
            var id = $(this).val();
            $.ajax({
                type: "GET",
                data: {
                    id: id
                },
                url: "{{route('districts')}}",
                success: function (res) {
                    if (res) {
                        $(".area").empty();
                        $(".area").append('<option value="">Select..</option>');
                        $.each(res, function (key, value) {
                            $(".area").append('<option value="' + key + '" >' + value + "</option>");
                        });
                    } else {
                        $(".area").empty();
                    }
                },
            });
        });
    </script>
    <script>
        $(".toggle").on("click", function () {
            $("#page-overlay").show();
            $(".mobile-menu").addClass("active");
        });

        $("#page-overlay").on("click", function () {
            $("#page-overlay").hide();
            $(".mobile-menu").removeClass("active");
            $(".feature-products").removeClass("active");
        });

        $(".mobile-menu-close").on("click", function () {
            $("#page-overlay").hide();
            $(".mobile-menu").removeClass("active");
        });

        $(".mobile-filter-toggle").on("click", function () {
            $("#page-overlay").show();
            $(".feature-products").addClass("active");
        });
    </script>
    <script>
        $(document).ready(function () {
            $(".parent-category").each(function () {
                const menuCatToggle = $(this).find(".menu-category-toggle");
                const secondNav = $(this).find(".second-nav");

                menuCatToggle.on("click", function () {
                    menuCatToggle.toggleClass("active");
                    secondNav.slideToggle("fast");
                    $(this).closest(".parent-category").toggleClass("active");
                });
            });
            $(".parent-subcategory").each(function () {
                const menuSubcatToggle = $(this).find(".menu-subcategory-toggle");
                const thirdNav = $(this).find(".third-nav");

                menuSubcatToggle.on("click", function () {
                    menuSubcatToggle.toggleClass("active");
                    thirdNav.slideToggle("fast");
                    $(this).closest(".parent-subcategory").toggleClass("active");
                });
            });
        });
    </script>

    <script>
        var menu = new MmenuLight(document.querySelector("#menu"), "all");

        var navigator = menu.navigation({
            selectedClass: "Selected",
            slidingSubmenus: true,
            // theme: 'dark',
            title: "ক্যাটাগরি",
        });

        var drawer = menu.offcanvas({
            // position: 'left'
        });

        //  Open the menu.
        document.querySelector('a[href="#menu"]').addEventListener("click", (evnt) => {
            evnt.preventDefault();
            drawer.open();
        });
    </script>

    <script>
        // document.addEventListener("DOMContentLoaded", function () {
        //     window.addEventListener("scroll", function () {
        //         if (window.scrollY > 200) {
        //             document.getElementById("navbar_top").classList.add("fixed-top");
        //         } else {
        //             document.getElementById("navbar_top").classList.remove("fixed-top");
        //             document.body.style.paddingTop = "0";
        //         }
        //     });
        // });
        /*=== Main Menu Fixed === */
        // document.addEventListener("DOMContentLoaded", function () {
        //     window.addEventListener("scroll", function () {
        //         if (window.scrollY > 0) {
        //             document.getElementById("m_navbar_top").classList.add("fixed-top");
        //             // add padding top to show content behind navbar
        //             navbar_height = document.querySelector(".navbar").offsetHeight;
        //             document.body.style.paddingTop = navbar_height + "px";
        //         } else {
        //             document.getElementById("m_navbar_top").classList.remove("fixed-top");
        //             // remove padding top from body
        //             document.body.style.paddingTop = "0";
        //         }
        //     });
        // });
        /*=== Main Menu Fixed === */

        $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $(".scrolltop:hidden").stop(true, true).fadeIn();
            } else {
                $(".scrolltop").stop(true, true).fadeOut();
            }
        });
        $(function () {
            $(".scroll").click(function () {
                $("html,body").animate({
                    scrollTop: $(".gotop").offset().top
                }, "1000");
                return false;
            });
        });
    </script>
    <script>
        $(".filter_btn").click(function () {
            $(".filter_sidebar").addClass('active');
            $("body").css("overflow-y", "hidden");
        })
        $(".filter_close").click(function () {
            $(".filter_sidebar").removeClass('active');
            $("body").css("overflow-y", "auto");
        })
    </script>

    <!-- Submenu JavaScript -->
    <script>
        $(document).ready(function () {
            // Show submenu on hover
            $('.modern-nav-dropdown').hover(
                function () {
                    $(this).find('.modern-submenu').fadeIn(200);
                },
                function () {
                    $(this).find('.modern-submenu').fadeOut(200);
                }
            );

            // Show child menu on hover
            $('.modern-submenu-item').hover(
                function () {
                    $(this).find('.modern-childmenu').fadeIn(200);
                },
                function () {
                    $(this).find('.modern-childmenu').fadeOut(200);
                }
            );

            // Add hover effects to menu items
            $('.modern-submenu-link, .modern-childmenu-link').hover(
                function () {
                    $(this).css('background-color', '#f4c430');
                    $(this).css('color', '#2c2c2c');
                },
                function () {
                    $(this).css('background-color', 'transparent');
                    $(this).css('color', 'white');
                }
            );

            // Add hover effects to header icons
            // $('.modern-user-actions').hover(
            //     function () {
            //         $(this).css('transform', 'translateY(-2px)');
            //         $(this).css('color', '#d4a574');
            //         $(this).find('i').css('color', '#c19660');
            //     },
            //     function () {
            //         $(this).css('transform', 'translateY(0)');
            //         $(this).css('color', '#333');
            //         $(this).find('i').css('color', '#d4a574');
            //     }
            // );
        });
    </script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K29C9BKJ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Facebook Tracking JavaScript -->
    @if($generalsetting->facebook_pixel_id && $generalsetting->facebook_server_side_tracking)
        <script src="{{ asset('assets/js/facebook-tracking.js') }}"></script>
    @endif

    <!-- Meta Pixel Code -->
    <script>
        ! function (f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function () {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '882050187180701');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=882050187180701&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <!-- Modern Product Interactions -->
    <script src="{{ asset('/frontEnd/js/modern-product-interactions.js') }}"></script>
</body>

</html>