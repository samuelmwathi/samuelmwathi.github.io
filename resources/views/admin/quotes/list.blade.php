@extends('admin.layouts.layouts')
@section('title','Client Quotes')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">
                <div class="row page-title align-items-center">
                    <div class="col-md-3 col-xl-6">
                        <h4 class="mb-1 mt-0">Client Quotes</h4>
                    </div>
                    <div class="col-md-9 col-xl-6 text-md-right">
                        <div class="mt-4 mt-md-0">
                            <a href="{{ route('admin.quotes.create') }}" class="btn btn-info mr-4 mb-3  mb-sm-0">Add Quote <i class="uil-plus mr-1"></i></a>
                        </div>
                    </div>
                </div>

                @include('partials.info')

                <div class="row">
                    @foreach($quotes  as $row)

                        <div class="col-xl-4 col-lg-6">
                            <div class="card">
                                <div class="card-body">
{{--                                    <div class="badge badge-warning float-right">Pending</div>--}}
{{--                                    <p class="text-warning text-uppercase font-size-12 mb-2">Android</p>--}}
                                    <h5><a href="#" class="text-dark">{{ $row->name }}</a></h5>
                                    <h6>{{$row->position ." - ".$row->company}}</h6>
                                    <p class="text-muted mb-4">
                                        <blockquote>{{$row->quote}}</blockquote>
                                    </p>


                                </div>
                                <div class="card-body border-top">
                                    <div class="row align-items-center">
                                        <div class="col-sm-auto">
                                            <ul class="list-inline mb-0">
                                                <li class="list-inline-item pr-2">
                                                    <a href="{{ route('admin.quotes.edit',$row->id) }}" class="btn btn-sm btn-info">
                                                        <i class="uil uil-edit"></i> Edit
                                                    </a>
                                                </li>
                                                <li class="list-inline-item pr-2">
                                                    <a href="#" onclick="deleteQuote({{$row->id}})" class="btn btn-danger btn-sm">
                                                        <i class="uil uil-trash"></i> Delete
                                                    </a>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="col offset-sm-1">
                                            <div class="progress mt-4 mt-sm-0" style="height: 5px;"
                                                 data-toggle="tooltip" data-placement="top" title=""
                                                 data-original-title="72% completed">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 72%;"
                                                     aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
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
            function deleteQuote(id) {
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            var url = '{{ route("admin.quotes.delete", ":id") }}';

                            url = url.replace(':id', id);

                            window.location.href=url;

                        }
                    });
            }
        </script>

@endsection
