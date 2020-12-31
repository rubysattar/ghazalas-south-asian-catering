<?php
/**
 * Blog single tags
 *
 * @package Ubik WordPress theme
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Display tags ?>
<div class="single-tags">
	<?php the_tags(); ?>
</div>
