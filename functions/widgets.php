<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 * 
 * @package bigbang
 */

function bigbang_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bigbang' ),
		'id'            => 'sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'bigbang' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Section 1', 'bigbang' ),
		'id'            => 'footer-section-1',
		'description'   => esc_html__( 'Add widgets here.', 'bigbang' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Section 2', 'bigbang' ),
		'id'            => 'footer-section-2',
		'description'   => esc_html__( 'Add widgets here.', 'bigbang' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bigbang_widgets_init' );
