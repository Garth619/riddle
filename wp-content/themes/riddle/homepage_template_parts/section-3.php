<section id="section_three">
	
	<div class="sec_three_inner">
		
		<h1>
			<span class="top_line"><?php the_field( 'h1_header_top_line' ); ?></span>
			<span class="bottom_line"><?php the_field( 'h1_header_bottom_line' ); ?></span>
		</h1>
		
		<div class="sec_three_top_content">
			
			<div class="sec_three_top_content_inner">
			
			<div class="top_content_left content">
				
				<?php the_field( 'section_three_content_one' ); ?>
				
			</div><!-- top_content_left -->
			
			<div class="top_content_right">
				
			<div class="first_image">
				
				<a class="consult_button" href="#consultation">
			
					<div class="consult_left"><?php the_field( 'consultation_button_verbiage_sec_three' ); ?></div><!-- consult_left -->
			
					<div class="consult_right">
				
						<?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?>
				
					</div><!-- consult_right -->
			
				</a><!-- consult_button -->
				
				
				
				
			</div><!-- first_image -->
			
			<a class="free_bar" href="#consultation">
		
					<span class="free_mobile_title"><?php the_field( 'mobile_button_verbiage_sec_three' ); ?></span><!-- free_mobile_title -->
		
					<span class="arrow">
		
						<?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?>
		
					</span><!-- arrow -->
		
				</a><!-- free_bar -->
			
			<img class="second_image" src="<?php bloginfo('template_directory');?>/images/second_image.jpg"/><!-- second_image -->
				
			</div><!-- top_content_right -->
			
			</div><!-- sec_three_top_content_inner -->
			
		</div><!-- sec_three_top_content -->
		
		<div class="sec_three_bottom_content">
			
			<div class="bottom_content_left">
				
				
				<div class="bottom_content_video">
					
					<img class="video_banner" src="<?php bloginfo('template_directory');?>/images/content1_img_03_desktop.jpg"/>
					
					
					
					
					<div class="sec_three_play wistia_embed wistia_async_<?php the_field( 'wistia_video_id_section_three' ); ?> popover=true popoverContent=html"></div><!-- sec_three_play -->
					
					
					
					<div class="stars">
						
						<?php echo file_get_contents("wp-content/themes/riddle/images/new_star.svg"); ?>
						
						<?php echo file_get_contents("wp-content/themes/riddle/images/new_star.svg"); ?>
						
						<?php echo file_get_contents("wp-content/themes/riddle/images/new_star.svg"); ?>
						
						<?php echo file_get_contents("wp-content/themes/riddle/images/new_star.svg"); ?>
						
						<?php echo file_get_contents("wp-content/themes/riddle/images/new_star.svg"); ?>
						
					</div><!-- stars -->
					
					<span class="sec_three_test_quote"><?php the_field( 'section_three_testimonial_quote' ); ?></span><!-- sec_three_test_quote -->
					
					<span class="sec_three_test_content"><?php the_field( 'section_three_testimonial_content' ); ?></span><!-- sec_three_test_content -->
					
					<span class="sec_three_test_name"><?php the_field( 'section_three_testimonial_name' ); ?></span><!-- sec_three_test_name -->
					
					<a class="consult_button desktop" href="<?php the_field( 'testimonial_page_link_sec_three' ); ?>">
			
					<div class="consult_left"><?php the_field( 'testimonials_button_verbiage_sec_three' ); ?></div><!-- consult_left -->
					
					<div class="consult_right">
				
						<?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?>
				
					</div><!-- consult_right -->
			
				</a><!-- consult_button -->
				
				<a class="consult_button mobile" href="<?php the_field( 'testimonial_page_link_sec_three' ); ?>">
			
					<div class="consult_left"><?php the_field( 'testimonials_mobile_button_verbiage_sec_three' ); ?></div><!-- consult_left -->
					
					<div class="consult_right">
				
						<?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?>
				
					</div><!-- consult_right -->
			
				</a><!-- consult_button -->
				
				<span class="sec_three_disclaimer"><?php the_field( 'disclaimer_sec_three' ); ?></span><!-- sec_three_disclaimer -->
					
				</div><!-- bottom_content_video -->
				
				
			</div><!-- bottom_content_left -->
			
			<div class="bottom_content_right content">
				
				
				<div class="columns">
					
					<?php the_field( 'section_three_content_two' ); ?>
										
				</div><!-- columns -->
				
				<?php the_field( 'section_three_content_three' ); ?>
				
				
			</div><!-- bottom_content_right -->
			
			
			
		</div><!-- sec_three_bottom_content -->
		
	</div><!-- sec_three_inner -->
	
</section>