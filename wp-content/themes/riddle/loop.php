
<?php if ( ! have_posts() ) : ?>
	
	
	<div id="post-0" class="post error404 not-found">
		
		<h2>Not Found</h2>
		
		<div class="entry-content">
			<p>Apologies, but no posts have been created</p>
			
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->


<?php endif; ?>

<div class="post_wrapper">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	
	
				<?php if(get_field( 'myfeatured_image' )): ?>
				
					<div class="single_post has_image">
					
						<div class="blog_content_wrapper">
					
							<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
					
							<div class="meta">
						
								<span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo get_the_category_list();?> </span><!-- date -->
						
							</div><!-- meta -->
							
							<div class="mobile_image">
								
								<?php $myfeatured_image = get_field( 'myfeatured_image' ); ?>

								<img src="<?php echo $myfeatured_image['url']; ?>" alt="<?php echo $myfeatured_image['alt']; ?>" />

							</div><!-- mobile_image -->
					
							<div class="post_content">
						
								<?php echo wp_trim_words( get_the_content(), 50, '...' );?>
							
								<br/>
							
								<a class="blog_read_more" href="<?php the_permalink();?>">Read More</a><!-- read_more -->
							
								<?php edit_post_link( __( 'Edit'), '', '' ); ?>
						
							</div><!-- post_content -->
						
						</div><!-- with_image -->
					
						<div class="myfeatured_image">
						
							<?php $myfeatured_image = get_field( 'myfeatured_image' ); ?>

							<img src="<?php echo $myfeatured_image['url']; ?>" alt="<?php echo $myfeatured_image['alt']; ?>" />

						</div><!-- myfeatured_image -->
						
					</div><!-- single_post -->
					
				
					
					<?php else: ?>
					
				
					
					
					
					<div class="single_post">
					
						
						<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
					
							<div class="meta">
						
								<span class="date"><?php $pfx_date = get_the_date(); echo $pfx_date ?>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo get_the_category_list();?> </span><!-- date -->
						
							</div><!-- meta -->
					
					
							<div class="post_content">
						
								<?php echo wp_trim_words( get_the_content(), 50, '...' );?>
							
								<br/>
							
								<a class="blog_read_more" href="<?php the_permalink();?>">Read More</a><!-- read_more -->
							
								<?php edit_post_link( __( 'Edit'), '', '' ); ?>
						
							</div><!-- post_content -->
						
						
					</div><!-- single_post -->
				
		
			<?php endif; ?>
	
			
		
<?php endwhile; // end of loop ?>

<?php endif; ?>

</div><!-- post_wrapper -->



<?php if (  $wp_query->max_num_pages > 1 ) : ?>
	
	<div id="nav-below" class="navigation">
		
		<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts' ) ); ?></div>
			
		<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>') ); ?></div>
	
	</div><!-- #nav-below -->

<?php endif; ?>

