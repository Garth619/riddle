<section id="section_one">
	
	<div class="inner_sec_one">
				
		<span class="sec_one_title"><?php the_field( 'intro_header' ); ?></span><!-- sec_one_title -->
		
		<a class="consult_button" href="#consultation">
			
			<div class="consult_left">
				
				<span><?php the_field( 'consultation_button_verbiage_sec_one' ); ?></span>
				
			</div><!-- consult_left -->
			
			<div class="consult_right">
				
				<?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?>
				
			</div><!-- consult_right -->
			
		</a><!-- consult_button -->
		
		<div class="mouse_wrapper">
			
			
			
		</div><!-- mouse_wrapper -->
		
	</div><!-- inner_sec_one -->
	
	
</section><!-- section_one -->

	<a class="free_bar" href="#consultation">
		
		<span class="free_mobile_title"><?php the_field( 'mobile_consultation_verbiage_sec_one' ); ?></span><!-- free_mobile_title -->
		
		<span class="arrow">
		
		<?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?>
		
		</span><!-- arrow -->
		
	
	</a><!-- free_bar -->