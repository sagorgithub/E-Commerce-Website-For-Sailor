


<?php $__env->startSection('content'); ?>


  <main>
    <?php
        $subtotal = Cart::instance('shopping')->subtotal();
        $subtotal = str_replace(',', '', $subtotal);
        $subtotal = str_replace('.00', '', $subtotal);
        $shipping = Session::get('shipping') ? Session::get('shipping') : 0;
    ?>
    <section class="cart-main">
      <div class="container-fluid">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8 col-xl-8">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <td class="text-center td-image">Image</td>
                    <td class="text-left td-name">Product Name</td>
                    <td class="text-center td-model">Model</td>
                    <td class="text-center td-price">Base Price</td>
                    <td class="text-center td-price">Discount (Per Product)</td>
                    <td class="text-center td-qty">Quantity</td>
                    <td class="text-center td-total">Total</td>
                  </tr>
                </thead>
                <tbody>
                  <?php $__currentLoopData = Cart::instance('shopping')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <tr>
                    <td class="text-center td-image">
                      <a href="<?php echo e(route('product', $value->options->slug)); ?>">
                        <img src="<?php echo e(asset($value->options->image)); ?>" alt="" title="">
                      </a>
                    </td>
                    <td class="text-left td-name">
                      <a href="<?php echo e(route('product', $value->options->slug)); ?>"><?php echo e(Str::limit($value->name, 20)); ?></a> 
                        <br><small>Size: <?php echo e($value->options->product_size); ?></small> <br>
                        <small>Color: <?php echo e($value->options->product_color); ?></small>
                    </td>
                    <td class="text-center td-model"> <?php echo e($value->options->product_code ?? 'N/A'); ?></td>
                    <td class="text-center td-price"><?php echo e($value->price); ?></td>
                    <td class="text-center td-price">0</td>
                    <td class="text-center td-qty">
                      <div class="input-groups btn-block">
                        <div class="stepper">
                          <input type="text" class="form-control" value="1">
                          <span>
                            <i class="fa fa-angle-up"></i>
                            <i class="fa fa-angle-down"></i>
                          </span>
                        </div>
                        <span class="input-group-btn">
                          <button type="button" class="btn btn-remove">
                            <i class="fa fa-times"></i>
                          </button>
                        </span>
                      </div>
                    </td>
                    <td class="text-center td-total"><?php echo e($value->price * $value->qty); ?></td>
                  </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">
            <div class="cart-sidebar">
              <h2 class="title">What would you like to do next?</h2>
              
              <table class="table table-bordered">
                <tbody>
                  <tr>
                    <td class="text-end"><strong>Sub-Total:</strong></td>
                    <td class="text-end">10440 BDT</td>
                  </tr>
                  <tr>
                    <td class="text-end"><strong>Discount:</strong></td>
                    <td class="text-end">3975.00 BDT</td>
                  </tr>
                  <tr>
                    <td class="text-end"><strong>VAT:</strong></td>
                    <td class="text-end">646.50 BDT</td>
                  </tr>
                  <tr>
                    <td class="text-end"><strong>Total:</strong></td>
                    <td class="text-end"><?php echo e(number_format($value->price * $value->qty, 2)); ?> BDT</td>
                  </tr>
                </tbody>
              </table>
              <div class="button-flex">
                <a class="continue-btn" type="button" href="<?php echo e(route('home')); ?>">continue shopping</a>
                <a type="button" class="continue-btn" href="<?php echo e(route('customer.checkout')); ?>">checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH X:\sagor\sailor\resources\views/frontEnd/layouts/customer/cart.blade.php ENDPATH**/ ?>