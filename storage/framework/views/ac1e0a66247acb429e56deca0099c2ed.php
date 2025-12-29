
<?php $__env->startSection('title',$subcategory->meta_title); ?>
<?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/jquery-ui.css')); ?>" />
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
<?php $__env->stopPush(); ?>
<?php $__env->startPush('seo'); ?>
<meta name="app-url" content="<?php echo e(route('subcategory',$subcategory->slug)); ?>" />
<meta name="robots" content="index, follow" />
<meta name="description" content="<?php echo e($subcategory->meta_description); ?>" />
<meta name="keywords" content="<?php echo e($subcategory->slug); ?>" />

<!-- Twitter Card data -->
<meta name="twitter:card" content="product" />
<meta name="twitter:site" content="<?php echo e($subcategory->subcategoryName); ?>" />
<meta name="twitter:title" content="<?php echo e($subcategory->subcategoryName); ?>" />
<meta name="twitter:description" content="<?php echo e($subcategory->meta_description); ?>" />
<meta name="twitter:creator" content="gomobd.com" />
<meta property="og:url" content="<?php echo e(route('subcategory',$subcategory->slug)); ?>" />
<meta name="twitter:image" content="<?php echo e(asset($subcategory->image)); ?>" />

<!-- Open Graph data -->
<meta property="og:title" content="<?php echo e($subcategory->subcategoryName); ?>" />
<meta property="og:type" content="product" />
<meta property="og:url" content="<?php echo e(route('subcategory',$subcategory->slug)); ?>" />
<meta property="og:image" content="<?php echo e(asset($subcategory->image)); ?>" />
<meta property="og:description" content="<?php echo e($subcategory->meta_description); ?>" />
<meta property="og:site_name" content="<?php echo e($subcategory->subcategoryName); ?>" />
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
<!-- Shopping Cart Icon -->


<!-- Product Listing Section -->
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
                                            <?php if(Route::is('category')): ?>
                                                    <strong><?php echo e($category->name); ?></strong>
                                            <?php elseif(Route::is('skinType')): ?>
                                                    <strong><?php echo e($skintype->name); ?></strong>
                                            <?php elseif(Route::is('skinConcern')): ?>
                                                    <strong><?php echo e($skinconcern->name); ?></strong>
                                            <?php endif; ?>
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
                                            <div class="col-auto"><label for="inputPassword6"
                                                            class="col-form-label">sort by</label>
                                            </div>
                                            <div class="page-sort col-auto">
                                                    <form action="" class="sort-form">
                                                            <select name="sort" class="form-control form-select sort">
                                                            <option value="1" <?php if(request()->get('sort')==1): ?>selected <?php endif; ?>>Product: Latest</option>
                                                            <option value="2" <?php if(request()->get('sort')==2): ?>selected <?php endif; ?>>Product: Oldest</option>
                                                            <option value="3" <?php if(request()->get('sort')==3): ?>selected <?php endif; ?>>Price: High To Low</option>
                                                            <option value="4" <?php if(request()->get('sort')==4): ?>selected <?php endif; ?>>Price: Low To High</option>
                                                            <option value="5" <?php if(request()->get('sort')==5): ?>selected <?php endif; ?>>Name: A-Z</option>
                                                            <option value="6" <?php if(request()->get('sort')==6): ?>selected <?php endif; ?>>Name: Z-A</option>
                                                            </select>
                                                            <input type="hidden" name="min_price" value="<?php echo e(request()->get('min_price')); ?>" />
                                                            <input type="hidden" name="max_price" value="<?php echo e(request()->get('max_price')); ?>" />
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
                                                                    <?php $__currentLoopData = $menucategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $scategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <div class="form-check">
                                                                            <input class="form-check-input" type="checkbox" id="<?php echo e($scategory->name); ?>" name="cat_id"
                                                                                    value="1174">
                                                                                    <label class="form-check-label" for="<?php echo e($scategory->name); ?>"><?php echo e($scategory->name); ?></label>
                                                                    </div>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                                                    
                                                            <?php $__empty_1 = true; $__currentLoopData = $all_sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                                    <div class="form-check"><input
                                                                                    class="form-check-input"
                                                                                    type="checkbox"
                                                                                    name="size"
                                                                                    id="flexCheckDefault"
                                                                                    value="l">
                                                                                    <label
                                                                                    class="form-check-label"
                                                                                    for="flexCheckDefault"><?php echo e($size->sizeName); ?></label>
                                                                    </div>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                                                                    <?php $__empty_2 = true; $__currentLoopData = $all_colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                                                    <div class="form-check"><input
                                                                                    class="form-check-input"
                                                                                    type="checkbox"
                                                                                    name="color"
                                                                                    id="flexCheckDefault"
                                                                                    value="maroon"><label
                                                                                    class="form-check-label"
                                                                                    for="flexCheckDefault"><?php echo e($color->colorName); ?></label>
                                                                    </div>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </div>
                                                    </div>
                                            </div>
                                            
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 col-xl-10">
                            <div class="shop-grid-main">
                                <?php $__empty_3 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_3 = false; ?>
                                        <div class="single-product">
                                                <div class="image-box">
                                                        <a href="<?php echo e(route('product', $value->slug)); ?>">

                                                                <?php
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
                                                                ?>

                                                                <img
                                                                        src="<?php echo e(asset($firstImage)); ?>">
                                                                <img src="<?php echo e(asset($secondImage)); ?>" alt="" class="img-fluid secondary-image">


                                                                <?php if($discount > 0): ?>
                                                                        <div class="flashsale-tag">
                                                                                <span
                                                                                        class="value"><?php echo e($discount); ?></span>
                                                                                <span class="percent"> %</span>
                                                                                <span class="off">off</span>
                                                                        </div>
                                                                <?php endif; ?>

                                                        </a>
                                                        <a class="btn add-towish-btn ">
                                                                <i class="fa-regular fa-heart"></i>
                                                        </a>
                                                        <div class="product-view-sets">
                                                                <ul class="nav">
                                                                        <li class="nav-item">
                                                                                <a class="nav-link" href="<?php echo e(route('product', $value->slug)); ?>">
                                                                                    <i class="icofont-cart-alt"></i>
                                                                                </a>
                                                                        </li>
                                                                        <li class="nav-item">
                                                                                <a href="javascript:void(0)" class="nav-link">
                                                                                    <i class="icofont-eye-alt quick-view-btn" data-id="<?php echo e($value->id); ?>"></i>
                                                                                </a>
                                                                        </li>
                                                                </ul>
                                                        </div>
                                                </div>
                                                <div class="product-description">
                                                        <h4 class="product-name">
                                                                <a
                                                                        href="<?php echo e(route('product', $value->slug)); ?>"><?php echo e($value->name); ?></a>
                                                        </h4>
                                                        <p class="price">৳ <span
                                                                        class="mr-2"><?php echo e($value->new_price); ?></span>
                                                                <del><?php echo e($value->old_price); ?></del>
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
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_3): ?>
                                        <h4 class="text-danger">No products available in this category!</h4>
                                <?php endif; ?>

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="custom_paginate">
                                    <?php echo e($products->links('pagination::bootstrap-4')); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <section class="homeproduct">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="meta_des">
                        <?php echo $subcategory->meta_description; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php $__env->stopSection(); ?>
<?php $__env->startPush('script'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
<script>
    $("#price-range").click(function() {
        $(".price-submit").submit();
    })
    $(".form-attribute").on('change click', function() {
        $(".attribute-submit").submit();
    })
    $(".sort").change(function() {
        $(".sort-form").submit();
    })
    $(".form-checkbox").change(function() {
        $(".subcategory-submit").submit();
    })
</script>
<script>
    $(function() {
        $("#price-range").slider({
            step: 5,
            range: true,
            min: {
                {
                    $min_price
                }
            },
            max: {
                {
                    $max_price
                }
            },
            values: [{
                    {
                        request() - > get('min_price') ? request() - > get('min_price') : $min_price
                    }
                },
                {
                    {
                        request() - > get('max_price') ? request() - > get('max_price') : $max_price
                    }
                }
            ],
            slide: function(event, ui) {
                $("#min_price").val(ui.values[0]);
                $("#max_price").val(ui.values[1]);
            }
        });
        $("#min_price").val({
            {
                request() - > get('min_price') ? request() - > get('min_price') : $min_price
            }
        });
        $("#max_price").val({
            {
                request() - > get('max_price') ? request() - > get('max_price') : $max_price
            }
        });
        $("#priceRange").val($("#price-range").slider("values", 0) + " - " + $("#price-range").slider("values",
            1));

        $("#mobile-price-range").slider({
            step: 5,
            range: true,
            min: {
                {
                    $min_price
                }
            },
            max: {
                {
                    $max_price
                }
            },
            values: [{
                    {
                        request() - > get('min_price') ? request() - > get('min_price') : $min_price
                    }
                },
                {
                    {
                        request() - > get('max_price') ? request() - > get('max_price') : $max_price
                    }
                }
            ],
            slide: function(event, ui) {
                $("#min_price").val(ui.values[0]);
                $("#max_price").val(ui.values[1]);
            }
        });
        $("#min_price").val({
            {
                request() - > get('min_price') ? request() - > get('min_price') : $min_price
            }
        });
        $("#max_price").val({
            {
                request() - > get('max_price') ? request() - > get('max_price') : $max_price
            }
        });
        $("#priceRange").val($("#price-range").slider("values", 0) + " - " + $("#price-range").slider("values",
            1));

    });

    function add_to_cart(button, event) {
        event.preventDefault();
        var form = $(button).closest('form');
        var url = form.attr('action');
        var submit_button = $(button);

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
                    submit_button.html('ADDED');
                    submit_button.css('background-color', '#27ae60');

                    // Reset button after 2 seconds
                    setTimeout(function() {
                        submit_button.html('ADD TO CART');
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
                submit_button.prop('disabled', false);
            }
        });
    }
</script>

<script>
    // $(".sort").change(function(){
    //   $('#loading').show();
    //   $(".sort-form").submit();
    // })
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\sagor\sailor\resources\views/frontEnd/layouts/pages/subcategory.blade.php ENDPATH**/ ?>