<?php
  add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_script( 'js-all', get_template_directory_uri() . '/dist/all.js', [], null, true );
  });