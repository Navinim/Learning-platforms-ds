$(document).ready(function() {
	$("#owl-banner-slider").owlCarousel({
        loop:true,
	    autoplay: true,
	    margin:20,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:false,
	    dots: false,
		autoplaySpeed:3000,
	    autoplayHoverPause: false,
	    items: 2,
        
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:1
	      },
	      1000:{
	        items:1
	      }
	    }  
    });
 
    $("#owl-demo").owlCarousel({
        loop:true,
	    autoplay: true,
	    margin:20,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:true,
	    dots: false,
	    autoplayHoverPause: false,
	    items: 5,
        
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:2
	      },
	      1000:{
	        items:5
	      }
	    }  
    });

    $("#owl-course").owlCarousel({
        loop:true,
	    autoplay: false,
	    margin:20,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:true,
	    dots: false,
	    autoplayHoverPause: false,
	    items: 4,
        
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:3
	      },
	      1000:{
	        items:4
	      }
	    }  
    });

	$("#owl-indemand").owlCarousel({
        loop:true,
	    autoplay: false,
	    margin:20,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:true,
	    dots: false,
	    autoplayHoverPause: false,
	    items: 4,
        
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:3
	      },
	      1000:{
	        items:4
	      }
	    }  
    });

	$("#owl-bootcamp").owlCarousel({
        loop:true,
	    autoplay: false,
	    margin:20,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:true,
	    dots: false,
	    autoplayHoverPause: false,
	    items: 4,
        
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:3
	      },
	      1000:{
	        items:4
	      }
	    }  
    });

	$("#owl-crashcourse").owlCarousel({
        loop:true,
	    autoplay: false,
	    margin:20,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:true,
	    dots: false,
	    autoplayHoverPause: false,
	    items: 4,
        
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:3
	      },
	      1000:{
	        items:4
	      }
	    }  
    });

	$("#owl-diploma").owlCarousel({
        loop:true,
	    autoplay: false,
	    margin:20,
	    animateOut: 'fadeOut',
	    animateIn: 'fadeIn',
	    nav:true,
	    dots: false,
	    autoplayHoverPause: false,
	    items: 4,
        
	    responsive:{
	      0:{
	        items:1
	      },
	      600:{
	        items:3
	      },
	      1000:{
	        items:4
	      }
	    }  
    });
   
  });