<section id="section_four" class="lazy" data-src="<?php the_field( 'section_four_background_image' ); ?>">
	
	<div class="sec_four_inner">
		
		
		<?php if(get_field('case_results_sec_four')): ?>
		 
			<?php while(has_sub_field('case_results_sec_four')): ?>
		 
		 
				<div class="sec_four_single">
			
					<div class="sec_four_single_inner">
			
					<div class="cr_diamond"><?php echo file_get_contents("wp-content/themes/riddle/images/new_diamonds.svg"); ?></div><!-- cr_diamond -->
			
					<div class="cr_svg"><?php echo file_get_contents("wp-content/themes/riddle/images/new_cr.svg"); ?></div><!-- cr_svg -->
			
					<span class="cr_title"><?php the_sub_field( 'case_type' ); ?></span><!-- cr_title -->
			
		
					<span class="cr_amount"><?php the_sub_field( 'case_amount' ); ?></span><!-- cr_amount -->
			
			
					<div class="accent">
					
						<span class="line"></span><!-- line -->
				
						<div class="accent_diamond">
					
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_crdiamond.svg"); ?>
					
						</div><!-- accent_diamond -->
				
					</div><!-- accent -->
			
					<span class="cr_description"><?php the_sub_field( 'case_description' ); ?></span><!-- cr_description -->
			
					<a class="consult_button" href="<?php the_sub_field( 'case_results_page_link' ); ?>">
			
						<div class="consult_left">
							
							<span><?php the_sub_field( 'case_results_button_verbiage' ); ?></span>
						
						</div><!-- consult_left -->
			
						<div class="consult_right">
				
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?>
				
						</div><!-- consult_right -->
			
					</a><!-- consult_button -->
		
				</div><!-- sec_four_single_inner -->
			
		</div><!-- sec_four_single -->
				
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		


	</div><!-- sec_four_inner -->
	
	<a class="free_bar" href="<?php the_field( 'mobile_view_all_button_link' ); ?>">
		
		<span class="free_mobile_title"><?php the_field( 'mobile_view_all_verbiage_sec_four' ); ?></span><!-- free_mobile_title -->
		
		<span class="arrow">
		
		<?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?>
		
		</span><!-- arrow -->
		
	
	</a><!-- free_bar -->
	
</section><!-- section_four -->

<div class="sec_four_disclaimer">
		
		<span><?php the_field( 'disclaimer_sec_four' ); ?></span>
		
	</div><!-- sec_four_disclaimer -->