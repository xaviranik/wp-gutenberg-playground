<?php
/**
 * Plugin Name:       Wp Gp
 * Description:       Gutenberg block development playground
 * Requires at least: 5.9
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            The WordPress Contributors
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       wp-gp
 *
 * @package           xvr
 */

function create_block_wp_gp_block_init() {
	register_block_type( __DIR__ . '/build' );
}
add_action( 'init', 'create_block_wp_gp_block_init' );
