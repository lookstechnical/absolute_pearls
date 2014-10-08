

jQuery(document).ready(function($) {


        var featuredProductSlider = $j('.featured_products ul').carouFredSel({
		items : {
	        visible     : {
	            min    : 2,
	            max    : 5,
	        },
	        width       : 300
	    },
	    infinite: true,        
        responsive: true,
        width: 330,
        height : 'auto',
        scroll : {
            items           : 1,
            duration        : 1000,                         
            pauseOnHover    : true
        },
        next: {
	        button: ".featured_products .next-link"
        },
        previous: {
	        button: ".featured_products .prev-link"
        }               
    });
    
    
    var homeslider = $j('.banner .promo-collection').carouFredSel({
        items : {
	        visible     : {
	            min    : 1,
	            max    : 1,
	        },
	        width       : 200
	    },
        infinite: true,        
        responsive: true,
        height : 'auto',
        scroll : {
            items           : 1,
            duration        : 1000,                         
            pauseOnHover    : true
        },
        next: {
	        button: ".next-link"
        },
        previous: {
	        button: ".prev-link"
        }               
    });


    
    var instagramslider = $j('.instagram-slider ul').carouFredSel({
        items : {
	        visible     : {
	            min    : 1,
	            max    : 5,
	        },
	        width       : 200
	    },
        infinite: true,        
        responsive: true,
        height : 'auto',
        scroll : {
            items           : 1,
            duration        : 1000,                         
            pauseOnHover    : true
        },
        next: {
	        button: ".inst-next"
        },
        previous: {
	        button: ".inst-previous"
        }               
     });



});