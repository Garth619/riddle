<?php
	
	/* Template Name: Att Bio */
	
	get_header(); ?>


<div class="main">
	
	<div class="profile_header_wrapper">
		
		
		<div class="profile_spacer"></div><!-- profile_spacer -->
		
		<div class="profile_header">
			
			<h1 class="attorney_title"><?php the_field( 'attorney_first_name' ); ?> <span class="last_name"><?php the_field( 'attorney_last_name' ); ?></span></h1><!-- attorney_title -->
			
			<span class="att_position"><?php the_field( 'attorney_position' ); ?></span><!-- att_position -->
			
		</div><!-- profile_header -->
		
		
	</div><!-- profile_header_wrapper -->
	
	<div class="profile_wrapper content">
		
		
		<div class="profile_left">
			
			
			<?php if(get_field( 'attorney_image' )) : ?>
			
			<?php $attorney_image = get_field( 'attorney_image' ); ?>

			<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
			
			<?php else:?>
			
			<div class="bio_placeholder">
				
				<div class="bio_overlay">
					
					<span>Photo Coming Soon</span>
					
				</div><!-- bio_overlay -->
			
				<img src="<?php bloginfo('template_directory');?>/images/placeholder.png"/>
			
			</div><!-- bio_placeholder -->
			
			<?php endif;?>
			
			
			
			<div class="accolades_wrapper">
				
				
				<?php if(get_field('attorney_accolades')): ?>
				 
					<?php while(has_sub_field('attorney_accolades')): ?>
						
						<div class="accolades_list">
							
							<span class="accolades_title"><?php the_sub_field( 'accolade_header' ); ?></span><!-- accolades_title -->
				 
							<?php if(get_sub_field('accolade_list')): ?>
						
								<ul>
						 
								<?php while(has_sub_field('accolade_list')): ?>
						 
									<li><?php the_sub_field( 'single_bullet' ); ?></li>
						    
								<?php endwhile; ?>
							
								</ul>
						 
								<?php endif; ?>
						
							</div><!-- accolades_list -->
				    
						<?php endwhile; ?>
				 
					<?php endif; ?>
				
								
			</div><!-- accolades_wrapper -->
			
		</div><!-- profile_left -->
	
		<div class="profile_right">
			
			<div class="att_profile_content">
			
			<?php get_template_part( 'loop', 'page' );?>

			</div><!-- profile_content -->
			
			
		</div><!-- profile_right -->
		
		
	</div><!-- profile_wrapper -->
	
	
</div><!-- main -->

<?php get_footer(); ?>



	