<?php
	
	/* Template Name: Jacksonville Location */
	
	get_header(); ?>


<div id="main_trigger" class="main two_col">

	<div class="container">
		
		
		
		<?php global $post;
			
			
			$myparentid = $post->post_parent;
			
			
		?>
		
		
		<?php if(get_field('pa_banner_image',$myparentid)) { ?>

		
		<?php if ( is_tree($myparentid)) { ?>
  
		
		<div class="inner_banner" style="background: url(<?php the_field( 'pa_banner_image', $myparentid ); ?>) top center no-repeat no-repeat;
				background-size:cover;">
		
		
		
		</div><!-- inner_banner -->
		
		<?php } ?>
		
		<?php } ?>
			
		
		
		<div class="inner_container content">
			
			<h1 class="pa_title"><?php the_title();?></h1>
			
			<?php get_template_part( 'loop', 'page' );?>
			
		</div><!-- inner_container -->
	
	
	</div><!-- container -->


	<?php get_sidebar('jacksonville');?>


</div><!-- main -->



<?php get_footer(); ?>





	