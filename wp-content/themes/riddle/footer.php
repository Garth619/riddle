<footer>
	
	<div class="inner_footer">
		
		<span class="footer_title">Free<span></span> Consultation</span><!-- footer_title -->
		
		<span class="small_footer_title">no obligation or cost to you</span><!-- small_footer_title -->
		
		<div class="form_wrapper">
			
			<?php gravity_form(1, false, false, false, '', true, 12); ?>
			
			<span class="required">All Fields Required</span><!-- required -->

		</div><!-- form_wrapper -->
		
	</div><!-- inner_footer -->
	
	<div class="footer_locations">
		
		
		<div class="locations_left">
			
			
			<span class="large_header">Contact</span><!-- large_header -->
			
			<span class="small_header">Our Firm <strong>Today</strong></span><!-- small_header -->
			
			
		</div><!-- locations_left -->
		
		
		<div class="locations_right">
			
			
			<div class="location_slider">
				
				<div class="single_location_slide">
					
					<span class="location_title">GoldsBoro</span><!-- location_title -->
					
					
					<span class="address">601 North Spence Avenue<br/> Goldsboro, NC 27534</span><!-- address -->
					
					<a class="get_directions_button" href="">Get Directions</a><!-- get_directions_button -->
					
					<br/>
					
					<a class="tel" href="">(800) 525-7111</a>
					
				</div><!-- single_location_slide -->
				
				<div class="single_location_slide">
					
					<span class="location_title">GoldsBoro</span><!-- location_title -->
					
					
					<span class="address">601 North Spence Avenue<br/> Goldsboro, NC 27534</span><!-- address -->
					
					<a class="get_directions_button" href="">Get Directions</a><!-- get_directions_button -->
					
					<br/>
					
					<a class="tel" href="">(800) 525-7111</a>
					
				</div><!-- single_location_slide -->


				<div class="single_location_slide">
					
					<span class="location_title">GoldsBoro</span><!-- location_title -->
					
					
					<span class="address">601 North Spence Avenue<br/> Goldsboro, NC 27534</span><!-- address -->
					
					<a class="get_directions_button" href="">Get Directions</a><!-- get_directions_button -->
					
					<br/>
					
					<a class="tel" href="">(800) 525-7111</a>
					
				</div><!-- single_location_slide -->


				<div class="single_location_slide">
					
					<span class="location_title">GoldsBoro</span><!-- location_title -->
					
					
					<span class="address">601 North Spence Avenue<br/> Goldsboro, NC 27534</span><!-- address -->
					
					<a class="get_directions_button" href="">Get Directions</a><!-- get_directions_button -->
					
					<br/>
					
					<a class="tel" href="">(800) 525-7111</a>
					
				</div><!-- single_location_slide -->

				
				
			</div><!-- location_slider -->
			
			
			<div class="mobile_social_wrapper">
			
			
			<div class="social_media">
				
				<ul>
					<li>
						<a href="" class="facebook">
							
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_fb.svg"); ?>
							
						</a>
					</li>
					<li>
						<a href="" class="twitter">
							
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_twitter.svg"); ?>
							
						</a>
					</li>
					<li>
						<a href="" class="linkedin">
							
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_li.svg"); ?>
							
						</a>
					</li>
					<li>
						<a href="" class="google">
							
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_google.svg"); ?>
							
						</a>
					</li>
					<li>
						<a href="" class="youtube">
							
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_yt.svg"); ?>
							
						</a>
					</li>
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
				
				<img src="<?php bloginfo('template_directory');?>/images/footer_icon_06.svg"/>
				
			</a><!-- ilawyer -->
			
		</div><!-- bottom_footer_left -->
		
		<div class="bottom_footer_right">
			
			<div class="social_media">
				
				<ul>
					<li>
						<a href="" class="facebook">
							
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_fb.svg"); ?>
							
						</a>
					</li>
					<li>
						<a href="" class="twitter">
							
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_twitter.svg"); ?>
							
						</a>
					</li>
					<li>
						<a href="" class="linkedin">
							
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_li.svg"); ?>
							
						</a>
					</li>
					<li>
						<a href="" class="google">
							
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_google.svg"); ?>
							
						</a>
					</li>
					<li>
						<a href="" class="youtube">
							
							<?php echo file_get_contents("wp-content/themes/riddle/images/new_yt.svg"); ?>
							
						</a>
					</li>
				</ul>
				
			</div><!-- social_media -->
			
			<div class="copyright">
				
				<ul>
					<li>&copy;2018 Riddle & Breantley, LLP - All Rights Reserved.</li>
					<li><a href="">Disclaimer</a></li>
				</ul>
				
			</div><!-- copyright -->
			
			
		</div><!-- bottom_footer_right -->
		
		
	</div><!-- bottom_footer -->
	
</footer>

<?php wp_footer();?>

<?php the_field( 'tracking_codes_footer','option'); ?>

</body>
</html>
