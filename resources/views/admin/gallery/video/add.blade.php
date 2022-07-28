@extends('admin.layouts.layouts')
@section('title','New Gallery Image')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Add Image</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->



                <div class="row">

                    <div class="col-12">
                        <div class="card-box">
                            <h2 class="header-title">Add Image</h2>
                            <hr>
                            @include('partials.info')
                            <form id="demo-form" data-parsley-validate="" method="post" action="{{ route('admin.gallery.videos.submit') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="fullname">Youtube Iframe * :</label>
                                    <input type="text" name="video" placeholder="Youtube Iframe" class="form-control @error('video') is-invalid @enderror" value="{{ old('video') }}" required="">
                                    @if ($errors->has('video'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('video') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="fullname">Details * :</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" name="description">{{ old('description') }}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('description') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div style="padding-top: 10px" class="form-group mb-0">
                                    <button type="submit" class="btn btn-success" value="Submit">Submit <i class="ti-upload"></i> </button>
                                </div>

                            </form>
                        </div> <!-- end card-box-->
                    </div> <!-- end col-->
                </div>
                <!-- end row-->
            </div> <!-- container -->

        </div> <!-- content -->
    </div>
@endsection
