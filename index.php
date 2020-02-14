<?php
/**
 * Displaying default page
 *
 */

get_header();
?>

<main class="content" role="main">
  <div clas="content-inner">

    <?php

    if ( have_posts() ) {

      while ( have_posts() ) {
        the_post();
        
        get_template_part( 'template-parts/page-content' );
      }
    }

    ?>
  </div>

</main>

<?php get_footer(); ?>
