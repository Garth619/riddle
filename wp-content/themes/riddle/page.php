<?php get_header(); ?>


<div class="main two_col">

	<div class="container">
		
		
					
		
		
	
	
		<div class="inner_banner" style="background: url(<?php the_field( 'pa_banner_image' ); ?>) top center no-repeat no-repeat;
				background-size:cover;">
		
		
		
		</div><!-- inner_banner -->
		
		
		<?php
global $post;
$children = get_pages( array( 'child_of' => $post->ID ) );

if ( is_page() && $post->post_parent ) : ?>
This is a child-page.

<?php elseif ( is_page() && count( $children ) > 0 ) : ?>
This is a parent-page (with one or more children)

<?php else : ?>
This is a parent page without children.

<?php endif; ?>
		
		
		
<!--
			
			<?php 
			
			$direct_parent = $post->post_parent; ?>
			
			<?php echo $direct_parent;?>
-->



			
		
		
		<div class="inner_container content">
			
			<h1 class="pa_title"><?php the_title();?></h1>
			
			<?php get_template_part( 'loop', 'page' );?>
			
		</div><!-- inner_container -->
	
	
	</div><!-- container -->


	<?php get_sidebar();?>


</div><!-- main -->



<?php get_footer(); ?>





	