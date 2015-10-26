<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package _amuhlou2016
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function _amuhlou2016_jetpack_setup() {
	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'infinite-scroll', array(
			'container' => 'content',
			'footer'    => 'page',
		) );
	}
}
add_action( 'after_setup_theme', '_amuhlou2016_jetpack_setup' );
