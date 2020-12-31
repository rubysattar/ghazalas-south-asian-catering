<?php
/**
 * Sanitization Callbacks
 * 
 * @package Ubik WordPress theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/** 
 * [ Table of contents ]
 *	ubik_sanitize_select()
 *	ubik_sanitize_switch()
 */

/**
 * Select sanitization callback
 *
 * @since 1.0.0
 */
 function ubik_sanitize_select( $input, $setting ) {
	// Sanitize.
	$input = sanitize_key( $input );
	
	// Get list of choices.
	$choices = $setting->manager->get_control( $setting->id )->choices;
	
	// If the input is a valid key, return it; otherwise, return the default.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

/**
 * Switch sanitization
 */
function ubik_sanitize_switch( $input ) {
	if ( true === $input ) {
		return 1;
	} else {
		return 0;
	}
}