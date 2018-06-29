<?php
	
	/* Template Name: Contact */
	
	get_header(); ?>


<div id="main_trigger" class="main">


	
	<div class="contact_wrapper">
		
		
		<div class="contact_left content">
			
			<h1 class="contact_title"><?php the_field( 'first_word' ); ?> <span><?php the_field( 'second_word' ); ?></span></h1><!-- contact_title -->
			
			<div class="left_content">
				
				<?php the_field( 'contact_us_content' ); ?>
			
			</div><!-- left_content -->

			
		</div><!-- contact_left -->
		
		<div class="contact_right">
			
			<?php $contact_us_image = get_field( 'contact_us_image' ); ?>
			
		
			
				<img src="<?php echo $contact_us_image['url']; ?>" alt="<?php echo $contact_us_image['alt']; ?>" />

			
			
		</div><!-- contact_right -->
		
		
	</div><!-- contact_wrapper -->
	
	
	<div class="contact_list_wrapper">
		
		
		
		<?php if(get_field('city_locations')): ?>
		 
			<?php while(has_sub_field('city_locations')): ?>
			
			
				<div class="single_contact_list">
			
					<div class="iframe_map">
				
						<?php the_sub_field( 'iframe' ); ?>
				
					</div><!-- iframe_map -->
			
					<div class="contact_info">
				
					<div class="city_title_wrapper">
					
						<span class="city_title"><?php the_sub_field( 'city_title' ); ?></span><!-- city_title -->
					
						<a class="city_tel" href="tel:<?php the_sub_field( 'city_phone_number' ); ?>"><?php the_sub_field( 'city_phone_number' ); ?></a>
					
					
					</div><!-- city_title_wrapper -->
				
					<div class="city_address_wrapper">
					
						<span class="city_address"><?php the_sub_field( 'city_address' ); ?></span><!-- city_address -->

						<a class="city_directions" href="<?php the_sub_field( 'get_directions_google_url' ); ?>" target="_blank"><?php the_sub_field( 'get_directions_verbiage' ); ?></a><!-- city_directions -->
					
					</div><!-- city_address_wrapper -->
	
				</div><!-- contact_info -->
			 
			</div><!-- single_contact_list -->
		 
				
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		
	
	</div><!-- contact_list_wrapper -->
	
	

</div><!-- main -->



<?php get_footer(); ?>





	