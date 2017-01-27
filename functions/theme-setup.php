<?php
/**
 * BigBang Theme Setup.
 *
 * Sets up theme defaults and registers support for various WordPress features.
 * These functionalities run before the init hook.
 * If you don't want to use any of these, just comment the line.
 *
 * @package bigbang
 */

if ( ! function_exists( 'bigbang_setup' ) ) :

	function bigbang_setup() {

		// Add thumbnail support.
		add_theme_support( 'post-thumbnails' );

		// Custom image sizes.
		add_image_size( 'custom-full',		1600,	'', true ); // Full Size.
		add_image_size( 'custom-large',		1200,	'', true ); // Large Thumbnail.
		add_image_size( 'custom-medium',	800,	'', true ); // Medium Thumbnail.
		add_image_size( 'custom-small',		480,	'', true ); // Small Thumbnail.
		add_image_size( 'custom-xsmall',	150,	'', true ); // Extra Small Thumbnail.

		// Default thumbnail size.
		set_post_thumbnail_size(150, 150, true);

		// Unset default image sizes and add new ones declared.
		function filter_image_sizes( $sizes ) {
			unset( $sizes['small'] );
			unset( $sizes['medium'] );
			unset( $sizes['large'] );

			return $sizes;
		}
		add_filter('intermediate_image_sizes_advanced', 'filter_image_sizes');

		// Add sizes to post insertion screen with custom names.
		function custom_image_sizes( $sizes ) {
			$myimgsizes = array(
				'custom-full' 	=> __( 'Custom Full' ),
				'custom-large' 	=> __( 'Custom Large' ),
				'custom-medium' => __( 'Custom Medium' ),
				'custom-small' 	=> __( 'Custom Small' ),
				'custom-xsmall' => __( 'Custom Thumbnail' ),
				'thumbnail' 	=> __( 'Thumbnail' ),
			);
			return $myimgsizes;
		}
		add_filter('image_size_names_choose', 'custom_image_sizes');

		// Add RSS support links to head.
		add_theme_support( 'automatic-feed-links' );
		
		// The <title> will not be harcoded in this theme and WordPress will provide it.
		add_theme_support( 'title-tag' );
		
		// HTML5 support in forms.
		add_theme_support( 'html5', 
			array( 
				'comment-list', 
				'comment-form', 
				'search-form',
				'gallery',
				'caption',
			) 
		);
		
		// Enable post format.
		 add_theme_support( 'post-formats',
			array(
				'aside',		// title less blurb
				'gallery',		// gallery of images
				'link',			// quick link to other site
				'image',		// an image
				'quote',		// a quick quote
				'status',		// a Facebook like status update
				'video',		// video
				'audio', 		// audio
				'chat'			// chat transcript
			)
		); 
		
		// Set the maximum allowed width for any content in the theme, like oEmbeds and images added to posts.
		$GLOBALS['content_width'] = apply_filters( 'bigbang_setup', 1200 );
		
	}
	add_action( 'after_setup_theme', 'bigbang_setup' );

endif;