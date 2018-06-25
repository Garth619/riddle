<section id="section_one">
	
	<div class="inner_sec_one">
		
		<div class="sec_one_play">
			
			
			
		</div><!-- sec_one_play -->
				
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
		
		
		<div class="sec_one_accolades_wrapper">
			
			
			<div class="sec_one_slideshow">
				
				<div class="sec_one_single_slide one">
					
					<img src="<?php bloginfo('template_directory');?>/images/hero_awards_01.png"/>
					
				</div><!-- sec_one_single_slide -->
				
				<div class="sec_one_single_slide two">
					
					<img src="<?php bloginfo('template_directory');?>/images/hero_awards_02.png"/>
					
				</div><!-- sec_one_single_slide -->
				
				<div class="sec_one_single_slide three">
					
					<img src="<?php bloginfo('template_directory');?>/images/hero_awards_03.png"/>
					
				</div><!-- sec_one_single_slide -->
				
			</div><!-- sec_one_slideshow -->
			
			
		</div><!-- sec_one_accolades_wrapper -->
		
		
	</div><!-- inner_sec_one -->
	
	
</section><!-- section_one -->

	<a class="free_bar" href="#consultation">
		
		<span class="free_mobile_title"><?php the_field( 'mobile_consultation_verbiage_sec_one' ); ?></span><!-- free_mobile_title -->
		
		<span class="arrow">
		
		<?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?>
		
		</span><!-- arrow -->
		
	
	</a><!-- free_bar -->