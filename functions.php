<?php
  
  // add all add_theme_support functions
  include_once( get_template_directory() . '/function-parts/theme-support.php' );

  // add all js scripts
  include_once( get_template_directory() . '/function-parts/add-script.php' );

  // add all css styles
  include_once( get_template_directory() . '/function-parts/add-styles.php' );

  // initialize all menus
  include_once( get_template_directory() . '/function-parts/menus.php' );

  // initialize widgets/sidebars
  include_once( get_template_directory() . '/function-parts/widgets.php' );

?>