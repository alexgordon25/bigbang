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
		'key' => 'group_5888cc7596f11',
		'title' => 'module-newsletter',
		'fields' => array(
			array(
				'placement' => 'top',
				'endpoint' => 0,
				'key' => 'field_5888dacc4b7d2',
				'label' => 'Options',
				'name' => '',
				'type' => 'tab',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
			),
			array(
				'clone' => array(
					0 => 'group_component_newsletter',
				),
				'prefix_label' => 0,
				'prefix_name' => 0,
				'display' => 'seamless',
				'layout' => 'block',
				'key' => 'field_5888cd697821d',
				'label' => 'newsletter',
				'name' => 'newsletter',
				'type' => 'clone',
				'instructions' => '',
				'required' => 0,
				'conditional_logic' => 0,
				'wrapper' => array(
					'width' => '',
					'class' => '',
					'id' => '',
				),
			),
			array(
				'clone' => array(
					0 => 'group_component_common_fields',
				),
				'prefix_label' => 0,
				'prefix_name' => 0,
				'display' => 'seamless',
				'layout' => 'block',
				'key' => 'field_5888dad84b7d3',
				'label' => 'More',
				'name' => 'more',
				'type' => 'clone',
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

	$module_newsletter = array(
		'key' => '5888ce8bc06d7',
		'name' => 'newsletter_module',
		'label' => 'Newsletter',
		'display' => 'block',
		'sub_fields' => array(
			array(
				'clone' => array(
					0 => 'group_5888cc7596f11',
				),
				'prefix_label' => 0,
				'prefix_name' => 0,
				'display' => 'seamless',
				'layout' => 'block',
				'key' => 'field_5888ce97c06d8',
				'label' => 'Newsletter',
				'name' => 'newsletter',
				'type' => 'clone',
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
		'min' => '',
		'max' => '',
	);

endif;