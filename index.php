<?php
session_start();
$lang = $_SESSION['lang'] ?? 'en';

include $_SERVER['DOCUMENT_ROOT'] . '/translations/translations.php';
global $main_page_translations;

// Decode the JSON string into a PHP associative array
$translations = json_decode($main_page_translations, true);

?>

<!DOCTYPE html>
<html lang="<?php echo $lang ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo $translations[$lang]['head_title']; ?></title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
    <link rel="icon" href="images/logo.png" type="image/x-icon">

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]>
    <script src="js/respond.js"></script><![endif]-->

    <style>
        .service-block-three .content-box{
            padding-top:100px !important;
        }
        .icon_1{
            background-image:url('/images/insurance_icon.svg');
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            width:100px;
            height: 100px;
        }
        .icon_2{
            background-image:url('/images/customs_icon.svg');
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            width:100px;
            height: 100px;
        }
        .icon_3{
            background-image:url('/images/truck_icon.svg');
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            width:100px;
            height: 100px;
        }
        .icon-box::after{
            display: none;
        }
        .theme-btn{
            cursor: pointer;
        }
        .cosco_logo{
            background-image:url('/images/cosco-shipping-logo.png');
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            width:100px;
            height: 100px;
        }
        .msc_logo{
            background-image:url('/images/msc-logo.png');
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            width:100px;
            height: 100px;
        }
        .evergreen_logo{
            background-image:url('/images/evergreen-logo.svg');
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            width:190px;
            height: 100px;
            transform:scale(1.45);
        }
        .wow.title{
            text-shadow:
                    -1px -1px 0 gray, /* Top-left shadow */
                    1px -1px 0 gray,  /* Top-right shadow */
                    -1px 1px 0 gray,  /* Bottom-left shadow */
                    1px 1px 0 gray;   /* Bottom-right shadow */
        }
    </style>

</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Main Header-->
    <header id="home" class="main-header header-style-three">
        <!-- Header Lower -->
        <div class="header-lower">
            <!-- Main box -->
            <div class="main-box">
                <div class="logo-box">
                    <div class="logo"><a href="#"><img src="images/logo.png" alt="KP PRO Logo"
                                                                    title="KP PRO"></a></div>
                </div>

                <!--Nav Box-->
                <div class="nav-outer">

                    <nav class="nav main-menu">
                        <ul class="navigation">
                            <li class="current"><a
                                        href="#home"><?php echo $translations[$lang]['navigation_home']; ?></a></li>
                            <li><a href="#services"><?php echo $translations[$lang]['navigation_services']; ?></a></li>
                            <li><a href="#partners"><?php echo $translations[$lang]['navigation_partners']; ?></a></li>
                            <li><a href="#contact"><?php echo $translations[$lang]['navigation_contact']; ?></a></li>
                        </ul>
                        <div class="header__inner-languages">
                            <a class="header__inner-lang" id="en_btn">EN</a>
                            <a class="header__inner-lang" id="lv_btn">LV</a>
                            <a class="header__inner-lang" id="de_btn">DE</a>
                            <a class="header__inner-lang" id="cn_btn">CN</a>
                        </div>
                    </nav>

                    <div class="outer-box">

                        <a href="tel:+37129714481" class="info-btn">
                            <i class="icon fa fa-phone"></i>
                            <small>Call Us Now</small> <span class="text-nowrap">+371 29714481</span>

                        </a>

                        <a href="#contact" class="theme-btn btn-style-one"><span
                                    class="btn-title"><?php echo $translations[$lang]['get_a_quote']; ?><i
                                        class="lnr-icon-arrow-up"></i></span></a>

                        <!-- Mobile Nav toggler -->
                        <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Lower -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>

            <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            <nav class="menu-box">
                <div class="upper-box">
                    <div class="nav-logo"><a href="#"><img src="images/logo.png" alt="" title=""></a></div>
                    <div class="close-btn"><i class="icon fa fa-times"></i></div>
                </div>

                <ul class="navigation clearfix">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </ul>
                <ul class="contact-list-one">
                    <li>
                        <!-- Contact Info Box -->
                        <div class="contact-info-box">
                            <i class="icon lnr-icon-phone-handset"></i>
                            <span class="title"><?php echo $translations[$lang]['call_now']; ?></span>
                            <a href="tel:+37129714481">+371 29714481</a>
                        </div>
                    </li>
                    <li>
                        <!-- Contact Info Box -->
                        <div class="contact-info-box">
                            <span class="icon lnr-icon-envelope1"></span>
                            <span class="title"><?php echo $translations[$lang]['send_email']; ?></span>
                            <a href="mailto:info@kppro.lv">info@kppro.lv</a>
                        </div>
                    </li>
                    <li>
                </ul>

                <div class="header__inner-languages">
                    <a class="header__inner-lang" id="en_btn_mob">EN</a>
                    <a class="header__inner-lang" id="lv_btn_mob">LV</a>
                    <a class="header__inner-lang" id="de_btn_mob">DE</a>
                    <a class="header__inner-lang" id="cn_btn_mob">CN</a>
                </div>

            </nav>
        </div>
        <!-- End Mobile Menu -->

        <!-- Header Search -->
        <div class="search-popup">
            <span class="search-back-drop"></span>
            <button class="close-search"><span class="fa fa-times"></span></button>

            <div class="search-inner">
                <form method="post" action="#">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="Search..." required="">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <!-- End Header Search -->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="inner-container">
                    <!--Logo-->
                    <div class="logo">
                        <a href="#" title=""><img src="images/logo.png" alt="" title=""></a>
                    </div>

                    <!--Right Col-->
                    <div class="nav-outer">
                        <!-- Main Menu -->
                        <nav class="main-menu">
                            <div class="navbar-collapse show collapse clearfix">
                                <ul class="navigation clearfix">
                                    <!--Keep This Empty / Menu will come through Javascript-->
                                </ul>
                            </div>
                        </nav><!-- Main Menu End-->

                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler"><span class="icon lnr-icon-bars"></span></div>
                    </div>
                </div>
            </div>
        </div><!-- End Sticky Menu -->
    </header>
    <!--End Main Header -->

    <section class="banner-section-two" style="display: none;">

        <div class="bg bg-image" style="background-image: url(./images/background.jpg)"></div>
        <div class="bottom-shape"></div>

        <div class="auto-container">
            <div class="image-box wow slideInRight animated" data-wow-delay="2000ms" style="visibility: visible; animation-delay: 2000ms; animation-name: slideInRight;"><figure class="image"><img src="images/main_truck.png" style="position:relative; left:-300px; top:-90px; max-width:1050px;" alt=""></figure></div>

            <div class="content-box">
                <div class="title-box">
<!--                    <span class="sub-title wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">Best logistic service in the world</span>-->
                    <h1 class="title wow fadeInUp animated" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;"><?php echo $translations[$lang]['transportation_is_easy']; ?></h1>
                </div>
                <a href="#services" class="theme-btn btn-style-one wow fadeInUp animated" data-wow-delay="1200ms" style="visibility: visible; animation-delay: 1200ms; animation-name: fadeInUp;"><span class="btn-title"><?php echo $translations[$lang]['know_more_us']; ?> <i class="far fa-arrow-up"></i></span></a>
                <span class="icon icon-plane" style="display: none;"></span>
            </div>
        </div>
    </section>

    <section class="banner-section">
        <div class="bg bg-image" style="background-image: url(./images/scania_bg.jpg)"></div>
        <div class="bottom-lines"></div>

        <div class="auto-container">
            <div class="content-box">
                <div class="info-box wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;">
                    <i class="icon lnr-icon-history"></i>
                    <h1 class="count">24</h1>
                    <div class="text">Hours <br>Service</div>
                </div>
                <h1 class="title wow fadeInUp animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInUp;">Experience the<br> Best Logistic &amp;<br> Transport</h1>
                <a href="#services" class="theme-btn btn-style-two wow fadeInUp animated" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;"><span class="btn-title">Know More us <i class="far fa-arrow-up"></i></span></a>

            </div>
        </div>
    </section>


    <!-- Services Section Three-->
    <section id="services" class="services-section-three">

        <div class="auto-container">
            <div class="upper-box">
                <div class="row">
                    <!-- Title Column -->
                    <div class="title-column col-lg-6">
                        <div class="sec-title">
                            <h2><?php echo $translations[$lang]['fleet_consists_1']; ?>
                                <br><?php echo $translations[$lang]['fleet_consists_2']; ?></h2>
                            <div class="text"><?php echo $translations[$lang]['the_experience']; ?></div>
                        </div>
                    </div>

                    <!-- Content Column -->
                    <div class="content-column col-lg-6">
                        <div class="inner-column">
                            <div class="exp-box">
                                <div class="icon_3"></div>
<!--                                <i class="fade-icon flaticon-delivery-box-4"></i>-->
<!--                                <i class="icon flaticon-delivery-box-4"></i>-->
                                <h4 class="title"><?php echo $translations[$lang]['kppro_has_been1']; ?><span
                                            class="color1"><?php echo $translations[$lang]['kppro_has_been2']; ?></span><?php echo $translations[$lang]['kppro_has_been3']; ?>
                                </h4>
                            </div>

                            <div class="fact-counter">
                                <!-- Counter block Two -->
                                <div class="counter-block-two">
                                    <div class="inner">
                                        <div class="count-box"><span class="count-text" data-speed="3000" data-stop="6">0</span>+
                                        </div>
                                        <h4 class="counter-title"><?php echo $translations[$lang]['years_of_experience']; ?></h4>
                                    </div>
                                </div>

                                <!-- Counter block Two -->
                                <div class="counter-block-two">
                                    <div class="inner">
                                        <div class="count-box"><span class="count-text" data-speed="3000" data-stop="3">0</span>+
                                        </div>
                                        <h4 class="counter-title"><?php echo $translations[$lang]['countries']; ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="services-outer">
                <div class="row">
                    <!-- Service Block Three-->
                    <div class="service-block-three col-lg-4 col-md-6">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a><img src="images/ref_truck_2.jpg" alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <div class="icon-box" style="display: none;"><i class="icon flaticon-airplane-2"></i></div>
                                <h6 class="title"><?php echo $translations[$lang]['refrigerated_transport']; ?>
                                </h6>
                                <div class="inner">
                                    <div class="text"><?php echo $translations[$lang]['controlled_transport']; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block Three-->
                    <div class="service-block-three col-lg-4 col-md-6">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a><img src="images/container_truck.jpg" alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <div class="icon-box" style="display: none;"><i class="icon flaticon-cargo-boat"></i></div>
                                <h6 class="title"><?php echo $translations[$lang]['ocean_fright']; ?>
                                </h6>
                                <div class="inner">
                                    <div class="text"><?php echo $translations[$lang]['platform_deliveries']; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block Three-->
                    <div class="service-block-three col-lg-4 col-md-6">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure class="image"><a><img src="images/platform_truck.jpg" alt=""></a></figure>
                            </div>
                            <div class="content-box">
                                <div class="icon-box" style="display: none;"><i class="icon flaticon-delivery-truck-4"></i></div>
                                <h6 class="title"><?php echo $translations[$lang]['large']; ?>
                                </h6>
                                <div class="inner">
                                    <div class="text"><?php echo $translations[$lang]['low_platforms']; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- End Services Section-->

    <!-- Features Section Three -->
    <section class="features-section-three pull-up">
        <div class="bg bg-pattern-5"></div>
        <div class="auto-container">
            <div class="row">
                <!-- Feature Block Three -->
                <div class="feature-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
<!--                            <i class="icon flaticon-maps"></i>-->
                            <div class="icon_1"></div>
                        </div>
                        <h6 class="title"><?php echo $translations[$lang]['cargo_insurance']; ?></h6>
                        <div class="text">
                            <?php echo $translations[$lang]['comprehensive_insurance']; ?>
                        </div>
                    </div>
                </div>

                <!-- Feature Block Three -->
                <div class="feature-block-three col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="icon-box">
<!--                            <i class="icon flaticon-logistics-9"></i>-->
                            <div class="icon_2"></div>
                        </div>
                        <h6 class="title"><?php echo $translations[$lang]['customs_formalities']; ?></h6>
                        <div class="text">
                            <?php echo $translations[$lang]['handle_all']; ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--Emd Features Section Three -->

    <!-- Clients Section -->
    <section id="partners" class="clients-section">
        <div class="anim-icons">
            <figure class="icon float-image"><img src="images/resource/shipping4.png" alt=""></figure>
        </div>
        <div class="auto-container">
            <div class="outer-box border-0 pt-0">
                <div class="sec-title text-center">
                    <h3>
                        <?php echo $translations[$lang]['our_partners']; ?>
                    </h3>
                </div>

                <!-- Sponsors Outer -->
                <div class="sponsors-outer">
                    <!--clients carousel-->
                    <ul class="clients-carousel owl-carousel owl-theme">
                        <li class="client-block"><a href="#"><img src="images/clients/CmaCgm.jpg" alt=""></a></li>
                        <li class="client-block">
                            <a href="#">
                                <div class="cosco_logo"></div>
                            </a>
                        </li>
                        <li class="client-block">
                            <a href="#">
                                <div class="msc_logo"></div>
                            </a>
                        </li>
                        <li class="client-block">
                            <a href="#">
                                <div class="evergreen_logo"></div>
                            </a>
                        </li>

                        <li class="client-block"><a href="#"><img src="images/clients/Depo.png" alt=""></a></li>
                        <li class="client-block"><a href="#"><img src="images/clients/Emc.jpg" alt=""></a></li>
                        <li class="client-block"><a href="#"><img src="images/ic_new_logo.jpg" alt=""></a></li>
                        <li class="client-block"><a href="#"><img src="images/clients/YangMing.jpg" alt=""></a></li>
                        <li class="client-block"><a href="#"><img src="images/clients/Lidl.png" alt=""></a></li>
                        <li class="client-block"><a href="#"><img src="images/clients/MaerskLine.png" alt=""></a></li>
                        <li class="client-block"><a href="#"><img src="images/clients/Oocl.jpg" alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--End Clients Section -->

    <!--Contact Details Start-->
    <section id="contact" class="contact-details">
        <div class="container ">
            <div class="row">
                <div class="col-xl-4 col-lg-6">
                    <div class="contact-details__right">
                        <div class="sec-title">
                            <span class="sub-title">
                                <?php echo $translations[$lang]['any_help']; ?>
                            </span>
                            <h2 id="form_title">
                                <?php echo $translations[$lang]['get_in_touch']; ?>
                            </h2>
                            <div class="text">
                                <?php echo $translations[$lang]['any_questions']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 offset-xl-1 col-lg-6">
                    <!-- Contact Form -->
<!--Old form version-->
<!--                    <form id="contact_form" name="contact_form" class="" action="includes/sendmail.php" method="post">-->
                    <form id="contact_form">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_name" class="form-control" type="text" id="contact_name"
                                           placeholder="<?php echo $translations[$lang]['form_name']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_email" class="form-control required email" type="email" id="contact_email"
                                           placeholder="<?php echo $translations[$lang]['form_email']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_subject" class="form-control required" type="text" id="contact_subject"
                                           placeholder="<?php echo $translations[$lang]['form_subject']; ?>">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <input name="form_phone" class="form-control" type="text" id="contact_phone"
                                           placeholder="<?php echo $translations[$lang]['form_phone']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <textarea name="form_message" class="form-control required" rows="7" id="contact_message"
                                      placeholder="<?php echo $translations[$lang]['form_message']; ?>"></textarea>
                        </div>



                        <div id="contact_response"
                             style="display:none"> <?php echo nl2br($translations[$lang]['response1']) ?> <br><br> <?php echo nl2br($translations[$lang]['response2']) ?> </div>


                        <div class="mb-3">
                            <input name="form_botcheck" class="form-control" type="hidden" value=""/>
                            <div class="theme-btn btn-style-one" data-loading-text="Please wait..." id="submitBtn">
                                <span class="btn-title">
                                    <?php echo $translations[$lang]['send_message']; ?>
                                </span>
                            </div>
                            <button type="reset" class="theme-btn btn-style-one bg-theme-color5" id="resetBtn">
                                <span class="btn-title">
                                    <?php echo $translations[$lang]['reset']; ?>
                                </span>
                            </button>
                        </div>
                    </form>
                    <!-- Contact Form Validation-->
                </div>
            </div>
        </div>
    </section>
    <!--Contact Details End-->


    <!-- Main Footer -->
    <footer class="main-footer pull-up">
        <div class="bg bg-image" style="background-image: url(./images/background/2.jpg)"></div>

        <!--Widgets Section-->
        <div class="widgets-section">
            <div class="auto-container">
                <div class="row">
                    <!--Footer Column-->
                    <div class="footer-column col-xl-4 col-lg-4">
                        <div class="footer-widget about-widget">
                            <div class="logo"><a href="#"><img src="images/logo.png" alt=""></a></div>
                            <ul class="contact-info-list">
                                <li><i class="far fa-phone"></i> <a href="tel:+37129714481">+371 29714481</a><br></li>
                                <li><i class="far fa-envelope"></i> <a href="mailto:info@kppro.lv">info@kppro.lv</a><br>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!--End Main Footer -->

</div><!-- End Page Wrapper -->


<!-- Scroll To Top -->
<!--<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>-->

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/script.js"></script>
<script src="js/languageChange.js?<?php echo microtime(); ?>"></script>
<script src="/js/message_modal.js?<?php echo microtime(); ?>"></script>
<script src="js/contact_form.js?<?php echo microtime(); ?>" onload="contact_form_set('<?php echo $lang; ?>')"></script>
</body>
</html>