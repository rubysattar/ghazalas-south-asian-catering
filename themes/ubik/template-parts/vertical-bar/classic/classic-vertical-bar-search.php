<?php
/**
 * Classic vertical bar search template part.
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$bar_visibility = get_theme_mod( 'ubik_classic_vertical_bar_device_visibility', 'show-desktop' );
$search_style = get_theme_mod( 'ubik_classic_vertical_bar_search_style', 'form' );
$tablet_search_style = get_theme_mod( 'ubik_classic_vertical_bar_search_style_tablet', 'form' );
?>

<div class="classic-vertical-bar-search <?php echo esc_attr( ubik_classic_vertical_bar_search_classes() ); ?>">

	<div class="show-for-large">

		<?php 
		if( 'overlay' == $search_style ) { ?>

			<div class="classic-vertical-bar-search-icon">

				<a href="#" class="classic_vertical_bar-search-toggle" data-open="search-overlay-container"><span class="fas fa-search"></span></a>

			</div>

		<?php
		} else { ?>

			<div class="classic-vertical-bar-search-form">

				<?php get_search_form(); ?>

			</div>

		<?php
		} ?>

	</div>

	<?php
	if ( 'show-desktop-tablet' == $bar_visibility ) { ?>

		<div class="show-for-medium-only">

			<?php 
			if( 'overlay' == $tablet_search_style ) { ?>

				<div class="classic-vertical-bar-search-icon">

					<a href="#" class="classic_vertical_bar-search-toggle" data-open = "search-overlay-container"><span class="fas fa-search"></span></a>

				</div>

			<?php
			} else { ?>

				<div class="classic-vertical-bar-search-form">

					<?php get_search_form(); ?>

				</div>

			<?php
			} ?>

		</div>

	<?php
	} ?>

</div>