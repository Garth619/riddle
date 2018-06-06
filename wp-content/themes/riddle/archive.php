<?php get_header(); ?>




<div class="main two_col">

	<div class="container">
	
		
		<div class="inner_container content">
			
					
<?php
	
	if ( have_posts() )
		the_post();
?>

			
			<h1 class="blog_title">
<?php if ( is_day() ) : ?>
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
<?php elseif ( is_year() ) : ?>
				<?php printf( __( '<span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
<?php else : ?>
				<?php _e( 'Blog Archives', 'twentyten' ); ?>
<?php endif; ?>
			</h1>
			
			
			<?php
				
				rewind_posts();

				get_template_part( 'loop', 'archive' );
			
			?>

			
		</div><!-- inner_container -->
	
	
	</div><!-- container -->


	<?php get_sidebar('blog');?>


</div><!-- main -->











<?php get_footer(); ?>
