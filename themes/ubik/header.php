<?php
/**
 * The Header.
 *
 * @package Ubik WordPress theme
 */ ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php ubik_schema_markup( 'html' ); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<?php
	// Top bar template
	do_action( 'ubik_top_bar' ); ?>

	<?php
	// Mobile bar template
	do_action( 'ubik_mobile_bar' ); ?>

	<?php get_template_part( 'template-parts/site/site-search-overlay' ); ?>

	<div id="outer-wrap" class="site off-canvas-wrapper">

		<?php
		// Mobile menu template
		get_template_part( 'template-parts/mobile/mobile-menu' ); ?>

		<div id="wrap" class="site-content off-canvas-content grid-x" data-off-canvas-content>

			<?php
			// Classic vertical bar template
			do_action( 'ubik_classic_vertical_bar' ); ?>

			<div class="site-inner cell auto">

				<?php do_action( 'ubik_header' ); ?>

				<main id="main" class="site-main" <?php ubik_schema_markup( 'html' ); ?>>

