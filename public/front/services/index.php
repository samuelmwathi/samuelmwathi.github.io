<!doctype html>
<html class="no-js" lang="en-US">
<head>
    <?php include_once('../partials/meta.php'); ?>
    <title>Services - Leowa Accociates</title>
</head>
<body>
    <?php include_once('../partials/preloader.php'); ?>
    <?php $active = 'services'; ?>
    <?php include_once('../partials/header.php'); ?>
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
                                <img data-animation="fadeInUp" data-delay=".9s" src="/assets/img/gallery/services.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
        <!-- Slider Area End -->
        
        <!-- Content Area Start-->
        <section class="sample-text-area pt-0">
			<div class="container box_1170 _services">
				<div class="row">
                    <div class="col-md-6 mb-5">
                        <div class="_service-col" onclick="window.location.href='/services/capacity-building.php'">
                            <p class="text-center mb-5">
                                <img src="/assets/img/undraw_Timeline_re_aw6g.svg" height="120px" alt="">
                            </p>
                            <h3 class="text-heading">Institutional Capacity Building</h3>
                            <p class="sample-text">
                                We believe in helping organizations<br>to be efficient and grow.
                            </p>
                            <h4 class="text-center mt-4">Learn More</h4>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="_service-col" onclick="window.location.href='/services/ict-solutions.php'">
                            <p class="text-center mb-5">
                                <img src="/assets/img/undraw_conference_uo36.svg" height="120px" alt="">
                            </p>
                            <h3 class="text-heading">ICT solutions provisions</h3>
                            <p class="sample-text">
                                We target to solve business challenges through a combination of deep technology solutions.
                            </p>
                            <h4 class="text-center mt-4">Learn More</h4>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="_service-col" onclick="window.location.href='/services/project-management.php'">
                            <p class="text-center mb-5">
                                <img src="/assets/img/undraw_project_team_lc5a.svg" height="120px" alt="">
                            </p>
                            <h3 class="text-heading">Project Management</h3>
                            <p class="sample-text">
                                We lead in project design or concept development in line with the funding agency requirements.
                            </p>
                            <h4 class="text-center mt-4">Learn More</h4>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="_service-col" onclick="window.location.href='/services/monitoring-and-evaluation.php'">
                            <p class="text-center mb-5">
                                <img src="/assets/img/undraw_observations_mejb.svg" height="120px" alt="">
                            </p>
                            <h3 class="text-heading">Monitoring and Evaluation</h3>
                            <p class="sample-text">
                                We have undertaken a wide range of monitoring and evaluation assignments.
                            </p>
                            <h4 class="text-center mt-4">Learn More</h4>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <div class="_service-col" onclick="window.location.href='/services/training-experience.php'">
                            <p class="text-center mb-5">
                                <img src="/assets/img/undraw_Marketing_re_7f1g.svg" height="120px" alt="">
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
        
    </main>
    <?php include_once('../partials/footer.php'); ?>
</body>
</html>