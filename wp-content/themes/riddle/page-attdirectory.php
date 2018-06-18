<?php
	
	/* Template Name: Attorney Directory */
	
	get_header(); ?>


<div id="main_trigger" class="main">

	<div class="interior_banner no_banner">
		
		<h1 class="inetrior_banner_header">Attorney <span class="blue">Overview</span></h1><!-- inetrior_banner_header -->
		
	</div><!-- interior_banner -->
	
	
	<div class="attorney_directory">
		
		
		<?php $posts = get_field('attorney_directory');
		
		if( $posts ): ?>
		   
		    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
		        <?php setup_postdata($post); ?>
		        
		        
		        <?php if(get_field( 'attorney_image' )):?>
		        
		        
		        	<div class="single_att">
			
								<a class="" href="<?php the_permalink();?>">
			
									<div class="single_att_image_wrapper">
				
										<?php $attorney_image = get_field( 'attorney_image' ); ?>
										
										<img src="<?php echo $attorney_image['url']; ?>" alt="<?php echo $attorney_image['alt']; ?>" />
										
										<div class="singe_att_ovelay">
						
											<span class="view">View <span>Profile</span></span><!-- singe_att_ovelay -->
						
										</div><!-- singe_att_ovelay -->
				
									</div><!-- single_att_image_wrapper -->
				
									<span class="att_name"><?php the_title();?></span><!-- att_name -->
				
									<span class="att_title"><?php the_field( 'attorney_position' ); ?></span><!-- att_title -->
			
							</a>
			
						</div><!-- single_att -->
						
						
						<?php else:?>
						
						
						
						<div class="single_att coming_soon">
			
							<a class="" href="<?php the_permalink();?>">
			
								<div class="single_att_image_wrapper">
				
									<img src="<?php bloginfo('template_directory');?>/images/placeholder.png"/>
					
									<div class="singe_att_ovelay">
						
										<span class="no_photo">Photo Coming Soon</span><!-- no_photo -->
						
									</div><!-- singe_att_ovelay -->
				
								</div><!-- single_att_image_wrapper -->
				
								<span class="att_name"><?php the_title();?></span><!-- att_name -->
				
								<span class="att_title"><?php the_field( 'attorney_position' ); ?></span><!-- att_title -->
			
							</a>
			
						</div><!-- single_att -->
					

		        
		        <?php endif;?>
		        
		        
		    <?php endforeach; ?>
		   
		   
		   
		   
		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>		
				
	</div><!-- attorney_directory -->
	
</div><!-- main -->



<?php get_footer(); ?>





	