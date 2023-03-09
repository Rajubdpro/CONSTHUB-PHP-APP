(function($){
	'use script';

    // Sticky Menu
    $(window).on('scroll',function(){
        var scroll = $(window).scrollTop();
        if(scroll < 150){
            $('.header-bottom').removeClass('sticky');
        }else{
            $('.header-bottom').addClass('sticky');
        }
    });

    // Counter
	$('.counter').counterUp({
        delay: 10,
        time: 2000
    });

	// Scroll Area
	$(document).ready(function(){
	    $('.scroll-area').click(function(){
	      	$('html').animate({
	        	'scrollTop' : 0,
	      	},700);
	      	return false;
	    });
	    $(window).on('scroll',function(){
	      	var a = $(window).scrollTop();
	      	if(a>400){
	            $('.scroll-area').slideDown(300);
	        }else{
	            $('.scroll-area').slideUp(200);
	        }
	    });
	});

	// Search
	$('.search-icon').click(function(){
        $('.search-form').addClass('active');
    });
    $('.search-form-x').click(function(){
        $('.search-form').removeClass('active');
    });

    /*---slider activation---*/
    var $slider = $('.hero-slider-full');
    if($slider.length > 0){
        $slider.owlCarousel({
            animateOut: 'fadeOut',
            loop: true,
            nav: false,
            autoplay: false,
            autoplayTimeout: 8000,
            items: 1,
            nav:true,
            navText:['<span class="hero-slider-nav"><i class="fas fa-arrow-left"></i></span>','<span class="hero-slider-nav"><i class="fas fa-arrow-right"></i></span>']
        });
    }

	var mixer = mixitup('.project-full');
	var mixer = mixitup('.portF');
	var mixer = mixitup('.portF', {
		selectors: {
			target: '.blog-item'
		},
		animation: {
			duration: 100
		}
	});


	$('.project-item-overly-full a.zoom-img').magnificPopup({
	  	type: 'image',
	   	gallery: {
	    	enabled: true
	  	}
	});

  	$(".testimonial-full").owlCarousel({
  		loop:true,
  		center:false,
  		items:3,
  		autoplay: true,
        responsive:{
            0:{
                items:1
            },
            867:{
                items:2
            },
            991:{
                items:3
            }
        }
  	});


  	$(".client-logo-full").owlCarousel({
  		loop:true,
  		center:false,
  		items:5,
  		autoplay: true,
        responsive:{
            0:{
                items:1
            },
            867:{
                items:3
            },
            991:{
                items:5
            }
        }
  	});

  	// Mobile Menu
  	/*---canvas menu activation---*/
    $('.canvas_open').on('click', function(){
        $('.offcanvas_menu_wrapper,.off_canvars_overlay').addClass('active')
    });
    
    $('.canvas_close,.off_canvars_overlay').on('click', function(){
        $('.offcanvas_menu_wrapper,.off_canvars_overlay').removeClass('active')
    });


	/*---Off Canvas Menu---*/
    var $offcanvasNav = $('.offcanvas_main_menu'),
        $offcanvasNavSubMenu = $offcanvasNav.find('.sub-menu');
    $offcanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i class="fa fa-angle-down"></i></span>');
    
    $offcanvasNavSubMenu.slideUp();
    
    $offcanvasNav.on('click', 'li a, li .menu-expand', function(e) {
        var $this = $(this);
        if ( ($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand')) ) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length){
                $this.siblings('ul').slideUp('slow');
            }else {
                $this.closest('li').siblings('li').find('ul:visible').slideUp('slow');
                $this.siblings('ul').slideDown('slow');
            }
        }
        if( $this.is('a') || $this.is('span') || $this.attr('clas').match(/\b(menu-expand)\b/) ){
        	$this.parent().toggleClass('menu-open');
        }else if( $this.is('li') && $this.attr('class').match(/\b('menu-item-has-children')\b/) ){
        	$this.toggleClass('menu-open');
        }
    });


}(jQuery));