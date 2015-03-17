(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		$(window).load(function() {
		  $('#slider1').flexslider({
		  	animation: "slide",
		  	controlNav: false,
			directionNav: false,
			prevText: false,
			nextText: false,
			initDelay: 1200, 
		  });

		  $('#agenda').flexslider({
		  	animation: "slide",
		  	controlNav: false,
		  	prevText: "<div class='btn_agenda-slide-left'><i class='fa fa-caret-left'></i></div>",
			nextText: "<div class='btn_agenda-slide-right'><i class='fa fa-caret-right'></i></div>",
			animationSpeed: 800,
			slideshow: false,
			initDelay: 1200, 
		  });

		  $('#slider2, #slider3').flexslider({
		  	animation: "slide",
		  	controlNav: false,
		  	prevText: "<div class='fa fa-chevron-left'></div>",
			nextText: "<div class='fa fa-chevron-right'></div>",
			slideshow: false,
			initDelay: 1200, 
		  });

		});

		$('.menu-search-open').toggle(function(){
			$('.search').show(function(){
				$('.mobile-search').animate({
					height:30
				});
			});
		},function(){
			$('.mobile-search').animate({
				height:0
			},function(){
				$('.search').hide();
			});
		});

		$('.menu-icon-open').toggle(function(){

			$('.menu-icon-open .fa').removeClass('fa-bars').addClass('fa-remove');

			$('.mobile-categorys').animate({
				right:'-30px'
			},1000);

			$('.wrapper').css('position','relative').animate({
				right:270

			},1000);

		},function(){

			$('.menu-icon-open .fa').addClass('fa-bars').removeClass('fa-remove');

			$('.mobile-categorys').animate({
				right:'-400px'
			},1000);

			$('.wrapper').css('position','relative').animate({
				right:0
			},1000);

		});

		$('.up-site').click(function(){
		    $("html, body").animate({ scrollTop: 0 }, 600);
		    return false;
		});
	});
	
})(jQuery, this);
