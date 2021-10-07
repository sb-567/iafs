
$(document).ready(function(){
	  
		/*
		Mean Menu Responsive
		============================*/		
        jQuery('nav#main-menu').meanmenu();		
 		
		$('.slidebanner').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    dots:false,
    nav:true,
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
		$('.testimonial').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    nav:false,
    // navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    dots:true,
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
		$('.glogo').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    nav:false,
            dots:false,
    		navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
    responsive:{
        0:{
            items:2
        },
        600:{
            items:4
        },
        1000:{
            items:5,
            nav:false,
            dots:false,
    		navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        }
    }
});

		$('.mnc').owlCarousel({
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:3000,
    
    // dots:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:4
        },
        1000:{
            items:6,
            nav:false,
            dots:false,
    		navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],

        }
    }
});
		  
		  
		/*
		Magnific Popup
		============================*/ 		
        $('.gallery-photo').magnificPopup({
            type: 'image',
            gallery: {
              enabled: true
            },
        });		  		  
		/*
		scrollUp
		============================*/	
		$.scrollUp({
			scrollText: '<i class="fa fa-angle-up"></i>',
			easingType: 'linear',
			scrollSpeed: 900,
			animation: 'fade'
		});	 				
		
    
    	
	});	
    

    


    

  