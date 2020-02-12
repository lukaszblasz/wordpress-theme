<?php
/**
 * Template Name: Homepage Template
 * 
 */

get_header();
?>

<main class="site-content" role="main">
  <h1>This is homepage template</h1>
	<?php

	if ( have_posts() ) {

		while ( have_posts() ) {
      the_post();
      
      get_template_part( 'template-parts/page-content' );
		}
	}

	?>

</main>

<?php get_footer(); ?>
