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


	<div class="sidebar_wrapper">
	
	
		<div class="sidebar_form">
			
			
			<?php echo file_get_contents("wp-content/themes/riddle/images/new_diamonds.svg"); ?>
			
			
			<div class="form_titles">
				
				<span class="large_header">Free Consultation</span><!-- large_header -->
				
				<span class="small_header">No Obligation or Cost to You</span><!-- small_header -->
				
			</div><!-- form_titles -->
			
			<?php gravity_form(2, false, false, false, '', true, 12); ?>
			
			<span class="required">All Fields Required</span><!-- required -->
			
			
		</div><!-- sidebar_form -->
		
		
		<div class="sidebar_list_wrapper">
			
			<?php get_sidebar('blog');?>
			
		</div><!-- sidebar_pa_wrapper -->
	
	
	</div><!-- sidebar_wrapper -->


</div><!-- main -->











<?php get_footer(); ?>
