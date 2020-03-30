<?php get_header(); ?>

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area bg-img" style="background-image: url(<?php echo get_theme_file_uri('img/bg-img/breadcumb.jpg'); ?>);">
    <div class="bradcumbContent">
        <h2>Contact</h2>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->


<!-- ##### Google Maps ##### -->
    <div class="map-area wow fadeInUp" data-wow-delay="300ms">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3980.7266792078362!2d11.514852314706832!3d3.868696997185946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x108bcf7891ef7295%3A0x5ec7cf6c8f000fb7!2sUrbatech+Conseils!5e0!3m2!1sen!2scm!4v1555718317164!5m2!1sen!2scm" width="800" height="600" frameborder="0" style="border:0;width: 100%;" allowfullscreen></iframe>
    </div>

    <!-- ##### Contact Area Start ##### -->
    <section class="contact-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-content">
                        <div class="row">
                            <!-- Contact Information -->
                            <div class="col-12 col-lg-5">
                                <div class="contact-information wow fadeInUp" data-wow-delay="400ms">
                                    <div class="section-heading text-left">
                                        <span>The Best</span>
                                        <h3>Contact Us</h3>
                                        <p class="mt-30">
                                            Lacinia, lacinia la cus non, fermen tum nisi. Donec et sollicitudin. Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis. Ut in iaculis enim, et pulvinar mauris.</p>
                                    </div>

                                    <!-- Contact Social Info -->
                                    <div class="contact-social-info d-flex mb-30">
                                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-placeholder"></i>
                                        </div>
                                        <p>Cameroun Yaounde, <br> Nkomkana</p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-telephone-1"></i>
                                        </div>
                                        <p>Principale: 677-688-000 <br> Bureau: 243-225-286</p>
                                    </div>

                                    <!-- Single Contact Info -->
                                    <div class="single-contact-info d-flex">
                                        <div class="contact-icon mr-15">
                                            <i class="icon-contract"></i>
                                        </div>
                                        <p>contact@armandins.com</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Contact Form Area -->
                            <div class="col-12 col-lg-7">
                                <div class="contact-form-area wow fadeInUp" data-wow-delay="500ms">
                                    <?php
                                   while (have_posts()) {
                                       the_post();
                                       the_content();
                                   }
                                   ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->


<?php get_footer(); ?>