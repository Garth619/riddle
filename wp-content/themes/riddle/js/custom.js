jQuery(document).ready(function($){
	
	
	$('nav ul.menu > li.menu-item-has-children a').on('click', function(e) {
		
			$(this).parents('li.menu-item-has-children').toggleClass('open');
			
			$(this).next('ul.sub-menu').toggleClass('open');
	  
	});
	
	
	
	// Menu
	
	
	
	$('.menu_wrapper').on('click', function(e) {
		
		$('nav').slideToggle();
	  
	});
	
	
	
	$('.close').on('click', function(e) {
		
		$('nav').slideUp();
	  
	});
	
		
	
  
}); // document ready