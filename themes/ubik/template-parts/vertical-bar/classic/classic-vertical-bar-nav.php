<?php
/**
 * Classic vertical bar navigation template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$nav_style = get_theme_mod('ubik_classic_vertical_bar_nav_style', 'accordion');

// Display menu if defined
if ( has_nav_menu( 'vertical_bar_nav' ) ) :

  // Menu classes and data-attributes
	$menu_classes = array( 'menu vertical' );
	$menu_data_attributes = array();

	if ( 'drilldown' == $nav_style ) {
		$menu_classes[] = 'drilldown';
		$menu_data_attributes[] = 'data-drilldown';
	} else {
		$menu_classes[] = 'accordion-menu';
		$menu_data_attributes[] = 'data-accordion-menu';
	}

	// Turn menu classes into space seperated string
	$menu_classes = implode( ' ', $menu_classes );
	$menu_data_attributes = implode( ' ', $menu_data_attributes );

  // Menu arguments
	$menu_args = array(
		'theme_location' => 'vertical_bar_nav',
		'menu_class'     => $menu_classes,
		'items_wrap'     => '<ul id="%1$s" class="%2$s"' . $menu_data_attributes . '>%3$s</ul>',
		'container'      => false,
		'fallback_cb'    => false,
		'link_before'    => '<span class="text-wrap">',
		'link_after'     => '</span>',
		'walker'         => new Ubik_Custom_Nav_Walker(),
	); ?>
	
	<nav class="classic-vertical-bar-nav <?php echo esc_attr( ubik_classic_vertical_bar_nav_classes() ); ?>" <?php ubik_schema_markup( 'site_navigation' ); ?>>

    <?php wp_nav_menu($menu_args); ?>

	</nav>

<?php endif; ?>
