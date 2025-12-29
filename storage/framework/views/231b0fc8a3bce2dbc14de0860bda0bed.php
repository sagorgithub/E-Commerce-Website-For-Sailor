

<?php if(Route::is('category')): ?>
<?php $__env->startSection('title', $category->meta_title ?? 'Golnoze'); ?>
<?php elseif(Route::is('skinType')): ?>
<?php $__env->startSection('title', $skintype->meta_title ?? 'Golnoze'); ?>
<?php elseif(Route::is('skinConcern')): ?>
<?php $__env->startSection('title', $skinconcern->meta_title ?? 'Golnoze'); ?>
<?php endif; ?>



<?php $__env->startSection('content'); ?>




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
                                                        <?php $__empty_3 = true; $__currentLoopData = $category->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_3 = false; ?>
                                                                <div class="single-product">
                                                                        <div class="image-box">
                                                                                <a href="<?php echo e(route('product', $product->slug)); ?>">

                                                                                        <?php
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
                                                                                        ?>

                                                                                        <img src="<?php echo e(asset($firstImage)); ?>">
                                                                                        <img src="<?php echo e(asset($secondImage ?? 'https://placehold.co/400x400/f8bbd0/ffffff?text=Prduct')); ?>" alt="" class="img-fluid secondary-image">


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
                                                                                                        <a class="nav-link"
                                                                                                                href="<?php echo e(route('product', $product->slug)); ?>">
                                                                                                                <i class="icofont-cart-alt"></i>
                                                                                                        </a>
                                                                                                </li>
                                                                                                <li class="nav-item">
                                                                                                        <a href="javascript:void(0)"
                                                                                                                class="nav-link">
                                                                                                                <i class="icofont-eye-alt quick-view-btn"
                                                                                                                        data-id="<?php echo e($product->id); ?>"></i>
                                                                                                        </a>
                                                                                                </li>
                                                                                        </ul>
                                                                                </div>
                                                                        </div>
                                                                        <div class="product-description">
                                                                                <h4 class="product-name">
                                                                                        <a
                                                                                                href="<?php echo e(route('product', $product->slug)); ?>"><?php echo e($product->name); ?></a>
                                                                                </h4>
                                                                                <p class="price">৳ <span
                                                                                                class="mr-2"><?php echo e($product->new_price); ?></span>
                                                                                        <del><?php echo e($product->old_price); ?></del>
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
                                        
                                </div>
                        </div>
                </section>
        </main>





<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\sagor\sailor\resources\views/frontEnd/layouts/pages/category.blade.php ENDPATH**/ ?>