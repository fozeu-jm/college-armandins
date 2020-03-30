<?php get_header(); ?>

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url(<?php echo get_theme_file_uri('img/bg-img/breadcumb.jpg'); ?>);">
    <div class="bradcumbContent">
        <h2>About Us</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### About Us Area Start ##### -->
<section class="about-us-area mt-50 section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
                    <span>The Best</span>
                    <h3>College Armandins</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <?php
                while (have_posts()) {
                    the_post();
                    ?>
                    <p class="text-justify">
                        <?php the_field('paragraph-1'); ?>
                    </p>
                </div>
                <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <p class="text-justify">
                        <?php the_field('paragraph-2'); ?>
                    </p>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Us Area End ##### -->

<!-- ##### Galerie ###### -->
<div style="padding-top: 0px;" class="top-popular-courses-area section-padding-100-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">
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
                        $custom = new WP_Query(array(
                            'post_type' => 'page',
                            'p' => 10,
                            'posts_per_page' => '-1',
                        ));
                        while ($custom->have_posts()) {
                            $custom->the_post();
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
<!-- ##### -->F



<?php get_footer(); ?>