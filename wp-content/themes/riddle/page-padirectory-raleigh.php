<?php
	
	/* Template Name: Raleight: PA Directory */
	
	get_header(); ?>


<div id="main_trigger" class="main">

	<div class="interior_banner">
		
		<h1 class="inetrior_banner_header"><?php the_field( 'first_word' ); ?> <span><?php the_field( 'second_word' ); ?></span></h1><!-- inetrior_banner_header -->
		
	</div><!-- interior_banner -->
	
	<div class="pa_directory">
		
		
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'raleigh_menu' ) ); ?>	
		
	</div><!-- pa_directory -->

</div><!-- main -->



<?php get_footer(); ?>





	
