@extends('admin.layouts.layouts')
@section('title',$details->firstName." ".$details->midName." ".$details->lastName)

@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box">
                            <h4 class="page-title">Profile</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-4 col-xl-4">
                        <div class="card-box text-center">
                            <img src="{{ $details->avatar == null ? asset('images/avatar.png') : asset('uploads/'.$details->avatar) }}" class="rounded-circle avatar-lg img-thumbnail"
                                 alt="profile-image">

                            <h4 class="mb-0">{{ $details->firstName." ".$details->middleName." ".$details->lastName }}</h4>
                            {{--                            <p class="text-muted">@webdesigner</p>--}}
                            <br>


                            <div class="text-left mt-3">

                                <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2">{{ $details->firstName." ".$details->middleName." ".$details->lastName }}</span></p>

                                <p class="text-muted mb-2 font-13"><strong>Phone :</strong><span class="ml-2">{{ $details->phone }}</span></p>

                                <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 ">{{ $details->email }}</span></p>

                                <p class="text-muted mb-1 font-13"><strong>Status :</strong>
                                    @if($details->status == true)
                                        <span class="badge bg-success text-white ml-2">Active</span>
                                    @else
                                        <span class="badge bg-warning text-white ml-2">Inactive</span>
                                    @endif
                                </p>
{{--                                <h4 class="font-13 text-uppercase">About:</h4>--}}
{{--                                <p class="text-muted font-13 mb-3">--}}
{{--                                    {{ $details->details }}--}}
{{--                                </p>--}}
                            </div>

                        </div> <!-- end card-box -->
                    </div> <!-- end col-->

                    <div class="col-lg-8 col-xl-8">
                        @include('partials.info')
                        @if ($errors->has('password'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('password') }}
                            </div>
                        @endif
                        @if ($errors->has('newPassword'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('newPassword') }}
                            </div>
                        @endif
                        @if ($errors->has('confirmPassword'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('newPassword') }}
                            </div>
                        @endif
                        @if ($errors->has('image'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                {{ $errors->first('image') }}
                            </div>
                        @endif
                        <div class="card-box">
                            <ul class="nav nav-pills navtab-bg nav-justified">
                                <li class="nav-item">
                                    <a href="#details" data-toggle="tab" aria-expanded="false" class="nav-link active">
                                        Details
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#profPic" data-toggle="tab" aria-expanded="false" class="nav-link">
                                        Update Profile Picture
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#password" data-toggle="tab" aria-expanded="true" class="nav-link">
                                        Change Password
                                    </a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active" id="details">
                                    <h5>Update Details</h5>
                                    <form id="demo-form" data-parsley-validate="" method="post" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="firstname">First Name * :</label>
                                                    <input type="text"  name="firstName" class="form-control" id="firstname" placeholder="Enter first name" value="{{ $details->firstName }}">
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
                                                    <input type="text" name="midName" class="form-control" id="lastname" placeholder="Enter Middle Name" value="{{ $details->middleName }}">
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
                                                    <input type="text" name="lastName" class="form-control" id="lastname" placeholder="Enter last Name" value="{{ $details->lastName }}">
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
                                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ $details->email }}" required="">
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="fullname">Phone * :</label>
                                            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{ $details->phone }}" required="">
                                            @if ($errors->has('phone'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('phone') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div style="padding-top: 10px" class="form-group mb-0 " >
                                            <input type="submit" class="btn btn-success pull" value="Edit Details">
                                        </div>

                                    </form>


                                </div>
                                <div class="tab-pane show" id="profPic">
                                    <h5>Update Avatar</h5>

                                    <form id="demo-form" data-parsley-validate="" method="post" action="{{ route('admin.profile.avatar.update') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label for="fullname">Select Image * :</label>
                                            <input type="file" name="image" class="form-control @error('file') is-invalid @enderror"  required="">
                                            @if ($errors->has('file'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('file') }}</strong>
                                            </span>
                                            @endif
                                        </div>

                                        <div style="padding-top: 10px" class="form-group mb-0 " >
                                            <input type="submit" class="btn btn-success pull" value="Update Avatar">
                                        </div>

                                    </form>


                                </div> <!-- end tab-pane -->
                                <div class="tab-pane show" id="password">
                                    <h5>Update Password</h5>

                                    <form id="demo-form" data-parsley-validate="" method="post" action="{{ route('admin.profile.password.update') }}" enctype="multipart/form-data">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label for="fullname">Old Password * :</label>
                                            <input type="password" name="oldPassword" class="form-control @error('password') is-invalid @enderror"  required="">
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="fullname">New Password * :</label>
                                            <input type="password" name="newPassword" class="form-control @error('newPassword') is-invalid @enderror"  required="">
                                            @if ($errors->has('newPassword'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('newPassword') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="fullname">Confirm Password * :</label>
                                            <input type="password" name="confirmPassword" class="form-control @error('password_confirmation') is-invalid @enderror" required="">
                                            @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                            @endif
                                        </div>



                                        <div style="padding-top: 10px" class="form-group mb-0 " >
                                            <input type="submit" class="btn btn-success pull" value="Update Password">
                                        </div>

                                    </form>


                                </div> <!-- end tab-pane -->

                            </div> <!-- end tab-content -->
                        </div> <!-- end card-box-->

                    </div> <!-- end col -->
                </div>
                <!-- end row-->

            </div> <!-- container -->

        </div> <!-- content -->
        <script>
            function deleteUser(id) {
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            var url = '{{ route("admin.users.delete", ":id") }}';

                            url = url.replace(':id', id);

                            window.location.href=url;

                        }
                    });
            }
            function suspendUser(id) {
                swal({
                    title: "Are you sure?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            var url = '{{ route("admin.users.suspend", ":id") }}';

                            url = url.replace(':id', id);

                            window.location.href=url;

                        }
                    });
            }
            function activateUser(id) {
                swal({
                    title: "Are you sure?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            var url = '{{ route("admin.users.activate", ":id") }}';

                            url = url.replace(':id', id);

                            window.location.href=url;

                        }
                    });
            }
        </script>

@endsection
