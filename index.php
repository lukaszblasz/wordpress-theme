<?php
/**
 * Displaying default page
 *
 */

get_header();
?>

<main class="site-content" role="main">

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
