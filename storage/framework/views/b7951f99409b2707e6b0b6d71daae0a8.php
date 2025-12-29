<div class="modal-view quick-product">
    <button class="close-modal">x</button>

<style>
    /* Modern Quickview Styles */
    .modal-view.quick-product-modern {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        position: relative;
        max-width: 900px; /* Limit width */
        margin: 0 auto;
        box-shadow: 0 10px 40px rgba(0,0,0,0.15);
    }
    
    .quick-product-modern .close-modal {
        position: absolute;
        top: 15px;
        right: 15px;
        z-index: 100;
        width: 30px;
        height: 30px;
        background: #fff;
        border: 1px solid #eee;
        border-radius: 50%;
        color: #333;
        font-size: 16px;
        line-height: 28px;
        text-align: center;
        cursor: pointer;
        transition: all 0.2s;
        box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }
    
    .quick-product-modern .close-modal:hover {
        background: #ff4d4d;
        color: #fff;
        border-color: #ff4d4d;
    }

    /* Left Side: Gallery */
    .qv-gallery {
        padding: 20px;
        background: #f8f9fa;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }
    
    .qv-main-image {
        position: relative;
        margin-bottom: 15px;
        border-radius: 8px;
        overflow: hidden;
        background: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 400px; /* Fixed height for consistency */
    }
    
    .qv-main-image img {
        max-height: 100%;
        max-width: 100%;
        object-fit: contain;
    }
    
    .qv-thumbnails {
        display: flex;
        gap: 10px;
        overflow-x: auto;
        padding-bottom: 5px;
        justify-content: center;
    }
    
    .qv-thumb {
        width: 60px;
        height: 60px;
        border: 2px solid transparent;
        border-radius: 6px;
        cursor: pointer;
        object-fit: cover;
        opacity: 0.6;
        transition: all 0.2s;
    }
    
    .qv-thumb:hover, .qv-thumb.active {
        border-color: #333;
        opacity: 1;
    }

    /* Right Side: Details */
    .qv-details {
        padding: 30px;
    }
    
    .qv-title {
        font-size: 24px;
        font-weight: 700;
        margin-bottom: 10px;
        color: #222;
        line-height: 1.3;
    }
    
    .qv-rating {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
        font-size: 14px;
    }
    
    .qv-rating i {
        color: #ffc107;
        margin-right: 2px;
    }
    
    .qv-rating span {
        color: #777;
        margin-left: 8px;
    }
    
    .qv-price {
        font-size: 26px;
        font-weight: 700;
        color: #222;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .qv-price del {
        font-size: 18px;
        color: #999;
        font-weight: 400;
    }
    
    .qv-short-desc {
        font-size: 15px;
        color: #555;
        line-height: 1.6;
        margin-bottom: 25px;
        border-bottom: 1px solid #eee;
        padding-bottom: 20px;
    }

    /* Form Elements */
    .qv-form-group {
        margin-bottom: 20px;
    }
    
    .qv-label {
        display: block;
        font-weight: 600;
        margin-bottom: 8px;
        color: #333;
        font-size: 14px;
    }
    
    /* Colors */
    .qv-colors {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    
    .qv-color-radio {
        display: none;
    }
    
    .qv-color-label {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        cursor: pointer;
        position: relative;
        border: 1px solid #ddd;
        transition: transform 0.2s;
    }
    
    .qv-color-label:hover {
        transform: scale(1.1);
    }
    
    .qv-color-radio:checked + .qv-color-label::after {
        content: '';
        position: absolute;
        top: -4px;
        left: -4px;
        right: -4px;
        bottom: -4px;
        border: 1px solid #333;
        border-radius: 50%;
    }

    /* Sizes */
    .qv-sizes {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }
    
    .qv-size-radio {
        display: none;
    }
    
    .qv-size-label {
        padding: 6px 14px;
        border: 1px solid #ddd;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        color: #555;
        transition: all 0.2s;
        min-width: 40px;
        text-align: center;
    }
    
    .qv-size-label:hover {
        border-color: #333;
    }
    
    .qv-size-radio:checked + .qv-size-label {
        background: #333;
        color: #fff;
        border-color: #333;
    }

    /* Actions */
    .qv-actions {
        display: flex;
        gap: 15px;
        margin-top: 30px;
        align-items: center;
    }
    
    .qv-quantity {
        display: flex;
        border: 1px solid #ddd;
        border-radius: 4px;
        height: 45px;
        width: 120px;
    }
    
    .qv-qty-btn {
        width: 35px;
        background: #f8f9fa;
        border: none;
        cursor: pointer;
        font-size: 18px;
        color: #555;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .qv-qty-btn:hover {
        background: #eee;
    }
    
    .qv-qty-input {
        width: 50px;
        border: none;
        text-align: center;
        font-size: 16px;
        font-weight: 600;
        color: #333;
    }
    
    .qv-add-btn {
        flex: 1;
        background: #333;
        color: #fff;
        border: none;
        height: 45px;
        border-radius: 4px;
        font-weight: 600;
        font-size: 16px;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        cursor: pointer;
        transition: background 0.2s;
    }
    
    .qv-add-btn:hover {
        background: #000;
    }
    
    .qv-meta {
        margin-top: 25px;
        padding-top: 15px;
        border-top: 1px solid #eee;
        font-size: 13px;
        color: #666;
    }
    
    .qv-meta-item {
        margin-bottom: 5px;
    }
    
    .qv-meta-item strong {
        color: #333;
        margin-right: 5px;
    }
    
    .qv-view-details {
        display: inline-block;
        margin-top: 10px;
        color: #333;
        text-decoration: underline;
        font-weight: 600;
        font-size: 14px;
    }

    @media (max-width: 768px) {
        .qv-main-image {
            height: 300px;
        }
        .qv-details {
            padding: 20px;
        }
        .qv-title {
            font-size: 20px;
        }
    }
</style>
    <div class="row">
     <div class="row g-0">
        <!-- LEFT : IMAGE / GALLERY -->
        <div class="col-md-6">
            <div class="qv-gallery">
                <div class="qv-main-image">
                    <img id="qv-main-img" src="<?php echo e(asset($data->image->image)); ?>" alt="<?php echo e($data->name); ?>">
                </div>
                
                <?php if($data->images && count($data->images) > 0): ?>
                <div class="qv-thumbnails">
                    <!-- Main image thumbnail -->
                    <img src="<?php echo e(asset($data->image->image)); ?>" class="qv-thumb active" onclick="changeQvImage(this, '<?php echo e(asset($data->image->image)); ?>')">
                    
                    <!-- Additional images -->
                    <?php $__currentLoopData = $data->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <img src="<?php echo e(asset($image->image)); ?>" class="qv-thumb" onclick="changeQvImage(this, '<?php echo e(asset($image->image)); ?>')">
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- RIGHT : PRODUCT INFO -->
        <div class="col-md-6">
            <div class="qv-details">
                <!-- Title -->
                <h2 class="qv-title"><?php echo e($data->name); ?></h2>

                <!-- Rating -->
                <div class="qv-rating">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <span>(<?php echo e($data->reviews_count); ?> reviews)</span>
                </div>

                <!-- Price -->
                <div class="qv-price">
                    ৳<?php echo e($data->new_price); ?>

                    <?php if($data->old_price): ?>
                        <del>৳<?php echo e($data->old_price); ?></del>
                    <?php endif; ?>
                </div>

                <!-- Short Description -->
                <div class="qv-short-desc">
                    <?php echo $data->short_description; ?>

                </div>

                <!-- Form -->
                <form action="<?php echo e(route('cart.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <input type="hidden" name="id" value="<?php echo e($data->id); ?>">

                    <!-- Colors -->
                    <?php if($data->procolors && count($data->procolors) > 0): ?>
                    <div class="qv-form-group">
                        <label class="qv-label">Color:</label>
                        <div class="qv-colors">
                            <?php $__currentLoopData = $data->procolors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $procolor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input type="radio" name="product_color" id="color-<?php echo e($index); ?>" value="<?php echo e($procolor->color->colorName ?? $procolor->color->name ?? ''); ?>" class="qv-color-radio" <?php echo e($index == 0 ? 'checked' : ''); ?>>
                                <label for="color-<?php echo e($index); ?>" class="qv-color-label" style="background-color: <?php echo e($procolor->color->colorName ?? $procolor->color->name ?? '#ccc'); ?>;" title="<?php echo e($procolor->color->colorName ?? ''); ?>"></label>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Sizes -->
                    <?php if($data->prosizes && count($data->prosizes) > 0): ?>
                    <div class="qv-form-group">
                        <label class="qv-label">Size:</label>
                        <div class="qv-sizes">
                            <?php $__currentLoopData = $data->prosizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $prosize): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <input type="radio" name="product_size" id="size-<?php echo e($index); ?>" value="<?php echo e($prosize->size->sizeName ?? $prosize->size->name ?? ''); ?>" class="qv-size-radio" <?php echo e($index == 0 ? 'checked' : ''); ?>>
                                <label for="size-<?php echo e($index); ?>" class="qv-size-label"><?php echo e($prosize->size->sizeName ?? $prosize->size->name ?? ''); ?></label>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                    <?php endif; ?>

                    <!-- Quantity & Add to Cart -->
                    <div class="qv-actions">
                        <div class="qv-quantity">
                            <button type="button" class="qv-qty-btn minus">-</button>
                            <input type="text" name="qty" value="1" class="qv-qty-input" readonly>
                            <button type="button" class="qv-qty-btn plus">+</button>
                        </div>
                        <button type="submit" class="qv-add-btn cart_storee"
                         onclick="add_to_cart_details(this,event)"
                          name="add_cart"
                        data-id="<?php echo e($data->id); ?>">
                            Add to Bag
                        </button>
                    </div>
                </form>

                <!-- Meta Info -->
                <div class="qv-meta">
                    <?php if($data->category): ?>
                    <div class="qv-meta-item">
                        <strong>Category:</strong> <?php echo e($data->category->name); ?>

                    </div>
                    <?php endif; ?>
                    <?php if($data->brand): ?>
                    <div class="qv-meta-item">
                        <strong>Brand:</strong> <?php echo e($data->brand->name); ?>

                    </div>
                    <?php endif; ?>
                    
                    <a href="<?php echo e(route('product', $data->slug ?? '#')); ?>" class="qv-view-details">
                        View Full Details <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>

<script src="<?php echo e(asset('public/frontEnd/js/jquery-3.6.3.min.js')); ?>"></script>
<script>
	$('.close-modal').on('click',function(){
        $("#custom-modal").hide();
        $("#page-overlay").hide();
     });
</script>
<script>
    $(document).ready(function() {
        $('.minus').click(function () {
            var $input = $(this).parent().find('input');
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            $input.change();
            return false;
        });
        $('.plus').click(function () {
            var $input = $(this).parent().find('input');
            $input.val(parseInt($input.val()) + 1);
            $input.change();
            return false;
        });
    });
</script>
<script>
        // Quantity Logic
    $(document).ready(function() {
        $('.minus').off('click').on('click', function () {
            var $input = $(this).siblings('.qv-qty-input');
            var count = parseInt($input.val()) - 1;
            count = count < 1 ? 1 : count;
            $input.val(count);
            return false;
        });
        $('.plus').off('click').on('click', function () {
            var $input = $(this).siblings('.qv-qty-input');
            $input.val(parseInt($input.val()) + 1);
            return false;
        });
    });

    // Change Image
    function changeQvImage(thumb, src) {
        document.getElementById('qv-main-img').src = src;
        // Update active class
        var thumbs = document.querySelectorAll('.qv-thumb');
        thumbs.forEach(function(t) {
            t.classList.remove('active');
        });
        thumb.classList.add('active');
    }
</script><?php /**PATH X:\sagor\sailor\resources\views/frontEnd/layouts/ajax/quickview.blade.php ENDPATH**/ ?>