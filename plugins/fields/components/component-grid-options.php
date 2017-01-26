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
	'key' => 'group_component_grid_options',
	'title' => 'component-grid-options',
	'fields' => array(
		array(
			'multiple' => 0,
			'allow_null' => 0,
			'choices' => array(
				'dynamic' => 'Dynamic',
				'manual' => 'Manually',
			),
			'default_value' => array(
				0 => 'dynamic',
			),
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'return_format' => 'value',
			'key' => 'component_grid_options_field_grid_selection',
			'label' => 'Grid Selection',
			'name' => 'grid_selection',
			'type' => 'select',
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
			'multiple' => 0,
			'allow_null' => 0,
			'choices' => array(
				'default' => 'Default',
				'desc' => 'DESC',
				'asc' => 'ASC',
				'random' => 'Random',
			),
			'default_value' => array(
				0 => 'default',
			),
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'return_format' => 'value',
			'key' => 'component_grid_options_field_grid_order',
			'label' => 'Grid Order',
			'name' => 'grid_order',
			'type' => 'select',
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
			'default_value' => '',
			'min' => 1,
			'max' => '',
			'step' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'component_grid_options_field_max_item',
			'label' => 'Max item amount',
			'name' => 'max_item',
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
			'multiple' => 0,
			'allow_null' => 0,
			'choices' => array(
				'disable' => 'Disable',
				'infinite' => 'Infinite Scroller',
				'pagination' => 'Pagination',
				'button' => 'Button Link',
			),
			'default_value' => array(
			),
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'return_format' => 'value',
			'key' => 'component_grid_options_field_load_more',
			'label' => 'Load More',
			'name' => 'load_more',
			'type' => 'select',
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
			'post_type' => array(
			),
			'taxonomy' => array(
			),
			'min' => '',
			'max' => '',
			'filters' => array(
				0 => 'search',
				1 => 'post_type',
				2 => 'taxonomy',
			),
			'elements' => '',
			'return_format' => 'object',
			'key' => 'field_5887aa640f6f0',
			'label' => 'Posts',
			'name' => 'posts',
			'type' => 'relationship',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'component_grid_options_field_grid_selection',
						'operator' => '==',
						'value' => 'manual',
					),
				),
			),
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
		),
		array(
			'multiple' => 0,
			'allow_null' => 0,
			'default_value' => '',
			'placeholder' => '',
			'disabled' => 0,
			'readonly' => 0,
			'key' => 'component_grid_options_field_posts',
			'label' => 'Posts',
			'name' => 'posts',
			'type' => 'posttype_select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'component_grid_options_field_grid_selection',
						'operator' => '==',
						'value' => 'dynamic',
					),
				),
			),
			'wrapper' => array(
				'width' => '50',
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
			'key' => 'component_grid_options_grid_button_link',
			'label' => 'Button Link',
			'name' => 'grid_button_link',
			'type' => 'clone',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'component_grid_options_field_load_more',
						'operator' => '==',
						'value' => 'button',
					),
				),
			),
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
