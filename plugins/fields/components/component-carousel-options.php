<?php
/**
 * Function to register custom fields.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bigbang
 */

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_component_carousel_options',
	'title' => 'component-carousel-options',
	'fields' => array(
		array(
			'default_value' => 1,
			'min' => 1,
			'max' => 4,
			'step' => '',
			'placeholder' => '',
			'prepend' => '#',
			'append' => 'slides',
			'key' => 'component_carousel_options_field_slides_desktop',
			'label' => 'Initial Slides for Desktop',
			'name' => 'slides_desktop',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
		),
		array(
			'default_value' => 1,
			'min' => 1,
			'max' => 4,
			'step' => 25,
			'placeholder' => '',
			'prepend' => '#',
			'append' => 'slides',
			'key' => 'component_carousel_options_field_slides_mobile',
			'label' => 'Initial Slides for Mobile',
			'name' => 'slides_mobile',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
		),
		array(
			'default_value' => 1,
			'message' => '',
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
			'key' => 'component_carousel_options_field_autoplay',
			'label' => 'Autoplay',
			'name' => 'autoplay',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
		),
		array(
			'default_value' => 1,
			'message' => '',
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
			'key' => 'component_carousel_options_field_loop',
			'label' => 'Loop',
			'name' => 'loop',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '25',
				'class' => '',
				'id' => '',
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => 0,
	'description' => '',
));

endif;
