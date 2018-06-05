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
