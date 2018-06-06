<div class="sidebar_wrapper">
	
	
		<div class="sidebar_form">
			
			
			<?php echo file_get_contents("wp-content/themes/riddle/images/new_diamonds.svg"); ?>
			
			
			<div class="form_titles">
				
				<span class="large_header">Free Consultation</span><!-- large_header -->
				
				<span class="small_header">No Obligation or Cost to You</span><!-- small_header -->
				
			</div><!-- form_titles -->
			
			<?php gravity_form(2, false, false, false, '', true, 12); ?>
			
			<span class="required">All Fields Required</span><!-- required -->
			
			
		</div><!-- sidebar_form -->
		
		
		<div class="sidebar_list_wrapper">
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'pa_menu' ) ); ?>
			
			
			
		</div><!-- sidebar_list_wrapper -->
	
	
	</div><!-- sidebar_wrapper -->