<?php



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
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
}
add_action( 'widgets_init', 'bigbang_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bigbang_scripts() {

	wp_enqueue_style('fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css', array(), '4.5.0', 'all');

	wp_enqueue_style( 'bigbang-style', get_stylesheet_uri() );

	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/lib/modernizr.min.js', array(), '2.8.3', false );

	wp_enqueue_script( 'bigbang-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bigbang_scripts' );

// Main navigation
function bigbang_main_nav() {

	wp_nav_menu(
	array(
		'theme_location'  => 'main',
		'menu'            => '',
		'container'       => false,
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => 'nav navbar-nav',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul class="nav navbar-nav nav-main">%3$s</ul>',
		'depth'           => 2,
		)
	);
}

/**
 * Helpers.
 */
// require get_template_directory() . '/plugins/helpers/pagination.php';

/**
 * Custom Post Types.
 */
// require get_template_directory() . '/plugins/post-types/custom-post-type.php';

/**
 * Custom Taxonomies.
 */
// require get_template_directory() . '/plugins/taxonomies/custom-taxonomy.php';

/**
 * Custom Fields - Components.
 */
require get_template_directory() . '/plugins/fields/components/component-common-fields.php';
require get_template_directory() . '/plugins/fields/components/component-heading.php';
require get_template_directory() . '/plugins/fields/components/component-button.php';
require get_template_directory() . '/plugins/fields/components/component-carousel-options.php';
require get_template_directory() . '/plugins/fields/components/component-grid-options.php';
require get_template_directory() . '/plugins/fields/components/component-newsletter.php';
require get_template_directory() . '/plugins/fields/components/component-slide.php';


/**
 * Custom Fields - Modules.
 */
require get_template_directory() . '/plugins/fields/modules/module-hero.php';
require get_template_directory() . '/plugins/fields/modules/module-slideshow.php';
require get_template_directory() . '/plugins/fields/modules/module-grid.php';
require get_template_directory() . '/plugins/fields/modules/module-newsletter.php';

/**
 * Custom Fields - Layouts.
 */
require get_template_directory() . '/plugins/fields/page-modules.php';
require get_template_directory() . '/plugins/fields/post-modules.php';

/**
 * Adding Option pages from ACF-PRO.
 */
// if( function_exists('acf_add_options_page') ) {
// 	acf_add_options_page(array(
// 		'page_title'    => 'Opciones Generales',
// 		'menu_title'    => 'Opciones Generales',
// 		'menu_slug'     => 'general-settings',
// 		'capability'    => 'edit_posts',
// 		'redirect'      => false
// 	));
// }

/**
 * Moving feature image metabox into main column in admin panel.
 */
// function meta_box_position() {
// 	remove_meta_box( 'postimagediv', 'custom_post_type', 'side' );
// 	add_meta_box('postimagediv', __('Feature Image'), 'post_thumbnail_meta_box', 'custom_post_type', 'acf_after_title', 'high');
// }
// add_action('do_meta_boxes', 'meta_box_position');

/**
 * Remove post type post from administrator menu.
 */
// function remove_menu_items() {
//     remove_menu_page( 'edit.php' );
// }
// add_action( 'admin_menu', 'remove_menu_items' );

/**
 * Adding google map api key.
 */
// function my_acf_init() {	
// 	acf_update_setting('google_api_key', 'xxxxxxx');
// }
// add_action('acf/init', 'my_acf_init');

/**
 * Forcing single column layout for all Custom Post Types including Page and Post.
 */
function get_custom_post_types() {
	$args = array(
		'public' => true,
		'_builtin' => false
	);
	$post_types = get_post_types( $args, 'names');
	// Comment the next 2 lines to exclude Page and Post.
	$post_types['page'] = 'page';
	$post_types['post'] = 'post';

	function set_single_column() {
		return 1;
	}

	foreach ( $post_types as $post_type ) {
		$get_user_option_screen_layout = 'get_user_option_screen_layout_' . $post_type;

		add_filter( $get_user_option_screen_layout, 'set_single_column');
	}
}
add_action('wp_loaded', 'get_custom_post_types');

function fix_acf_fc_popup_css() {
  	echo '<style>
			/* acf_fc_popup */
			a[data-event="add-layout"].acf-button.button-primary {
				min-width: 200px;
			    margin-right: 12px !important;
			    text-align: center;
			}
		</style>';
}
add_action('admin_head', 'fix_acf_fc_popup_css');