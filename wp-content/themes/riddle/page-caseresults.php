<?php
	
	/* Template Name: Case Results */
	
	get_header(); ?>


<div id="main_trigger" class="main">

	<div class="interior_banner">
		
		<h1 class="inetrior_banner_header"><?php the_field( 'first_word' ); ?> <span><?php the_field( 'second_word' ); ?></h1><!-- inetrior_banner_header -->
		
	</div><!-- interior_banner -->
	
	<div class="case_results_wrapper">
		
		
		<?php $posts = get_field('case_results');
		
		if( $posts ): ?>
		   
		    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
		        <?php setup_postdata($post); ?>
		        
		        	
		        	<div class="single_case_results">
				
								<a class="" href="<?php the_permalink();?>">
				
									<span class="amount"><?php the_field( 'single_case_result_amount' ); ?></span><!-- amount -->
				
									<span class="case_type"><?php the_field( 'single_case_result_type' ); ?></span><!-- case_type -->
					
									<span class="case_results_read_more">Read Case Results</span><!-- case_results_read_more -->
				
								</a>
				
							</div><!-- single_case_results -->
		       
		            
		      <?php endforeach; ?>
		   
		    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
		<?php endif; ?>
			
	
		</div><!-- case_results_wrapper -->

</div><!-- main -->



<?php get_footer(); ?>





	