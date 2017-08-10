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
		'key' => 'group_module_testimonials',
		'title' => 'module-testimonials',
		'fields' => array(
			array(
				'placement' => 'top',
				'endpoint' => 0,
				'key' => 'module_testimonials_field_tab_options',
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
					0 => 'group_component_testimonials',
				),
				'prefix_label' => 0,
				'prefix_name' => 0,
				'display' => 'seamless',
				'layout' => 'block',
				'key' => 'module_testimonials_field_testimonials_options',
				'label' => 'Testimonials Options',
				'name' => 'testimonials_options',
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
					0 => 'group_component_heading',
				),
				'prefix_label' => 0,
				'prefix_name' => 0,
				'display' => 'seamless',
				'layout' => 'block',
				'key' => 'module_grid_add_heading',
				'label' => 'Add Heading',
				'name' => 'add_heading',
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
				'key' => 'module_testimonials_field_more',
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

	$module_testimonials = array(
		'key' => 'layout_testimonials_module',
		'name' => 'testimonials_module',
		'label' => 'Testimonials',
		'display' => 'block',
		'sub_fields' => array(
			array(
				'clone' => array(
					0 => 'group_module_testimonials',
				),
				'prefix_label' => 0,
				'prefix_name' => 0,
				'display' => 'seamless',
				'layout' => 'block',
				'key' => 'layout_testimonials_module_field_testimonials',
				'label' => 'Testimonials',
				'name' => 'testimonials',
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