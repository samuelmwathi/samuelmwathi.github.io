<header>
    <div class="header-area">
        <div class="main-header header-sticky py-2">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2 col-md-1">
                        <div class="logo">
                            <a href="/"><img src="/assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10 col-md-10">
                        <div class="menu-main d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                <nav> 
                                    <ul id="navigation">
                                        <li class="<?php if($active == 'home') echo 'active'; ?>"><a href="/">Home</a></li>
                                        <li class="<?php if($active == 'about' || $active == 'team') echo 'active'; ?>"><a href="javascript:;">About</a>
                                            <ul class="submenu">
                                                <li class="<?php if($active == 'about') echo 'active'; ?>"><a href="/about-us.php">About Leowa</a></li>
                                                <li class="<?php if($active == 'team') echo 'active'; ?>"><a href="/team.php">Our Team</a></li>
                                            </ul>
                                        </li>
                                        <li class="<?php if($active == 'services') echo 'active'; ?>"><a href="/services">Services</a></li>
                                        <li class="<?php if($active == 'products') echo 'active'; ?>"><a href="/products">Products</a></li>
                                        <li class="<?php if($active == 'experience') echo 'active'; ?>"><a href="/our-experience.php">Our Experience</a></li>
                                        <li class="<?php if($active == 'blog' || $active == 'resources') echo 'active'; ?>"><a href="javascript:;">Media</a>
                                            <ul class="submenu">
                                                <li class="<?php if($active == 'blog') echo 'active'; ?>"><a href="/blog.php">News & Updates</a></li>
                                                <li class="<?php if($active == 'resources') echo 'active'; ?>"><a href="/resources.php">Resources</a></li>
                                            </ul>
                                        </li>
                                        <li class="d-block d-lg-none "><a href="/contact.php">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="header-right-btn f-right d-none d-lg-block ml-15">
                                <a href="/contact.php" class="btn header-btn">Contact Us</a>
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