<?php get_header(); ?>


<div class="main two_col">

	<div class="container">
	
		
		<div class="inner_container content">
			
			<h1 class="blog_title"><?php single_cat_title( );?></h1>
			
			
			<?php get_template_part( 'loop', 'category' );?>
			
		</div><!-- inner_container -->
	
	
	</div><!-- container -->


	<?php get_sidebar('blog');?>


</div><!-- main -->



<?php get_footer(); ?>
