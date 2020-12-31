<?php
/**
 * Editor dynamic styles
 *
 * @package Ubik WordPress theme
 */

/**
 * Generate css for customizer settings.
 */
function ubik_custom_editor_css() {

	$color_scheme = esc_attr( get_theme_mod( 'ubik_colorscheme', 'light' ) );
	$primary_color = esc_attr( get_theme_mod( 'ubik_site_primary_color', '#1779ba' ) );
	$text_color = esc_attr( get_theme_mod( 'ubik_site_text_color', '#929292' ) );
	$links_color = esc_attr( get_theme_mod( 'ubik_site_links_color', '#333' ) );
	$links_color_hover = esc_attr( get_theme_mod( 'ubik_site_links_color_hover', '#333' ) );

	if ( 'custom' == $color_scheme ) {

		$editor_css = '
		.editor-styles-wrapper .editor-block-list__layout {
			color: ' . $text_color . ';
		}
		.editor-block-list__layout .editor-block-list__block a {
			color: ' . $links_color . ';
		}
		.editor-block-list__layout .editor-block-list__block a:hover {
			color: ' . $links_color_hover . ';
		}
		';

	} else {

		$editor_css = '
		.editor-block-list__layout .editor-block-list__block a,
		.editor-block-list__layout .editor-block-list__block a:hover {
			color: ' . $primary_color . ';
		}
		';

	}

	

	return apply_filters( 'ubik_custom_editor_css', $editor_css );

}