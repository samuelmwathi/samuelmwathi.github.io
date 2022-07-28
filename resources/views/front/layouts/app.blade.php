<!doctype html>
<html class="no-js" lang="en-US">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf_token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="{{ asset('front/assets/img/logo/favicon.png') }}">
    <link rel="stylesheet" href="{{  asset('front/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">
    <title>@yield('title') | {{ env('APP_NAME') }}</title>
</head>
<body>
<header>
    <div class="header-area">
        <div class="main-header header-sticky py-2">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="/"><img src="{{ asset('front/assets/img/logo/logo.png') }}" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li class="active"><a href="{{ route('home') }}">Home</a></li>
                                        <li class=""><a href="javascript:;">About</a>
                                            <ul class="submenu">
                                                <li class=""><a href="{{ route('about') }}">About Leowa</a></li>
                                                <li class=""><a href="{{ route('team') }}">Our Team</a></li>
                                            </ul>
                                        </li>
                                        <li class=""><a href="{{ route('services') }}">Services</a></li>
                                        <li class=""><a href="{{ route('products') }}">Products</a></li>
                                        <li class=""><a href="{{ route('experience') }}">Our Experience</a></li>
                                        <li class=""><a href="javascript:;">Media</a>
                                            <ul class="submenu">
                                                <li class=""><a href="{{ route('blogs') }}">News & Updates</a></li>
                                                <li class=""><a href="{{ route('resources') }}">Resources</a></li>
                                            </ul>
                                        </li>
                                        <li class="d-block d-lg-none "><a href="{{ route('contact') }}">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right-btn f-right d-none d-lg-block ml-15">
                                <a href="{{ route('contact') }}" class="btn header-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('content')
<footer>
    <div class="footer-wrappr section-bg3" data-background="{{ asset('front/assets/img/gallery/footer-bg.png') }}">
        <div class="footer-area footer-padding ">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-8 col-lg-8 col-md-6 col-sm-12">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo mb-25">
                                <a href="/"><img src="{{ asset('front/assets/img/logo/logo.png') }}" alt=""></a>
                                <p style="line-height: 1; margin-top: 5px;"><small>We are a management consulting firm registered in Kenya & offering<br>a wide range of consulting services in the East African region.<br>Our pool of experts is equipped with international experience<br>backed with practical local experience.</small></p>
                            </div>
                            <d iv class="header-area">
                                <div class="main-header main-header2">
                                    <div class="menu-main d-flex align-items-center justify-content-start">
                                        <!-- Main-menu -->
                                        <div class="main-menu main-menu2">
                                            <nav>
                                                <ul>
                                                    <!-- <li><a href="/">Home</a></li> -->
                                                    <li><a href="{{ route('about') }}">About Us</a></li>
                                                    <li><a href="{{ route('services') }}">Services</a></li>
                                                    <li><a href="{{ route('experience') }}">Our Experience</a></li>
                                                    <li><a href="{{ route('blogs') }}">News & Updates</a></li>
                                                    <li><a href="{{ route('resources') }}">Resources</a></li>
                                                    <!-- <li><a href="contact.php">Contact</a></li> -->
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </d>
                            <!-- social -->
                            <div class="footer-social mt-10">
                                <a href="javascript:;"><i class="fab fa-twitter"></i></a>
                                <a href="javascript:;"><i class="fab fa-facebook-f"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="single-footer-caption">
                            <div class="footer-tittle mb-10">
                                <h4 class="mb-0">Newsletter</h4>
                                <p><small class="text-muted">Subscribe to our newsletter.</small></p>
                            </div>
                            <!-- Form -->
                            <div class="footer-form">
                                <div class="newsletterRes" id="newsletterRes"></div>
                                <div id="mc_embed_signup">
                                    <form target="_blank" action="#" method="get" class="subscribe_form relative mail_part" novalidate="true">
                                        <input type="email" name="EMAIL" id="newsletterEmail" placeholder=" Email Address " class="placeholder hide-on-focus" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'" autocomplete="off">
                                        <div class="form-icon">
                                            <button type="button" onclick="newsletter()" name="submit" id="newsletter-submit" class="email_icon newsletter-submit button-contactForm">
                                                Subscribe
                                            </button>
                                        </div>
                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p style="line-height: 1.2;">By subscribing you agree to our <a class="text-muted" href="javascript:;" target="_blank"><strong>terms of service</strong></a> and our <a class="text-muted" href="javascript:;" target="_blank"><strong>privacy policy</strong></a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer-bottom area -->
        <div class="footer-bottom-area">
            <div class="container">
                <div class="footer-border">
                    <div class="row">
                        <div class="col-xl-10 ">
                            <div class="footer-copy-right">
                                <p>
                                    <small style="font-size: 12px;">&copy;<script>document.write(new Date().getFullYear());</script> <strong>Leowa Associates</strong> &middot; All rights reserved &middot; <a href="javascript:;">Terms of use</a> &middot; <a href="javascript:;">Privacy</a></small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="javascript:;"> <i class="fa fa-angle-double-up"></i></a>
</div>

<!-- JS here -->

<script src="{{ asset('front/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="{{ asset('front/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('front/assets/js/popper.min.js') }}"></script>
<script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('front/assets/js/jquery.slicknav.min.js') }}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ asset('front/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/assets/js/slick.min.js') }}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('front/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('front/assets/js/animated.headline.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.magnific-popup.js') }}"></script>

<!-- Nice-select, sticky -->
<script src="{{ asset('front/assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.sticky.js') }}"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="{{ asset('front/assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('front/assets/js/waypoints.min.js') }}"></script>
<script src="{{ asset('front/assets/js/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('front/assets/js/hover-direction-snake.min.js') }}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ asset('front/assets/js/plugins.js') }}"></script>
<script src="{{ asset('front/assets/js/main.js') }}"></script>
<script>
    function newsletter() {
        var email = document.getElementById("newsletterEmail").value;
        var data = {'email': email};
        $('#newsletterButton').text('');
        $('#newsletterButton').append("<i class='fa fa-spinner'></i> Please Wait...");
        $.ajax({
            type: "POST",
            dataType:'json',
            url: '{{ route('newsletter.submit') }}',
            data: data,
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')},
            success: function(response) {
                if (response.success == true)
                {
                    console.log(response.message);
                    $('#newsletterRes').html(" <div style='color: blue' class=\"alert alert-success alert-dismissible fade show\" role=\"alert\">\n" +response.message+
                        "    </div>");
                }else{
                    $('#newsletterRes').html(" <div style='color: red' class=\"alert alert-error alert-dismissible fade show\" role=\"alert\">" +response.message+
                        "    </div>");
                }
                $('#newsletterButton').text('');
                $('#newsletterButton').append("Submitted <i class='fa fa-check'></i>");
            }
        });
    }
</script>
</body>
</html>
