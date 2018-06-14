<?php get_header(); ?>

<div class="main two_col">

	<div class="container">
	
		
		<div class="inner_container content">
			
			<h1 class="pa_title"><?php the_title();?></h1>
			
			<div class="meta">
						
				<span class="date"><?php the_field( 'single_case_result_amount' ); ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;<?php the_field( 'single_case_result_type' ); ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;<?php $pfx_date = get_the_date(); echo $pfx_date ?></span><!-- date -->
						
			</div><!-- meta -->
			
			<?php get_template_part( 'loop', 'single' ); ?>
			
		</div><!-- inner_container -->
	
	
	</div><!-- container -->


	<?php get_sidebar();?>


</div><!-- main -->





<?php get_footer(); ?>
