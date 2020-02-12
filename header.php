<!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
    <header class='header'>
      <nav>
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
      </nav>
      <div>
        <?php get_template_part( 'template-parts/search-form' ); ?>
      </div>
    </header>

