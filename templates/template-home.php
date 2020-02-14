<?php
/**
 * Template Name: Homepage Template
 * 
 */

get_header();
?>
<main class="content" role="main">
  <div class="content-inner">
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
