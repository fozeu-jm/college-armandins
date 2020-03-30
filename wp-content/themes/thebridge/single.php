<?php get_header(); ?>

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url(<?php echo get_theme_file_uri('img/bg-img/breadcumb.jpg'); ?>);">
    <div class="bradcumbContent">
        <h2>Actualités</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<section class="news">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="news-container">
                    <div class="news-banner">
                        <img src="<?php the_field('post-img'); ?>" alt="les armandins">
                    </div>
                    <div style="margin-top: 40px;" class="full-width text-center">
                        <h4  style="text-transform: capitalize;"><?php the_title(); ?></h4>
                        <?php
                        while (have_posts()) {
                            the_post();
                            ?>
                        <h6 style="text-transform: uppercase;">Par <?php the_author(); ?> | <?php the_time('F d, Y'); ?></h6>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div style="margin-top: 20px;" class="col-12 text-justify">
                <?php
                while (have_posts()) {
                    the_post();
                    the_content();
                }
                ?>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>
