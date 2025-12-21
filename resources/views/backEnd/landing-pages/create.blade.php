@extends('backEnd.layouts.master')
@section('title')
Create Landing Page
@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- Breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Create New Landing Page</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('landing-pages.index') }}">Landing Pages</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Landing Page Information</h4>
                    </div>
                    <div class="card-body">
                        @if($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <ul class="mb-0">
                                @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif

                        <form action="{{ route('landing-pages.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row">
                                <!-- Basic Information -->
                                <div class="col-md-8">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">Basic Information</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12 mb-3">
                                                    <label for="title" class="form-label">Page Title *</label>
                                                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                                                        id="title" name="title" value="{{ old('title') }}" required>
                                                    @error('title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label for="subtitle" class="form-label">Subtitle</label>
                                                    <input type="text" class="form-control @error('subtitle') is-invalid @enderror"
                                                        id="subtitle" name="subtitle" value="{{ old('subtitle') }}">
                                                    @error('subtitle')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="col-md-12 mb-3">
                                                    <label for="description" class="form-label">Description</label>
                                                    <textarea class="form-control @error('description') is-invalid @enderror"
                                                        id="description" name="description" rows="6">{{ old('description') }}</textarea>
                                                    @error('description')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="cta_text" class="form-label">CTA Button Text</label>
                                                    <input type="text" class="form-control @error('cta_text') is-invalid @enderror"
                                                        id="cta_text" name="cta_text" value="{{ old('cta_text') }}">
                                                    @error('cta_text')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="col-md-6 mb-3">
                                                    <label for="cta_link" class="form-label">CTA Button Link</label>
                                                    <input type="url" class="form-control @error('cta_link') is-invalid @enderror"
                                                        id="cta_link" name="cta_link" value="{{ old('cta_link') }}">
                                                    @error('cta_link')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Template & Settings -->
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title">Template & Settings</h5>
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="template_id" class="form-label">Template *</label>
                                                <select class="form-select @error('template_id') is-invalid @enderror"
                                                    id="template_id" name="template_id" required>
                                                    <option value="">Select Template</option>
                                                    @foreach($templates as $template)
                                                    <option value="{{ $template->id }}" {{ old('template_id') == $template->id ? 'selected' : '' }}>
                                                        {{ $template->name }}
                                                    </option>
                                                    @endforeach
                                                </select>
                                                @error('template_id')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="mb-3">
                                                <label for="image" class="form-label">Hero Image</label>
                                                <input type="file" class="form-control @error('image') is-invalid @enderror"
                                                    id="image" name="image" accept="image/*">
                                                @error('image')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                                <small class="form-text text-muted">Recommended size: 800x600px, Max: 2MB</small>
                                            </div>

                                            <div class="mb-3">
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input" type="checkbox" id="status" name="status" checked>
                                                    <label class="form-check-label" for="status">
                                                        Active Status
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Submit Buttons -->
                            <div class="row mt-3">
                                <div class="col-12">
                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="{{ route('landing-pages.index') }}" class="btn btn-secondary">
                                            <i class="fas fa-arrow-left me-2"></i>Back to List
                                        </a>
                                        <button type="submit" class="btn btn-primary">
                                            <i class="fas fa-save me-2"></i>Create Landing Page
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Preview image before upload
    document.getElementById('image').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                // You can add image preview functionality here
                console.log('Image selected:', file.name);
            };
            reader.readAsDataURL(file);
        }
    });
</script>
@endpush