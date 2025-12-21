@extends('backEnd.layouts.master')
@section('title','Landing Page Create')
@section('css')
<link href="{{asset('public/backEnd')}}/assets/libs/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('public/backEnd')}}/assets/libs/flatpickr/flatpickr.min.css" rel="stylesheet" type="text/css" />
<!-- CKEditor CDN -->
<script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

<style>
    /* Switch Button Styles */
    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2196F3;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2196F3;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }

    /* Form Styles */
    .form-group {
        margin-bottom: 1rem;
    }

    .form-label {
        font-weight: 600;
        color: #333;
        margin-bottom: 0.5rem;
    }

    .form-control {
        border: 1px solid #ced4da;
        border-radius: 0.375rem;
        padding: 0.5rem 0.75rem;
        font-size: 0.875rem;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    }

    .form-control:focus {
        border-color: #80bdff;
        outline: 0;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
    }

    .card {
        border: 1px solid #e3e6f0;
        border-radius: 0.35rem;
        box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
    }

    .card-body {
        padding: 1.25rem;
    }

    .btn-success {
        background-color: #1cc88a;
        border-color: #1cc88a;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 0.35rem;
        font-weight: 600;
    }

    .btn-success:hover {
        background-color: #17a673;
        border-color: #169b6b;
        color: white;
    }

    /* Section Headers */
    h4,
    h5 {
        color: #5a5c69;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .col-sm-3 {
            margin-bottom: 1rem;
        }
    }
</style>
@endsection
@section('content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="{{route('campaign.index')}}" class="btn btn-primary rounded-pill">Manage</a>
                </div>
                <h4 class="page-title">Landing Page Create</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body">
                    <form action="{{route('campaign.store')}}" method="POST" class=row data-parsley-validate="" enctype="multipart/form-data">
                        @csrf

                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label for="banner_title" class="form-label">Banner Title *</label>
                                <input type="text" class="form-control @error('banner_title') is-invalid @enderror" name="banner_title" value="{{ old('banner_title') }}" id="banner_title" required="">
                                @error('banner_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- col-end -->

                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label for="banner" class="form-label">Banner *</label>
                                <input type="file" class="form-control @error('banner') is-invalid @enderror " name="banner" value="{{ old('banner') }}" id="banner" required="">
                                @error('banner')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label for="video" class="form-label">Video </label>
                                <input type="text" class="form-control @error('video') is-invalid @enderror" name="video" value="{{ old('video') }}" id="video">
                                @error('video')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- col-end -->

                        <div class="col-sm-12">
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Landing Page Title *</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="name" required="">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- col-end -->

                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label for="product_id" class="form-label">Products *</label>
                                <select class="select2 form-control @error('product_id') is-invalid @enderror" value="{{ old('product_id') }}" name="product_id" data-placeholder="Choose ..." required>

                                    <option value="">Select..</option>
                                    @foreach($products as $value)
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                    @endforeach

                                </select>
                                @error('product_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- col end -->

                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label for="template_id" class="form-label">Template Design *</label>
                                <select class="select2 form-control @error('template_id') is-invalid @enderror" value="{{ old('template_id') }}" name="template_id" data-placeholder="Choose Template..." required>
                                    <option value="">Select Template..</option>
                                    @foreach($templates as $template)
                                    <option value="{{$template->id}}" {{ old('template_id') == $template->id ? 'selected' : '' }}>
                                        {{$template->name}} - {{$template->description}}
                                    </option>
                                    @endforeach
                                </select>
                                @error('template_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- col end -->

                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label for="image_one" class="form-label">Image One*</label>
                                <input type="file" class="form-control @error('image_one') is-invalid @enderror " name="image_one" value="{{ old('image_one') }}" id="image_one" required="">
                                @error('image_one')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- col end -->

                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label for="image_two" class="form-label">Image Two</label>
                                <input type="file" class="form-control @error('image_two') is-invalid @enderror " name="image_two" value="{{ old('image_two') }}" id="image_two">
                                @error('image_two')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- col end -->

                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label for="image_three" class="form-label">Image Three</label>
                                <input type="file" class="form-control @error('image_three') is-invalid @enderror " name="image_three" value="{{ old('image_three') }}" id="image_three">
                                @error('image_three')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- col end -->
                        <div class="col-sm-6">
                            <div class="form-group mb-3">
                                <label for="review" class="form-label">Review Images *</label>
                                <input type="text" class="form-control @error('review') is-invalid @enderror" name="review" value="{{ old('review') }}" id="review" required="">
                                @error('review')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">
                            <label for="image">Image *</label>
                            <div class="clone hide" style="display: none;">
                                <div class="control-group input-group">
                                    <input type="file" name="image[]" class="form-control" />
                                    <div class="input-group-btn">
                                        <button class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group control-group increment">
                                <input type="file" name="image[]" class="form-control @error('image') is-invalid @enderror" />
                                <div class="input-group-btn">
                                    <button class="btn btn-success btn-increment" type="button"><i class="fa fa-plus"></i></button>
                                </div>
                                @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- col end -->
                        <!-- col-end -->
                        <div class="col-sm-12 my-3">
                            <div class="form-group">
                                <label for="short_description" class="form-label">Short Description</label>
                                <textarea name="short_description" id="short_description" rows="6" class="form-control @error('short_description') is-invalid @enderror" placeholder="Enter short description here...">{{ old('short_description') }}</textarea>
                                @error('short_description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- clone_price end -->
                        <div class="col-sm-12 my-3">
                            <div class="form-group">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" rows="6" class="form-control @error('description') is-invalid @enderror" placeholder="Enter description here...">{{ old('description') }}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- clone_price end -->

                        <!-- Dynamic Content Section -->
                        <div class="col-12">
                            <h4 class="mt-4 mb-3">Dynamic Content Settings</h4>
                        </div>

                        <!-- Campaign Type -->
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="campaign_type" class="form-label">Campaign Type *</label>
                                <select class="form-control @error('campaign_type') is-invalid @enderror" name="campaign_type" required>
                                    <option value="">Select Campaign Type</option>
                                    <option value="product" {{ old('campaign_type') == 'product' ? 'selected' : '' }}>Product</option>
                                    <option value="service" {{ old('campaign_type') == 'service' ? 'selected' : '' }}>Service</option>
                                    <option value="landing" {{ old('campaign_type') == 'landing' ? 'selected' : '' }}>Landing Page</option>
                                    <option value="promotional" {{ old('campaign_type') == 'promotional' ? 'selected' : '' }}>Promotional</option>
                                </select>
                                @error('campaign_type')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Campaign Dates -->
                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="start_date" class="form-label">Start Date</label>
                                <input type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{ old('start_date') }}">
                                @error('start_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="end_date" class="form-label">End Date</label>
                                <input type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{ old('end_date') }}">
                                @error('end_date')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Hero Section -->
                        <div class="col-12">
                            <h5 class="mt-3 mb-2">Hero Section</h5>
                        </div>

                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="hero_title" class="form-label">Hero Title</label>
                                <input type="text" class="form-control @error('hero_title') is-invalid @enderror" name="hero_title" value="{{ old('hero_title') }}" placeholder="Enter hero title">
                                @error('hero_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="hero_button_text" class="form-label">Hero Button Text</label>
                                <input type="text" class="form-control @error('hero_button_text') is-invalid @enderror" name="hero_button_text" value="{{ old('hero_button_text') }}" placeholder="e.g., Order Now">
                                @error('hero_button_text')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label for="hero_subtitle" class="form-label">Hero Subtitle</label>
                                <textarea name="hero_subtitle" rows="3" class="form-control @error('hero_subtitle') is-invalid @enderror" placeholder="Enter hero subtitle">{{ old('hero_subtitle') }}</textarea>
                                @error('hero_subtitle')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <!-- Section Visibility -->
                        <div class="col-12">
                            <h5 class="mt-3 mb-2">Section Visibility</h5>
                        </div>

                        <div class="col-sm-3 mb-3">
                            <div class="form-group">
                                <label class="d-block">Show Features</label>
                                <label class="switch">
                                    <input type="checkbox" value="1" name="show_features" {{ old('show_features') ? 'checked' : 'checked' }}>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-3">
                            <div class="form-group">
                                <label class="d-block">Show Benefits</label>
                                <label class="switch">
                                    <input type="checkbox" value="1" name="show_benefits" {{ old('show_benefits') ? 'checked' : 'checked' }}>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-3">
                            <div class="form-group">
                                <label class="d-block">Show Testimonials</label>
                                <label class="switch">
                                    <input type="checkbox" value="1" name="show_testimonials" {{ old('show_testimonials') ? 'checked' : 'checked' }}>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-3">
                            <div class="form-group">
                                <label class="d-block">Show FAQ</label>
                                <label class="switch">
                                    <input type="checkbox" value="1" name="show_faq" {{ old('show_faq') ? 'checked' : 'checked' }}>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-3">
                            <div class="form-group">
                                <label class="d-block">Show CTA</label>
                                <label class="switch">
                                    <input type="checkbox" value="1" name="show_cta" {{ old('show_cta') ? 'checked' : 'checked' }}>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="col-sm-3 mb-3">
                            <div class="form-group">
                                <label class="d-block">Featured Campaign</label>
                                <label class="switch">
                                    <input type="checkbox" value="1" name="is_featured" {{ old('is_featured') ? 'checked' : '' }}>
                                    <span class="slider round"></span>
                                </label>
                            </div>
                        </div>

                        <div class="col-sm-6 mb-3">
                            <div class="form-group">
                                <label for="sort_order" class="form-label">Sort Order</label>
                                <input type="number" class="form-control @error('sort_order') is-invalid @enderror" name="sort_order" value="{{ old('sort_order', 0) }}">
                                @error('sort_order')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-sm-12 mb-3">
                            <div class="form-group">
                                <label for="status" class="d-block">Status</label>
                                <label class="switch">
                                    <input type="checkbox" value="1" name="status" checked>
                                    <span class="slider round"></span>
                                </label>
                                @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <!-- col end -->
                        <div>
                            <input type="submit" class="btn btn-success" value="Submit">
                        </div>

                    </form>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div> <!-- end col-->
    </div>
</div>
@endsection


@section('script')
<script src="{{asset('public/backEnd/')}}/assets/libs/parsleyjs/parsley.min.js"></script>
<script src="{{asset('public/backEnd/')}}/assets/js/pages/form-validation.init.js"></script>
<script src="{{asset('public/backEnd/')}}/assets/libs/select2/js/select2.min.js"></script>
<script src="{{asset('public/backEnd/')}}/assets/js/pages/form-advanced.init.js"></script>
<script src="{{asset('public/backEnd/')}}/assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="{{asset('public/backEnd/')}}/assets/js/pages/form-pickers.init.js"></script>

<!-- CKEditor Initialization -->
<script>
    ClassicEditor
        .create(document.querySelector('#description'), {
            toolbar: {
                items: [
                    'undo', 'redo',
                    '|', 'heading',
                    '|', 'bold', 'italic', 'underline', 'strikethrough',
                    '|', 'fontColor', 'fontBackgroundColor',
                    '|', 'link', 'blockQuote', 'insertTable', 'mediaEmbed',
                    '|', 'bulletedList', 'numberedList',
                    '|', 'indent', 'outdent',
                    '|', 'alignment',
                    '|', 'removeFormat'
                ]
            },
            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:full',
                    'imageStyle:side'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            },
            licenseKey: '',
        })
        .then(editor => {
            console.log('Description editor initialized');
        })
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#short_description'), {
            toolbar: {
                items: [
                    'undo', 'redo',
                    '|', 'heading',
                    '|', 'bold', 'italic', 'underline',
                    '|', 'fontColor', 'fontBackgroundColor',
                    '|', 'link', 'blockQuote',
                    '|', 'bulletedList', 'numberedList',
                    '|', 'alignment',
                    '|', 'removeFormat'
                ]
            },
            language: 'en',
            licenseKey: '',
        })
        .then(editor => {
            console.log('Short description editor initialized');
        })
        .catch(error => {
            console.error(error);
        });
</script>

<script type="text/javascript">
    $(document).ready(function() {
        $(".btn-increment").click(function() {
            var html = $(".clone").html();
            $(".increment").after(html);
        });
        $("body").on("click", ".btn-danger", function() {
            $(this).parents(".control-group").remove();
        });
        $('.select2').select2();
    });
</script>
@endsection