<?php get_header(); ?>


<!-- ##### Hero Area Start ##### -->
<section class="hero-area">
    <div class="hero-slides owl-carousel">
        <?php
        $custom = new WP_Query(array(
            'post_type' => 'slider',
            'post_status' => 'publish',
            'posts_per_page' => '-1',
        ));
        while ($custom->have_posts()) {
            $custom->the_post();
            ?>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(<?php the_field('diapo-background'); ?>);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h4 data-animation="fadeInUp" data-delay="100ms"><?php the_field('small-title'); ?></h4>
                                <h2 data-animation="fadeInUp" data-delay="400ms"><?php the_field('big-title'); ?></h2>
                                <?php if (get_field('diapo-link') != '') { ?>
                                    <a href="<?php the_field('diapo-link'); ?>" class="btn academy-btn" data-animation="fadeInUp" data-delay="700ms"><?php the_field('link-label'); ?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } wp_reset_postdata(); ?>

    </div>
</section>
<!-- ##### Hero Area End ##### -->

<!-- ##### Top Feature Area Start ##### -->
<div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="features-content">
                    <div class="row no-gutters">
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-assistance"></i>
                                <h5>Enseignants Certifiés</h5>
                            </div>
                        </div>
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-agenda-1"></i>
                                <h5>Cursus Organisés</h5>
                            </div>
                        </div>
                        <!-- Single Top Features -->
                        <div class="col-12 col-md-4">
                            <div class="single-top-features d-flex align-items-center justify-content-center">
                                <i class="icon-telephone-3"></i>
                                <h5>A L'ecoute</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Top Feature Area End ##### -->


<!-- ##### Welcome Area ##### -->
<div  class="academy-courses-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4 text-center">
                <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <h1 style="font-size: 55px; margin-bottom: 15px; color: #009941;" class="welcome-h"><?php the_field('welcome-title'); ?></h1>
                    <div class="welcome-txt" style="text-align: justify; color: black; line-height: 2.29; margin-bottom: 25px;">
                        <?php the_field('welcome-txt') ?>
                    </div>
                </div>
                <div class="offset-md-1 col-md-7">
                    <img style="max-width: 100%; border-radius: 5px;" src="<?php echo get_field('welcome-img'); ?>" alt="Les Armandins">
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- ##### Welcome Area ##### -->

<!-- ##### Chiffres important ##### -->
<div class="top-popular-courses-area section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div style="margin-bottom: 40px;" class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <h3>Nos Chiffres</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="academy-cool-facts-area">
                    <div class="row">
                        <?php
                        while (have_posts()) {
                            the_post();
                            ?>
                            <!-- Single Cool Fact-->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                                    <i class="icon-agenda-1"></i>
                                    <h3><span class="counter"><?php the_field('chiffre-1'); ?></span></h3>
                                    <p><?php the_field('label-1'); ?></p>
                                </div>
                            </div>

                            <!-- Single Cool Fact-->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                                    <i class="icon-assistance"></i>
                                    <h3><span class="counter"><?php the_field('chiffre-2'); ?></span></h3>
                                    <p><?php the_field('label-2'); ?></p>
                                </div>
                            </div>
                            <!-- Single Cool Fact-->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                                    <i class="icon-placeholder"></i>
                                    <h3><span class="counter"><?php the_field('chiffre-3'); ?></span></h3>
                                    <p><?php the_field('label-3'); ?></p>
                                </div>
                            </div>
                            <!-- Single Cool Fact-->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                                    <i class="icon-id-card"></i>
                                    <h3><span class="counter"><?php the_field('chiffre-4'); ?></span>%</h3>
                                    <p><?php the_field('label-4'); ?></p>
                                </div>
                            </div>

                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Chiffres importants ##### -->

<!-- ##### Nos Atouts ###### -->
<div style="padding-top: 0px;" class="top-popular-courses-area section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div style="margin-bottom: 30px;" class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <span>The Best</span>
                    <h3>Nos Atouts</h3>
                </div>
            </div>
        </div>
        <div class="atout-slides owl-carousel">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'assets',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                ?>
                <!-- Single Blog Start -->
                <div class="atout-item">
                    <!-- Post Thumb -->
                    <div class="blog-post-thumb">
                        <img src="<?php the_field('asset-img'); ?>" alt="les armandins">
                    </div>
                    <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">

                        <!-- Post Title -->
                        <a href="#" class="post-title" style="font-size: 22px; margin-bottom: 0.75rem;"><?php the_title(); ?></a>
                        <!-- Post Excerpt -->
                        <p class="text-justify">
                            <?php the_content(); ?>
                        </p>
                    </div>
                </div>
            <?php } wp_reset_postdata(); ?>

        </div>

    </div>
</div>
<!-- ##### Nos Atouts ###### -->


<!-- ##### Galerie ###### -->
<div style="padding-top: 0px;" class="top-popular-courses-area section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div style="margin-bottom: 35px;" class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <span>The Best</span>
                    <h3>Les Armandins En Image</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <div class="full-width gallery-container">
                    <div class="gallery-slider owl-carousel zoom-gallery" >
                        <?php
                        while (have_posts()) {
                            the_post();
                            $images = acf_photo_gallery('galerie', get_the_ID());
                            $img_count = count($images);
                            $counter = 0;
                            for ($counter = 0; $counter < $img_count; $counter++) {
                                ?>
                                <a href="<?php echo $images[$counter]['full_image_url'] ?>" title="<?php echo $images[$counter]['title'] ?>">
                                    <img src="<?php echo $images[$counter]['full_image_url'] ?>" alt="les armandins">
                                </a>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### -->

<!-- ##### Testimonials Area Start ##### -->
<div class="testimonials-area section-padding-100 bg-img bg-overlay" style="background-image: url(<?php echo get_theme_file_uri('img/bg-img/bg-2.jpg'); ?>);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto white wow fadeInUp" data-wow-delay="300ms">
                    <?php
                    while (have_posts()) {
                        the_post();
                        ?>
                        <span><?php the_field('titre-1'); ?></span>
                        <h3><?php the_field('titre-2'); ?></h3>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">


                <div class="slide-container">
                    <div class="testi-slides owl-carousel">


                        <?php
                        $custom = new WP_Query(array(
                            'post_type' => 'testimonial',
                            'post_status' => 'publish',
                            'posts_per_page' => '-1',
                        ));
                        while ($custom->have_posts()) {
                            $custom->the_post();
                            ?>
                            <!-- Single Testimonials Area -->
                            <div class="testi-item">
                                <div class="single-testimonial-area mb-100 d-flex wow fadeInUp" data-wow-delay="400ms">
                                    <div class="testimonial-content text-center">
                                        <p style="font-size: 40px; color: #69bc5f;font-family: 'Roboto', sans-serif;">"</p>
                                        <?php the_content(); ?>
                                        <div style="margin-top: 35px;" class="testimonial-thumb mx-auto mb-4">
                                            <img src="<?php the_field('testi-img'); ?>" alt="les armandins">
                                        </div>

                                        <h4><span><?php the_title(); ?></h4>
                                        <h6><?php the_field('testi-title'); ?></h6>
                                    </div>
                                </div>
                            </div>
                        <?php } wp_reset_postdata(); ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Testimonials Area End ##### -->

<!-- ##### Actualites ###### -->
<div class="top-popular-courses-area section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div style="margin-bottom: 40px;" class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <span>The Best</span>
                    <h3>Notre Actualité</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $custom = new WP_Query(array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => '-1',
            ));
            while ($custom->have_posts()) {
                $custom->the_post();
                ?>
                <!-- Single Blog Start -->
                <div class="col-md-4">
                    <!-- Post Thumb -->
                    <div class="blog-post-thumb">
                        <img src="<?php the_field('post-img'); ?>" alt="les armandins">
                    </div>
                    <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">

                        <!-- Post Title -->
                        <a href="#" class="post-title" ><?php the_title(); ?></a>
                        <!-- Post Meta -->
                        <div class="post-meta">
                            <p><?php the_time('F d, Y'); ?></p>
                        </div>
                        <!-- Post Excerpt -->
                        <p class="text-justify">
                            <?php the_excerpt(); ?>
                        </p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- ##### Actualites ###### -->



<?php get_footer(); ?>