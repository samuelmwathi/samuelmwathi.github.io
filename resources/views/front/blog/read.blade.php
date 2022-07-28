@extends('front.layouts.app')
@section('title',$details->title)
@section('content')
    <main>
        <!-- Slider Area Start-->
        <div class="slider-area slider-area2 grad">
            <div class="slider-active dot-style">
                <!-- Slider Single -->
                <div class="single-slider d-flex align-items-center slider-height2" style="max-height: 420px;">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-12 col-lg-12 col-md-12 ">
                                <div class="hero-wrapper">
                                    <div class="hero__caption">
                                        <h1 data-animation="fadeInUp" data-delay=".3s">The ABCs of the Avocado Value chain in Kenya</h1>
                                        <!-- <p data-animation="fadeInUp" data-delay=".6s">Lorem ipsum dolor sit amet.</p> -->
                                        <ol data-animation="fadeInUp" data-delay=".6s" class="breadcrumbs custom-separator">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/blog.php">News & Updates</a></li>
                                            <li class="current">The ABCs of the Avocado Value chain in Kenya</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End -->

        <!-- Blog Area Start-->
        <section class="blog_area single-post-area section-padding pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 posts-list">
                        <div class="single-post">
                            @if($details->featured_image != null)
                            <div class="feature-img">
                                <img class="img-fluid" src="{{ asset($details->featured_image) }}" width="100%" style="overflow: hidden" alt="">
                            </div>
                            @endif
                            <div class="blog_details">
                                <h2 style="color: #2d2d2d;">{{ $details->title }}</h2>
                                <ul class="blog-info-link mt-3 mb-4">
                                    <li><a href="javascript:;"><i class="fa fa-user"></i>
                                            @foreach($details->tags as $tag)
                                                {{ $tag->name }}
                                            @endforeach
                                        </a></li>
                                    <li><a href="javascript:;"><i class="fa fa-comments"></i> 0 Comments</a></li>
                                </ul>
                                <div>
                                    {!! $details->body !!}
                                </div>
                            </div>
                        </div>
{{--                        <div class="navigation-top">--}}
{{--<!--                            --><?php //include_once('./partials/blog-social-bar.php'); ?>--}}
{{--                            <?php include_once('./partials/blog-bottom-nav.php'); ?>--}}
{{--                        </div>--}}
                        <div class="blog-author">
                            <div class="media align-items-center">
                                <img src="{{ asset('front/assets/img/blog/author.png') }}" alt="">
                                <div class="media-body">
                                    <a href="javascript:;">
                                        <h4>{{ $details->user->firstName." ".$details->user->secondName." ".$details->user->lastName }}</h4>
                                    </a>
                                    <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he
                                        our dominion twon Second divided from</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        @include('front.blog.sidebar')
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area End -->
    </main>
@endsection
