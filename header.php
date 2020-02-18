<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <div class="wrapper">
      <header class="header">
        <div class="wrap-content">
          <div class="header-content">
            <div class="logo-wrapper">
              <?php 
                if ( function_exists( 'the_custom_logo' ) ) {
                  the_custom_logo();
                }
              ?>
            </div>
            <nav class="main-navigation">
              <ul>
              <?php 
                if ( has_nav_menu( 'primary' ) ) {
                  wp_nav_menu(
                    array(
                      'container'  => '',
                      'items_wrap' => '%3$s',
                      'theme_location' => 'primary',
                    )
                  );
                }
              ?>
              </ul>
            </nav>
            <div>
              <?php get_template_part( 'template-parts/search-form' ); ?>
            </div>
          </div>
        </div>
      </header>

