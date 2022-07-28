@extends('front.layouts.app')
@section('title','Resources')
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
                                        <h1 data-animation="fadeInUp" data-delay=".3s">Resources</h1>
                                        <p data-animation="fadeInUp" data-delay=".6s">View our photo and video collections<br>and learn more about us.</p>
                                        <ol data-animation="fadeInUp" data-delay=".6s" class="breadcrumbs custom-separator">
                                            <li><a href="/">Home</a></li>
                                            <li class="current">Resources</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-10 d-none d-xl-block">
                                <img data-animation="fadeInUp" data-delay=".9s" src="{{ asset('front/assets/img/gallery/undraw_online_media_62jb.svg') }}" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End -->

        <!-- Content Area Start-->
        <section class="sample-text-area pt-0">
            <div class="container box_1170 _services">
                <div class="row">
                    <!-- <div class="col-md-10">
                        <p class="sample-text">
                            Since Leowa was registered, we have been able to offer Institution Capacity building, project management and IT solutions and services to many clients in different sectors of the economy. The diversity of our work is testimony to our abilities to adapt our products and services to many different requirements and objectives.
                        </p>
                        <p class="sample-text">
                            Working for our clients' success and making sure they obtain tangible benefits are the goals we endeavor to achieve first and foremost. When working with us our clients expect to be dealt with professionally, responsibly and constructively and our team works as one to make sure these expectations are always met or, better still, exceeded.
                        </p>
                        <p class="sample-text">
                            What is more, we believe that trust is one of the key factors to successful and long-lasting cooperation, we work to establish and uphold trustworthy relationships with our clients.
                        </p>

                    </div> -->
                    <div class="col-md-6 mb-5">
                        <div class="_service-col" onclick="window.location.href='{{ route('photo-gallery') }}'">
                            <p class="text-center mb-5">
                                <img src="{{  asset('front/assets/img/gallery/undraw_Camera_re_cnp4.svg') }}" height="120px" alt="">
                            </p>
                            <h3 class="text-heading">Photo Gallery</h3>
                            <p class="sample-text">
                                Relevant collections from our various<br>events accross the region.
                            </p>
                            <h4 class="text-center mt-4">View Photos</h4>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="_service-col" onclick="window.location.href='{{ route('video-gallery') }}'">
                            <p class="text-center mb-5">
                                <img src="{{  asset('front/assets/img/gallery/undraw_online_media_62jb.svg') }}" height="120px" alt="">
                            </p>
                            <h3 class="text-heading">Video Gallery</h3>
                            <p class="sample-text">
                                Relevant collections from our various<br>events accross the region.
                            </p>
                            <h4 class="text-center mt-4">Watch Videos</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content Area End -->

    </main>
@endsection
