<?php
/**
 * Function to register custom fields.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bigbang
 */

if ( function_exists('acf_add_local_field_group') ) :

	$post_types = ['page', 'post', 'promotion', 'service'];

	$header_layouts = array();

	if ( $module_slideshow ) 	{ $header_layouts[] = $module_slideshow; }
	if ( $module_hero )		 	{ $header_layouts[] = $module_hero; }
	if ( $module_newsletter )	{ $header_layouts[] = $module_newsletter; }

	$footer_layouts = array();

	if ( $module_newsletter ) 	{ $footer_layouts[] = $module_newsletter; }
	if ( $module_form )		 	{ $footer_layouts[] = $module_form; }
	if ( $module_testimonials )	{ $footer_layouts[] = $module_testimonials; }
	if ( $module_blog )		 	{ $footer_layouts[] = $module_blog; }

	foreach ( $post_types as $post_type ) {
		
		acf_add_local_field_group(array(
			'key' => 'group_' . $post_type . '_header_modules',
			'title' => $post_type . '-header-modules',
			'fields' => array(
				array(
					'layouts' => $header_layouts,
					'min' => '',
					'max' => '',
					'button_label' => 'Add Module',
					'key' => $post_type . '_header_modules_field_modules',
					'label' => 'Header Modules',
					'name' => $post_type . '_header_modules',
					'type' => 'flexible_content',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'acf-options-' . $post_type . '-modules',
					),
				),
			),
			'menu_order' => 0,
			'position' => 'normal',
			'style' => 'seamless',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => array(
				0 => 'format',
				1 => 'featured_image',
			),
			'active' => 1,
			'description' => '',
		));

		acf_add_local_field_group(array(
			'key' => 'group_' . $post_type . '_footer_modules',
			'title' => '' . $post_type . '-footer-modules',
			'fields' => array(
				array(
					'layouts' => $footer_layouts,
					'min' => '',
					'max' => '',
					'button_label' => 'Add Module',
					'key' => $post_type . '_footer_modules_field_modules',
					'label' => 'Footer Modules',
					'name' => $post_type . '_footer_modules',
					'type' => 'flexible_content',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
				),
			),
			'location' => array(
				array(
					array(
						'param' => 'options_page',
						'operator' => '==',
						'value' => 'acf-options-' . $post_type . '-modules',
					),
				),
			),
			'menu_order' => 1,
			'position' => 'normal',
			'style' => 'seamless',
			'label_placement' => 'top',
			'instruction_placement' => 'label',
			'hide_on_screen' => array(
				0 => 'format',
				1 => 'featured_image',
			),
			'active' => 1,
			'description' => '',
		));
	}

endif;
