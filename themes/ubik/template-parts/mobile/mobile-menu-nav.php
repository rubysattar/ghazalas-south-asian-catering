<?php
/**
 * Mobile menu navigation template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Display menu if defined
if ( has_nav_menu( 'mobile_nav' ) ) :

	// Navigation style
	$nav_style = get_theme_mod( 'ubik_mobile_menu_nav_style', 'drilldown' );

	// Menu classes and data-attributes
	$menu_data_attributes = array();
  $menu_classes = array( 'menu' );
	$menu_classes[] = 'vertical';

	if ( 'accordion' == $nav_style ) {
		$menu_classes[] = 'accordion-menu';
		$menu_data_attributes[] = 'data-accordion-menu';
	} else {
		$menu_data_attributes[] = 'data-drilldown';
	}

	// Turn menu classes attributes into space seperated string
	$menu_classes = implode( ' ', $menu_classes );
	$menu_data_attributes = implode( ' ', $menu_data_attributes );

  // Menu arguments
	$menu_args = array(
		'theme_location' => 'mobile_nav',
		'menu_class'     => $menu_classes,
		'items_wrap'     => '<ul id="%1$s" class="%2$s"' . $menu_data_attributes . '>%3$s</ul>',
		'container'      => false,
		'fallback_cb'    => false,
		'link_before'    => '<span class="text-wrap">',
		'link_after'     => '</span>',
		'walker'         => new Ubik_Custom_Nav_Walker(),
	); ?>
	
	<nav class="mobile-menu-nav" <?php ubik_schema_markup( 'site_navigation' ); ?>>

    <?php wp_nav_menu($menu_args); ?>

	</nav>

<?php endif; ?>