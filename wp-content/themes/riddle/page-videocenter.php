<?php
	
	/* Template Name: Video Center */
	
	get_header(); ?>


<div class="main">

	<div class="interior_banner">
		
		<h1 class="inetrior_banner_header"><?php the_field( 'first_word' ); ?> <span><?php the_field( 'second_word' ); ?></span></h1><!-- inetrior_banner_header -->
		
	</div><!-- interior_banner -->
	
	<div class="video_center">
		
		
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





	