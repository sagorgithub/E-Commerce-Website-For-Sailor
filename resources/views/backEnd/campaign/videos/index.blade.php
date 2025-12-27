@extends('backEnd.layouts.master')
@section('title','Landing Page Manage')

@section('css')
<link href="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
<link href="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                {{-- <div class="page-title-right">
                    <a href="{{route('campaign.create')}}" class="btn btn-primary rounded-pill">Create</a>
                </div> --}}
                <h4 class="page-title">Video Page Manage</h4>
            </div>
        </div>
    </div>       
    <!-- end page title --> 
   <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('campaign.videos.store') }}"
                    method="POST"
                    enctype="multipart/form-data">
                @csrf

                <input type="text" name="title" placeholder="Video title">

                <br><br>

                <input type="file" name="video" required>

                <br><br>

                <label><input type="checkbox" name="pages[]" value="home"> Home</label>
                <label><input type="checkbox" name="pages[]" value="campaign"> Campaign</label>
                <label><input type="checkbox" name="pages[]" value="landing"> Landing</label>

                <br><br>

                <button type="submit">Upload</button>
                </form>



            </div> <!-- end card body-->
        </div> <!-- end card -->

        <hr>

        <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Video</th>
            <th>Pages</th>
            <th>Status</th>
            <th>Action</th>
            <th>Action</th>
        </tr>
        </thead>

        <tbody>
        @foreach($videos as $key => $video)
        <tr>
        <td>{{ $key+1 }}</td>

        <td>
        <video width="120" controls>
        <source src="{{ asset('storage/'.$video->video) }}">
        </video>
        </td>

        <td>{{ implode(', ', $video->pages ?? []) }}</td>

        <td>
        <form action="{{ route('campaign.videos.status',$video->id) }}"
            method="POST">
        @csrf @method('PATCH')
        <button class="btn btn-sm {{ $video->status ? 'btn-success':'btn-secondary' }}">
        {{ $video->status ? 'ON':'OFF' }}
        </button>
        </form>
        </td>

        <td>
        <form action="{{ route('campaign.videos.delete',$video->id) }}"
            method="POST">
        @csrf @method('DELETE')
        <button class="btn btn-danger btn-sm">Delete</button>
        </form>
        </td>
        <td>
            <select class="video-pages" data-id="{{ $video->id }}" multiple>
                <option value="home" {{ in_array('home',$video->pages ?? []) ? 'selected':'' }}>Home</option>
                <option value="campaign" {{ in_array('campaign',$video->pages ?? []) ? 'selected':'' }}>Campaign</option>
                <option value="landing" {{ in_array('landing',$video->pages ?? []) ? 'selected':'' }}>Landing</option>
            </select>

        </td>
        </tr>
        @endforeach
        </tbody>
        </table>


    </div><!-- end col-->
   </div>
</div>
@endsection


@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
    }
});

// STATUS TOGGLE
$('.video-status').change(function(){
    let id = $(this).data('id');
    let status = $(this).is(':checked') ? 1 : 0;

    $.ajax({
        url: '/campaign/videos/'+id+'/status-ajax',
        type: 'PATCH',
        data: {status: status},
    });
});

// PAGE CHANGE
$('.video-pages').change(function(){
    let id = $(this).data('id');
    let pages = $(this).val();

    $.ajax({
        url: '/campaign/videos/'+id+'/pages-ajax',
        type: 'PATCH',
        data: {pages: pages},
    });
});
</script>







<!-- third party js -->
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="{{asset('/public/backEnd/')}}/assets/js/pages/datatables.init.js"></script>
<!-- third party js ends -->
@endsection