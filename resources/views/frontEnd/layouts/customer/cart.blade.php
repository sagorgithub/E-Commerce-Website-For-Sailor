@extends('frontEnd.layouts.master')
{{-- @section('title', $details->name) --}}

@section('content')


  <main>
    @php
        $subtotal = Cart::instance('shopping')->subtotal();
        $subtotal = str_replace(',', '', $subtotal);
        $subtotal = str_replace('.00', '', $subtotal);
        $shipping = Session::get('shipping') ? Session::get('shipping') : 0;
    @endphp
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
                  @foreach (Cart::instance('shopping')->content() as $value)
                  <tr>
                    <td class="text-center td-image">
                      <a href="{{ route('product', $value->options->slug) }}">
                        <img src="{{ asset($value->options->image) }}" alt="" title="">
                      </a>
                    </td>
                    <td class="text-left td-name">
                      <a href="{{ route('product', $value->options->slug) }}">{{ Str::limit($value->name, 20) }}</a> 
                        <br><small>Size: {{ $value->options->product_size }}</small> <br>
                        <small>Color: {{ $value->options->product_color }}</small>
                    </td>
                    <td class="text-center td-model"> {{ $value->options->product_code ?? 'N/A' }}</td>
                    <td class="text-center td-price">{{ $value->price }}</td>
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
                    <td class="text-center td-total">{{ $value->price * $value->qty }}</td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 col-xl-4">
            <div class="cart-sidebar">
              <h2 class="title">What would you like to do next?</h2>
              {{-- <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne"><button class="accordion-button collapsed"
                      type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                      aria-controls="flush-collapseOne">Use Coupon Code</button></h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <div class="row g-3 align-items-center">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8"><input type="text" id="" class="form-control"
                            aria-describedby="coupon" placeholder="Coupon Code Here" value=""></div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><button type="button"
                            class="continue-btn w-100">apply</button></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo"><button class="accordion-button collapsed"
                      type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                      aria-controls="flush-collapseTwo">estimate shipping &amp; taxes</button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <div class="form-group"><label for="address-Country" class="form-label">Country<span
                            data-required="true" aria-hidden="true"></span></label><select id="address-Country"
                          name="address-Country" autocomplete="shipping address-level1" class="form-control">
                          <option value="">Please select</option>
                          <option value="18">Bangladesh</option>
                          <option value="101">India</option>
                          <option value="231">United States</option>
                        </select></div>
                      <div class="form-group"><label for="address-state" class="form-label">region/state<span
                            data-required="true" aria-hidden="true"></span></label><select id="address-state"
                          name="address-state" autocomplete="shipping address-level1" class="form-control">
                          <option value="">Please select</option>
                        </select></div>
                      <div class="form-group"><label for="address-state" class="form-label">city<span data-required="true"
                            aria-hidden="true"></span></label><select id="address-state" name="address-state"
                          autocomplete="shipping address-level1" class="form-control">
                          <option value="">Please select</option>
                        </select></div>
                      <div></div><button type="button" class="continue-btn w-100">Show delivery
                        charge</button>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree"><button class="accordion-button collapsed"
                      type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                      aria-controls="flush-collapseThree">use gift card</button></h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                      <div class="row g-3 align-items-center">
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8"><input type="text" id="" class="form-control"
                            aria-describedby="coupon" placeholder="Gift card Code Here"></div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><button type="button"
                            class="continue-btn w-100">apply</button></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --}}
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
                    <td class="text-end">{{ number_format($value->price * $value->qty, 2) }} BDT</td>
                  </tr>
                </tbody>
              </table>
              <div class="button-flex">
                <a class="continue-btn" type="button" href="{{route('home')}}">continue shopping</a>
                <a type="button" class="continue-btn" href="{{route('customer.checkout')}}">checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection