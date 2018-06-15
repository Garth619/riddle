<?php
	
	/* Template Name: Video Library */
	
	get_header(); ?>


<div class="main two_col">

	<div class="container">
		
	
		<div class="inner_container content">
			
			
			<?php
				
				if ($post->post_parent == '1004415') { // if current page is child of page with page ID 100 ?>
					
					Home --> Video Library --> <?php the_title();?>
				
			<?php } ?>
			
			
			<h1 class="pa_title"><?php the_title();?></h1>
			
			
			<?php 
						
				global $post;
    
				$mypost_slug=$post->post_name;

			?>
			
			<?php 
				
				if ( !is_paged() ) {
  
				get_template_part( 'loop', 'page' );
  
				}
				
				if ( is_paged() ) { 
			
					global $paged; ?>
					
					
					<h2 class="paged_header">Page <?php echo $paged;?></h2><br/><br/>
					
								
			<?php } ?>
			
			

			
			<div class="video_library_wrapper content">
				
				
				<?php
					
					$myterm = get_field('video_category');
					
					
					$temp = $wp_query; 
					$wp_query = null; 
					$wp_query = new WP_Query(); 
					$wp_query->query('showposts=6&post_type=post&cat=' . $myterm .'&paged='.$paged); 

					while ($wp_query->have_posts()) : $wp_query->the_post(); 
			?>
			
			
				<div class="single_video_post">
					
					
					<a href="<?php the_permalink();?>?videolibrary=<?php echo $mypost_slug;?>&videopage=<?php echo $paged;?>">
					
					<div class="video_image">
						
						<div class="video_library_overlay">
							
								<img class="video_thumb" src="<?php video_thumbnail(); ?>"/>
							
							</div><!-- video_library_overlay -->
							
					</div><!-- video_image -->
					
					<h3 class="single_video_title"><?php the_title();?></h3><!-- single_video_title -->
					
					</a>
					
						<?php edit_post_link( __( 'Edit'), '', '' ); ?>
					
					
				</div><!-- single_video_post -->

			
				<br/>
				<br/>
				
				

			<?php endwhile; ?>

			<nav>
				<?php previous_posts_link('&laquo; Newer') ?>
				<?php next_posts_link('Older &raquo;') ?>
			</nav>

		<?php 
			$wp_query = null; 
			$wp_query = $temp;  // Reset
		?>

				
				
			</div><!-- video_library_wrapper -->
			
		</div><!-- inner_container -->
	
	
	</div><!-- container -->


	<?php get_sidebar('videos');?>


</div><!-- main -->



<?php get_footer(); ?>





	