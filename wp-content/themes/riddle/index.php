<?php get_header(); ?>




<div id="main_trigger" class="main two_col">

	<div class="container">
	
		
		<div class="inner_container content">
			
			<h1 class="blog_title">Blog</h1>
			
			
			<?php get_template_part( 'loop', 'index' );?>
			
		</div><!-- inner_container -->
	
	
	</div><!-- container -->


	<?php get_sidebar('blog');?>

</div><!-- main -->





<?php get_footer(); ?>
