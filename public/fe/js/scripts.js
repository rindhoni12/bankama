(function($) {
  "use strict";

    //Preloader
    Royal_Preloader.config({
        mode           : 'logo',
        logo           : '/images/logo-kbpr2.png',
        logo_size      : [187, 40],
        showProgress   : true,
        showPercentage : true,
        text_colour: '#0a0f2b',
        background:  '#fff'
    });

    //Project Filter
    $(window).on("load", function(){
        var $container = $('#projects');
        $container.isotope({
            itemSelector: '.project-item',
            filter: '*',
            masonry: {
                columnWidth: 1
            }
        });
        $('#filters a').on("click", function() {
            var $this = $(this);
            if ($this.hasClass('selected')) {
                return false;
            }
            var $optionSet = $this.parents();
            $optionSet.find('.selected').removeClass('selected');
            $this.addClass('selected');
            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector
            });
            return false;
        });
    });

    //Counter
    var v_count = '0';
    $(window).on("scroll", function(){
        $('.fun-facts .number').each(function(){
            var imagePos = $(this).offset().top;           
            var topOfWindow = $(window).scrollTop();
            if (imagePos < topOfWindow+800 && v_count=='0') {       
                $(function ($) {
                    // start all the timers
                    $('.fun-facts .number').each(count);                                         
                    function count(options) {
                        v_count = '1';
                        var $this = $(this);
                        options = $.extend({}, options || {}, $this.data('countToOptions') || {});
                        $this.countTo(options);
                    }
                });             
            }
        });
    });
    

    //Images Carousel
    $('.image-carousel').each( function () {
        var $s1, $s2, $s3;
        var $show   = $s1 = $s2 = $(this).data('show');
        var $arr    = $(this).data('arrow');
        var $dots   = !$arr;
        if($(this).hasClass('partner-slider')){
            $dots    = false;
        }
        if( 4 > $show > 2 ) { $s1 = $s2 = $show - 1; }
        if( $show > 3 ) { $s1 = $show - 1; $s2 = $show - 2; $s3 = $show - 3; }

        $(this).slick({
            infinite: true,
            slidesToShow: $show,
            slidesToScroll: 1,
            arrows: $arr,
            prevArrow: '<button type="button" class="prev-nav"><i class="fa fa-angle-left"></i></button>',
            nextArrow: '<button type="button" class="next-nav"><i class="fa fa-angle-right"></i></button>',
            autoplay: true,
            autoplaySpeed: 7000,
            responsive: [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: $s1,
                        slidesToScroll: 1,
                        infinite: true,
                        arrows: $arr,
                        dots: $dots
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: $s2,
                        slidesToScroll: 1,
                        infinite: true,
                        arrows: $arr,
                        dots: $dots
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: $s2,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: false
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: false
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: false
                    }
                }
            ]
        });
    });

    //Latest News
    $('.news-slider').each( function () {
        var $show = $(this).data('show');
        var $dot  = $(this).data('dot');
        var $auto = $(this).data('auto');
        var $m_show = $show;
        if( $show >= 3 ) $m_show = $show - 1;
        $(this).slick({
            infinite: false,
            slidesToShow: $show,
            slidesToScroll: 1,
            arrows: false,
            dots: $dot,
            autoplay: $auto,
            autoplaySpeed: 6000,
            prevArrow: '<button type="button" class="prev-nav"><i class="fa fa-angle-left"></i></button>',
            nextArrow: '<button type="button" class="next-nav"><i class="fa fa-angle-right"></i></button>',
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: $m_show,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: $m_show - 1,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true
                    }
                }
            ]
        });
    });

    //Project Slider 2
    $('.project-list-2').each( function () {
        var $show = $(this).data('show');
        var $dot  = $(this).data('dot');
        var $auto = $(this).data('auto');
        $(this).find('.project-slider-2').slick({
            centerMode: true,
            centerPadding: '350px',
            slidesToShow: $show,
            slidesToScroll: 1,
            arrows: false,
            dots: $dot,
            autoplay: $auto,
            autoplaySpeed: 6000,
            prevArrow: '<button type="button" class="prev-nav"><i class="fa fa-angle-left"></i></button>',
            nextArrow: '<button type="button" class="next-nav"><i class="fa fa-angle-right"></i></button>',
            responsive: [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                        centerPadding: '50px',
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: false,
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: false,
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: false,
                        arrows: false,
                        dots: true
                    }
                }
            ]
        });
 
        $('.btn-left').on("click", function(){
          $(this).parents('.project-list-2').find('.project-slider-2').slick('slickPrev');
        });

        $('.btn-right').on("click", function(){
          $(this).parents('.project-list-2').find('.project-slider-2').slick('slickNext');
        });

    });

    //Testimonial Slider
    $('.testi-slider').each( function () {
        var $show   = $(this).data('show');
        var $arr    = $(this).data('arrow');
        var $dots   = !$arr;
        var $m_show = $show;
        if( $show == 3 ) $m_show = $show - 1;
        $(this).slick({
            slidesToShow: $show,
            slidesToScroll: 1,
            arrows: $arr,
            autoplay: true,
            autoplaySpeed: 6000,
            adaptiveHeight: true,
            prevArrow: '<button type="button" class="prev-nav"><i class="fa fa-angle-left"></i></button>',
            nextArrow: '<button type="button" class="next-nav"><i class="fa fa-angle-right"></i></button>',
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: $m_show,
                        slidesToScroll: 1,
                        infinite: true,
                        arrows: $arr,
                        dots: $dots
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true
                    }
                }
            ]
        });
    });    

    //Testimonial Slider Style 3
    $('.testi-with-nav').each( function () {
        $(this).find('.testi-slider-2').slick({
            swipe: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '.testi-nav',
            arrows: false,
            autoplay: false,
            adaptiveHeight: true,
        });
        $(this).find('.testi-nav').slick({
            slidesToShow: 6,
            slidesToScroll: 1,
            asNavFor: '.testi-slider-2',
            autoplay: false,
            focusOnSelect: true
        });
    });

    //Team Slider
    $('.team-slider').each( function () {
        var $show   = $(this).data('show');
        var $arr    = $(this).data('arrow');
        var $m_show = $show;
        if( $show == 4 ) $m_show = $show - 1;
        $(this).slick({
            infinite: false,
            slidesToShow: $show,
            slidesToScroll: 1,
            arrows: $arr,
            prevArrow: '<button type="button" class="prev-nav"><i class="fa fa-angle-left"></i></button>',
            nextArrow: '<button type="button" class="next-nav"><i class="fa fa-angle-right"></i></button>',
            responsive: [
                {
                    breakpoint: 1229,
                    settings: {
                        slidesToShow: $m_show,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true
                    }
                }
            ]
        });
    });

    //Project Slider
    $('.project-slider').each( function () {
        var $show = $(this).data('show');
        var $arr  = $(this).data('arrow');
        var $dot  = $(this).data('dot');
        var $auto = $(this).data('auto');
        $(this).slick({
            infinite: false,
            slidesToShow: $show,
            slidesToScroll: 1,
            arrows: $arr,
            dots: $dot,
            autoplay: $auto,
            autoplaySpeed: 6000,
            prevArrow: '<button type="button" class="prev-nav"><i class="fa fa-angle-left"></i></button>',
            nextArrow: '<button type="button" class="next-nav"><i class="fa fa-angle-right"></i></button>',
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        dots: true
                    }
                }
            ]
        });
    });


    


    //Project Slider 3
    $('.project-with-nav').each( function () {
        $(this).find('.project-images').slick({
            infinite: false,
            swipe: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            asNavFor: '.project-nav',
            arrows: true,
            prevArrow: '<button type="button" class="prev-nav"><i class="fa fa-angle-left"></i></button>',
            nextArrow: '<button type="button" class="next-nav"><i class="fa fa-angle-right"></i></button>',
            autoplay: false,
            adaptiveHeight: true,
            responsive: [
                {
                    breakpoint: 600,
                    settings: {
                        arrows: false
                    }
                }
            ]
        });
        $(this).find('.project-nav').slick({
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.project-images',
            autoplay: false,
            arrows: false,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        dots: true,
                        slidesToShow: 1,
                    }
                }
            ]
        });
    });

    //Popup Video
    var $video_play = $('.video-btn a');
    if ($video_play.length > 0 ) {
        $video_play.magnificPopup({
            type: 'iframe',
            removalDelay: 160,
            preloader: true,
            fixedContentPos: false,
            callbacks: {
            beforeOpen: function() {
                    this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
                    this.st.mainClass = this.st.el.attr('data-effect');
                }
            },
        });
    }

    
} )( jQuery );
