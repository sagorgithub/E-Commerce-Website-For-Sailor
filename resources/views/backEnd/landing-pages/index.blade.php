@extends('backEnd.layouts.master')
@section('title')
    Landing Pages Management
@endsection

@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- Breadcrumb -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-flex align-items-center justify-content-between">
                    <h4 class="mb-0">Landing Pages Management</h4>
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Landing Pages</li>
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
                        <div class="d-flex justify-content-between align-items-center">
                            <h4 class="card-title mb-0">All Landing Pages</h4>
                            <a href="{{ route('landing-pages.create') }}" class="btn btn-primary">
                                <i class="fas fa-plus me-2"></i>Create New Landing Page
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if($landingPages->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Template</th>
                                            <th>Status</th>
                                            <th>Created</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($landingPages as $landingPage)
                                        <tr>
                                            <td>{{ $landingPage->id }}</td>
                                            <td>
                                                <strong>{{ $landingPage->title }}</strong>
                                                @if($landingPage->subtitle)
                                                    <br><small class="text-muted">{{ $landingPage->subtitle }}</small>
                                                @endif
                                            </td>
                                            <td>
                                                <span class="badge bg-info">{{ $landingPage->template->name }}</span>
                                            </td>
                                            <td>
                                                @if($landingPage->status)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-danger">Inactive</span>
                                                @endif
                                            </td>
                                            <td>{{ $landingPage->created_at->format('M d, Y') }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('landing-pages.show', $landingPage->id) }}" 
                                                       class="btn btn-sm btn-info" title="View">
                                                        <i class="fas fa-eye"></i>
                                                    </a>
                                                    <a href="{{ route('landing-pages.edit', $landingPage->id) }}" 
                                                       class="btn btn-sm btn-warning" title="Edit">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="{{ route('landing.show', $landingPage->slug) }}" 
                                                       target="_blank" class="btn btn-sm btn-success" title="Preview">
                                                        <i class="fas fa-external-link-alt"></i>
                                                    </a>
                                                    <form action="{{ route('landing-pages.destroy') }}" method="POST" 
                                                          style="display: inline;" onsubmit="return confirm('Are you sure?')">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $landingPage->id }}">
                                                        <button type="submit" class="btn btn-sm btn-danger" title="Delete">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="text-center py-4">
                                <i class="fas fa-file-alt fa-3x text-muted mb-3"></i>
                                <h5 class="text-muted">No Landing Pages Found</h5>
                                <p class="text-muted">Create your first landing page to get started.</p>
                                <a href="{{ route('landing-pages.create') }}" class="btn btn-primary">
                                    <i class="fas fa-plus me-2"></i>Create Landing Page
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
