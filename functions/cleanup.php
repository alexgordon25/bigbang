<?php
/**
 * bigbang Cleanup functionalities.
 * Cleans up styles generated by Wordpress by default.
 * If you don't want to use any of these, just comment the line.
 *
 * @package bigbang
 */

add_action( 'after_setup_theme','bigbang_cleanup', 16 );

function bigbang_cleanup() {

	// Clean up the header.
	add_action( 'init', 'bigbang_head_cleanup' );
	
	// Remove injected css for recent comments widget.
	add_filter( 'wp_head', 'bigbang_remove_widget_comments_style', 1 );
	
	// Clean up comment styles in the head
	add_action( 'wp_head', 'bigbang_remove_recent_comments_style', 1 );
	
	// Clean up galleries.
	add_filter( 'gallery_style', 'bigbang_gallery_style' );
	
	// Adding sidebars to Wordpress.
	//add_action( 'widgets_init', 'joints_register_sidebars' );
	
	// Cleaning up the excerpt.
	add_filter( 'excerpt_more', 'bigbang_excerpt_more' );

}

// Clean up the header.
function bigbang_head_cleanup() {

	// Remove category feeds.
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	// Remove post and comment feeds.
	remove_action( 'wp_head', 'feed_links', 2 );
	// Remove EditURI link.
	remove_action( 'wp_head', 'rsd_link' );
	// Remove Windows live writer.
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// Remove index link.
	remove_action( 'wp_head', 'index_rel_link' );
	// Remove previous link.
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// Remove start link.
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// Remove links for adjacent posts.
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	// Remove WP version.
	remove_action( 'wp_head', 'wp_generator' );
}

// Remove injected CSS for recent comments widget.
function bigbang_remove_widget_comments_style() {
   if ( has_filter( 'wp_head', 'wp_widget_recent_comments_style' ) ) {
	  remove_filter( 'wp_head', 'wp_widget_recent_comments_style' );
   }
}

// Remove injected CSS from recent comments widget.
function bigbang_remove_recent_comments_style() {
  global $wp_widget_factory;
  if ( isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments'] ) ) {
	remove_action( 'wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
  }
}

// Remove injected CSS from gallery.
function bigbang_gallery_style( $css ) {
  return preg_replace( "!<style type='text/css'>(.*?)</style>!s", '', $css );
}

// Remove the […] of a 'Read More' link.
function bigbang_excerpt_more( $more ) {
	global $post;
	// edit here if you like
	return '<a class="excerpt-read-more" href="' . get_permalink( $post->ID ) . '" title="' . __( 'Read', 'bigbang') . get_the_title( $post->ID ) . '">' . __( '... Read more &raquo;', 'bigbang') . '</a>';
}

// Stop WordPress from using the sticky class and use .wp-sticky class instead.
function remove_sticky_class( $classes ) {
	if( in_array( 'sticky', $classes ) ) {
		$classes = array_diff( $classes, array( 'sticky' ) );
		$classes[] = 'wp-sticky';
	}
	
	return $classes;
}
add_filter( 'post_class','remove_sticky_class');

// This is a modified the_author_posts_link() which just returns the link. This is necessary to allow usage of the usual l10n process with printf()
function bigbang_get_the_author_posts_link() {
	global $authordata;
	if ( !is_object( $authordata ) )
		return false;
	$link = sprintf(
		'<a href="%1$s" title="%2$s" rel="author">%3$s</a>',
		get_author_posts_url( $authordata->ID, $authordata->user_nicename ),
		esc_attr( sprintf( __( 'Posts by %s', 'bigbangwp' ), get_the_author() ) ), // No further l10n needed, core will take care of this one
		get_the_author()
	);
	return $link;
}