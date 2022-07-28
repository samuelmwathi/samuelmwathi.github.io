@extends('front.layouts.app')
@section('title','Bulk SMS Solution')
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
                                        <h1 data-animation="fadeInUp" data-delay=".3s">Bulk SMS Solution</h1>
                                        <ol data-animation="fadeInUp" data-delay=".6s" class="breadcrumbs custom-separator">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="{{ route('products') }}">Products</a></li>
                                            <li class="current">Bulk SMS Solution</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-10 d-none d-xl-block">
                                <img data-animation="fadeInUp" data-delay=".9s" src="{{ asset('front/assets/img/undraw_messages1_9ah2.svg') }}" height="320px" alt="">
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
                        <h3 class="text-heading text-muted" style="margin-top: 10px;">
                            Dashboard (screenshot)<br>
                            <img src="{{ asset('front/assets/img/screenshots/bulk_sms.jpg') }}" style="width: 100%; margin-top: 10px; box-shadow: 10px 10px 40px rgba(0,0,0,0.1); border-radius: 10px;" alt="">
                        </h3>
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
