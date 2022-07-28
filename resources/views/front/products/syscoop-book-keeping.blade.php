@extends('front.layouts.app')
@section('title','SYSCOOP Book Keeping Module')
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
                                        <h1 data-animation="fadeInUp" data-delay=".3s">SYSCOOP Book Keeping Module</h1>
                                        <ol data-animation="fadeInUp" data-delay=".6s" class="breadcrumbs custom-separator">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="{{ route('products') }}">Products</a></li>
                                            <li class="current">SYSCOOP Book Keeping Module</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-10 d-none d-xl-block">
                                <img data-animation="fadeInUp" data-delay=".9s" src="{{ asset('front/assets/img/undraw_book_lover_mkck.svg') }}" width="100%" alt="">
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
                            <li style="font-size: 16px;">Supports double entry for financial information management</li>
                            <li style="font-size: 16px;">Supports multi-user</li>
                            <li style="font-size: 16px;">Each user rights can be defined</li>
                            <li style="font-size: 16px;">Easy to navigate</li>
                            <li style="font-size: 16px;">Can export data to MS Excel</li>
                            <li style="font-size: 16px;">Data import from MS Excel to the database</li>
                            <li style="font-size: 16px;">Can be implemented as a desktop solution or as a cloud solution</li>
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
