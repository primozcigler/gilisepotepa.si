<?php
/**
 * Functions of the child theme for Readable WP
 */

/**
 * Add the style.css (from this folder) after the main.css file
 *
 * @link http://codex.wordpress.org/Function_Reference/wp_enqueue_style Codex for wp_enqueue_style()
 */
function add_additional_css() {
	wp_enqueue_style( 'childtheme-gili', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'add_additional_css', 20 );
