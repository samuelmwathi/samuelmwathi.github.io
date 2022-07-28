@extends('front.layouts.app')
@section('title','About Us')
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
                                        <h1 data-animation="fadeInUp" data-delay=".3s">About Us</h1>
                                        <p data-animation="fadeInUp" data-delay=".6s">Taking you forward!</p>
                                        <ol data-animation="fadeInUp" data-delay=".6s" class="breadcrumbs custom-separator">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="{{ route('about') }}">About</a></li>
                                            <li class="current">About Us</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-10 d-none- d-xl-block- text-center">
                                <h4 class="text-center mt-5">Our core competencies<br><small>Leowa core competencies to serve you better<br>are as illustrated below:</small></h4>
                                <img data-animation="fadeInUp" data-delay=".9s" src="{{ asset('front/assets/img/competencies.png') }}" style="max-width: 420px;" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End -->

        <!-- Content Area Start-->
        <section class="sample-text-area pt-0">
            <div class="container box_1170">
                <h3 class="text-heading">About <strong>Leowa Associates</strong></h3>
                <p class="sample-text">
                    Leowa Associates Limited (herein after 'Leowa') is a management consulting firm registered in Kenya and offering a wide range of consulting services in the East African region. Our pool of experts is equipped with international experience backed with practical local experience.
                </p>
                <!-- <p class="sample-text">
                Leowa Associates Limited is an African led management consulting firm registered in Kenya offering a wide range of consulting services in the East African. Our pool of experts is equipped with international experience backed with practical local experience.
                </p> -->
            </div>
            <div class="container box_1170 mt-50">
                <div class="row bg-light pb-50">
                    <div class="col-md-6 mt-50">
                        <h3 class="text-heading">Our vision</h3>
                        <p class="sample-text">To be the leading and preferred consulting firm providing consultancy services and IT related solutions in the region and beyond.</p>
                    </div>
                    <div class="col-md-6 mt-50">
                        <h3 class="text-heading">Our mission</h3>
                        <p class="sample-text">To partner with our customers to enhance their functionality by providing reliable solutions.</p>
                    </div>
                </div>
            </div>
            <!-- <div class="container box_1170 mt-50">
				<h3 class="text-heading">Our core competencies</h3>
                <p class="sample-text">Leowa’s core competencies to serve you better are as illustrated below:</p>
                <img src="assets/img/competencies.png" alt="competencies">
			</div> -->
            <div class="container box_1170 mt-50">
                <h3 class="text-heading">Our business values</h3>
                <ul class="unordered-list">
                    <li style="font-size: 16px;">Excellence</li>
                    <li style="font-size: 16px;">Professionalism</li>
                    <li style="font-size: 16px;">Honesty and Integrity</li>
                </ul>
            </div>
        </section>
        <!-- Content Area End -->

    </main>
@endsection
