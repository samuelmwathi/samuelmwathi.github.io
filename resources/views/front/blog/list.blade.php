@extends('front.layouts.app')
@section('title','News & Updates')
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
                                        <h1 data-animation="fadeInUp" data-delay=".3s">News & Updates</h1>
                                        <!-- <p data-animation="fadeInUp" data-delay=".6s">Lorem ipsum dolor sit amet consectetur.</p> -->
                                        <ol data-animation="fadeInUp" data-delay=".6s" class="breadcrumbs custom-separator">
                                            <li><a href="/">Home</a></li>
                                            <li class="current">News & Updates</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-10 d-none d-xl-block">
                                <img data-animation="fadeInUp" data-delay=".9s" src="{{ asset('front/assets/img/gallery/news-updates.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End -->

        <!-- Blog Area Start-->
        <section class="blog_area section-padding pt-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0">

                        <div class="blog_left_sidebar">
                            @foreach($posts as $post)
                                <article class="blog_item">
                                    <div class="blog_item_img">
                                        @if($post->featured_image != null)
                                        <img class="card-img rounded-0" src="{{ asset($post->featured_image) }}" alt="">
                                        @else
                                            <img class="card-img rounded-0" src="{{ asset('images/logo.png') }}" alt="">
                                        @endif
                                        <a href="javascript:;" class="blog_item_date">
                                            <h3>{{ $post->created_at->format('d') }}</h3>
                                            <p>{{ $post->created_at->format('M') }}</p>
                                        </a>
                                    </div>
                                    <div class="blog_details">
                                        <a class="d-inline-block" href="{{ route('blogs.read',$post->slug) }}">
                                            <h2 class="blog-head" style="color: #2d2d2d;">{{ $post->title }}</h2>
                                        </a>
                                        <p>{!! $post->summary !!}</p>
                                        <ul class="blog-info-link">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-user"></i>
                                                    {{ $post->user->firstName." ".$post->user->secondName." ".$post->lastName }}
                                                </a></li>
                                            <li><a href="javascript:;"><i class="fa fa-comments"></i> 0 Comments</a></li>
                                        </ul>
                                    </div>
                                </article>
                            @endforeach

                            <nav class="blog-pagination justify-content-center d-flex">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a href="javascript:;" class="page-link" aria-label="Previous">
                                            <i class="ti-angle-left"></i>
                                        </a>
                                    </li>
                                    <li class="page-item">
                                        <a href="javascript:;" class="page-link">1</a>
                                    </li>
                                    <li class="page-item active">
                                        <a href="javascript:;" class="page-link">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a href="javascript:;" class="page-link" aria-label="Next">
                                            <i class="ti-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
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
