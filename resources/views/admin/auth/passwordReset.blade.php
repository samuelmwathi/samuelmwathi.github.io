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
{{--                                    <h6 class="h5 mb-0 mt-4">Welcome back!</h6>--}}
                                    <p class="text-muted mt-1 mb-4">Enter your email address and password to
                                        access admin panel.</p>
                                    @include('partials.info')

                                    <form action="{{ route('admin.password.reset.action') }}" method="post" class="authentication-form">
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


                                        <div class="form-group mb-0 text-center">
                                            <button class="btn btn-primary btn-block" type="submit"> Send reset email
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
