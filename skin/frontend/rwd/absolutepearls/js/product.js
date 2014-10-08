jQuery(document).ready(function($) {



    var upsellSlider = $j('.box-up-sell ol').carouFredSel({
		items : {
	        visible     : {
	            min    : 1,
	            max    : 2,
	        },
	        width       : 200
	    },
        infinite: true,        
        responsive: true,
        width: 330,
        height : 'auto',
        scroll : {
            items           : 1,
            duration        : 1000,                         
            pauseOnHover    : true,
        },
        next: {
	        button: ".up-next-link"
        },
        previous: {
	        button: ".up-prev-link"
        }           
    });
    
    var realtedSlider = $j('.block-related ol').carouFredSel({
		items : {
	        visible     : {
	            min    : 1,
	            max    : 2,
	        },
	        width       : 200
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
	        button: ".rel-next-link"
        },
        previous: {
	        button: ".rel-prev-link"
        }               
    });
    
    $j('#product-image-main').elevateZoom({
    	zoomType: "inner",
		gallery:'more-views', 
		cursor: 'pointer',
		galleryActiveClass: 'active', 
		imageCrossfade: true,
		zoomWindowWidth:510,
   }); 

   var groupedProduct = $j('.grouped-items-table-wrapper').length;
	if(groupedProduct){
		$j('body').addClass('grouped-product');
	}


});