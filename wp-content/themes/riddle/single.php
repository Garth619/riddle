<?php get_header(); ?>

<div id="main_trigger" class="main two_col">

	<div class="container">
	
		
		<div class="inner_container content">
			
			
			<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


					if (strpos($url,'videolibrary') !== false) {
						
						$backtitle = $_GET['videolibrary']; 
						
						$backpage = $_GET['videopage'];
						
			?>
			
					<div class="back_wrapper">
						
						<a href="<?php bloginfo('url');?>/<?php echo $backtitle;?>/page/<?php echo $backpage;?>" class="go_back">
							
							<span><?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?></span>
							
							Back to Video Library
						
						</a>
					
					</div><!-- back_wrapper -->
						
						
				<?php	} ?>
			
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
