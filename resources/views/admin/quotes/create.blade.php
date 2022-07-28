@extends('admin.layouts.layouts')
@section('title','Add Client Quote')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Add Client Quote</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->



                <div class="row">

                    <div class="col-12">
                        <div class="card-box">
                            <h2 class="header-title">Add Client Quote</h2>
                            <hr>
                            @include('partials.info')
                            <form id="demo-form" data-parsley-validate="" method="post" action="{{ route('admin.quotes.submit') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="fullname">Client Name * :</label>
                                    <input type="text" name="name"  class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required="">
                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="fullname">Position * :</label>
                                    <input type="text" name="position"  class="form-control @error('position') is-invalid @enderror" value="{{ old('position') }}" required="">
                                    @if ($errors->has('position'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('position') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="fullname">Company Name * :</label>
                                    <input type="text" name="company"  class="form-control @error('company') is-invalid @enderror" value="{{ old('company') }}" required="">
                                    @if ($errors->has('company'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('company') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="fullname">Quote * :</label>
                                    <textarea class="form-control @error('quote') is-invalid @enderror" name="quote">{{ old('quote') }}</textarea>
                                    @if ($errors->has('quote'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('quote') }}</strong>
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
