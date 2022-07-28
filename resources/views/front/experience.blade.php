@extends('front.layouts.app')
@section('title','Our Experience')
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
                                        <h1 data-animation="fadeInUp" data-delay=".3s">Our Experience</h1>
                                        <!-- <p data-animation="fadeInUp" data-delay=".6s">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p> -->
                                        <ol data-animation="fadeInUp" data-delay=".6s" class="breadcrumbs custom-separator">
                                            <li><a href="/">Home</a></li>
                                            <li class="current">Our Experience</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-10 d-none d-xl-block">
                                <img data-animation="fadeInUp" data-delay=".9s" src="{{ asset('front/assets/img/gallery/experience.svg') }}" alt="">
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
                <div class="row">

                    <div class="col-md-10 offset-md-1 mb-5 text-justify">
                        <p class="sample-text">
                            Since Leowa was registered, we have been able to offer Institution Capacity building, project management and IT solutions and services to many clients in different sectors of the economy. The diversity of our work is testimony to our abilities to adapt our products and services to many different requirements and objectives.
                        </p>
                        <p class="sample-text">
                            Working for our clients' success and making sure they obtain tangible benefits are the goals we endeavor to achieve first and foremost. When working with us our clients expect to be dealt with professionally, responsibly and constructively and our team works as one to make sure these expectations are always met or, better still, exceeded.
                        </p>
                        <p class="sample-text">
                            What is more, we believe that trust is one of the key factors to successful and long-lasting cooperation, we work to establish and uphold trustworthy relationships with our clients.
                        </p>
                    </div>

                    <div class="col-md-6 my-md-5 text-center">
                        <h1>Global Impact</h1>
                        <p class="text-muted">African countries we've worked in</p>
                        <div class="d-block" id="africa_map" style="height: 420px;"></div>
                    </div>
                    <div class="col-md-6 my-md-5 text-center">
                        <h1>Local Impact</h1>
                        <p class="text-muted">Kenyan counties we've worked in</p>
                        <div class="d-block" id="kenya_map" style="height: 420px;"></div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Content Area End -->

        <!-- Our Clients Start-->
        <section class="home-blog-area section-padding30 pt-0">
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
                <div class="row mt-5 pt-md-5">
                    <div class="col-md-8 offset-md-2">
                        <!-- <h2 class="text-center mb-4 px-md-5 mx-md-5">Feasibility studies, baseline studies, value chain analysis and market analysis</h2> -->
                        <h2 class="text-center mb-4 px-md-5 mx-md-5">ICT Solutions Development and Implementation</h2>
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
                                    <ul>
                                        <li>1. Njabini Dairy in Nyandarua County</li>
                                        <li>2. Zen Dairy FCS in Embu County</li>
                                        <li>3. Ena Multipurpose Cooperative Society in Embu County</li>
                                        <li>4. Gatundu United Dairy Cooperative Society</li>
                                        <li>5. Mang’u Progressive Dairy Coop Society Ltd in KIambu County</li>
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        Installed and deployed <strong>Syscoop Agri Solution</strong> produce management solution.  Modules include:
                                        <li>1. Web – interface produce aggregating solution</li>
                                        <li>2. Mobile enabled produce collection solution</li>
                                        <li>3. Membership management module</li>
                                        <li>4. Inventory management</li>
                                        <li>5. Payment processing module</li>
                                        <li>6. Analysis and reporting module</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Ndumberi</td>
                                <td>
                                    <ul>
                                        The Cooperative have been using Syscoop Desktop Solution for the last 5 years: Modules being used include:
                                        <li>1. Produce collection module</li>
                                        <li>2. Membership management module</li>
                                        <li>3. Payment processing module</li>
                                        <li>4. Inventory management module</li>
                                        <li>5. Analysis and reporting module</li>
                                        <li>6. Bookkeeping module</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Thiriku Coffee FCS, Kiambu – Last 5 years</td>
                                <td>
                                    <ul>
                                        The Cooperative have been using Syscoop Desktop Solution for the last 5 years: Modules being used include:
                                        <li>1. Produce collection module</li>
                                        <li>2. Membership management module</li>
                                        <li>3. Payment processing module</li>
                                        <li>4. Inventory management module</li>
                                        <li>5. Analysis and reporting module</li>
                                        <li>6. Bookkeeping module</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>Kagaari North Coffee FCS, Embu – Last 5 years</td>
                                <td>
                                    <ul>
                                        The Cooperative have been using Syscoop Desktop Solution for the last 5 years: Modules being used include:
                                        <li>1. Produce collection module</li>
                                        <li>2. Membership management module</li>
                                        <li>3. Payment processing module</li>
                                    </ul>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Clients End-->

        <!-- Testimonial Start-->
        <section class="home-blog-area section-padding30 pt-0">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-9 col-sm-10">
                        <div class="section-tittle text-center mb-50">
                            <h2>Our clients are saying...</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 offset-md-2 testi-shell">
                        @foreach($quotes as $quote)
                            <blockquote>
                                <p>
                                    <q>
                                        {{ $quote->quote }}
                                    </q>
                                </p>
                                <footer><strong>{{ $quote->name }}</strong>, {{$quote->position}} - {{$quote->company}}</footer>
                            </blockquote>
                        @endforeach

                        <p class="my-5 pt-5 text-center">
                            <a href="javascript:;" class="btn header-btn">Show More Testimonials</a>
                        </p>

                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial End-->

    </main>
@endsection
