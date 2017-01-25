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
		'key' => 'group_588782e96f81e',
		'title' => 'module-grid',
		'fields' => array(
			array(
				'placement' => 'top',
				'endpoint' => 0,
				'key' => 'field_5888db30c6d01',
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
					0 => 'group_component_grid_options',
				),
				'prefix_label' => 0,
				'prefix_name' => 0,
				'display' => 'seamless',
				'layout' => 'block',
				'key' => 'field_588784bfa3a09',
				'label' => 'Grid Options',
				'name' => 'grid_options',
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
				'key' => 'field_5888db38c6d02',
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

	$module_grid = array(
		'key' => '5887ad0524744',
		'name' => 'grid_module',
		'label' => 'Grid',
		'display' => 'block',
		'sub_fields' => array(
			array(
				'clone' => array(
					0 => 'group_588782e96f81e',
				),
				'prefix_label' => 0,
				'prefix_name' => 0,
				'display' => 'seamless',
				'layout' => 'block',
				'key' => 'field_5887ad1124745',
				'label' => 'Grid',
				'name' => 'grid',
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