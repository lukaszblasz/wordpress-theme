<?php
  add_action( 'wp_enqueue_scripts', function(){
    wp_enqueue_style( 'all-styles', get_template_directory_uri() . '/dist/all.css', array());
  } );

