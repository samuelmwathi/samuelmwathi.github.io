<!doctype html>
<html class="no-js" lang="en-US">
<head>
    <?php include_once('../partials/meta.php'); ?>
    <title>SYSCOOP AGRI - Leowa Accociates</title>
</head>
<body>
    <?php include_once('../partials/preloader.php'); ?>
    <?php $active = 'products'; ?>
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
                                        <h1 data-animation="fadeInUp" data-delay=".3s">SYSCOOP AGRI</h1>
                                        <ol data-animation="fadeInUp" data-delay=".6s" class="breadcrumbs custom-separator">
                                            <li><a href="/">Home</a></li>
                                            <li><a href="/products/">Products</a></li>
                                            <li class="current">SYSCOOP AGRI</li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-4 col-md-10 d-none d-xl-block">
                                <img data-animation="fadeInUp" data-delay=".9s" src="/assets/img/undraw_flowers_vx06.svg" width="100%" alt="">
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
				        <h3 class="text-heading text-muted">Some of the <strong>features</strong> include:</h3>
                        <ul class="unordered-list">
                            <li style="font-size: 16px;">
                                <strong>Member management</strong><br>
                                Tracks member produce delivery already customized for coffee and dairy, inputs sales and advances issued. It also supports member debts deductions, member payment calculations for produce delivered and member shares recording.
                            </li>
                            <li style="font-size: 16px;">
                                <strong>Produce collection (digital scale, printer and sms integrated)</strong><br>
                                Daily produce collection using a mobile app or using a computer depending on the sector
                            </li>
                            <li style="font-size: 16px;">
                                <strong>Creditor's management</strong><br>
                                Process creditor’s invoices and track inputs issues.
                            </li>
                            <li style="font-size: 16px;">
                                <strong>Inventory management</strong><br>
                                Track inventory purchase, transfer between stores and sales
                            </li>
                            <li style="font-size: 16px;">
                                <strong>Member Payment (Bonuses and Bulk Payments)</strong><br>
                                Calculates outstanding bulk payments for members
                            </li>
                            <li style="font-size: 16px;">
                                <strong>Book keeping</strong><br>
                                Supports double entry financial information management
                            </li>
                            <li style="font-size: 16px;">
                                <strong>Bulk M-Pesa payments</strong><br>
                                Supports  bulk member payment
                            </li>
                        </ul>

                        <h3 class="text-heading text-muted" style="margin-top: 80px;">
                            Dashboard (screenshot)<br>
                            <img src="/assets/img/screenshots/dashboard.jpg" style="width: 100%; margin-top: 10px; box-shadow: 10px 10px 40px rgba(0,0,0,0.1); border-radius: 10px;" alt="">
                        </h3>

                        <h3 class="text-heading text-muted" style="margin-top: 80px;">Features for the inventory module include:</h3>
                        <ul class="unordered-list">
                            <li style="font-size: 16px;">
                                Raises LPOs, processes GRNs and dispatches inputs to multiple stores
                            </li>
                            <li style="font-size: 16px;">
                                Enables input sales across multiple stores in different locations
                            </li>
                            <li style="font-size: 16px;">
                                Calculate credit worthiness of farmers based on their produce supply before advancing inputs
                            </li>
                            <li style="font-size: 16px;">
                                Integrated with a Bluetooth enabled  mobile printer
                            </li>
                            <li style="font-size: 16px;">
                                Integrated with produce payment module and thus automatically deduct credit sales during payment
                            </li>
                            <li style="font-size: 16px;">
                                Produces real time cash and credit sales reports
                            </li>
                        </ul>

                        <h3 class="text-heading text-muted" style="margin-top: 20px;">
                            Inventory module (screenshot)<br>
                            <img src="/assets/img/screenshots/inventory_module.png" style="width: 100%; margin-top: 10px; box-shadow: 10px 10px 40px rgba(0,0,0,0.1); border-radius: 10px;" alt="">
                        </h3>

                        <div class="row">
                            <div class="col-md-3">
                                <h3 class="text-heading text-muted" style="margin-top: 20px;">
                                    Mobile App - Interface<br>
                                    <img src="/assets/img/screenshots/inv-mod-ma.jpg" style="width: 100%; margin-top: 10px; box-shadow: 10px 10px 40px rgba(0,0,0,0.1); border-radius: 10px;" alt="">
                                </h3>
                            </div>
                            <div class="col-md-3">
                                <h3 class="text-heading text-muted" style="margin-top: 20px;">
                                    Input sales receipt<br>
                                    <img src="/assets/img/screenshots/input-sales-receipt.jpg" style="width: 100%; margin-top: 10px; box-shadow: 10px 10px 40px rgba(0,0,0,0.1); border-radius: 10px;" alt="">
                                </h3>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-3 order-lg-1">
                        <?php $sidebar_active = 'syscoop-agri'; include_once('../partials/products-menu.php'); ?>
                    </div>
                </div>
			</div>
		</section>
        <!-- Content Area End -->
        
    </main>
    <?php include_once('../partials/footer.php'); ?>
</body>
</html>