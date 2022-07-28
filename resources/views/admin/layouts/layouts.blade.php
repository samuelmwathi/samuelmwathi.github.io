<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>@yield('title') | {{ env('APP_NAME') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="James Blog" name="description" />
    <meta content="Elvis Kirui" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="csrf_token" content="{{ csrf_token() }}" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

    <!-- plugins -->
    <link href="{{ asset('assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>
<!-- Begin page -->
<div id="wrapper">

    <!-- Topbar Start -->
    <div class="navbar navbar-expand flex-column flex-md-row navbar-custom">
        <div class="container-fluid">
            <!-- LOGO -->
            <a href="index.html" class="navbar-brand mr-0 mr-md-2 logo">
                        <span class="logo-lg">
                            <img src="{{ asset('images/logo.png') }}" alt=""  />

                        </span>
                <span class="logo-sm">
                            <img src="{{ asset('images/logo.png') }}" alt="">
                        </span>
            </a>

            <ul class="navbar-nav bd-navbar-nav flex-row list-unstyled menu-left mb-0">
                <li class="">
                    <button class="button-menu-mobile open-left disable-btn">
                        <i data-feather="menu" class="menu-icon"></i>
                        <i data-feather="x" class="close-icon"></i>
                    </button>
                </li>
            </ul>

            <ul class="navbar-nav flex-row ml-auto d-flex list-unstyled topnav-menu float-right mb-0">
                <li class="d-none d-sm-block">
                    <div class="app-search">
                        <form>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span data-feather="search"></span>
                            </div>
                        </form>
                    </div>
                </li>

                <li class="dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-toggle mr-0" data-toggle="dropdown" href="#" role="button"
                       aria-haspopup="false" aria-expanded="false">
                        <i data-feather="user"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a href="{{ route('admin.profile') }}" class="dropdown-item notify-item">
                            <i data-feather="user" class="icon-dual icon-xs mr-2"></i>
                            <span>My Account</span>
                        </a>

                        <a href="{{ route('admin.users') }}" class="dropdown-item notify-item">
                            <i data-feather="settings" class="icon-dual icon-xs mr-2"></i>
                            <span>Users</span>
                        </a>
                        <div class="dropdown-divider"></div>

                        <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                            <i data-feather="log-out" class="icon-dual icon-xs mr-2"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
        </div>

    </div>
    @include('admin.layouts.nav')
    <!-- end Topbar -->
@yield('content')
<!-- Footer Start -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                {{ \Carbon\Carbon::now()->format('Y') }} &copy; {{ env('APP_NAME') }}
            </div>
        </div>
    </div>
</footer>
<!-- end Footer -->

</div>

<!-- ============================================================== -->
<!-- End Page content -->
<!-- ============================================================== -->


</div>
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="{{ asset('assets/js/vendor.min.js') }}"></script>

<!-- optional plugins -->
<script src="{{ asset('assets/libs/moment/moment.min.js') }}"></script>
<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets/libs/flatpickr/flatpickr.min.js') }}"></script>

<!-- page js -->
<script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

<!-- App js -->
<script src="{{ asset('assets/js/app.min.js') }}"></script>


</body>
</html>
