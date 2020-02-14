
<?php get_header(); ?>

<main class="content" role="main">
  <h3>Search query: <?php get_search_query() ?></h3>
  <div class="search-results">
    <?php 
      while ( have_posts() ) {
        the_post();
    ?>
        <h4><?php the_title(); ?></h4>
        <p><?php the_excerpt(); ?></p>
        <p><?php the_permalink(); ?></p>
    <?php
      }
    ?>
  </div>

</main>

<?php get_footer(); ?>
