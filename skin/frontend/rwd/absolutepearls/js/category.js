

jQuery(document).ready(function($) {


    var featuredcatProductSlider = $j('.featured_category_products ul').carouFredSel({
        items : {
	        visible     : {
	            min    : 1,
	            max    : 3,
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

	enquire.register('(min-width: 0em) and  (max-width: 40em)', {
    
        match: function () {
             var catheader =  $('.category-header').html(); 
             $('.category-header').hide();
             $('.category-image').hide();
             $('<div class="category-header">'+catheader+'</div>').insertAfter('.category-image');
              
        },
        unmatch: function () {
            
        }
    });

	 enquire.register('(min-width: 40.1em) and  (max-width: 64em)', {
        match: function () {
        	var headerinplace = $('.col-left').find('.category-header').length;
        	if(headerinplace) {
	        	$('.category-image').show();
        	} else{
	        	var catheader =  $('.category-header').html(); 
                $('.category-header').hide();
                $('<div class="category-header">'+catheader+'</div>').insertAfter('.category-image');
        	}
        },
        unmatch: function () {
            $j('.mobile-acordion').find('ul').show(); 
        }
    });
    
	enquire.register('(min-width: 64.1em)', {
    
        match: function () {
        	var headerinplace = $('.col-left').find('.category-header').length;
        	if(headerinplace) {
	        	$('.category-image').show();
	        	$('.col-left').find('.category-header').remove();
        	} 
        	
        	$('.category-header').show();
             $('.category-image').show();
        },
        unmatch: function () {

        }
    });



});