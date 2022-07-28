@extends('front.layouts.app')
@section('title','Our Team')
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
                                        <h1 data-animation="fadeInUp" data-delay=".3s">Our Team</h1>
                                        <p data-animation="fadeInUp" data-delay=".6s">Meet our fantastic team!</p>
                                        <ol data-animation="fadeInUp" data-delay=".6s" class="breadcrumbs custom-separator">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="{{ route('about') }}">About</a></li>
                                            <li class="current">Our Team</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-10 d-none d-xl-block">
                                <img data-animation="fadeInUp" data-delay=".9s" src="{{ asset('front/assets/img/undraw_mobile_testing_reah.svg') }}" height="320" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End -->

        <!-- Content Area Start-->
        <section class="sample-text-area pt-0">
            <div class="container box_1170 _team">
                <div class="row mb-5 pt-5">
                    <div class="col-md-3">
                        <img src="{{ asset('front/assets/img/team/josephine.jpg') }}" class="team-avatar" alt="">
                    </div>
                    <div class="col-md-8 mt-5">
                        <h3 class="text-heading">Josphene <strong>Ng'ethe</strong></h3>
                        <p class="sample-text">
                            <span class="team-descr">She has experience in organization management, project management, organizational development, monitoring and evaluation. She has a good understanding of the agricultural sector, finance and business and SME sector. She has excellent analytical, writing, presentation, communication and people skills with the ability to interact with both technical experts and rural based stakeholders. She holds an MBA and a Certified Public Accountant qualification.</span>
                        </p>
                    </div>
                </div>
{{--                <div class="row mb-5 pt-5">--}}
{{--                    <div class="col-md-3">--}}
{{--                        <img src="{{ asset('front/assets/img/team/Kenneth.jpg') }}" class="team-avatar" alt="">--}}
{{--                    </div>--}}
{{--                    <div class="col-md-8 mt-5">--}}
{{--                        <h3 class="text-heading">Kenneth <strong>Kambona</strong> (PhD)</h3>--}}
{{--                        <p class="sample-text">--}}
{{--                            <span class="team-descr">Kenneth Kambona is an international development consultant. He has been responsible for delivering food security programs in close cooperation with government, private sector, civil society and donor community for 20 years.  He has demonstrated local, regional and international development experience and a unique mix of expertize in the public and private sector management. He was a member of the USAID food security office and later the trade team that worked on food security programmes in East and Central Africa. Dr Kambona was later part of the management of the US Government’s Presidential Initiative team - Trade Africa.</span>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="row mb-5 pt-5">
                    <div class="col-md-3">
                        <img src="{{ asset('front/assets/img/team/john.jpg') }}" class="team-avatar" alt="">
                    </div>
                    <div class="col-md-8 mt-5">
                        <h3 class="text-heading">John <strong>Waweru</strong></h3>
                        <p class="sample-text">
                            <span class="team-descr">John is a consultant with experience in Grants Management, project planning, technology solutions development and deployment. He has supported projects as a research assistant, data collection lead and report writing support consultant. He has also been involved in technology solutions, needs assessment, deployment, training and user after sales service. He has developed good writing and presentation skills with the ability to effectively communicate with both technical and rural based stakeholders.He holds a BSc Mathematics and is a Certified Public Accountant.</span>
                        </p>
                    </div>
                </div>
                <div class="row mb-5 pt-5">
                    <div class="col-md-3">
                        <img src="{{ asset('front/assets/img/team/Lillian.jpg') }}" class="team-avatar" alt="">
                    </div>
                    <div class="col-md-8 mt-5">
                        <h3 class="text-heading">Lillian <strong>Njiru</strong></h3>
                        <p class="sample-text">
                            <span class="team-descr">Lillian is an administrator with experience in project management, book keeping and office administration. She is responsible for scheduling project activities, coordinating field teams and general office management. She is meticulous, endeavours to deliver within deadlines, a good team player and pays attention to details. She is a Public Administration Graduate.</span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content Area End -->

    </main>
@endsection
