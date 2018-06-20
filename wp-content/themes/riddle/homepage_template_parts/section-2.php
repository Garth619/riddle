<section id="section_two">
	
	<div class="sec_two_title_wrapper">
		
		<span class="sec_two_title"><?php the_field( 'section_two_title' ); ?></span><!-- sec_two_title -->
		
	</div><!-- sec_two_title_wrapper -->
	
	
	<div class="inner_sec_two">
		
	
	
	<div class="sec_two_slider">
		
			
			<?php if(get_field('selling_points_sec_two')): ?>
			 
				<?php while(has_sub_field('selling_points_sec_two')): ?>
				
				
					<div class="sec_two_single_slide <?php the_sub_field( 'slide_class' ); ?>">
				
				
						<div class="sp_wrapper">
					
							
							<?php $sectwosvg = get_sub_field( 'svg' );?>
							
							<?php echo file_get_contents("wp-content/themes/riddle/images/" . $sectwosvg . ""); ?>
					
							<span class="slide_title"><?php the_sub_field( 'selling_points_verbiage' ); ?></span><!-- slide_title -->
				
							<a class="view_button" href="<?php the_sub_field( 'slider_page_links' ); ?>"><?php the_sub_field( 'button_verbiage' ); ?></a><!-- view_button -->
							
							<div class="tool_tip">
								
								<div class="tool_tip_inner">
								
									<span>Prior results do not guarantee a similar outcome, and they should not be construed to constitute a promise or guarantee of a particular result in any particular case.</span>
									
									<div class="tri">
										
										<div class="tri_inner"></div><!-- tri_inner -->
										
									</div><!-- #tri -->
								
								</div><!-- tool_tip_inner -->
								
							</div><!-- tool_tip -->
					
						</div><!-- sp_wrapper -->
				
				
					</div><!-- sec_two_single_slide -->

			 
					
			    
				<?php endwhile; ?>
			 
			<?php endif; ?>
			
			

			
					
		</div><!-- sec_two_slider -->

		
		
	</div><!-- inner_sec_two -->
	
	
</section><!-- section_two -->