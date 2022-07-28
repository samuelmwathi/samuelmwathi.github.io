@extends('admin.layouts.layouts')
@section('title','New Gallery Image')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row page-title align-items-center">
                    <div class="col-md-3 col-xl-6">
                        <h4 class="mb-1 mt-0">Gallery Videos</h4>
                    </div>
                    <div class="col-md-9 col-xl-6 text-md-right">
                        <div class="mt-4 mt-md-0">
                            <a href="{{ route('admin.gallery.videos.add') }}" class="btn btn-info mr-4 mb-3  mb-sm-0"> Add video <i class="uil-plus mr-1"></i></a>
                        </div>
                    </div>
                </div>

                @include('partials.info')

                <div class="row">
                    @foreach($videos  as $video)
                        <div class="col-xl-4 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        {!! $video->video !!}
                                    </div>
                                    <br>
                                    <p class="text-muted mb-4">{{ $video->description }}</p>
                                </div>
                                <div class="card-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-sm-auto">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item pr-2">
                                                    <a href="#" onclick="deleteImage({{$video->id}})" class="btn btn-danger">
                                                        Delete <i data-feather="trash"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- end card -->
                        </div>
                    @endforeach

                </div>
            </div> <!-- container-fluid -->

        </div> <!-- content -->

        <script>
            function deleteImage(id) {
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            var url = '{{ route("admin.gallery.videos.delete", ":id") }}';

                            url = url.replace(':id', id);

                            window.location.href=url;

                        }
                    });
            }
        </script>

@endsection
