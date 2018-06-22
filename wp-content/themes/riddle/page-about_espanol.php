<?php 

/* Template Name: About Espanol */

get_header(); ?>


<div id="main_trigger" class="main">
	
	
	<div class="about_wrapper">
		
		
		<h1>
			
			<span class="about_topline">Inicio</span><!-- about_topline -->
			
			<span class="about_bottomline"><?php the_field( 'page_subtitle_espanol' ); ?></span><!-- about_bottomline -->
			
		</h1>
		
		
	</div><!-- about_wrapper -->
	
	<section id="about_section">
		
		<div class="about_img">
		
			<img class="img_desktop" src="<?php bloginfo('template_directory');?>/images/intl_about_img_01_desktop.jpg"/>
			
			<img class="img_tablet" src="<?php bloginfo('template_directory');?>/images/intl_about_img_01_tablet.jpg"/>
		
		</div><!-- about_img -->
		
		<div class="about_content_one content">
			
			<span class="intro"><?php the_field( 'about_intro_one_espanol' ); ?></span><!-- intro -->
			
			<?php the_field( 'about_image_content_espanol' ); ?>

			
		</div><!-- about_content_one -->
		
		</section><!-- about_section -->

		
		<section id="about_section_two_trigger" class="about_section_two">
			
			<div class="about_content_two content">
				
				<?php the_field( 'about_content_two_espanol' ); ?>
				
			</div><!-- about_content_two -->
			
			<div class="about_img_two">
				
				
				<img class="img_one desktop" src="<?php bloginfo('template_directory');?>/images/intl_about_img_02_desktop.jpg"/>
				
				<img class="img_one tablet" src="<?php bloginfo('template_directory');?>/images/intl_about_content_img_01_tablet.jpg"/>
				
				<img class="img_two" src="<?php bloginfo('template_directory');?>/images/intl_about_img_03_desktop.jpg"/>
				
				<div class="img_content content">
					
					<?php the_field( 'about_content_two_second_column_espanol' ); ?>
					
				</div><!-- img_content -->
				
			</div><!-- about_img_two -->
			
			
		</section><!-- about_section_two -->

		
		<section id="about_section_es">
			
			
			<div class="about_section_es_image">
				
				<img src="<?php bloginfo('template_directory');?>/images/intl_spanish_img_04.jpg"/>
				
			</div><!-- about_section_es_image -->
			
			<div class="about_section_es_content content">
				
				<?php the_field( 'about_section_four_espanol' ); ?>
				
<!--
				<h2>Contacte los Abogados de Lesiones en Riddle & Brantley, LLP</h2>

				<p>Entendemos que unas víctimas no pueden desplazarse después de ser lesionado debido a la negligencia de otros, y es por eso que las oficinas de Riddle & Brantley, LLP están orgullosos de hacer visitas de hospital u hogar.</p>
				
				<p>¡Con nosotros representándolo y a su lado, tiene más de 160 años de experiencia, un equipo de investigadores y asistentes legales en su esquina!</p>

				<p>Contacte cualquiera de nuestras 4 ubicaciones a través de Carolina del Norte para una Evaluación de Caso GRATUITA.</p>
				
				<p>¡Déjenos usar nuestro conocimiento, experiencia y recursos para ayudarlo a obtener los resultados que merece! ¡Llámenos o llene nuestro formulario hoy para una Evaluación de Caso GRATUITA – es estrictamente confidencial!</p>
				
				
				<div class="four_columns">
					
					<div class="four_col">
						
						<h3>Raleigh, NC</h3>
						
						<ul>
							
							<li>Apex</li>
							<li>Cary</li>
							<li>Garner</li>
							<li>Holly Springs</li>
							<li>Knightdale</li>
							<li>Morrisville</li>
							<li>Rolesville</li>
							<li>Wake Forest</li>
							<li>Wendell</li>
							<li>Zebulon</li>
							<li>y las áreas alrededort</li>
							
						</ul>
						
					</div>
					
					<div class="four_col">
						
						<h3>Jacksonville, NC</h3>
						
						<ul>
							
							<li>Holly Ridge</li>
							<li>Maysville</li>
							<li>North Topsail Beach</li>
							<li>Richlands</li>
							<li>Surf City</li>
							<li>Topsail Beach</li>
							<li> y las áreas alrededort</li>
							
						</ul>
						
					</div>
					
					<div class="four_col">
						
						<h3>Goldsboro, NC</h3>
						
						<ul>
							
							<li>Eureka</li>
							<li>Fremont</li>
							<li>Mount Olive</li>
							<li>Pikeville</li>
							<li>Seven Springs</li>
							<li>Walnut Creek</li>
							<li>y las áreas alrededort</li>
							
						</ul>
						
					</div>
					
					
					<div class="four_col">
						
						<h3>Kinston, NC</h3>
						
						<ul>
							
							<li>Deep Run</li>
							<li>Grifton</li>
							<li>La Grange</li>
							<li>Pink Hill</li>
							<li>y las áreas alrededort</li>			
						</ul>
						
					</div>
					
					
					
				</div>
-->
				
				
			</div><!-- about_section_es_content -->
			
			
		</section><!-- about_section_es -->
	
</div><!-- main -->



<?php get_footer(); ?>





	