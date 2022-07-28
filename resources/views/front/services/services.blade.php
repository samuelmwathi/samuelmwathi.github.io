@extends('front.layouts.app')
@section('title','Services')
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
                                        <h1 data-animation="fadeInUp" data-delay=".3s">Services</h1>
                                        <p data-animation="fadeInUp" data-delay=".6s">We offer a wide range of services. Our clientele is both business organizations and not for profit organizations.</p>
                                        <ol data-animation="fadeInUp" data-delay=".6s" class="breadcrumbs custom-separator">
                                            <li><a href="/">Home</a></li>
                                            <li class="current">Services</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-10 d-none d-xl-block">
                                <img data-animation="fadeInUp" data-delay=".9s" src="{{ asset('front/assets/img/gallery/services.svg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider Area End -->

        <!-- Content Area Start-->
        <section class="sample-text-area pt-0 grad">
            <div class="container box_1170 _services">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <div class="_service-col" onclick="window.location.href='{{ route('services.capacity') }}'">
                            <p class="text-center mb-5">
                                <img src="{{ asset('front/assets/img/undraw_Timeline_re_aw6g.svg') }}" height="120px" alt="">
                            </p>
                            <h3 class="text-heading">Institutional Capacity Building</h3>
                            <p class="sample-text">
                                We believe in helping organizations<br>to be efficient and grow.
                            </p>
                            <h4 class="text-center mt-4">Learn More</h4>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="_service-col" onclick="window.location.href='{{ route('services.ict') }}'">
                            <p class="text-center mb-5">
                                <img src="{{ asset('front/assets/img/undraw_conference_uo36.svg') }}" height="120px" alt="">
                            </p>
                            <h3 class="text-heading">ICT solutions provisions</h3>
                            <p class="sample-text">
                                We target to solve business challenges through a combination of deep technology solutions.
                            </p>
                            <h4 class="text-center mt-4">Learn More</h4>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="_service-col" onclick="window.location.href='{{ route('services.project') }}'">
                            <p class="text-center mb-5">
                                <img src="{{ asset('front/assets/img/undraw_project_team_lc5a.svg') }}" height="120px" alt="">
                            </p>
                            <h3 class="text-heading">Project Management</h3>
                            <p class="sample-text">
                                We lead in project design or concept development in line with the funding agency requirements.
                            </p>
                            <h4 class="text-center mt-4">Learn More</h4>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="_service-col" onclick="window.location.href='{{ route('services.mel') }}'">
                            <p class="text-center mb-5">
                                <img src="{{ asset('front/assets/img/undraw_observations_mejb.svg') }}" height="120px" alt="">
                            </p>
                            <h3 class="text-heading">Monitoring and Evaluation</h3>
                            <p class="sample-text">
                                We have undertaken a wide range of monitoring and evaluation assignments.
                            </p>
                            <h4 class="text-center mt-4">Learn More</h4>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="_service-col" onclick="window.location.href='{{ route('services.training') }}'">
                            <p class="text-center mb-5">
                                <img src="{{ asset('front/assets/img/undraw_Marketing_re_7f1g.svg') }}" height="120px" alt="">
                            </p>
                            <h3 class="text-heading">Our Training Experience</h3>
                            <p class="sample-text">
                                We guarantee you the best training experience ever. Our trainers are the best!
                            </p>
                            <h4 class="text-center mt-4">Learn More</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Content Area End -->

        <section class="home-blog-area section-padding30 pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9 col-sm-10">
                        <div class="section-tittle text-center mb-50">
                            <h2>Training Experience</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <table class="table table-striped table-bordered" style="font-size: 13px;">
                            <thead>
                            <tr>
                                <th>Client</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    RTI International (2019, 2020)
                                </td>
                                <td>
                                    Master Trainer – Trainers of Trainers training on business planning and entrepreneurship
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    MESPT (2019)
                                </td>
                                <td>
                                    Good governance, business planning, financial management and marketing training to board members of over 20 agricultural cooperatives from Tana River, Kilifi, Nyandarua, Nakuru, Baringo, Kwale and Kajiado counties
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    KYEOP (2018,2019,2020)
                                </td>
                                <td>
                                    Core Business Skills Expert for the Kenya Youth Employment Opportunities Project (KYEOP) covering Migori, Siaya, Kisumu, Kisii, Kakamega and Bungoma counties.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Rainforest and UTZ Program (2018)
                                </td>
                                <td>
                                    Lead Facilitator – Partnership Theory of Change Reflection Workshop
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Technoserve (2018)
                                </td>
                                <td>
                                    Lead Facilitator - Business planning and Entrepreneurship Training
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Technoserve (2017)
                                </td>
                                <td>
                                    Lead Facilitator – Good Governance Training Facilitation
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Technoserve (2017)
                                </td>
                                <td>
                                    Lead Facilitator – Business planning training facilitation
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Technoserve (2016)
                                </td>
                                <td>
                                    Lead Facilitator – Barclays Youth Entrepreneurship Training in 6 counties.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    MESPT (2015)
                                </td>
                                <td>
                                    Associate Trainer – Facilitation of five day Value Chain Development training for Danish Refugee Council
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    MESPT (2014)
                                </td>
                                <td>
                                    Co facilitator for the Regional Business Development Service Training and Conference
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Solidaridad East and Central Africa Expertise Center(SECAEC) 2014
                                </td>
                                <td>
                                    Management Training on record keeping, business planning, strategy review, organization development.
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>

    </main>
@endsection
