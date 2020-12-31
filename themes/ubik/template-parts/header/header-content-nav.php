<?php
/**
 * Header content navigation template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Display menu if defined
if ( has_nav_menu( 'header_content_nav' ) ) :

  // Menu classes and data-attributes
	$menu_classes = array( 'menu' );
	$menu_data_attributes = array();

	$menu_classes[] = 'dropdown';
	$menu_data_attributes[] = 'data-dropdown-menu';

	// Turn menu classes into space seperated string
	$menu_classes = implode( ' ', $menu_classes );
	$menu_data_attributes = implode( ' ', $menu_data_attributes );

  // Menu arguments
	$menu_args = array(
		'theme_location' => 'header_content_nav',
		'menu_class'     => $menu_classes,
		'items_wrap'     => '<ul id="%1$s" class="%2$s"' . $menu_data_attributes . '>%3$s</ul>',
		'container'      => false,
		'fallback_cb'    => false,
		'link_before'    => '<span class="text-wrap">',
		'link_after'     => '</span>',
		'walker'         => new Ubik_Custom_Nav_Walker(),
	); ?>
	
	<nav <?php ubik_schema_markup( 'site_navigation' ); ?>>

    <?php wp_nav_menu($menu_args); ?>

	</nav>

<?php elseif ( is_customize_preview() ) : ?>

	<span style="font-style:italic;font-size:14px;">
		<?php echo __( 'Add a menu to Header Content location', 'ubik' ); ?>
	</span>

<?php endif; ?>
