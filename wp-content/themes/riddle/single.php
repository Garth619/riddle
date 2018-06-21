<?php get_header(); ?>

<div id="main_trigger" class="main two_col">

	<div class="container">
		
				
			<?php if(get_field( 'banner_featured_image')) { ?>
				
				<div class="inner_banner" style="background: url(<?php the_field( 'banner_featured_image'); ?>) top center no-repeat no-repeat;
				background-size:cover;">
		
				</div><!-- inner_banner -->
			
			<?php } ?>
	
		
		<div class="inner_container content">
			
			<div class="back_wrapper">
			
				<?php $url = 'http://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];


					if (strpos($url,'videolibrary') !== false) {
						
						$backtitle = $_GET['videolibrary']; 
						
						$backpage = $_GET['videopage'];
						
						$childpage = $_GET['childpage'];
						
					
				
				
					if(strpos($url,'childtrue') !== false) { 
						
				?> 
						
					
						<a href="<?php bloginfo('url');?>/video-library/<?php echo $backtitle;?>/page/<?php echo $backpage;?>" class="go_back">
							
							<span><?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?></span>
							
						Back to Video Library
						
					</a>
						
					<?php } else { ?>
					
					<a href="<?php bloginfo('url');?>/<?php echo $backtitle;?>/page/<?php echo $backpage;?>" class="go_back">
						
						<span><?php echo file_get_contents("wp-content/themes/riddle/images/new_arrow.svg"); ?></span>
							
						Back to Video Library
						
					</a>
					
					<?php } } ?>
					
						

				
			</div><!-- back_wrapper -->
			
			<h1 class="pa_title"><?php the_title();?></h1>
			
			<div class="meta">
						
				<span class="date"><?php $author = get_the_author(); echo $author;?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;<?php $pfx_date = get_the_date(); echo $pfx_date ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo get_the_category_list();?> </span><!-- date -->
						
			</div><!-- meta -->
			
			<?php get_template_part( 'loop', 'single' ); ?>
			
		</div><!-- inner_container -->
	
	
	</div><!-- container -->


	<?php get_sidebar('blog');?>	
	
	</div><!-- sidebar_wrapper -->


</div><!-- main -->





<?php get_footer(); ?>
