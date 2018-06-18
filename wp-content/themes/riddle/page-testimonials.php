<?php
	
	/* Template Name: Testimonials */
	
	get_header(); ?>


<div id="main_trigger" class="main">

	<div class="interior_banner no_banner">
		
		<h1 class="inetrior_banner_header"><?php the_title();?></h1><!-- inetrior_banner_header -->
		
	</div><!-- interior_banner -->
	
	
	<div class="testimonials_page">
		
		
		<div class="testimonial_col">
			
			
			<?php if(get_field('single_testimonial')): ?>
			 
				<?php while(has_sub_field('single_testimonial')): ?>
				
				
					<div class="single_testimonial">
				
						<div class="stars">
				
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_star.svg"); ?>
				
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_star.svg"); ?>
				
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_star.svg"); ?>
				
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_star.svg"); ?>
				
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_star.svg"); ?>
				
						</div><!-- stars -->
				
						<span class="testi_blockquote"><?php the_sub_field( 'blockquote' ); ?></span><!-- testi_blockquote -->
			
						<span class="testi_content"><?php the_sub_field( 'testimonial_main_content' ); ?>.</span><!-- testi_content -->
			
						<span class="testi_name"><?php the_sub_field( 'name' ); ?></span><!-- testi_name -->
				
					</div><!-- single_testimonial -->
			 
				
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			

			
		</div><!-- testimonial_col -->
		
		
		<div class="testimonial_col">
			
			
			
				
			<?php if(get_field('single_testimonial_col_two')): ?>
			 
				<?php while(has_sub_field('single_testimonial_col_two')): ?>
				
				
					<div class="single_testimonial">
				
						<div class="stars">
				
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_star.svg"); ?>
				
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_star.svg"); ?>
				
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_star.svg"); ?>
				
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_star.svg"); ?>
				
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_star.svg"); ?>
				
						</div><!-- stars -->
				
						<span class="testi_blockquote"><?php the_sub_field( 'blockquote' ); ?></span><!-- testi_blockquote -->
			
						<span class="testi_content"><?php the_sub_field( 'testimonial_main_content' ); ?>.</span><!-- testi_content -->
			
						<span class="testi_name"><?php the_sub_field( 'name' ); ?></span><!-- testi_name -->
				
					</div><!-- single_testimonial -->
			 
				
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
		
			
			
		</div><!-- testimonial_col -->
		
		
	</div><!-- testimonials_page -->
	
	
	
</div><!-- main -->



<?php get_footer(); ?>





	