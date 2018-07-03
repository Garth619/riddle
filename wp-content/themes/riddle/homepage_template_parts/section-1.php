<section id="section_one">
	
	<div class="inner_sec_one">
		
		<div class="sec_one_play wistia_embed wistia_async_<?php the_field( 'wistia_video_id_sec_one' ); ?> popover=true popoverContent=html">
			
			
			
		</div><!-- sec_one_play -->
				
		<span class="sec_one_title"><?php the_field( 'intro_header' ); ?></span><!-- sec_one_title -->
		
		<a class="consult_button desktop" href="#consultation">
			
			<div class="consult_left">
				
				<span><?php the_field( 'consultation_button_verbiage_sec_one' ); ?></span>
				
			</div><!-- consult_left -->
			
			<div class="consult_right">
				
				<?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?>
				
			</div><!-- consult_right -->
			
		</a><!-- consult_button -->
		
			<a class="consult_button tablet" href="#consultation">
			
			<div class="consult_left">
				
				<span>Tap for a free consultation</span>
				
			</div><!-- consult_left -->
			
			<div class="consult_right">
				
				<?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?>
				
			</div><!-- consult_right -->
			
		</a><!-- consult_button -->
		
		<div class="mouse_wrapper">
			
			
			
		</div><!-- mouse_wrapper -->
		
		
		<div class="sec_one_accolades_wrapper">
			
			<div class="sec_one_back sec_one_button">
					
					<span>
					
						<?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?>
					
					</span>
					
				</div><!-- sec_one_back -->
			
			
			<div class="sec_one_slideshow">
				
				<?php if(get_field('section_one_awards')): ?>
				 
					<?php while(has_sub_field('section_one_awards')): ?>
					
					
						<div class="sec_one_single_slide <?php the_sub_field( 'section_one_slide_class' ); ?>">
					
							<?php $section_one_image = get_sub_field( 'section_one_image' ); ?>
		
							<img src="<?php echo $section_one_image['url']; ?>" alt="<?php echo $section_one_image['alt']; ?>" />
		
						</div><!-- sec_one_single_slide -->
				 
						
				   <?php endwhile; ?>
				 
				<?php endif; ?>
			
				
				
				
			</div><!-- sec_one_slideshow -->
			
			<div class="sec_one_next sec_one_button">
					
					<span>
					
						<?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?>
					
					</span>
					
				</div><!-- sec_one_next -->
			
			
		</div><!-- sec_one_accolades_wrapper -->
		
		
	</div><!-- inner_sec_one -->
	
	
</section><!-- section_one -->

	<a class="free_bar" href="#consultation">
		
		<span class="free_mobile_title">Tap For a Free Consultation</span><!-- free_mobile_title -->
		
		<span class="arrow">
		
		<?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?>
		
		</span><!-- arrow -->
		
	
	</a><!-- free_bar -->