<?php get_header(); ?>



<div class="main two_col">

	<div class="container">
	
		
		<div class="inner_container content">
			
			<h1 class="pa_title"><?php the_title();?></h1>
			
			<div class="meta">
						
				<span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo get_the_category_list();?> </span><!-- date -->
						
			</div><!-- meta -->
			
			<?php get_template_part( 'loop', 'single' ); ?>
			
		</div><!-- inner_container -->
	
	
	</div><!-- container -->


	<?php get_sidebar('blog');?>	
	
	</div><!-- sidebar_wrapper -->


</div><!-- main -->





<?php get_footer(); ?>
