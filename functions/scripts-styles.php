<?php
/**
 * bigbang enqueue scripts and styles. Also, render blocking functionalities for scripts.
 *
 * @package bigbang
 */

function bigbang_scripts() {

	// Register main stylesheet.
    wp_enqueue_style( 'site-css', get_template_directory_uri() . 'style.css', array(), '', 'all' );

	// Register fontawesome.
	wp_enqueue_style(' fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '4.5.0', 'all' );

	if ( $GLOBALS['pagenow'] != 'wp-login.php' && !is_admin() ) {
		
		// Deregister WP jQuery and use the CDN version instead.
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'http://code.jquery.com/jquery-2.1.4.min.js', array(), '2.1.4', '' );
		wp_enqueue_script( 'jquery' );

		// Add Modernizr.
		wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/lib/modernizr.min.js', array(), '2.8.3', false );

		// Add scripts file in the footer.
		wp_enqueue_script( 'bigbang-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );
	}		

	// Comment reply script for threaded comments
	if ( is_singular() AND comments_open() AND ( get_option( 'thread_comments' ) == 1 ) ) {
	  wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bigbang_scripts', 999 );

/** 
 * Functions to render blocking javascript in WP. 
 * More info at: http://orbitingweb.com/blog/add-defer-async-attributes-to-scripts-in-wordpress/
 *
 * Function to add async or defer to all scripts. 
 * Replace, async="async" with defer="defer" if you would like to use the defer attribute instead.
 */
function js_async_attr($tag){
	return str_replace( ' src', ' async="async" src', $tag );
}
add_filter( 'script_loader_tag', 'js_async_attr', 10 );