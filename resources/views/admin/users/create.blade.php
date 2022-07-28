@extends('admin.layouts.layouts')
@section('title','New User')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Create User</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->



                <div class="row">

                    <div class="col-12">
                        <div class="card-box">
                            <h2 class="header-title">User Details</h2>
                            <hr>
                            @include('partials.info')
                            <form id="demo-form" data-parsley-validate="" method="post" action="{{ route('admin.users.submit') }}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="firstname">First Name * :</label>
                                            <input type="text"  name="firstName" class="form-control" id="firstname" placeholder="Enter first name" value="{{ old('firstName') }}">
                                            @if ($errors->has('firstName'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('firstName') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lastname">Middle Name:</label>
                                            <input type="text" name="midName" class="form-control" id="lastname" placeholder="Enter Middle Name" value="{{ old('midName') }}">
                                            @if ($errors->has('midName'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('midName') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div> <!-- end col -->
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="lastname">Last Name * :</label>
                                            <input type="text" name="lastName" class="form-control" id="lastname" placeholder="Enter last Name" value="{{ old('lastName') }}">
                                            @if ($errors->has('lastName'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('lastName') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div> <!-- end col -->
                                </div>

                                <div class="form-group">
                                    <label for="fullname">Email * :</label>
                                    <input type="email" name="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required="">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="fullname">Phone * :</label>
                                    <input type="text" name="phone" placeholder="Phone Number" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" required="">
                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                    @endif
                                </div>

                                <div style="padding-top: 10px" class="form-group mb-0">
                                    <input type="submit" class="btn btn-success" value="Submit User">
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
