<?php
	
	/* Template Name: Video Library */
	
	get_header(); ?>


<div id="main_trigger" class="main two_col">

	<div class="container">
		
	
		<div class="inner_container content">
			
			
			<?php
				
				$videoparent = $post->post_parent == '135';
				
				if ($videoparent) { // if current page is child of page with page ID 100 ?>
					
					
					<div class="my_breadcrumb">
					
						<a href="<?php bloginfo('url');?>">Home</a>
						
						<span class="breadcrumb_arrow"><?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?></span>
						
						<a href="<?php the_permalink(135);?>">Video Library</a> 
						
						<span class="breadcrumb_arrow"><?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?></span>
						
						<span class="current_title"><?php the_title();?></span>
					
					</div><!-- my_breadcrumb -->
				
			<?php } ?>
			
			
			<h1 class="pa_title"><?php the_title();?></h1>
			
			
			<?php 
						
				global $post;
    
				$mypost_slug=$post->post_name;

			?>
			
			<?php 
				
				if ( !is_paged() ) { ?>
				
				<div class="video_intro">
  
					<?php get_template_part( 'loop', 'page' );?>
				
				</div><!-- video_intro -->
  
				<?php }
				
				if ( is_paged() ) { 
			
					global $paged; ?>
					
					
					<h2 class="paged_header">Page <?php echo $paged;?></h2><br/><br/>
					
								
			<?php } ?>
			
			

			
			<div class="video_library_wrapper content">
				
				
				<?php
					
					if ( is_page() && $post->post_parent > 0 ) { 
						
						$mychild = 'childtrue';
					
					}
					
					else {
						
						$mychild = 'childfalse';
						
					}
					
					$myterm = get_field('video_library_category');
					
					
					$temp = $wp_query; 
					$wp_query = null; 
					$wp_query = new WP_Query(); 
					$wp_query->query('showposts=6&post_type=post&cat=' . $myterm .'&paged='.$paged); 

					while ($wp_query->have_posts()) : $wp_query->the_post(); 
			?>
			
			
				<div class="single_video_post">
					
					
					<a href="<?php the_permalink();?>?videolibrary=<?php echo $mypost_slug;?>&videopage=<?php echo $paged;?>&childpage=<?php echo $mychild;?>">
					
					<div class="video_image">
						
						<div class="video_library_overlay">
							
								<img class="video_thumb" src="<?php video_thumbnail(); ?>"/>
							
							</div><!-- video_library_overlay -->
							
					</div><!-- video_image -->
					
					<h3 class="single_video_title"><?php the_title();?></h3><!-- single_video_title -->
					
					</a>
					
						<?php edit_post_link( __( 'Edit'), '', '' ); ?>
					
					
				</div><!-- single_video_post -->

			
				
				
				

			<?php endwhile; ?>
			
			<?php $svgarrow = file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?>

			<nav class="video_nav">
				<?php previous_posts_link('<span class="newer">' . $svgarrow . '</span>') ?>
				<?php next_posts_link('<span class="older">' . $svgarrow . '</span>') ?>
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





	