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
	'key' => 'group_component_blog',
	'title' => 'component-blog',
	'fields' => array(
		array(
			'default_value' => 2,
			'min' => '',
			'max' => 8,
			'step' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'component_blog_field_posts_per_page',
			'label' => 'Items per page',
			'name' => 'posts_per_page',
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
			'clone' => array(
				0 => 'group_component_button',
			),
			'prefix_label' => 0,
			'prefix_name' => 0,
			'display' => 'group',
			'layout' => 'block',
			'key' => 'component_blog_field_button_link',
			'label' => 'Button Link',
			'name' => 'button_link',
			'type' => 'clone',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
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
