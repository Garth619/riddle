<?php
	
	/* Template Name: Video Center */
	
	get_header(); ?>


<div class="main">

	<div class="interior_banner">
		
		<h1 class="inetrior_banner_header"><?php the_field( 'first_word' ); ?> <span><?php the_field( 'second_word' ); ?></span></h1><!-- inetrior_banner_header -->
		
	</div><!-- interior_banner -->
	
	<div class="video_center">
		
		
		<div class="video_intro_content content">
			
			
			<h2>Lorem ipsum dolor sit amet, consectetur adipisicing el</h2>
			
			<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
			
			
		</div><!-- video_intro_content -->
		
		
		<?php if(get_field('wistia_videos')): ?>
		 
			<?php while(has_sub_field('wistia_videos')): ?>
			
			
				<div class="single_video">
			
					<div class="play">
				
						<?php echo file_get_contents("wp-content/themes/riddle/images/new_play.svg"); ?>
				
					</div><!-- play -->
			
					<div class="wistia_video_overlay">
				
				
					</div><!-- wistia_video_overlay -->
			
					<div class="my_wistia wistia_embed wistia_async_<?php the_sub_field( 'wistia_code' ); ?> popover=true popoverContent=thumbnail"></div><!-- wistia -->
			
					<div class="video_center_title wistia_embed wistia_async_<?php the_sub_field( 'wistia_code' ); ?> popover=true popoverContent=html"><?php the_sub_field( 'video_title' ); ?></div><!-- video_center_title -->
			
				</div><!-- single_video -->
		 
				
		    
			<?php endwhile; ?>
		 
		<?php endif; ?>
		


		
	</div><!-- video_center -->
	
	<script src="https://fast.wistia.com/embed/medias/waichudc62.jsonp" async></script><script src="https://fast.wistia.com/assets/external/E-v1.js" async>
			
		</script>

</div><!-- main -->



<?php get_footer(); ?>





	