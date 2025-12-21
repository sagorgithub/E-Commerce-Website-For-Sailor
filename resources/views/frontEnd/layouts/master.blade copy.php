<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title') - {{$generalsetting->name}}</title>
    <!-- App favicon -->

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
        /* ===== CUSTOM CSS WITH .sv- PREFIX ===== */

        /* Global Styles */
        .sv-body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
        }

        /* Header Styles */
        .sv-header {
            background-color: #2c2c2c;
            padding: 10px 0;
        }

        .sv-logo {
            color: #f4c430;
            font-size: 1.8rem;
            font-weight: bold;
            text-decoration: none;
            font-style: italic;
        }

        .sv-search-container {
            position: relative;
            max-width: 500px;
            margin: 0 auto;
        }

        .sv-search-input {
            border-radius: 25px;
            padding: 8px 50px 8px 15px;
            border: none;
            width: 100%;
        }

        .sv-search-btn {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            background-color: #f4c430;
            border: none;
            border-radius: 0 25px 25px 0;
            padding: 0 20px;
            color: #2c2c2c;
            font-weight: bold;
        }

        .sv-user-actions {
            color: #f4c430;
            text-decoration: none;
            margin-left: 20px;
        }

        .sv-cart-count {
            background-color: #f4c430;
            color: #2c2c2c;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 0.8rem;
            margin-left: 5px;
        }

        /* Navigation Styles */
        .sv-nav {
            background-color: #3a3a3a;
            padding: 0;
        }

        .sv-nav-item {
            color: white;
            text-decoration: none;
            padding: 15px 20px;
            display: inline-block;
            border-right: 1px solid #555;
            transition: background-color 0.3s ease;
        }

        .sv-nav-item:hover,
        .sv-nav-item.active {
            background-color: #f4c430;
            color: #2c2c2c;
        }

        /* Hero Section Styles */
        .sv-hero {
            background: linear-gradient(135deg, #d4a574 0%, #c19660 100%);
            min-height: 500px;
            position: relative;
            overflow: hidden;
        }

        .sv-hero-content {
            position: relative;
            z-index: 2;
            padding: 80px 0;
        }

        .sv-hero-brand {
            font-size: 0.9rem;
            color: #8b6f47;
            letter-spacing: 2px;
            margin-bottom: 10px;
        }

        .sv-hero-subtitle {
            font-size: 1.2rem;
            color: #6b5b4d;
            font-style: italic;
            margin-bottom: 20px;
        }

        .sv-hero-title {
            font-size: 4rem;
            font-weight: 900;
            color: rgba(255, 255, 255, 0.3);
            letter-spacing: 5px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .sv-hero-cta {
            background-color: #2c2c2c;
            color: white;
            padding: 15px 30px;
            font-size: 1.5rem;
            font-weight: bold;
            letter-spacing: 2px;
            border: none;
            transition: transform 0.3s ease;
        }

        .sv-hero-cta:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .sv-hero-image {
            position: absolute;
            right: 10%;
            top: 50%;
            transform: translateY(-50%);
            max-width: 400px;
            z-index: 1;
        }

        /* Product Section Styles */
        .sv-products-section {
            padding: 60px 0;
            background-color: #f8f9fa;
        }

        .sv-section-title {
            background-color: #2c2c2c;
            color: #f4c430;
            padding: 15px 40px;
            font-size: 1.5rem;
            font-weight: bold;
            letter-spacing: 2px;
            position: relative;
            display: inline-block;
            margin-bottom: 40px;
        }

        .sv-section-title::before,
        .sv-section-title::after {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            width: 30px;
            background-color: #2c2c2c;
        }

        .sv-section-title::before {
            left: -30px;
            transform: skew(-20deg);
        }

        .sv-section-title::after {
            right: -30px;
            transform: skew(20deg);
        }

        /* Product Card Styles */
        .sv-product-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin-bottom: 30px;
            height: 100%;
        }

        .sv-product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        .sv-product-image {
            width: 100%;
            height: 300px;
            object-fit: cover;
            object-position: center;
        }

        .sv-product-info {
            padding: 20px;
            text-align: center;
        }

        .sv-product-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #2c2c2c;
            margin-bottom: 10px;
            min-height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sv-product-price {
            margin-bottom: 15px;
        }

        .sv-price-old {
            color: #999;
            text-decoration: line-through;
            margin-right: 10px;
        }

        .sv-price-current {
            color: #2c2c2c;
            font-weight: bold;
            font-size: 1.2rem;
        }

        .sv-order-btn {
            background-color: #2c2c2c;
            color: #f4c430;
            border: none;
            padding: 12px 30px;
            font-weight: bold;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            width: 100%;
        }

        .sv-order-btn:hover {
            background-color: #f4c430;
            color: #2c2c2c;
            transform: translateY(-2px);
        }

        /* Call to Action Styles */
        .sv-cta-section {
            background-color: #2c2c2c;
            color: white;
            padding: 60px 0;
            text-align: center;
        }

        .sv-cta-title {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #f4c430;
        }

        .sv-cta-subtitle {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .sv-cta-btn {
            background-color: #f4c430;
            color: #2c2c2c;
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            transition: transform 0.3s ease;
        }

        .sv-cta-btn:hover {
            transform: scale(1.05);
        }

        /* Footer Styles */
        .sv-footer {
            background-color: #1a1a1a;
            color: white;
            padding: 40px 0 20px;
        }

        .sv-footer-section h5 {
            color: #f4c430;
            margin-bottom: 20px;
        }

        .sv-footer-link {
            color: #ccc;
            text-decoration: none;
            display: block;
            margin-bottom: 8px;
            transition: color 0.3s ease;
        }

        .sv-footer-link:hover {
            color: #f4c430;
        }

        .sv-social-icons a {
            color: #ccc;
            font-size: 1.5rem;
            margin-right: 15px;
            transition: color 0.3s ease;
        }

        .sv-social-icons a:hover {
            color: #f4c430;
        }

        .sv-footer-bottom {
            border-top: 1px solid #333;
            margin-top: 30px;
            padding-top: 20px;
            text-align: center;
            color: #999;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sv-hero-title {
                font-size: 2.5rem;
            }

            .sv-hero-image {
                position: static;
                transform: none;
                margin-top: 30px;
                max-width: 100%;
            }

            .sv-nav-item {
                display: block;
                border-right: none;
                border-bottom: 1px solid #555;
            }

            .sv-user-actions {
                margin-left: 0;
                margin-top: 10px;
            }
        }

        @media (max-width: 576px) {
            .sv-product-card {
                margin-bottom: 20px;
            }

            .sv-section-title {
                font-size: 1.2rem;
                padding: 12px 30px;
            }
        }
    </style>

    <!-- ashik -->
        <style>
            :root {
                --bs-primary-rgb: 229, 46, 138; /* #E52E8A */
                --bs-body-font-family: 'Hind Siliguri', sans-serif;
                --bs-body-color: #2D3748;
            }
            body {
                background-color: #F9FAFB;
            }
            .btn-primary {
                --bs-btn-bg: #E52E8A;
                --bs-btn-border-color: #E52E8A;
                --bs-btn-hover-bg: #c22171;
                --bs-btn-hover-border-color: #b81e6a;
            }
            .btn-outline-primary {
                --bs-btn-color: #E52E8A;
                --bs-btn-border-color: #E52E8A;
                --bs-btn-hover-bg: #E52E8A;
                --bs-btn-hover-border-color: #E52E8A;
            }
            .text-primary {
                color: #E52E8A !important;
            }
            .hero-slider .carousel-item {
                height: 80vh;
                min-height: 400px;
            }
            .hero-slider .carousel-item img {
                height: 100%;
                object-fit: cover;
            }
            .hero-slider .carousel-caption {
                background: rgba(0, 0, 0, 0.4);
                border-radius: 1rem;
                padding: 1.5rem;
            }
            .product-card {
                transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
            }
            .product-card:hover {
                transform: translateY(-5px);
                box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
            }
            .product-card .quick-view {
                opacity: 0;
                transition: opacity 0.3s ease;
            }
            .product-card:hover .quick-view {
                opacity: 1;
            }
            .btn-sm-text {
                font-size: 0.85rem;
            }
            .header-icon {
                font-size: 1.3rem;
                color: #4a5568;
                transition: color 0.2s ease-in-out;
            }
            .header-icon:hover {
                color: #E52E8A;
            }
            .form-control.rounded-pill {
                border-color: #e2e8f0;
            }
            .form-control.rounded-pill:focus {
                border-color: #E52E8A;
                box-shadow: 0 0 0 0.25rem rgba(229, 46, 138, 0.25);
            }
        </style>
    <!-- ashik -->

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

    @if($generalsetting->facebook_pixel_id && $generalsetting->facebook_server_side_tracking)
        <!-- Facebook Server-Side Tracking Configuration -->
        <script>
            window.facebookTrackingConfig = {
                pixelId: '{{ $generalsetting->facebook_pixel_id }}',
                apiVersion: '{{ $generalsetting->facebook_conversion_api_version }}',
                enhancedEcommerce: {
                    {
                $generalsetting - > facebook_enhanced_ecommerce ? 'true' : 'false'
            }
                },
            customEvents: {
                !!$generalsetting - > facebook_custom_events ?? '{}'!!
            }
            };
        </script>
    @endif

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
</head>

<body class="gotop">
    @php $subtotal = Cart::instance('shopping')->subtotal(); @endphp
    <div class="mobile-menu">
        <div class="mobile-menu-logo">
            <div class="logo-image">
                <img src="{{asset($generalsetting->white_logo)}}" alt="" />
            </div>
            <div class="mobile-menu-close">
                <i class="fa fa-times"></i>
            </div>
        </div>
        <ul class="first-nav">
            @foreach($menucategories as $scategory)
                <li class="parent-category">
                    <a href="{{url('category/' . $scategory->slug)}}" class="menu-category-name">
                        <img src="{{asset($scategory->image)}}" alt="" class="side_cat_img" />
                        {{$scategory->name}}
                    </a>
                    @if($scategory->subcategories->count() > 0)
                        <span class="menu-category-toggle">
                            <i class="fa fa-chevron-down"></i>
                        </span>
                    @endif
                    <ul class="second-nav" style="display: none;">
                        @foreach($scategory->subcategories as $subcategory)
                            <li class="parent-subcategory">
                                <a href="{{url('subcategory/' . $subcategory->slug)}}"
                                    class="menu-subcategory-name">{{$subcategory->subcategoryName}}</a>
                                @if($subcategory->childcategories->count() > 0)
                                    <span class="menu-subcategory-toggle"><i class="fa fa-chevron-down"></i></span>
                                @endif
                                <ul class="third-nav" style="display: none;">
                                    @foreach($subcategory->childcategories as $childcat)
                                        <li class="childcategory"><a href="{{url('products/' . $childcat->slug)}}"
                                                class="menu-childcategory-name">{{$childcat->childcategoryName}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @endforeach
        </ul>
    </div>
    <!-- ===== MODERN HEADER SECTION ===== -->
    <header class="modern-header">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-2 col-6">
                    <a href="{{route('home')}}" class="modern-logo">
                        @if($generalsetting->white_logo)
                            <img src="{{ asset($generalsetting->white_logo) }}"
                                alt="{{ $generalsetting->name ?? 'Sunnah Heaven' }}" style="max-height: 50px; width: auto;">
                        @else
                            {{ $generalsetting->name ?? 'SUNNAH HEAVEN' }}
                        @endif
                    </a>
                </div>
                <div class="col-md-6 col-12 order-md-2 order-3 mt-md-0 mt-2">
                    <div class="modern-search-container">
                        <form action="{{route('search')}}">
                            <input type="text" class="modern-search-input" placeholder="Search for products..."
                                name="keyword">
                            <button type="submit" class="modern-search-btn">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                </div>
                <div class="col-md-4 col-6 order-md-3 order-2 text-end">
                    <div class="d-flex justify-content-end align-items-center" style="gap: 20px;">
                        <a href="{{route('customer.order_track')}}" class="modern-user-actions"
                            style="display: flex; align-items: center; justify-content: center; text-decoration: none; color: #333; font-weight: 500; transition: all 0.3s ease; width: 40px; height: 40px; border-radius: 50%; background: rgba(255,255,255,0.1);"
                            title="Track Order">
                            <i class="fas fa-shipping-fast" style="font-size: 1.3rem; color: #d4a574;"></i>
                        </a>
                        @if(Auth::guard('customer')->user())
                            <a href="{{route('customer.account')}}" class="modern-user-actions"
                                style="display: flex; align-items: center; justify-content: center; text-decoration: none; color: #333; font-weight: 500; transition: all 0.3s ease; width: 40px; height: 40px; border-radius: 50%; background: rgba(255,255,255,0.1);"
                                title="{{Str::limit(Auth::guard('customer')->user()->name, 14)}}">
                                <i class="fas fa-user-circle" style="font-size: 1.3rem; color: #d4a574;"></i>
                            </a>
                        @else
                            <a href="{{route('customer.login')}}" class="modern-user-actions"
                                style="display: flex; align-items: center; justify-content: center; text-decoration: none; color: #333; font-weight: 500; transition: all 0.3s ease; width: 40px; height: 40px; border-radius: 50%; background: rgba(255,255,255,0.1);"
                                title="Login / Sign Up">
                                <i class="fas fa-sign-in-alt" style="font-size: 1.3rem; color: #d4a574;"></i>
                            </a>
                        @endif
                        <a href="{{route('customer.checkout')}}" class="modern-user-actions"
                            style="display: flex; align-items: center; justify-content: center; text-decoration: none; color: #333; font-weight: 500; transition: all 0.3s ease; position: relative; width: 40px; height: 40px; border-radius: 50%; background: rgba(255,255,255,0.1);"
                            title="Cart - {{$subtotal}}">
                            <i class="fas fa-shopping-bag" style="font-size: 1.3rem; color: #d4a574;"></i>
                            <span class="modern-cart-count" id="cart_count"
                                style="position: absolute; top: -8px; right: -8px; background: #ff4757; color: white; border-radius: 50%; width: 18px; height: 18px; display: flex; align-items: center; justify-content: center; font-size: 0.7rem; font-weight: bold;">{{Cart::instance('shopping')->count()}}</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ===== MODERN NAVIGATION SECTION WITH SUBMENUS ===== -->
    <nav class="modern-nav" style="margin-bottom: 0; border-bottom: none;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="d-md-block d-none">
                        <a href="{{route('home')}}" class="modern-nav-item active">HOME</a>
                        @foreach ($menucategories as $scategory)
                            <div class="modern-nav-dropdown" style="display: inline-block; position: relative;">
                                <a href="{{ url('category/' . $scategory->slug) }}"
                                    class="modern-nav-item">{{ $scategory->name }}</a>
                                @if($scategory->subcategories->count() > 0)
                                    <div class="modern-submenu"
                                        style="position: absolute; top: 100%; left: 0; background: #2c2c2c; min-width: 200px; z-index: 1000; display: none; border-radius: 5px; box-shadow: 0 5px 15px rgba(0,0,0,0.2);">
                                        @foreach ($scategory->subcategories as $subcategory)
                                            <div class="modern-submenu-item" style="position: relative;">
                                                <a href="{{ url('subcategory/' . $subcategory->slug) }}" class="modern-submenu-link"
                                                    style="color: white; padding: 12px 20px; display: block; text-decoration: none; border-bottom: 1px solid #444; transition: background-color 0.3s ease;">{{ $subcategory->subcategoryName }}</a>
                                                @if($subcategory->childcategories->count() > 0)
                                                    <div class="modern-childmenu"
                                                        style="position: absolute; left: 100%; top: 0; background: #2c2c2c; min-width: 200px; z-index: 1001; display: none; border-radius: 5px; box-shadow: 0 5px 15px rgba(0,0,0,0.2);">
                                                        @foreach ($subcategory->childcategories as $childcat)
                                                            <a href="{{ url('products/' . $childcat->slug) }}" class="modern-childmenu-link"
                                                                style="color: white; padding: 12px 20px; display: block; text-decoration: none; border-bottom: 1px solid #444; transition: background-color 0.3s ease;">{{ $childcat->childcategoryName }}</a>
                                                        @endforeach
                                                    </div>
                                                @endif
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                    <div class="d-md-none">
                        <select class="form-select" style="background-color: #3a3a3a; color: white; border: none;">
                            <option>HOME</option>
                            @foreach ($menucategories as $scategory)
                                <option>{{ $scategory->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    </header>
    <div id="content">
        @yield('content')
    </div>
    <!-- content end -->
    <!-- ===== NEW SUNNAH HEAVEN FOOTER SECTION ===== -->
    <footer class="sv-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 sv-footer-section">
                    <h5>About {{ $generalsetting->name ?? 'Sunnah Heaven' }}</h5>
                    <p>Your trusted destination for authentic modest fashion. We provide high-quality Islamic clothing
                        that combines tradition with contemporary style.</p>
                    <div class="sv-social-icons">
                        @foreach($socialicons as $value)
                            <a href="{{$value->link}}" target="_blank"><i class="{{$value->icon}}"></i></a>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 sv-footer-section">
                    <h5>Quick Links</h5>
                    <a href="{{route('home')}}" class="sv-footer-link">Home</a>
                    <a href="{{route('contact')}}" class="sv-footer-link">About Us</a>
                    <a href="{{route('contact')}}" class="sv-footer-link">Contact</a>
                    <a href="#" class="sv-footer-link">Size Guide</a>
                    <a href="#" class="sv-footer-link">FAQ</a>
                </div>
                <div class="col-lg-3 col-md-6 sv-footer-section">
                    <h5>Categories</h5>
                    @foreach($menucategories as $category)
                        <a href="{{ url('category/' . $category->slug) }}" class="sv-footer-link">{{ $category->name }}</a>
                    @endforeach
                </div>
                <div class="col-lg-3 col-md-6 sv-footer-section">
                    <h5>Customer Service</h5>
                    <a href="#" class="sv-footer-link">Shipping Info</a>
                    <a href="#" class="sv-footer-link">Returns & Exchanges</a>
                    <a href="#" class="sv-footer-link">Privacy Policy</a>
                    <a href="#" class="sv-footer-link">Terms of Service</a>
                    <a href="{{route('customer.order_track')}}" class="sv-footer-link">Track Your Order</a>
                </div>
            </div>
            <div class="sv-footer-bottom">
                <p>&copy; {{ date('Y') }} {{ $generalsetting->name ?? 'Sunnah Heaven' }}. All rights reserved. |
                    Designed with ❤️ for the Muslim community</p>
            </div>
        </div>
    </footer>

    <div class="footer_nav">
        <ul>
            <li>
                <a class="toggle">
                    <span>
                        <i class="fa-solid fa-bars"></i>
                    </span>
                    <span>Category</span>
                </a>
            </li>

            <li>
                <a href="https://wa.me/8801314883211">
                    <span>
                        <i class="fa-solid fa-message"></i>
                    </span>
                    <span>Message</span>
                </a>
            </li>

            <li class="mobile_home">
                <a href="{{route('home')}}">
                    <span><i class="fa-solid fa-home"></i></span> <span>Home</span>
                </a>
            </li>

            <li>
                <a href="{{route('customer.checkout')}}">
                    <span>
                        <i class="fa-solid fa-cart-shopping"></i>
                    </span>
                    <span>Cart (<b class="mobilecart-qty">{{Cart::instance('shopping')->count()}}</b>)</span>
                </a>
            </li>
            @if(Auth::guard('customer')->user())
                <li>
                    <a href="{{route('customer.account')}}">
                        <span>
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span>Account</span>
                    </a>
                </li>
            @else
                <li>
                    <a href="{{route('customer.login')}}">
                        <span>
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span>Login</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>


    <!--Add TO cart-->
    <!-- <div class='header-list-items'>-->


    <!-- <ul>-->
    <!--    <li class="cart-dialog" id="cart-qty">-->
    <!--                                    <a href="{{route('customer.checkout')}}">-->
    <!--                                        <p class="margin-shopping">-->
    <!--                                            <i class="fa-solid fa-cart-shopping"></i>-->
    <!--                                            <span>{{Cart::instance('shopping')->count()}}</span>-->
    <!--                                        </p>-->
    <!--                                    </a>-->
    <!--                                    <div class="cshort-summary">-->
    <!--                                        <ul>-->
    <!--                                            @foreach(Cart::instance('shopping')->content() as $key=>$value)-->
    <!--                                            <li>-->
    <!--                                                <a href=""><img src="{{asset($value->options->image)}}" alt="" /></a>-->
    <!--                                            </li>-->
    <!--                                            <li><a href="">{{Str::limit($value->name, 30)}}</a></li>-->
    <!--                                            <li>Qty: {{$value->qty}}</li>-->
    <!--                                            <li>-->
    <!--                                                <p>৳{{$value->price}}</p>-->
    <!--                                                <button class="remove-cart cart_remove" data-id="{{$value->rowId}}"><i data-feather="x"></i></button>-->
    <!--                                            </li>-->
    <!--                                            @endforeach-->
    <!--                                        </ul>-->
    <!--                                        <p><strong>সর্বমোট : ৳{{$subtotal}}</strong></p>-->
    <!--                                        <a href="{{route('customer.checkout')}}" class="go_cart"> অর্ডার করুন </a>-->
    <!--                                    </div>-->
    <!--                                </li>-->
    <!--</ul>-->
    <!-- </div>-->


    <div class="addToCartModule d-none d-sm-none d-lg-block d-md-block" style="">
        <a href="{{route('customer.checkout')}}">
            <div class="cart-button-big-device">
                <div class='cart-button-uper'>
                    <svg version="1.1" id="Calque_1" x="0px" y="0px" style="fill:#FDD670;stroke:#FDD670;" width="16px"
                        height="24px" viewBox="0 0 100 160.13" data-reactid=".1wiukg4a76i.3.0.3.2.0.0">
                        <g data-reactid=".1wiukg4a76i.3.0.3.2.0.0.0">
                            <polygon points="11.052,154.666 21.987,143.115 35.409,154.666  "
                                data-reactid=".1wiukg4a76i.3.0.3.2.0.0.0.0">
                            </polygon>
                            <path d="M83.055,36.599c-0.323-7.997-1.229-15.362-2.72-19.555c-2.273-6.396-5.49-7.737-7.789-7.737  
                    c-6.796,0-13.674,11.599-16.489,25.689l-3.371-0.2l-0.19-0.012l-5.509,1.333c-0.058-9.911-1.01-17.577-2.849-22.747   
                    c-2.273-6.394-5.49-7.737-7.788-7.737c-8.618,0-17.367,18.625-17.788,37.361l-13.79,3.336l0.18,1.731h-0.18v106.605l17.466-17.762   
                    l18.592,17.762V48.06H9.886l42.845-10.764l2.862,0.171c-0.47,2.892-0.74,5.865-0.822,8.843l-8.954,1.75v106.605l48.777-10.655   
                    V38.532l0.073-1.244L83.055,36.599z M36.35,8.124c2.709,0,4.453,3.307,5.441,6.081c1.779,5.01,2.69,12.589,2.711,22.513  
                    l-23.429,5.667C21.663,23.304,30.499,8.124,36.35,8.124z M72.546,11.798c2.709,0,4.454,3.308,5.44,6.081  
                    c1.396,3.926,2.252,10.927,2.571,18.572l-22.035-1.308C61.289,21.508,67.87,11.798,72.546,11.798z M58.062,37.612l22.581,1.34  
                    c0.019,0.762,0.028,1.528,0.039,2.297l-23.404,4.571C57.375,42.986,57.637,40.234,58.062,37.612z M83.165,40.766   
                    c-0.007-0.557-0.01-1.112-0.021-1.665l6.549,0.39L83.165,40.766z"
                                data-reactid=".1wiukg4a76i.3.0.3.2.0.0.0.1"></path>
                        </g>
                    </svg>
                    <p>{{Cart::instance('shopping')->count()}} ITEMS</p>
                </div>
                <div class='total-cart-tk'>
                    <p> ৳ {{$subtotal}} </p>
                </div>
            </div>
        </a>

    </div>


    <div class="scrolltop" style="">
        <div class="scroll">
            <i class="fa fa-angle-up"></i>
        </div>
    </div>

    <!-- /. fixed sidebar -->

    <div id="custom-modal"></div>
    <div id="page-overlay"></div>
    <div id="loading">
        <div class="custom-loader"></div>
    </div>

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
        $(".quick_view").on("click", function () {
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
                    success: function (data) {
                        if (data) {
                            toastr.success('Success', 'Product add to cart succfully');
                            return cart_count() + mobile_cart();
                        }
                    },
                });
            }
        });

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
            $('.modern-user-actions').hover(
                function () {
                    $(this).css('transform', 'translateY(-2px)');
                    $(this).css('color', '#d4a574');
                    $(this).find('i').css('color', '#c19660');
                },
                function () {
                    $(this).css('transform', 'translateY(0)');
                    $(this).css('color', '#333');
                    $(this).find('i').css('color', '#d4a574');
                }
            );
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