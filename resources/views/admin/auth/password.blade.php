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

                                    <h6 class="h5 mb-0 mt-4">Password Reset!</h6>
                                    <p class="text-muted mt-1 mb-4">Set your new password.</p>
                                    @include('partials.info')

                                    <form action="{{ route('admin.password.new.submit') }}" method="post" class="authentication-form">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $details->remember_token }}">
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
                                        <div class="form-group mt-4">
                                            <label class="form-control-label">Password Confirmation</label>
                                            <div class="input-group input-group-merge {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                                <div class="input-group-prepend">
                                                        <span class="input-group-text">
                                                            <i class="icon-dual" data-feather="lock"></i>
                                                        </span>
                                                </div>
                                                <input type="password" name="password_confirmation" class="form-control" id="password" placeholder="Password Confirmation">

                                            </div>
                                            @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                            @endif
                                        </div>


                                        <div class="form-group mb-0 text-center">
                                            <button class="btn btn-primary btn-block" type="submit"> Submit new password
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
@endsection
