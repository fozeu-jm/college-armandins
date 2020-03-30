(function ($) {
    'use strict';

    var browserWindow = $(window);

    // :: 1.0 Preloader Active Code
    browserWindow.on('load', function () {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });
    });

    // :: 2.0 Nav Active Code
    if ($.fn.classyNav) {
        $('#academyNav').classyNav();
    }

    // :: 3.0 Sliders Active Code
    if ($.fn.owlCarousel) {
        var welcomeSlide = $('.hero-slides');
        var aboutSlide = $('.about-slides');
        var testimonials = $('.testi-slides');
        var atouts = $('.atout-slides');
        var galerie = $('.gallery-slider');


        galerie.owlCarousel({
          items: 1,
                      loop: false,
                      smartSpeed: 800,
                      autoplay: true,
                      margin: 30,
                      nav: false,
                      navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                      dots: false
        });


        atouts.owlCarousel({
                      items: 3,
                      loop: true,
                      smartSpeed: 800,
                      autoplay: true,
                      margin: 30,
                      nav: true,
                      navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                      dots: true,
                      responsive: {
                          0: {
                              nav: true,
                              navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                              items: 1
                          },
                          480: {
                              nav: true,
                              navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                              items: 2
                          },
                          768: {
                              nav: true,
                              navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                              items: 2
                          },
                          992: {
                              nav: true,
                              navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
                              items: 3
                          }
                      }
        });


        testimonials.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: false,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000
        });



        welcomeSlide.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000
        });

        welcomeSlide.on('translate.owl.carousel', function () {
            var slideLayer = $("[data-animation]");
            slideLayer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });

        welcomeSlide.on('translated.owl.carousel', function () {
            var slideLayer = welcomeSlide.find('.owl-item.active').find("[data-animation]");
            slideLayer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });

        $("[data-delay]").each(function () {
            var anim_del = $(this).data('delay');
            $(this).css('animation-delay', anim_del);
        });

        $("[data-duration]").each(function () {
            var anim_dur = $(this).data('duration');
            $(this).css('animation-duration', anim_dur);
        });

        aboutSlide.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            smartSpeed: 1000
        });
    }

    // :: 4.0 Gallery Active Code
    if ($.fn.magnificPopup) {
        $('.gallery-img').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    }

    // :: 5.0 ScrollUp Active Code
    if ($.fn.scrollUp) {
        browserWindow.scrollUp({
            scrollSpeed: 1500,
            scrollText: '<i class="fa fa-angle-up"></i>'
        });
    }

    // :: 6.0 CouterUp Active Code
    if ($.fn.counterUp) {
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });
    }

    // :: 7.0 prevent default a click
    $('a[href="#"]').click(function ($) {
        $.preventDefault()
    });

    // :: 8.0 wow Active Code
    if (browserWindow.width() > 767) {
        new WOW().init();
    }

    // :: 9.0 Sticky Active Code
    if ($.fn.sticky) {
        $(".academy-main-menu").sticky({
            topSpacing: 0
        });
    }

    $('.no-link').click(function (event) {
        event.preventDefault();
        event.stopPropagation();
    });

    $('.zoom-gallery').magnificPopup({
       delegate: 'a',
       type: 'image',
       closeOnContentClick: false,
       closeBtnInside: false,
       mainClass: 'mfp-with-zoom mfp-img-mobile',
       image: {
           verticalFit: true,
           titleSrc: function (item) {
               return item.el.attr('title') + ' &middot; <a class="image-source-link" href="' + item.el.attr('data-source') + '" target="_blank">image source</a>';
           }
       },
       gallery: {
           enabled: true
       },
       zoom: {
           enabled: true,
           duration: 300, // don't foget to change the duration also in CSS
           opener: function (element) {
               return element.find('img');
           }
       }

   });

})(jQuery);
