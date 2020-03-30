<?php get_header() ?>


<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url(<?php echo get_theme_file_uri('img/bg-img/breadcumb.jpg'); ?>);">
    <div class="bradcumbContent">
        <h2>Nos Actualités</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<div class="blog-area mt-50 section-padding-100">
    <div class="container">
        <div class="row ">
            <div class="col-12 col-md-8 ">
                <div class="academy-blog-posts">
                    <div class="row">
                        <?php
                        while (have_posts()) {
                            the_post();
                            ?>
                            <!-- Single Blog Start -->
                            <div class="col-12">
                                <div class="single-blog-post mb-50 wow fadeInUp" data-wow-delay="300ms">
                                    <!-- Post Thumb -->
                                    <div class="blog-post-thumb mb-50">
                                        <img src="<?php the_field('post-img'); ?>" alt="les armandins">
                                    </div>
                                    <!-- Post Title -->
                                    <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p>By <a href="#"><?php the_author(); ?></a> | <a href="#"><?php the_time('F d, Y'); ?></a></p>
                                    </div>
                                    <!-- Post Excerpt -->
                                    <p><?php the_excerpt(); ?></p>
                                    <!-- Read More btn -->
                                    <a href="<?php the_permalink(); ?>" class="btn academy-btn btn-sm mt-15">Lire plus</a>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Blog Area End ##### -->


<?php get_footer() ?>