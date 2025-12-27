<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Color;
use App\Models\Size;
use App\Models\SkinConcern;
use App\Models\SkinType;
use shurjopayv2\ShurjopayLaravelPackage8\Http\Controllers\ShurjopayController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Childcategory;
use App\Models\Product;
use App\Models\District;
use App\Models\Brand;
use App\Models\CreatePage;
use App\Models\Campaign;
use App\Models\Banner;
use App\Models\ShippingCharge;
use App\Models\Productcolor;
use App\Models\Productsize;
use App\Models\Customer;
use App\Models\OrderDetails;
use App\Models\Payment;
use App\Models\Order;
use App\Models\Review;
use App\Models\Video;
use Session;
use Cart;
use Auth;

class FrontendController extends Controller
{
    public function index()
    {
        // return "Welcome to Kenakatar.com";
        // $frontcategory = Category::where(['status' => 1])
        //     ->where('front_view', 1)
        //     ->select('id', 'name', 'image', 'slug', 'status')
        //     ->get();
        // $frontcategoryPluck = $frontcategory->pluck('id')->toArray();
        // $frontcategory->load(['products' => function ($query) use ($frontcategoryPluck) {
        //     $query->whereIn('category_id', $frontcategoryPluck)
        //         ->where('status', 1)
        //         ->select('id', 'name', 'slug', 'new_price', 'old_price', 'category_id')
        //         ->with('image')
        //         ->limit(12);
        // }]);

        $frontcategory = Category::where('status', 1)
            ->where('front_view', 1)
            ->select('id', 'name', 'image', 'slug', 'status')
            ->with([
                'products' => function ($q) {
                    $q->where('status', 1)
                      ->select('id', 'name', 'slug', 'new_price', 'old_price', 'category_id')
                      ->with('image')
                      ->orderBy('id', 'DESC')
                      ->limit(12);
                }
            ])
            ->get();

        $sliders = Banner::where(['status' => 1, 'category_id' => 1])
            ->select('id', 'image', 'link', 'title')
            ->get();

        $sliderbottomads = Banner::where(['status' => 1, 'category_id' => 5])
            ->select('id', 'image', 'link')
            ->limit(3)
            ->get();

        $footertopads = Banner::where(['status' => 1, 'category_id' => 6])
            ->select('id', 'image', 'link')
            ->limit(2)
            ->get();

        $hotdeal_top = Product::where(['status' => 1, 'topsale' => 1])
            ->orderBy('id', 'DESC')
            ->select('id', 'name', 'slug', 'new_price', 'old_price')
            ->with('prosizes', 'procolors')
            ->limit(12)
            ->get();
        // return $hotdeal_top;

        $hotdeal_bottom = Product::where(['status' => 1, 'topsale' => 1])
            ->select('id', 'name', 'slug', 'new_price', 'old_price')
            ->skip(12)
            ->limit(12)
            ->get();

        $homeproducts = Category::where(['front_view' => 1, 'status' => 1])
            ->orderBy('id', 'ASC')
            ->with(['products', 'products.image', 'products.prosize', 'products.procolor'])
            ->get()
            ->map(function ($query) {
                $query->setRelation('products', $query->products->take(12));
                return $query;
            });
            
        $brands = Brand::where('status' , 1)->get();

        // ashik

            $skintypes = SkinType::where('status', 1)->get();
            $skinconcerns = SkinConcern::where('status', 1)->get();
            $all_products = Product::where('status', 1)
                    ->select('id', 'name', 'slug', 'new_price', 'old_price')
                    ->get();
        
        // All Sizes

        $videos = Video::where('status',1)
    ->whereJsonContains('pages','home')
    ->latest()
    ->first();

        // return $homeproducts;
        return view('frontEnd.layouts.pages.index', compact('sliders', 'frontcategory', 'hotdeal_top', 'hotdeal_bottom', 'homeproducts', 'sliderbottomads', 'footertopads', 'brands', 'skintypes', 'skinconcerns', 'all_products', 'videos'));
    }

    public function campaigns()
    {
        // Get active campaigns for campaigns page
        $campaigns = Campaign::where('status', 1)
            ->where(function ($query) {
                $query->whereNull('start_date')
                    ->orWhere('start_date', '<=', now());
            })
            ->where(function ($query) {
                $query->whereNull('end_date')
                    ->orWhere('end_date', '>=', now());
            })
            ->with('product')
            ->orderBy('sort_order', 'asc')
            ->get();

        return view('frontEnd.layouts.pages.campaigns', compact('campaigns'));
    }

    public function hotdeals()
    {

        $products = Product::where(['status' => 1, 'topsale' => 1])
            ->select('id', 'name', 'slug', 'new_price', 'old_price')
            ->paginate(36);
        return view('frontEnd.layouts.pages.hotdeals', compact('products'));
    }

    public function category($slug, Request $request)
    {
        $category = Category::where(['slug' => $slug, 'status' => 1])->first();
        $products = Product::where(['status' => 1, 'category_id' => $category->id])
            ->select('id', 'name', 'slug', 'new_price', 'old_price', 'category_id');
        $subcategories = Subcategory::where('category_id', $category->id)->get();

        // return $request->sort;
        if ($request->sort == 1) {
            $products = $products->orderBy('created_at', 'desc');
        } elseif ($request->sort == 2) {
            $products = $products->orderBy('created_at', 'asc');
        } elseif ($request->sort == 3) {
            $products = $products->orderBy('new_price', 'desc');
        } elseif ($request->sort == 4) {
            $products = $products->orderBy('new_price', 'asc');
        } elseif ($request->sort == 5) {
            $products = $products->orderBy('name', 'asc');
        } elseif ($request->sort == 6) {
            $products = $products->orderBy('name', 'desc');
        } else {
            $products = $products->latest();
        }

        $min_price = $products->min('new_price');
        $max_price = $products->max('new_price');
        if ($request->min_price && $request->max_price) {
            $products = $products->where('new_price', '>=', $request->min_price);
            $products = $products->where('new_price', '<=', $request->max_price);
        }

        $selectedSubcategories = $request->input('subcategory', []);
        $products = $products->when($selectedSubcategories, function ($query) use ($selectedSubcategories) {
            return $query->whereHas('subcategory', function ($subQuery) use ($selectedSubcategories) {
                $subQuery->whereIn('id', $selectedSubcategories);
            });
        });

        
        $all_sizes = Size::where('status', 1)->get(); //add sagor
        $all_colors = Color::where('status', 1)->get(); //add sagor

        $products = $products->paginate(24);
        return view('frontEnd.layouts.pages.category', compact('category', 'products', 'subcategories', 'min_price', 'max_price', 'all_sizes', 'all_colors'));
    }

    //ashik
        public function skinType($name, Request $request)
        {
            
            $skintype = SkinType::where(['name' => $name, 'status' => 1])->first();
            $skintypeAll = SkinType::where('status', 1)->get();
            $category = SkinType::where('status', 1)->get();
            // $products = Product::where(['status' => 1, 'skin_type' => $name])
            //     ->select('id', 'name', 'slug', 'new_price', 'old_price', 'category_id');
            $products = Product::where('status', 1)
                ->whereJsonContains('skin_type', $name)
                ->select('id', 'name', 'slug', 'new_price', 'old_price', 'category_id');
            // $subcategories = Subcategory::where('status', 1)->get();

            // return $request->sort;
            if ($request->sort == 1) {
                $products = $products->orderBy('created_at', 'desc');
            } elseif ($request->sort == 2) {
                $products = $products->orderBy('created_at', 'asc');
            } elseif ($request->sort == 3) {
                $products = $products->orderBy('new_price', 'desc');
            } elseif ($request->sort == 4) {
                $products = $products->orderBy('new_price', 'asc');
            } elseif ($request->sort == 5) {
                $products = $products->orderBy('name', 'asc');
            } elseif ($request->sort == 6) {
                $products = $products->orderBy('name', 'desc');
            } else {
                $products = $products->latest();
            }

            $min_price = $products->min('new_price');
            $max_price = $products->max('new_price');
            if ($request->min_price && $request->max_price) {
                $products = $products->where('new_price', '>=', $request->min_price);
                $products = $products->where('new_price', '<=', $request->max_price);
            }

           $selectedSkintypes = $request->input('skintype', []);

        $products = $products->when($selectedSkintypes, function ($query) use ($selectedSkintypes) {
            foreach ($selectedSkintypes as $skinType) {
                $query->whereJsonContains('skin_type', $skinType);
            }
            return $query;
        });

            $products = $products->paginate(24);
            return view('frontEnd.layouts.pages.category', compact('category', 'products', 'min_price', 'max_price', 'skintype', 'skintypeAll'));
        }
        public function skinConcern($name, Request $request)
        {
            
            $skinconcern = SkinConcern::where(['name' => $name, 'status' => 1])->first();
            $skinconcernAll = SkinConcern::where('status', 1)->get();
            $skintypeAll = SkinType::where('status', 1)->get();
            $category = SkinType::where('status', 1)->get();
            // $products = Product::where(['status' => 1, 'skin_type' => $name])
            //     ->select('id', 'name', 'slug', 'new_price', 'old_price', 'category_id');
            $products = Product::where('status', 1)
                ->whereJsonContains('skin_type', $name)
                ->select('id', 'name', 'slug', 'new_price', 'old_price', 'category_id');
            // $subcategories = Subcategory::where('status', 1)->get();

            // return $request->sort;
            if ($request->sort == 1) {
                $products = $products->orderBy('created_at', 'desc');
            } elseif ($request->sort == 2) {
                $products = $products->orderBy('created_at', 'asc');
            } elseif ($request->sort == 3) {
                $products = $products->orderBy('new_price', 'desc');
            } elseif ($request->sort == 4) {
                $products = $products->orderBy('new_price', 'asc');
            } elseif ($request->sort == 5) {
                $products = $products->orderBy('name', 'asc');
            } elseif ($request->sort == 6) {
                $products = $products->orderBy('name', 'desc');
            } else {
                $products = $products->latest();
            }

            $min_price = $products->min('new_price');
            $max_price = $products->max('new_price');
            if ($request->min_price && $request->max_price) {
                $products = $products->where('new_price', '>=', $request->min_price);
                $products = $products->where('new_price', '<=', $request->max_price);
            }

           $selectedSkintypes = $request->input('skintype', []);

        $products = $products->when($selectedSkintypes, function ($query) use ($selectedSkintypes) {
            foreach ($selectedSkintypes as $skinType) {
                $query->whereJsonContains('skin_type', $skinType);
            }
            return $query;
        });

            $products = $products->paginate(24);
            return view('frontEnd.layouts.pages.category', compact('category', 'products', 'min_price', 'max_price', 'skintypeAll', 'skinconcern', 'skinconcernAll'));
        }
    //ashik

    public function subcategory($slug, Request $request)
    {
        $subcategory = Subcategory::where(['slug' => $slug, 'status' => 1])->first();
        $products = Product::where(['status' => 1, 'subcategory_id' => $subcategory->id])
            ->select('id', 'name', 'slug', 'new_price', 'old_price', 'category_id', 'subcategory_id');
        $childcategories = Childcategory::where('subcategory_id', $subcategory->id)->get();

        // return $request->sort;
        if ($request->sort == 1) {
            $products = $products->orderBy('created_at', 'desc');
        } elseif ($request->sort == 2) {
            $products = $products->orderBy('created_at', 'asc');
        } elseif ($request->sort == 3) {
            $products = $products->orderBy('new_price', 'desc');
        } elseif ($request->sort == 4) {
            $products = $products->orderBy('new_price', 'asc');
        } elseif ($request->sort == 5) {
            $products = $products->orderBy('name', 'asc');
        } elseif ($request->sort == 6) {
            $products = $products->orderBy('name', 'desc');
        } else {
            $products = $products->latest();
        }

        $min_price = $products->min('new_price');
        $max_price = $products->max('new_price');
        if ($request->min_price && $request->max_price) {
            $products = $products->where('new_price', '>=', $request->min_price);
            $products = $products->where('new_price', '<=', $request->max_price);
        }

        $selectedChildcategories = $request->input('childcategory', []);
        $products = $products->when($selectedChildcategories, function ($query) use ($selectedChildcategories) {
            return $query->whereHas('childcategory', function ($subQuery) use ($selectedChildcategories) {
                $subQuery->whereIn('id', $selectedChildcategories);
            });
        });

        $products = $products->paginate(24);
        // return $products;
        $impproducts = Product::where(['status' => 1, 'topsale' => 1])
            ->with('image')
            ->limit(6)
            ->select('id', 'name', 'slug')
            ->get();

        return view('frontEnd.layouts.pages.subcategory', compact('subcategory', 'products', 'impproducts', 'childcategories', 'max_price', 'min_price'));
    }

    public function products($slug, Request $request)
    {
        $childcategory = Childcategory::where(['slug' => $slug, 'status' => 1])->first();
        $childcategories = Childcategory::where('subcategory_id', $childcategory->subcategory_id)->get();
        $products = Product::where(['status' => 1, 'childcategory_id' => $childcategory->id])->with('category')
            ->select('id', 'name', 'slug', 'new_price', 'old_price', 'category_id', 'subcategory_id', 'childcategory_id');


        // return $request->sort;
        if ($request->sort == 1) {
            $products = $products->orderBy('created_at', 'desc');
        } elseif ($request->sort == 2) {
            $products = $products->orderBy('created_at', 'asc');
        } elseif ($request->sort == 3) {
            $products = $products->orderBy('new_price', 'desc');
        } elseif ($request->sort == 4) {
            $products = $products->orderBy('new_price', 'asc');
        } elseif ($request->sort == 5) {
            $products = $products->orderBy('name', 'asc');
        } elseif ($request->sort == 6) {
            $products = $products->orderBy('name', 'desc');
        } else {
            $products = $products->latest();
        }

        $min_price = $products->min('new_price');
        $max_price = $products->max('new_price');
        if ($request->min_price && $request->max_price) {
            $products = $products->where('new_price', '>=', $request->min_price);
            $products = $products->where('new_price', '<=', $request->max_price);
        }

        $products = $products->paginate(24);
        // return $products;
        $impproducts = Product::where(['status' => 1, 'topsale' => 1])
            ->with('image')
            ->limit(6)
            ->select('id', 'name', 'slug')
            ->get();

        return view('frontEnd.layouts.pages.childcategory', compact('childcategory', 'products', 'impproducts', 'min_price', 'max_price', 'childcategories'));
    }


    public function details($slug)
    {
        $details = Product::where(['slug' => $slug, 'status' => 1])
            ->with('image', 'images', 'category', 'subcategory', 'childcategory')
            ->firstOrFail();
        $products = Product::where(['subcategory_id' => $details->subcategory_id, 'status' => 1])
            ->with('image')
            ->select('id', 'name', 'slug', 'new_price', 'old_price')
            ->get();
        $shippingcharge = ShippingCharge::where('status', 1)->get();
        $reviews = Review::where('product_id', $details->id)->get();
        $productcolors = Productcolor::where('product_id', $details->id)
            ->with('color')
            ->get();
        // return $productcolors;
        $productsizes = Productsize::where('product_id', $details->id)
            ->with('size')
            ->get();

        return view('frontEnd.layouts.pages.details', compact('details', 'products', 'shippingcharge', 'productcolors', 'productsizes', 'reviews'));
    }
    public function quickview(Request $request)
    {
        $data['data'] = Product::where(['id' => $request->id, 'status' => 1])->with('images')->withCount('reviews')->first();
        $data = view('frontEnd.layouts.ajax.quickview', $data)->render();
        if ($data != '') {
            echo $data;
        }
    }
    public function livesearch(Request $request)
    {
        $products = Product::select('id', 'name', 'slug', 'new_price', 'old_price')
            ->where('status', 1)
            ->with('image');
        if ($request->keyword) {
            $products = $products->where('name', 'LIKE', '%' . $request->keyword . "%");
        }
        if ($request->category) {
            $products = $products->where('category_id', $request->category);
        }
        $products = $products->get();

        if (empty($request->category) && empty($request->keyword)) {
            $products = [];
        }
        return view('frontEnd.layouts.ajax.search', compact('products'));
    }
    public function search(Request $request)
    {
        $products = Product::select('id', 'name', 'slug', 'new_price', 'old_price')
            ->where('status', 1)
            ->with('image');
        if ($request->keyword) {
            $products = $products->where('name', 'LIKE', '%' . $request->keyword . "%");
        }
        if ($request->category) {
            $products = $products->where('category_id', $request->category);
        }
        $products = $products->paginate(36);
        $keyword = $request->keyword;
        return view('frontEnd.layouts.pages.search', compact('products', 'keyword'));
    }

    public function shipping_charge(Request $request)
    {

        $shipping = ShippingCharge::where(['id' => $request->id])->first();
        Session::put('shipping', $shipping->amount);
        return view('frontEnd.layouts.ajax.cart');
    }


    public function contact(Request $request)
    {
        return view('frontEnd.layouts.pages.contact');
    }

    public function page($slug)
    {
        $page = CreatePage::where('slug', $slug)->firstOrFail();
        return view('frontEnd.layouts.pages.page', compact('page'));
    }
    public function districts(Request $request)
    {
        $areas = District::where(['district' => $request->id])->pluck('area_name', 'id');
        return response()->json($areas);
    }


    public function campaign($slug)
    {
        try {
            // Eager load all necessary relationships with variants, images, reviews etc.
            $campaign = Campaign::where('slug', $slug)
                ->where('status', 1)
                ->where(function ($query) {
                    $query->whereNull('start_date')
                        ->orWhere('start_date', '<=', now());
                })
                ->where(function ($query) {
                    $query->whereNull('end_date')
                        ->orWhere('end_date', '>=', now());
                })
                ->with([
                    'product' => function ($query) {
                        $query->with([
                            'image',
                            'images',
                            'prosizes.size',
                            'procolors.color',
                            'reviews.customer',
                            'category',
                            'subcategory',
                            'childcategory'
                        ]);
                    },
                    'images'
                ])
                ->firstOrFail();

            // Get related products
            $relatedProducts = Product::where('subcategory_id', $campaign->product->subcategory_id)
                ->where('id', '!=', $campaign->product->id)
                ->with('image')
                ->limit(4)
                ->get();

            // Get all shipping charges and first charge amount
            $shippingCharges = ShippingCharge::where('status', 1)->get();
            $shippingAmount = $shippingCharges->isNotEmpty() ? $shippingCharges->first()->amount : 0;

            // Handle cart functionality if product exists and is active
            if ($campaign->product && $campaign->product->status == 1) {
                Cart::instance('shopping')->destroy();

                try {
                    $cartItem = [
                        'id' => $campaign->product->id,
                        'name' => $campaign->product->name,
                        'qty' => 1,
                        'price' => $campaign->product->new_price,
                        'options' => [
                            'slug' => $campaign->product->slug,
                            'image' => $campaign->product->image ? $campaign->product->image->image : 'default-product-image.jpg',
                            'old_price' => $campaign->product->old_price,
                            'purchase_price' => $campaign->product->purchase_price ?? 0,
                            'category' => $campaign->product->category ? $campaign->product->category->name : '',
                            'subcategory' => $campaign->product->subcategory ? $campaign->product->subcategory->name : '',
                        ],
                    ];

                    Cart::instance('shopping')->add($cartItem);
                    Session::put('shipping', $shippingAmount);
                } catch (\Exception $e) {
                    Log::error('Cart error: ' . $e->getMessage());
                }
            }

            // Check if campaign has template
            if ($campaign->template) {
                // Use template-based view
                $templateView = 'templates.' . $campaign->template->view_name;

                // Check if template view exists, otherwise use default
                if (!view()->exists($templateView)) {
                    $templateView = 'templates.default';
                }

                return view($templateView, [
                    'landingPage' => $campaign, // Pass campaign as landingPage for template compatibility
                    'campaign_data' => $campaign,
                    'product' => $campaign->product,
                    'products' => $relatedProducts,
                    'shippingcharge' => $shippingCharges,
                    'shipping_amount' => $shippingAmount,
                    'reviews' => $campaign->product->reviews ?? collect(),
                    'productcolors' => $campaign->product->procolors ?? collect(),
                    'productsizes' => $campaign->product->prosizes ?? collect(),
                    'subtotal' => Cart::instance('shopping')->subtotal(0, '', '')
                ]);
            } else {
                // Use default campaign view
                return view('frontEnd.layouts.pages.campaign.campaign', [
                    'campaign_data' => $campaign,
                    'product' => $campaign->product,
                    'products' => $relatedProducts,
                    'shippingcharge' => $shippingCharges,
                    'shipping_amount' => $shippingAmount,
                    'reviews' => $campaign->product->reviews ?? collect(),
                    'productcolors' => $campaign->product->procolors ?? collect(),
                    'productsizes' => $campaign->product->prosizes ?? collect(),
                    'subtotal' => Cart::instance('shopping')->subtotal(0, '', '')
                ]);
            }
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404, 'Campaign not found');
        } catch (\Exception $e) {
            Log::error('Campaign page error: ' . $e->getMessage());
            return redirect()->route('home')->with('error', 'Something went wrong');
        }
    }

    public function landingPageDetails($slug)
    {
        try {
            // Eager load all necessary relationships with additional campaign data
            $campaign = Campaign::where('slug', $slug)
                ->with([
                    'product' => function ($query) {
                        $query->with('image')->where('status', 1);
                    },
                    'images',
                    'product.image'
                ])
                ->firstOrFail();

            // Get general settings and contact info
            $generalsetting = GeneralSetting::first();
            $contact = Contact::first();
            $pixels = Pixel::where('status', 1)->get();

            // Handle cart functionality if product exists and is active
            if ($campaign->product && $campaign->product->status == 1) {
                Cart::instance('shopping')->destroy();

                $cartItem = [
                    'id' => $campaign->product->id,
                    'name' => $campaign->product->name,
                    'qty' => 1,
                    'price' => $campaign->product->new_price,
                    'options' => [
                        'slug' => $campaign->product->slug,
                        'image' => $campaign->product->image->image ?? 'default-product-image.jpg',
                        'old_price' => $campaign->product->old_price,
                        'purchase_price' => $campaign->product->purchase_price ?? 0,
                    ],
                ];

                Cart::instance('shopping')->add($cartItem);
            }

            // Calculate cart totals
            $subtotal = str_replace([',', '.00'], '', Cart::instance('shopping')->subtotal());
            $shippingCharge = ShippingCharge::where('status', 1)->first();
            $shipping = $shippingCharge ? $shippingCharge->amount : 0;
            Session::put('shipping', $shipping);

            return view('frontEnd.layouts.pages.landingpages.detail', [
                'campaign' => $campaign,
                'generalsetting' => $generalsetting,
                'contact' => $contact,
                'pixels' => $pixels,
                'shippingcharge' => ShippingCharge::where('status', 1)->get(),
                'subtotal' => $subtotal,
                'shipping' => $shipping
            ]);
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            abort(404, 'Landing page not found');
        } catch (\Exception $e) {
            Log::error('Landing page error: ' . $e->getMessage());
            return redirect()->route('home')->with('error', 'Something went wrong');
        }
    }



    public function payment_success(Request $request)
    {
        $order_id = $request->order_id;
        $shurjopay_service = new ShurjopayController();
        $json = $shurjopay_service->verify($order_id);
        $data = json_decode($json);

        if ($data[0]->sp_code != 1000) {
            Toastr::error('Your payment failed, try again', 'Oops!');
            if ($data[0]->value1 == 'customer_payment') {
                return redirect()->route('home');
            } else {
                return redirect()->route('home');
            }
        }

        if ($data[0]->value1 == 'customer_payment') {

            $customer = Customer::find(Auth::guard('customer')->user()->id);

            // order data save
            $order = new Order();
            $order->invoice_id = $data[0]->id;
            $order->amount = $data[0]->amount;
            $order->customer_id = Auth::guard('customer')->user()->id;
            $order->order_status = $data[0]->bank_status;
            $order->save();

            // payment data save
            $payment = new Payment();
            $payment->order_id = $order->id;
            $payment->customer_id = Auth::guard('customer')->user()->id;
            $payment->payment_method = 'shurjopay';
            $payment->amount = $order->amount;
            $payment->trx_id = $data[0]->bank_trx_id;
            $payment->sender_number = $data[0]->phone_no;
            $payment->payment_status = 'paid';
            $payment->save();
            // order details data save
            foreach (Cart::instance('shopping')->content() as $cart) {
                $order_details = new OrderDetails();
                $order_details->order_id = $order->id;
                $order_details->product_id = $cart->id;
                $order_details->product_name = $cart->name;
                $order_details->purchase_price = $cart->options->purchase_price;
                $order_details->sale_price = $cart->price;
                $order_details->qty = $cart->qty;
                $order_details->save();
            }

            Cart::instance('shopping')->destroy();
            Toastr::error('Thanks, Your payment send successfully', 'Success!');
            return redirect()->route('home');
        }

        Toastr::error('Something wrong, please try agian', 'Error!');
        return redirect()->route('home');
    }
    public function payment_cancel(Request $request)
    {
        $order_id = $request->order_id;
        $shurjopay_service = new ShurjopayController();
        $json = $shurjopay_service->verify($order_id);
        $data = json_decode($json);

        Toastr::error('Your payment cancelled', 'Cancelled!');
        if ($data[0]->sp_code != 1000) {
            if ($data[0]->value1 == 'customer_payment') {
                return redirect()->route('home');
            } else {
                return redirect()->route('home');
            }
        }
    }

    public function offers()
    {
        return view('frontEnd.layouts.pages.offers');
    }





    //sagor vai 
    

    

    public function cartView() {
        

        return view('frontEnd.layouts.customer.cart');
    }
}
