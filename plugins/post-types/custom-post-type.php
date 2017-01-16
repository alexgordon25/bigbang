<?php
/**
 * Rooms Post Type creation file.
 *
 * @package bigbang
 */

// Register Custom Post Type
function register_custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Custom_Post_Types', 'Post Type General Name', 'bigbang' ),
		'singular_name'         => _x( 'Custom_Post_Type', 'Post Type Singular Name', 'bigbang' ),
		'menu_name'             => __( 'Custom_Post_Types', 'bigbang' ),
		'name_admin_bar'        => __( 'Custom_Post_Type', 'bigbang' ),
		'archives'              => __( 'Item Archives', 'bigbang' ),
		'parent_item_colon'     => __( 'Parent Item:', 'bigbang' ),
		'all_items'             => __( 'All Items', 'bigbang' ),
		'add_new_item'          => __( 'Add New Item', 'bigbang' ),
		'add_new'               => __( 'Add New', 'bigbang' ),
		'new_item'              => __( 'New Item', 'bigbang' ),
		'edit_item'             => __( 'Edit Item', 'bigbang' ),
		'update_item'           => __( 'Update Item', 'bigbang' ),
		'view_item'             => __( 'View Item', 'bigbang' ),
		'search_items'          => __( 'Search Item', 'bigbang' ),
		'not_found'             => __( 'Not found', 'bigbang' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'bigbang' ),
		'featured_image'        => __( 'Featured Image', 'bigbang' ),
		'set_featured_image'    => __( 'Set featured image', 'bigbang' ),
		'remove_featured_image' => __( 'Remove featured image', 'bigbang' ),
		'use_featured_image'    => __( 'Use as featured image', 'bigbang' ),
		'insert_into_item'      => __( 'Insert into item', 'bigbang' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'bigbang' ),
		'items_list'            => __( 'Items list', 'bigbang' ),
		'items_list_navigation' => __( 'Items list navigation', 'bigbang' ),
		'filter_items_list'     => __( 'Filter items list', 'bigbang' ),
	);
	$rewrite = array(
		'slug'                  => 'custom_post_type',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => __( 'Custom_Post_Type', 'bigbang' ),
		'description'           => __( 'Custom_Post_Types for bigbang', 'bigbang' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,		
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'custom_post_type', $args );

}
add_action( 'init', 'register_custom_post_type', 0 );
