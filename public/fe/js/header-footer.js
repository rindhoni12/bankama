(function($) {
  "use strict";
	/* ========================================== 
	Sticky Header Desktop
	========================================== */
	$(window).on("scroll", function(){
		var site_header = $('#site-header').outerHeight();
		var main_header_top = $('.main-header-top').outerHeight();
		var header_sticky = site_header - topbar_header;

		if( $('#header_topbar').length ){
		    var topbar_header = $('#header_topbar').outerHeight();		    
		}else{
			var topbar_header = 1;
		}		
		
	    if ($(window).scrollTop() >= topbar_header) {	    	
	        $('.sticky-header').addClass('sticked');	        
	    }else {
	        $('.sticky-header').removeClass('sticked');		              
	    }
	});

	/* ========================================== 
	Search on Header
	========================================== */
	$('.toggle_search').on("click", function(){
		$(this).toggleClass( "active" );
        $('.h-search-form-field').toggleClass('show');
        if ($(this).find('i').hasClass( "fa-search" )) {
       		$('.toggle_search > i').removeClass( "fa-search" ).addClass("fa-times");
        }else{
       		$('.toggle_search > i').removeClass( "fa-times" ).addClass("fa-search");
        }
    });

    /* ========================================== 
	Header Mobile
	========================================== */
	// mobile_mainmenu create span
	$('.collapse .mobile_mainmenu li:has(ul)').prepend('<span class="arrow"><i class="fa fa-plus"></i></span>');

	$( "#mmenu_toggle" ).on('click', function() {
		$(this).toggleClass( "active" );

		if ($(this).hasClass( "active" )) {
			$('.mobile_nav').stop(true, true).slideDown();
		}else{
			$('.mobile_nav').stop(true, true).slideUp();
		}		
	});

	$(".mobile_mainmenu > li span.arrow").on('click', function() {
        $(this).parent().find("> ul").stop(true, true).slideToggle()
        $(this).toggleClass( "active" ); 
    });

    if ($('#back-to-top').length) {
	    var scrollTrigger = 500, // px
	        backToTop = function () {
	            var scrollTop = $(window).scrollTop();
	            if (scrollTop > scrollTrigger) {
	                $('#back-to-top').addClass('show');
	            } else {
	                $('#back-to-top').removeClass('show');
	            }
	        };
	    backToTop();
	    $(window).on('scroll', function () {
	        backToTop();
	    });
	    $('#back-to-top').on('click', function (e) {
	        e.preventDefault();
	        $('html,body').animate({
	            scrollTop: 0
	        }, 700);
	    });	
    }

})(jQuery);