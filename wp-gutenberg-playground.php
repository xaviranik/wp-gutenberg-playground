<?php

/**
 * Plugin Name: Wp Gutenberg Playground
 * Description: Wp Gutenberg block development playground
 * URI: https://zabiranik.com
 * Author: Zabir Anik
 * Author URI: https://zabiranik.com
 * Version: 1.0.0
 * License: GPL2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wp-gp
 */

 function wp_gp_init() {
    register_block_type_from_metadata( __DIR__ );
 }

add_action( 'init', 'wp_gp_init' );