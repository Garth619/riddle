<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
<link href="https://fonts.googleapis.com/css?family=Teko:300,400,500" rel="preload" as="style">
<script>
  (function(d) {
    var config = {
      kitId: 'ujf1ruo',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>


<style type="text/css">
	
	
	
			
		</style>



<?php wp_head(); ?>
<?php the_field( 'tracking','option'); ?>

</head>

<body <?php body_class(); ?>>
				
<header id="header_trigger">
	
	<div class="header_left">
		
		<a class="logo" href="<?php bloginfo('url');?>">
		
			<?php echo file_get_contents("wp-content/themes/riddle/images/new_logo.svg"); ?>
		
		</a>
		
		<div class="mobile_logo_svg">
			
			<a href="tel:<?php the_field( 'phone_number','option'); ?>">
				
				<span class="phone_svg"><?php echo file_get_contents("wp-content/themes/riddle/images/new_phone.svg"); ?></span>
				
				<span class="mobile_phone_consultation_title">Free Consultation</span><!-- mobile_phone_consultation_title -->
				
			</a>
			
		</div><!-- mobile_logo_svg -->
		
		<nav>
			
			<div class="close"></div><!-- close -->
			
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'main_menu' ) ); ?>
			
		</nav>
		
	</div><!-- header_left -->
	
	<div class="header_right">
		
		<div class="espanol">
			
			<a href="<?php the_field( 'espanol_page_link','option'); ?>"></a>
		
		</div><!-- espanol -->
		
		<div class="phone_wrapper">
			
			<a class="tel" href="tel:<?php the_field( 'phone_number','option'); ?>"><?php the_field( 'phone_number','option'); ?></a>
			
			<span>Free Consultation</span>
			
		</div><!-- phone_wrapper -->
		
		<div class="menu_wrapper">
			
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_bar"></span><!-- menu_bar -->
			<span class="menu_title">Menu</span><!-- menu_bar -->
			
		</div><!-- menu_wrapper -->
		
	</div><!-- header_right -->

	
</header>


			