<footer id="consultation">
	
	<div class="inner_footer">
		
		<span class="footer_title"><?php the_field( 'form_title','option'); ?></span><!-- footer_title -->
		
		<span class="small_footer_title"><?php the_field( 'form_subtitle','option'); ?></span><!-- small_footer_title -->
		
		<div class="form_wrapper">
			
			<?php gravity_form(1, false, false, false, '', true, 1266); ?>
			
			<span class="required">All Fields Required</span><!-- required -->

		</div><!-- form_wrapper -->
		
	</div><!-- inner_footer -->
	
	<div id="footer_locations_trigger" class="footer_locations lazy" data-src="<?php bloginfo('template_directory');?>/images/footer_img_desktop.jpg">
		
		
		<div class="locations_left">
			
			
			<span class="large_header"><?php the_field( 'contact_large_title','option'); ?></span><!-- large_header -->
			
			<span class="small_header"><?php the_field( 'contact_small_title','option'); ?></span><!-- small_header -->
			
			<span class="firm_disclaimer">
			
				<?php the_field( 'contact_disclaimer','option'); ?>
			
			</span><!-- firm_disclaimer -->
			
			
		</div><!-- locations_left -->
		
		
		<div class="locations_right">
			
			
			<div class="location_slider">
				
				
				<?php if(get_field('city_locations',21)): ?>
				 
					<?php while(has_sub_field('city_locations',21)): ?>
				 
						
						<div class="single_location_slide">
					
							<span class="location_title"><?php the_sub_field( 'city_title' ); ?></span><!-- location_title -->
					
							<span class="address"><?php the_sub_field( 'city_address' ); ?></span><!-- address -->
					
							<a class="get_directions_button" href="<?php the_sub_field( 'get_directions_google_url' ); ?>" target="_blank"><?php the_sub_field( 'get_directions_verbiage' ); ?></a><!-- get_directions_button -->
					
							<br/>
					
							<a class="tel" href="tel:<?php the_sub_field( 'city_phone_number' ); ?>"><?php the_sub_field( 'city_phone_number' ); ?></a>
					
						</div><!-- single_location_slide -->
						
						
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
				

				
				
			</div><!-- location_slider -->
			
			
			<div class="mobile_social_wrapper">
			
			
			<div class="social_media">
				
				
				<ul>
					
					<?php if(get_field('social_media','option')): ?>
					 
						<?php while(has_sub_field('social_media','option')): ?>
					 
							<li>
								<a href="<?php the_sub_field( 'link' ); ?>" class="<?php the_sub_field( 'class' ); ?>" target="_blank">
									
									<?php $socialsvg = get_sub_field( 'svg' );?>
							
									<?php echo file_get_contents("wp-content/themes/riddle/images/" . $socialsvg .""); ?>
							
								</a>
							</li>
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
				</ul>
				
			</div><!-- social_media -->
			
			<div class="copyright">
				
				<ul>
					<li>&copy;2018 Riddle & Breantley, LLP<br/> All Rights Reserved.</li>
					<li><a href="">Disclaimer</a></li>
				</ul>
				
			</div><!-- copyright -->
			
			
		</div><!-- mobile_social_wrapper -->
			
			
		</div><!-- locations_right -->
		
		
		
		
		
		
	</div><!-- footer_locations -->
	
	<div class="bottom_footer">
		
		
		<div class="bottom_footer_left">
			
			<a class="ilawyer" href="//ilawyermarketing.com" target="_blank">
				
<!-- 				<img src="<?php bloginfo('template_directory');?>/images/footer_icon_06.svg"/> -->

						<?php echo file_get_contents("wp-content/themes/riddle/images/footer_icon_06.svg"); ?>
				
			</a><!-- ilawyer -->
			
		</div><!-- bottom_footer_left -->
		
		<div class="bottom_footer_right">
			
			<div class="social_media">
				
				<ul>
					
					<?php if(get_field('social_media','option')): ?>
					 
						<?php while(has_sub_field('social_media','option')): ?>
					 
							<li>
								<a href="<?php the_sub_field( 'link' ); ?>" class="<?php the_sub_field( 'class' ); ?>" target="_blank">
									
									<?php $socialsvg = get_sub_field( 'svg' );?>
							
									<?php echo file_get_contents("wp-content/themes/riddle/images/" . $socialsvg .""); ?>
							
								</a>
							</li>
					    
						<?php endwhile; ?>
					 
					<?php endif; ?>
					
				</ul>
				
			</div><!-- social_media -->
			
			<div class="copyright">
				
				<ul>
					<li><?php the_field( 'copyright_verbiage','option'); ?></li>
					
					<?php if(get_field('footer_disclaimer_link','option')):?>
					
					<li><a href="<?php the_field( 'footer_disclaimer_link','option'); ?>"><?php the_field( 'footer_disclaimer','option'); ?></a></li>
					<?php endif;?>
				</ul>
				
			</div><!-- copyright -->
			
			
		</div><!-- bottom_footer_right -->
		
		
	</div><!-- bottom_footer -->
	
</footer>

<?php wp_footer();?>


<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.lazy/jquery.lazy.min.js"></script>

<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery-lazyload-any/src/jquery.lazyload-any-min.js"></script>

<?php the_field( 'tracking_codes_footer','option'); ?>

</body>
</html>
