@extends('front.layouts.app')
@section('title','')
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
                                        <h1 data-animation="fadeInUp" data-delay=".3s">SYSCOOP AGRI Farm</h1>
                                        <ol data-animation="fadeInUp" data-delay=".6s" class="breadcrumbs custom-separator">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/products/">Products</a></li>
                                            <li class="current">SYSCOOP AGRI Farm</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-10 d-none d-xl-block">
                                <img data-animation="fadeInUp" data-delay=".9s" src="{{ asset('front/assets/img/undraw_not_found_60pq.svg') }}" width="100%" alt="">
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
                        <h3 class="text-heading text-muted">One of the <strong>features</strong> include:</h3>
                        <ul class="unordered-list">
                            <li style="font-size: 16px;">The product is a per cow milk produced management solution</li>
                        </ul>
                        <div class="row">
                            <div class="col-md-5">
                                <img src="{{ asset('front/assets/img/screenshots/ss_farm_1.jpg') }}" style="width: 100%; margin-top: 40px; box-shadow: 10px 10px 40px rgba(0,0,0,0.1); border-radius: 10px;" alt="">
                            </div>
                            <div class="col-md-5">
                                <img src="{{ asset('front/assets/img/screenshots/ss_farm_2.jpg') }}" style="width: 100%; margin-top: 40px; box-shadow: 10px 10px 40px rgba(0,0,0,0.1); border-radius: 10px;" alt="">
                            </div>
                        </div>
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
