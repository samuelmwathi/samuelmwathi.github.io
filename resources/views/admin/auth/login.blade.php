@extends('admin.layouts.loginLayout')
@section('title','Login')
@section('content')

<div class="account-pages my-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-md-12 p-5">
{{--                                <div class="mx-auto mb-5">--}}
{{--                                    <a href="index.html">--}}
{{--                                        <img src="assets/images/logo.png" alt="" height="24" />--}}
{{--                                        <h3 class="d-inline align-middle ml-1 text-logo">Shreyu</h3>--}}
{{--                                    </a>--}}
{{--                                </div>--}}

                                <h6 class="h5 mb-0 mt-4">Welcome back!</h6>
                                <p class="text-muted mt-1 mb-4">Enter your email address and password to
                                    access admin panel.</p>
                                @include('partials.info')

                                <form action="{{ route('admin.login.action') }}" method="post" class="authentication-form">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-control-label">Email Address</label>
                                        <div class="input-group input-group-merge {{ $errors->has('email') ? ' has-error' : '' }}">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="mail"></i>
                                                        </span>
                                            </div>
                                            <input type="email" name="email" class="form-control" id="email" placeholder="hello@email.com" value="{{ old('email') }}">

                                        </div>
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                        @endif
                                    </div>

                                    <div class="form-group mt-4">
                                        <label class="form-control-label">Password</label>
                                        <a href="{{ route('admin.password.reset') }}" class="float-right text-muted text-unline-dashed ml-1">Forgot your password?</a>
                                        <div class="input-group input-group-merge {{ $errors->has('password') ? ' has-error' : '' }}">
                                            <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                            </div>
                                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">

                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                        @endif
                                    </div>

                                    <div class="form-group mb-4">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="checkbox-signin" checked>
                                            <label class="custom-control-label" for="checkbox-signin">Remember
                                                me</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary btn-block" type="submit"> Log In
                                        </button>
                                    </div>
                                </form>
{{--                                <div class="py-3 text-center"><span class="font-size-16 font-weight-bold">Or</span></div>--}}
{{--                                <div class="row">--}}
{{--                                    <div class="col-6">--}}
{{--                                        <a href="#" class="btn btn-white"><i class='uil uil-google icon-google mr-2'></i>With Google</a>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-6 text-right">--}}
{{--                                        <a href="#" class="btn btn-white"><i class='uil uil-facebook mr-2 icon-fb'></i>With Facebook</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>

                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->

{{--                <div class="row mt-3">--}}
{{--                    <div class="col-12 text-center">--}}
{{--                        <p class="text-muted">Don't have an account? <a href="pages-register.html" class="text-primary font-weight-bold ml-1">Sign Up</a></p>--}}
{{--                    </div> <!-- end col -->--}}
{{--                </div>--}}
                <!-- end row -->

            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
@endsection
