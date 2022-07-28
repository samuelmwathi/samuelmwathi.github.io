@extends('front.layouts.app')
@section('title','Contact Us')
@section('content')
    <main>
        <!-- Slider Area Start-->
        <div class="slider-area slider-area2 grad d-none">
            <div class="slider-active dot-style">
                <!-- Slider Single -->
                <div class="single-slider d-flex align-items-center slider-height2" style="max-height: 420px;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-7 col-lg-8 col-md-10 ">
                                <div class="hero-wrapper">
                                    <div class="hero__caption">
                                        <h1 data-animation="fadeInUp" data-delay=".3s">Contact Us</h1>
                                        <!-- <p data-animation="fadeInUp" data-delay=".6s">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                                        <ol data-animation="fadeInUp" data-delay=".6s" class="breadcrumbs custom-separator">
                                            <li><a href="/">Home</a></li>
                                            <li class="current">Contact Us</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-10 d-none d-xl-block">
                                <img data-animation="fadeInUp" data-delay=".9s" src="{{ asset('front/assets/img/gallery/envelope.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End -->

        <!-- Contact Area start  -->
        <section class="contact-section grad pt-0">
            <div class="container">
                <div class="d-sm-block mb-5 pb-4">
                    <!-- map here -->
                </div>
                <div class="row">
                    <div class="col-12">
                        <h2 class="contact-title">Get in touch with us</h2>
                    </div>
                    <div class="col-lg-8">
                        @include('partials.info')
                        <form class="form-contact " action="{{ route('contact.submit') }}"  method="post"  novalidate="novalidate" autocomplete="off">
                            @csrf
                            <div class="row">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" value="{{ old('name') }}" wire:model="name" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name" autocomplete="off">
                                        @error('name')
                                        <p style="color: red" class="form-control-feedback"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input class="form-control valid" value="{{ old('email') }}" wire:model="email" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder="Email" autocomplete="off">
                                        @error('email')
                                        <p style="color: red" class="form-control-feedback"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" value="{{ old('phone') }}" wire:model="phone" name="phone" id="phone" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter phone number'" placeholder="Enter phone number" autocomplete="off">
                                        @error('phone')
                                        <p style="color: red" class="form-control-feedback"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input class="form-control" value="{{ old('subject') }}" wire:model="subject" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder="Enter Subject" autocomplete="off">
                                        @error('subject')
                                        <p style="color: red" class="form-control-feedback"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea class="form-control w-100"  wire:model="message" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder=" Enter Message" autocomplete="off">{{ old('message') }}</textarea>
                                        @error('message')
                                        <p style="color: red" class="form-control-feedback"> {{ $message }} </p>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <button type="submit"  class="button button-contactForm boxed-btn">Send Message
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-3 offset-lg-1">
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-home"></i></span>
                            <div class="media-body">
                                <h3>Leowa Associates Limited</h3>
                                <p style="line-height: 1.2;">
                                    P.O. Box 73046 - 00200<br>
                                    Green Shade Apartments<br>
                                    Argwings Kodhek Road<br>
                                    Nairobi
                                </p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                            <div class="media-body">
                                <h3>+254 728 843 553</h3>
                                <p>Mon ~ Fri, 9am ~ 6pm</p>
                            </div>
                        </div>
                        <div class="media contact-info">
                            <span class="contact-info__icon"><i class="ti-email"></i></span>
                            <div class="media-body">
                                <h3>info@leowassociate.com</h3>
                                <p>Send us your query</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Area End -->
    </main>
@endsection
