@extends('front.layouts.app')
@section('title','SYSCOOP Coffee')
@section('content')
    <main>
        <!-- Slider Area Start-->
        <div class="slider-area slider-area2 grad">
            <div class="slider-active dot-style">
                <!-- Slider Single -->
                <div class="single-slider d-flex align-items-center slider-height2" style="max-height: 420px;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                                <div class="hero-wrapper">
                                    <div class="hero__caption">
                                        <h1 data-animation="fadeInUp" data-delay=".3s">SYSCOOP Coffee</h1>
                                        <ol data-animation="fadeInUp" data-delay=".6s" class="breadcrumbs custom-separator">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="{{ route('products') }}">Products</a></li>
                                            <li class="current">SYSCOOP Coffee</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-10 d-none d-xl-block">
                                <img data-animation="fadeInUp" data-delay=".9s" src="{{ asset('front/assets/img/undraw_nature_m5ll.svg') }}" height="320px" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End -->

        <!-- Content Area Start-->
        <section class="sample-text-area pt-0 pb-50">
            <div class="container box_1170">
                <div class="row mb-5">
                    <div class="col-lg-9 order-lg-2">
                        <h3 class="text-heading text-muted">Some of the <strong>features</strong> include:</h3>
                        <ul class="unordered-list">
                            <li style="font-size: 16px;">
                                <strong>Member management</strong><br>
                                Tracks member produce delivery already customized for coffee and dairy, inputs sales and advances issued. It also supports member debts deductions, member payment calculations for produce delivered and member shares recording
                            </li>
                            <li style="font-size: 16px;">
                                <strong>Produce collection (digital scale, printer and SMS integrated)</strong><br>
                                Daily produce collection using a mobile app or using a computer depending on the sector
                            </li>
                            <li style="font-size: 16px;">
                                <strong>Creditor’s management</strong><br>
                                Process creditor’s invoices and track inputs issues
                            </li>
                            <li style="font-size: 16px;">
                                <strong>Inventory management</strong><br>
                                Track inventory purchase, transfer between stores and sales
                            </li>
                            <li style="font-size: 16px;">
                                <strong>Member Payment (Bonuses and Bulk Payments)</strong><br>
                                Calculates outstanding bulk payments for members
                            </li>
                            <li style="font-size: 16px;">
                                <strong>Book keeping</strong><br>
                                Supports double entry financial information management
                            </li>
                            <li style="font-size: 16px;">
                                <strong>Bulk M-Pesa payments</strong><br>
                                Supports  bulk member payment
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 order-lg-1">
                        @include('front.products.menu')
                    </div>
                </div>
            </div>
        </section>
        <!-- Content Area End -->

    </main>
@endsection
