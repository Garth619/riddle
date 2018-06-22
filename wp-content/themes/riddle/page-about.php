<?php 

/* Template Name: About */

get_header(); ?>


<div id="main_trigger" class="main">
	
	
	<div class="about_wrapper">
		
		
		<h1>
			
			<span class="about_topline"><?php the_field( 'page_title_one' ); ?> <span><?php the_field( 'page_title_two' ); ?></span></span><!-- about_topline -->
			
			<span class="about_bottomline"><?php the_field( 'page_subtitle' ); ?></span><!-- about_bottomline -->
			
		</h1>
		
		
	</div><!-- about_wrapper -->
	
	<section id="about_section">
		
		<div class="about_img">
		
			<img class="img_desktop" src="<?php bloginfo('template_directory');?>/images/intl_about_img_01_desktop.jpg"/>
			
			<img class="img_tablet" src="<?php bloginfo('template_directory');?>/images/intl_about_img_01_tablet.jpg"/>
		
		</div><!-- about_img -->
		
		<div class="about_content_one content">
			
			<span class="intro"><?php the_field( 'about_intro_one' ); ?></span><!-- intro -->
			
			<?php the_field( 'about_image_content' ); ?>
				
			</ul>

			
		</div><!-- about_content_one -->
		
		</section><!-- about_section -->

		
		<section id="about_section_two_trigger" class="about_section_two">
			
			<div class="about_content_two content">
				
				<?php the_field( 'about_content_two' ); ?>
				
			</div><!-- about_content_two -->
			
			<div class="about_img_two">
				
				
				<img class="img_one desktop" src="<?php bloginfo('template_directory');?>/images/intl_about_img_02_desktop.jpg"/>
				
				<img class="img_one tablet" src="<?php bloginfo('template_directory');?>/images/intl_about_content_img_01_tablet.jpg"/>
				
				<img class="img_two" src="<?php bloginfo('template_directory');?>/images/intl_about_img_03_desktop.jpg"/>
				
				<div class="img_content content">
					
					<?php the_field( 'about_content_two_second_column' ); ?>
					
				</div><!-- img_content -->
				
			</div><!-- about_img_two -->
			
			
		</section><!-- about_section_two -->
		
		<section id="about_section_three">
			
			<div class="about_image_three">
				
				
				<img src="<?php bloginfo('template_directory');?>/images/intl_about_img_04_desktop.jpg"/>
				
				<div class="about_imge_three_side_content">
					
					<span class="side_title"><?php the_field( 'coconut_riddle_title' ); ?></span><!-- title -->
					
					<span class="side_content"><?php the_field( 'coconut_riddle_excerpt' ); ?></span><!-- side_content -->
					
					
					<a class="view_story" href="<?php the_field( 'coconut_button_link' ); ?>"><?php the_field( 'coconut_button_verbiage' ); ?></a>
					
				</div><!-- about_imge_three_side_content -->
				
			</div><!-- about_image_three -->
			
			<div class="about_content_three content">
				
				<?php the_field( 'about_content_three' ); ?>

			</div><!-- about_content_three -->
			
		</section><!-- about_section_three -->
		
		<section id="about_section_four">
			
			
			<span class="request_title"><?php the_field( 'about_request_title' ); ?></span><!-- request_title -->
			
			<span class="request_description"><?php the_field( 'about_request_content' ); ?></span><!-- request_description -->
			
			
			<a class="consult_button desktop" href="#consultation">
			
				<div class="consult_left">
					
					<span>Click For a Free Consultation</span>
					
				</div><!-- consult_left -->
			
				<div class="consult_right">
				
					<?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?>
				
				</div><!-- consult_right -->
			
			</a><!-- consult_button -->
			
			<a class="consult_button mobile" href="#consultation">
			
				<div class="consult_left">
					
					<span>Free Consultation</span>
				
				</div><!-- consult_left -->
			
				<div class="consult_right">
				
					<?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?>
				
				</div><!-- consult_right -->
			
			</a><!-- consult_button -->
			
			
		</section><!-- about_section_four -->
	
</div><!-- main -->



<?php get_footer(); ?>





	