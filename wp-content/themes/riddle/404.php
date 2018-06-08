<?php get_header(); ?>

<div class="main">

	<div class="not_found_wrapper">
	
		<span class="not_found_header">404</span><!-- not_found_header -->
	
		<span class="not_found_small_header">Page Not Found</span><!-- not_found_small_header -->
	
		<span class="not_found_description">The page you were looking for appears to have been moved, deleted or does not exist. You could <span class="go_back" onclick="goBack()">go back</span> to where you were or head straight to our <a href="<?php bloginfo('url')?>">home page</a>. </span><!-- not_found_description -->
	
	</div><!-- not_found_wrapper -->

</div><!-- main -->


<script type="text/javascript">

function goBack() {
    window.history.back();
}

</script>

			
<?php get_footer(); ?>