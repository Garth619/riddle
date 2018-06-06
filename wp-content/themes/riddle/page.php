<?php get_header(); ?>


<div class="main two_col">

	<div class="container">
	
	
		<div class="inner_banner">
		
		
		
		</div><!-- inner_banner -->
		
		
		<div class="inner_container content">
			
			<h1 class="pa_title"><?php the_title();?></h1>
			
			<?php get_template_part( 'loop', 'page' );?>
			
		</div><!-- inner_container -->
	
	
	</div><!-- container -->


	<?php get_sidebar();?>


</div><!-- main -->



<?php get_footer(); ?>





	