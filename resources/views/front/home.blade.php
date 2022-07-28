@extends('front.layouts.app')
@section('title','Home')
@section('content')
    <main>

        <!-- Slider Area Start-->
        <div class="slider-area d-none">
            <div class="slider-active dot-style">
                <!-- Slider Single -->
                <div class="single-slider d-flex align-items-center slider-height2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                                <div class="hero-wrapper">
                                    <div class="hero__caption">
                                        <h1 data-animation="fadeInUp" data-delay=".3s">Agriculture</h1>
                                        <p data-animation="fadeInUp" data-delay=".6s">Leowa supports Coffee, Dairy and Cereal farmers. We help farmers access finance, increase productivity and make farming viable for them and become sustainable.</p>
                                        <a href="javascript:;" class="btn" data-animation="fadeInUp" data-delay=".8s">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-10 d-none d-xl-block">
                                <img data-animation="fadeInUp" data-delay=".9s" src="{{ asset('front/assets/img/hero/farmer.png') }}" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Single -->
                <div class="single-slider d-flex align-items-center slider-height2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                                <div class="hero-wrapper">
                                    <div class="hero__caption">
                                        <h1 data-animation="fadeInUp" data-delay=".3s">Consultancy</h1>
                                        <p data-animation="fadeInUp" data-delay=".6s">We provide strategic and technical expertise in management to businesses. We help businesses grow, improve and optimize.</p>
                                        <a href="javascript:;" class="btn" data-animation="fadeInUp" data-delay=".8s">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-10 d-none d-xl-block">
                                <img data-animation="fadeInUp" data-delay=".9s" src="{{ asset('front/assets/img/hero/consultancy.png') }}" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Single -->
                <div class="single-slider d-flex align-items-center slider-height2">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                                <div class="hero-wrapper">
                                    <div class="hero__caption">
                                        <h1 data-animation="fadeInUp" data-delay=".3s">ICT</h1>
                                        <p data-animation="fadeInUp" data-delay=".6s">We deliver advice and services in support of implementation, management and operation of technology solutions matched to the needs of each client from strategy to sustainment.</p>
                                        <a href="javascript:;" class="btn" data-animation="fadeInUp" data-delay=".8s">Learn More</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-10 d-none d-xl-block">
                                <img data-animation="fadeInUp" data-delay=".9s" src="{{ asset('front/assets/img/hero/technology.png') }}" width="100%" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Slider Area End -->

        <!-- Services Section Start -->
        <div class="about-area2 slider-area section-padding40 pt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-12 d-none- d-lg-block-">
                        <!-- about-img -->
                        <div class="about-img">
                            <img src="{{ asset('front/assets/img/gallery/home_services.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12">
                        <div class="about-caption">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-4">
                                <h2>Our Services</h2>
                            </div>
                            <p class="pera-top mb-40">
                                We offer a wide range of services. Our clientele are both business organizations and not for profit organizations.<br>
                                We specialize in:
                            </p>
                            <p class="pera-bottom mb-30">
                                <i class="fa fa-check-circle"></i> Institutional capacity building<br>
                                <i class="fa fa-check-circle"></i> ICT solutions provisions<br>
                                <i class="fa fa-check-circle"></i> Project management<br>
                                <i class="fa fa-check-circle"></i> Monitoring & Evaluation<br>
                            </p>
                            <div class="icon-about">
                                <a href="{{ route('services') }}" class="btn btn-primary btn-md">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->

        <!-- Blog Area Start -->
        <section class="home-blog-area section-padding30 pb-5 pt-5">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9 col-sm-10">
                        <div class="section-tittle text-center mb-100 mb-5">
                            <h2>Latest News & Updates</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-lg-4 col-md-6">
                            <div class="home-blog-single mb-40">
                                <div class="blog-img-cap">
                                    <div class="blog-img">
                                        @if($post->featured_image != null)
                                            <img  src="{{ asset($post->featured_image) }}" alt="">
                                        @else
                                            <img  src="{{ asset('images/logo.png') }}" alt="">
                                        @endif
                                    </div>
                                    <div class="blog-cap">
                                        <h3><a href="{{ route('blogs.read',$post->slug) }}">{{ $post->title }}</a></h3>
                                        <P>{{ \Illuminate\Support\Str::limit($post->summary,200) }}</P>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Blog Area End -->

        <!-- Testimonial Area Start -->
        <section class="testimonial-area testimonial-padding fix section-bg-testi pt-20" data-background="assets/img/gallery/section_bg01.png">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class=" col-lg-9">
                        <div class="about-caption">
                            <!-- Testimonial Start -->
                            <div class="h1-testimonial-active dot-style">
                                <!-- Single Testimonial -->
                                @foreach($quotes as $quote)
                                    <div class="single-testimonial position-relative">
                                        <div class="testimonial-caption">
                                            <img src="{{ asset('front/assets/img/icon/quotes-sign.png') }}" alt="" class="quotes-sign">
                                            <p>
                                                "{{ $quote->quote }}"</p>
                                        </div>
                                        <!-- users -->
                                        <div class="testimonial-founder d-flex align-items-center">
                                            {{--                                        <div class="founder-img">--}}
                                            {{--                                            <img src="{{ asset('front/assets/img/icon/testimonial.png') }}" alt="">--}}
                                            {{--                                        </div>--}}
                                            <div class="founder-text">
                                                <span>{{ $quote->name }}</span>
                                                <p>{{ $quote->position }} - {{ $quote->company }}</p>
                                            </div>
                                        </div>
                                    </div><!-- Single Testimonial -->
                                @endforeach

                            </div>
                            <!-- Testimonial End -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Area End -->

        <!-- Our Clients Start-->
        <section class="home-blog-area section-padding30">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9 col-sm-10">
                        <div class="section-tittle text-center mb-50">
                            <h2>Our Clients</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="our-clients">
                            <div class="slide"><img src="{{ asset('front/assets/img/partners/kcpa.jpg') }}"></div>
                            <div class="slide"><img src="{{ asset('front/assets/img/partners/afca.jpg') }}"></div>
                            <div class="slide"><img src="{{ asset('front/assets/img/partners/coleacp.jpg') }}"></div>
                            <div class="slide"><img src="{{ asset('front/assets/img/partners/dfid.jpg') }}"></div>
                            <div class="slide"><img src="{{ asset('front/assets/img/partners/kenya-coffee.jpg') }}"></div>
                            <div class="slide"><img src="{{ asset('front/assets/img/partners/kmt.jpg') }}"></div>
                            <div class="slide"><img src="{{ asset('front/assets/img/partners/kyeop.jpg') }}"></div>
                            <div class="slide"><img src="{{ asset('front/assets/img/partners/land-o-lakes.jpg') }}"></div>
                            <div class="slide"><img src="{{ asset('front/assets/img/partners/mespt.jpg') }}"></div>
                            <div class="slide"><img src="{{ asset('front/assets/img/partners/rainforest.jpg') }}"></div>
                            <div class="slide"><img src="{{ asset('front/assets/img/partners/save-the-children.jpg') }}"></div>
                            <div class="slide"><img src="{{ asset('front/assets/img/partners/solidaridad.jpg') }}"></div>
                            <div class="slide"><img src="{{ asset('front/assets/img/partners/technoserve.jpg') }}"></div>
                            <div class="slide"><img src="{{ asset('front/assets/img/partners/fao.jpg') }}"></div>
                            <div class="slide"><img src="{{ asset('front/assets/img/partners/usaid.jpg') }}"></div>
                            <div class="slide"><img src="{{ asset('front/assets/img/partners/wwf.jpg') }}"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Clients End-->

    </main>
@endsection
