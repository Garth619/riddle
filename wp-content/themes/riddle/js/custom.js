jQuery(document).ready(function($){
	
	
	$('nav ul.menu > li.menu-item-has-children a').on('click', function(e) {
		
			$(this).parents('li.menu-item-has-children').toggleClass('open');
			
			$(this).next('ul.sub-menu').toggleClass('open');
	  
	});
	
		
	
  
}); // document ready