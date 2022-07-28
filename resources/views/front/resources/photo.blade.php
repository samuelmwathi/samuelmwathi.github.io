@extends('front.layouts.app')
@section('title','Photo gallery')
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
                                        <h1 data-animation="fadeInUp" data-delay=".3s">Photo Gallery</h1>
                                        <!-- <p data-animation="fadeInUp" data-delay=".6s">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p> -->
                                        <ol data-animation="fadeInUp" data-delay=".6s" class="breadcrumbs custom-separator">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="{{ route('resources') }}">Resources</a></li>
                                            <li class="current">Photo Gallery</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-xl-5 col-lg-4 col-md-10 d-none d-xl-block">
                                <img data-animation="fadeInUp" data-delay=".9s" src="{{  asset('front/assets/img/gallery/undraw_Camera_re_cnp4.svg') }}" height="320" alt="">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End -->

        <!-- Content Area Start-->
        <section class="sample-text-area pt-0">
            <div class="container box_1170">
                <div class="row">
                    <div class="col-md-12 _gallery">
                        <!-- Gallery goes here -->
                        <section>
                            @foreach($images as $image)
                                <img src="{{  asset('uploads/'.$image->image) }}" data-title="{{ $image->description }}"
                                     data-description="{{ $image->description }}."/>
                            @endforeach

                        </section>
                        <div class="lightbox">
                            <div class="title"></div>
                            <div class="description"></div>
                            <div class="filter"></div>
                            <div class="arrowr"></div>
                            <div class="arrowl"></div>
                            <div class="close"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content Area End -->

    </main>
@endsection
