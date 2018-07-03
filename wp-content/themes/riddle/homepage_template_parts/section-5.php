<section id="section_five">
	
	<span class="large_header"><?php the_field( 'section_five_title' ); ?></span>
		
		<div id="sec_five_inner_trigger" class="sec_five_inner">
		
		<div class="sec_five_left">
			
			<div class="coco_wrapper">
				
				
				<?php $coconut_picture = get_field( 'coconut_picture' ); ?>

				<img class="coco desktop lazy" data-src="<?php echo $coconut_picture['url']; ?>" alt="<?php echo $coconut_picture['alt']; ?>"/>
				
				<div class="coco_content_wrapper">
				
					<span class="coco_content"><?php the_field( 'section_five_description' ); ?></span>
					
					<a class="coco_button" href="<?php the_field( 'full_story_page_link' ); ?>"><?php the_field( 'full_story_button_verbiage' ); ?></a><!-- coco_button -->
				
				</div><!-- coco_content -->
				
			</div><!-- coco_content_wrapper -->
			
		</div><!-- sec_five_left -->
		
		<div class="sec_five_right content">
			
			<div class="sec_five_right_inner">
			
				<?php the_field( 'section_five_content' ); ?>
					
			</div><!-- sec_five_right_inner -->
			
			<div class="oragnization_wrapper">
				
				<span class="org_title"><?php the_field( 'organizations_title' ); ?></span><!-- org_title -->
				
				<div class="org_slider_wrapper">
					
					<div class="org_slider">
						
						
						<?php if(get_field('section_five_logos')): ?>
						 
							<?php while(has_sub_field('section_five_logos')): ?>
						 
								<div class="org_single_slide">
									
							
									<?php $logo = get_sub_field( 'logo' ); ?>
		
									<img class="lazy" data-src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" />
		
								</div>
						    
							<?php endwhile; ?>
						 
						<?php endif; ?>
						

						
					</div>
					
					<div class="org_buttons">
						
						<div class="org_back org_button">
							
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?>
							
						</div><!-- org_back -->
						
						<div class="org_next org_button">
							
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?>
							
						</div><!-- org_next -->
						
					</div><!-- org_buttons -->
					
				</div><!-- org_slider_wrapper -->
				
			</div><!-- oragnization_wrapper -->
			
		</div><!-- sec_five_right -->
		
	</div><!-- sec_five_inner -->
	
</section><!-- section_five -->