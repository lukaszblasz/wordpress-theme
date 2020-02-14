<?php

function footerWidgetsInit() {
 
  register_sidebar( array(
      'name'          => 'Footer top widgets',
      'id'            => 'footer-top-widgets',
  ) );

 register_sidebar( array(
  'name'          => 'Footer bottom widgets',
  'id'            => 'footer-bottom-widgets',
) );

}
add_action( 'widgets_init', 'footerWidgetsInit' );