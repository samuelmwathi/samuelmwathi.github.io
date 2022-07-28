@extends('front.layouts.app')
@section('title','Video gallery')
@section('content')
    <style>
        .video-embed iframe {
            height: 300px !important;
            width: 400px !important;
            border: 0 !important;
            padding: 20px !important;
        }
    </style>
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
                                        <h1 data-animation="fadeInUp" data-delay=".3s">Video Gallery</h1>
                                        <!-- <p data-animation="fadeInUp" data-delay=".6s">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p> -->
                                        <ol data-animation="fadeInUp" data-delay=".6s" class="breadcrumbs custom-separator">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="{{ route('resources') }}">Resources</a></li>
                                            <li class="current">Video Gallery</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="col-xl-5 col-lg-4 col-md-10 d-none d-xl-block">
                                <img data-animation="fadeInUp" data-delay=".9s" src="assets/img/gallery/undraw_online_media_62jb.svg" height="320" alt="">
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
                    <div class="col-md-12 _videog">
                        <!-- Gallery goes here -->
                        <section>
                            <div class="row">
                            @foreach($videos as $video)
                            <div class="col-md-4 video-embed">

                                {!! $video->video !!}

                            </div>
                            @endforeach
                            </div>
{{--                            <div class="single-video">--}}
{{--                                <iframe style="min-height: 220px; width: 100%; border: 0;" src="https://youtu.be/dXg12-v10Xk?list=RDCLAK5uy_mu-BhJj3yO1OXEMzahs_aJVtNWJwAwFEE" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>--}}
{{--                            <div class="single-video"><iframe style="min-height: 220px; width: 100%; border: 0;" src="https://www.youtube.com/embed/kXtbLvgE4Ps" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>--}}
{{--                            <div class="single-video"><iframe style="min-height: 220px; width: 100%; border: 0;" src="https://www.youtube.com/embed/ChykZSuIfsY" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>--}}
{{--                            <div class="single-video"><iframe style="min-height: 220px; width: 100%; border: 0;" src="https://www.youtube.com/embed/kXtbLvgE4Ps" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>--}}
{{--                            <div class="single-video"><iframe style="min-height: 220px; width: 100%; border: 0;" src="https://www.youtube.com/embed/ChykZSuIfsY" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>--}}
{{--                        --}}
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
