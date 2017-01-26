jQuery(window).load(function ($) {



var size = 1;
var button = 1;
var button_class = "gallery-header-center-right-links-current";
var normal_size_class = "gallery-content-center-normal";
var full_size_class = "gallery-content-center-full";
var $container = jQuery('.posts-zone');
    
$container.isotope({itemSelector : '.article'});

      
$container.infinitescroll({
    navSelector  : '.wp-pagenavi',    // selector for the paged navigation 
    nextSelector : 'a.nextpostslink',  // selector for the NEXT link (to page 2)
    itemSelector : '.article',     // selector for all items you'll retrieve

    loading: {
	    finishedMsg: 'No existen más artículos',
	    img: 'http://i.imgur.com/qkKy8.gif'
  	}
    },
    // call Isotope as a callback
    function( newElements ) {
  		$container.isotope( 'appended', jQuery( newElements ) ); 
    }
);

/*
function check_button(){
	$('.gallery-header-center-right-links').removeClass(button_class);
	if(button==1){
		$("#filter-all").addClass(button_class);
		$("#gallery-header-center-left-title").html('All Galleries');
	}
	if(button==2){
		$("#filter-studio").addClass(button_class);
		$("#gallery-header-center-left-title").html('Studio Gallery');
	}
	if(button==3){
		$("#filter-landscape").addClass(button_class);
		$("#gallery-header-center-left-title").html('Landscape Gallery');
	}	
}
*/	
function check_size(){
	jQuery(".posts-zone").removeClass(normal_size_class).removeClass(full_size_class);
	if(size==0){
		jQuery(".posts-zone").addClass(normal_size_class); 
		jQuery("#gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23a;"></span>');
		}
	if(size==1){
		jQuery(".posts-zone").addClass(full_size_class); 
		jQuery("#gallery-header-center-left-icon").html('<span class="iconb" data-icon="&#xe23b;"></span>');
		}
	$container.isotope({itemSelector : '.article'});
}


	
jQuery(".btn-filtros").click(function($) { 
	$container.isotope({ filter: '.'+ jQuery(this).data('filter') });
	jQuery('.btn-filtros').removeClass('active');
	jQuery(this).addClass('active');
});
/*
$("#filter-all").click(function() { $container.isotope({ filter: '.all' });  });//button = 1; check_button();
$("#filter-matrimonio").click(function() {  $container.isotope({ filter: '.matrimonio' });  });//button = 2; check_button(); 
$("#filter-retratos").click(function() {  $container.isotope({ filter: '.retratos' });  });//button = 3; check_button(); 
$("#filter-paisajes").click(function() {  $container.isotope({ filter: '.paisajes' });  });//button = 4; check_button(); 
$("#filter-productos").click(function() {  $container.isotope({ filter: '.productos' });  });//button = 5; check_button(); 
*/
jQuery("#gallery-header-center-left-icon").click(function($) { if(size==0){size=1;}else if(size==1){size=0;} check_size(); });


//check_button();
	var i = 1;
	jQuery( window ).scroll(function($) {
		check_size();
	});
});

