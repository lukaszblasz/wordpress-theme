  <footer>
    <nav>
      <?php 
        if ( has_nav_menu( 'footer' ) ) {
          wp_nav_menu(
            array(
              'container'  => '',
              'items_wrap' => '%3$s',
              'theme_location' => 'footer',
            )
          );
        }
      ?>
    </nav>
		<?php wp_footer(); ?>
  </footer>
</body>
</html>