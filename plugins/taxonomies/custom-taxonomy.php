<?php
/**
 * Function to register taxonomy.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bigbang
 */

function register_custom_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Custom_taxonomies', 'Taxonomy General Name', 'bigbang' ),
		'singular_name'              => _x( 'Custom_taxonomy', 'Taxonomy Singular Name', 'bigbang' ),
		'menu_name'                  => __( 'Custom_taxonomy', 'bigbang' ),
		'all_items'                  => __( 'All Items', 'bigbang' ),
		'parent_item'                => __( 'Parent Item', 'bigbang' ),
		'parent_item_colon'          => __( 'Parent Item:', 'bigbang' ),
		'new_item_name'              => __( 'New Item Name', 'bigbang' ),
		'add_new_item'               => __( 'Add New Item', 'bigbang' ),
		'edit_item'                  => __( 'Edit Item', 'bigbang' ),
		'update_item'                => __( 'Update Item', 'bigbang' ),
		'view_item'                  => __( 'View Item', 'bigbang' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'bigbang' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'bigbang' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'bigbang' ),
		'popular_items'              => __( 'Popular Items', 'bigbang' ),
		'search_items'               => __( 'Search Items', 'bigbang' ),
		'not_found'                  => __( 'Not Found', 'bigbang' ),
		'no_terms'                   => __( 'No items', 'bigbang' ),
		'items_list'                 => __( 'Items list', 'bigbang' ),
		'items_list_navigation'      => __( 'Items list navigation', 'bigbang' ),
	);
	$rewrite = array(
		'slug'                       => 'custom_taxonomy',
		'with_front'                 => true,
		'hierarchical'               => false,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'custom_taxonomy', array( 'custom_post_type' ), $args );

}
add_action( 'init', 'register_custom_taxonomy', 0 );
