@extends('front.layouts.app')
@section('title','Monitoring and Evaluation')
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
                                        <h1 data-animation="fadeInUp" data-delay=".3s">Monitoring and Evaluation</h1>
                                        <ol data-animation="fadeInUp" data-delay=".6s" class="breadcrumbs custom-separator">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="{{ route('services') }}">Services</a></li>
                                            <li class="current">Monitoring and Evaluation</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-10 d-none d-xl-block">
                                <img data-animation="fadeInUp" data-delay=".9s" src="{{ asset('front/assets/img/undraw_observations_mejb.svg') }}" width="100%" alt="">
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
                        <p class="sample-text">
                            We have undertaken a wide range of monitoring and evaluation assignments.
                        </p>

                        <div class="mt-50">
                            <table class="table table-striped table-bordered" style="font-size: 13px;">
                                <thead>
                                <tr>
                                    <th>Client</th>
                                    <th>Description</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>World Wildlife Fund</td>
                                    <td>Mid Term Review of The East Africa Regional Sustainable Investments (RSI) programme</td>
                                </tr>
                                <tr>
                                    <td>Rainforest Alliance – UTZ Program (2017, 2018)</td>
                                    <td>Workshop Facilitation – UTZ Sector Partnership Program Theory of Change Reflection Workshops</td>
                                </tr>
                                <tr>
                                    <td>Save the Children International (2018)</td>
                                    <td>Endline Evaluation of the Food and Nutrition Security Resilience Project</td>
                                </tr>
                                <tr>
                                    <td>Solidaridad East & Central Africa(2018)</td>
                                    <td>Baseline Survey of the Scaling Investment for Resilience of East Africa Coffee Producers Project</td>
                                </tr>
                                <tr>
                                    <td>USAID - East Africa Trade and Investment Hub (2017)</td>
                                    <td>Assessment of the East Africa Community Food Security Action Plan 2011-2015</td>
                                </tr>
                                <tr>
                                    <td>Food Agriculture Organization (2014)</td>
                                    <td>Final Evaluation of the Agribusiness Support for Smallholder farmers</td>
                                </tr>
                                <tr>
                                    <td>USAID/EA (2013)</td>
                                    <td>USAID Powering Progress Project, End of Project Performance Evaluation covering Kenya, Rwanda and Ethiopia</td>
                                </tr>
                                <tr>
                                    <td>Kenya Organic Agriculture Network (KOAN) (2012)</td>
                                    <td>Kenya Organic Agriculture Network (KOAN) Hivos funded end term review and institutional assessment.</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="col-lg-3 order-lg-1">
                        @include('front.services.menu')
                    </div>
                </div>
            </div>
        </section>
        <!-- Content Area End -->

    </main>
@endsection
