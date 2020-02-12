<?php

/*
  * Let WordPress manage the document title.
  * By adding theme support, we declare that this theme does not use a
  * hard-coded <title> tag in the document head, and expect WordPress to
  * provide it for us.
  */
add_theme_support( 'title-tag' );
  
// Custom backgrounds - enable option under Apperance -> Background to setup own body background
add_theme_support(
  'custom-background'
);

/*
  * Switch default core markup for search form, comment form, and comments
  * to output valid HTML5.
  */
add_theme_support(
  'html5',
  array(
    'search-form',
    'comment-form',
    'comment-list',
    'gallery',
    'caption',
    'script',
    'style',
  )
);
