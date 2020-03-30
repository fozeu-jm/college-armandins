<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php wp_head(); ?>

    </head>

    <body>
        <!-- ##### Preloader ##### -->
        <div id="preloader">
            <i class="circle-preloader"></i>
        </div>

        <!-- ##### Header Area Start ##### -->
        <header class="header-area">

            <!-- Top Header Area -->
            <div class="top-header">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 h-100">
                            <div class="header-content h-100 d-flex align-items-center justify-content-between">
                                <div class="academy-logo">
                                    <a href="index.html"><img src="<?php echo get_theme_file_uri('img/core-img/logo.png'); ?>" alt="les armandins"></a>
                                </div>
                                <div class="login-content">
                                    <a href="mailto:contact@armandins.com" class="align-items-center d-flex">
                                        <i style="font-size: 30px; margin-right: 5px;" class="icon-mail"></i>
                                        <span class="mail-link">contact@armandins.com</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navbar Area -->
            <div class="academy-main-menu">
                <div class="classy-nav-container breakpoint-off">
                    <div class="container">
                        <!-- Menu -->
                        <nav class="classy-navbar justify-content-between" id="academyNav">

                            <!-- Navbar Toggler -->
                            <div class="classy-navbar-toggler">
                                <span class="navbarToggler"><span></span><span></span><span></span></span>
                            </div>

                            <!-- Menu -->
                            <div class="classy-menu">

                                <!-- close btn -->
                                <div class="classycloseIcon">
                                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                                </div>

                                <!-- Nav Start -->
                                <div class="classynav">
                                    <ul>
                                        <li class="<?php if(is_front_page()){echo 'active';} ?>"><a href="<?php echo site_url(''); ?>">Accueil</a></li>
                                        <li class="<?php if(is_page('a-propos')){echo 'active';} ?>"><a href="<?php echo site_url('a-propos') ?>">A propos</a></li>
                                        <li class="<?php if(is_page('admission')){echo 'active';} ?>"><a href="<?php echo site_url('admission') ?>">Admissions</a></li>
                                        <li class="<?php if(get_post_type()=='post'){echo 'active';} ?>"><a href="<?php echo site_url('actualites') ?>">Actualités</a></li>
                                        <li class="<?php if(is_page('contact')){echo 'active';} ?>"><a href="<?php echo site_url('contact') ?>">Contact</a></li>
                                    </ul>
                                </div>
                                <!-- Nav End -->
                            </div>

                            <!-- Calling Info -->
                            <div class="calling-info">
                                <div class="call-center">
                                    <a href="tel:+237677688000"><i class="icon-telephone-2"></i> <span>(+237) 677 688 000</span></a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- ##### Header Area End ##### -->
