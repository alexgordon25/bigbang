<?php
/**
 * bigbang performasnce and miscellaneous functionalities.
 *
 * @package bigbang
 */

/**
 * Get list of custom postype.
 */
function get_custom_post_types() {
	$args = array(
		'public' => true,
		'_builtin' => false
	);
	$post_types = get_post_types( $args, 'names');
	return $post_types;
}

/**
 * Forcing single column layout.
 */
function set_single_column() {
	$post_types = get_custom_post_types();
	// Comment the next 2 lines to exclude Page and Post.
	$post_types['page'] = 'page';
	$post_types['post'] = 'post';

	function single_column() {
		return 1;
	}

	foreach ( $post_types as $post_type ) {
		$get_user_option_screen_layout = 'get_user_option_screen_layout_' . $post_type;

		add_filter( $get_user_option_screen_layout, 'single_column');
	}
}
add_action('wp_loaded', 'set_single_column');

/**
 * Adding some styles to admin panel.
 */
function fix_acf_fc_popup_css() {
  	echo '<style>
			/* acf_fc_popup */
			a[data-event="add-layout"].acf-button.button-primary {
				min-width: 200px;
			    margin-right: 12px !important;
			    text-align: center;
			}

			input[type="submit"]#publish {
				background: #33cc33;
				border-color: #009900 #009900 #009900;
			    box-shadow: 0 1px 0 #009900;
		        text-shadow: 0 -1px 1px #009900, 1px 0 1px #009900, 0 1px 1px #009900, -1px 0 1px #009900;
			}
		</style>';
}
add_action('admin_head', 'fix_acf_fc_popup_css');

/**
 * Require Authentication for All API Reque​sts.
 */
add_filter( 'rest_authentication_errors', function( $result ) {
    if ( ! empty( $result ) ) {
        return $result;
    }
    if ( ! is_user_logged_in() ) {
        return new WP_Error( 'rest_not_logged_in', 'You are not currently logged in.', array( 'status' => 401 ) );
    }
    return $result;
});

/**
 * Display ACF Plugin requirement.
 */
if ( ! function_exists( 'acf_add_local_field_group' ) ) {
	add_action('admin_notices', function() {
		echo '<div class="update-nag"><p><a href="https://www.advancedcustomfields.com/pro/" target="_blank">Advanced Custom Fields Pro</a> is required to use this theme</p></div>';
		echo '<div class="update-nag"><p><a href="https://wordpress.org/plugins/post-type-select-for-advanced-custom-fields/" target="_blank">Post Type Selector</a> is required to use this theme</p></div>';
		echo '<div class="update-nag"><p><a href="https://wordpress.org/plugins/acf-advanced-taxonomy-selector/" target="_blank">Advanced Taxonomy Selector</a> is required to use this theme</p></div>';
	});
}

/**
 * Removing Admin bar.
 */
add_filter('show_admin_bar', '__return_false');

/**
 * Adding Option pages from ACF-PRO.
 */
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title'    => __( 'Theme Options', 'bigbang' ),
		'menu_title'    => __( 'Theme Options', 'bigbang' ),
		'menu_slug'     => 'theme-options',
		'capability'    => 'edit_posts',
		'redirect'      => false
	));
}

/**
 * Moving feature image metabox into main column in admin panel.
 */
function meta_box_position() {
	$post_types = get_custom_post_types();
	// Comment the next 2 lines to exclude Page and Post.
	$post_types['post'] = 'post';
	foreach ( $post_types as $post_type ) {
		remove_meta_box( 'postimagediv', $post_type, 'side' );
		add_meta_box('postimagediv', __('Feature Image'), 'post_thumbnail_meta_box', $post_type, 'acf_after_title', 'high');
	}
}
add_action('do_meta_boxes', 'meta_box_position');

/**
 * Add custom CSS class to body by filter.
 *
 * @param array $classes Array of classes.
 */
function page_class( $classes ) {
	global $post;
	$slug = ( isset( get_post( $post )->post_name ) ? get_post( $post )->post_name : 'no-slug' );
	$new_class = 'page-' . $slug;
	$classes[] = $new_class;
	return $classes;
}
add_filter( 'body_class', 'page_class' );

// Moves Yoast plugin to bottom position.
add_filter( 'wpseo_metabox_prio', function() {
	return 'low';
});

/**
 * Remove post type post from administrator menu.
 */
function remove_menu_items() {
    remove_menu_page( 'edit.php' );
}
// add_action( 'admin_menu', 'remove_menu_items' );

/**
 * Adding google map api key.
 */
function my_acf_init() {	
	acf_update_setting('google_api_key', 'YOURAPIKEY');
}
// add_action('acf/init', 'my_acf_init');
