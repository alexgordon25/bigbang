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
				'post' => 'Post items',
				'square' => 'Square Thumbs',
				'post_left_thumb' => 'Post with left thumb',
			),
			'default_value' => array(
				0 => 'post',
			),
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'return_format' => 'value',
			'key' => 'component_grid_options_field_grid_layout',
			'label' => 'Grid Layout',
			'name' => 'grid_layout',
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
			'default_value' => 0,
			'message' => '',
			'ui' => 1,
			'ui_on_text' => 'Enable',
			'ui_off_text' => 'Disable',
			'key' => 'component_grid_options_field_remove_gutter',
			'label' => 'Remove Gutter',
			'name' => 'remove_gutter',
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
				'date' => 'Post Date',
				'ID' => 'Post ID',
				'type' => 'type',
				'title' => 'title',
				'rand' => 'Random',
			),
			'default_value' => array(
				0 => 'date',
			),
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'return_format' => 'value',
			'key' => 'component_grid_options_field_grid_orderby',
			'label' => 'Grid Order By',
			'name' => 'grid_orderby',
			'type' => 'select',
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
				'width' => '25',
				'class' => '',
				'id' => '',
			),
		),
		array(
			'multiple' => 0,
			'allow_null' => 0,
			'choices' => array(
				'DESC' => 'DESC',
				'ASC' => 'ASC',
			),
			'default_value' => array(
				0 => 'DESC',
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
				'width' => '25',
				'class' => '',
				'id' => '',
			),
		),
		array(
			'taxonomies' => array(
				0 => 'all',
			),
			'data_type' => 'terms',
			'field_type' => 'multiselect',
			'allow_null' => 1,
			'post_type' => '',
			'return_value' => 'object',
			'key' => 'component_grid_options_field_taxonomy_selector',
			'label' => 'taxonomy selector',
			'name' => 'taxonomy_selector',
			'type' => 'advanced_taxonomy_selector',
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
				'width' => '25',
				'class' => '',
				'id' => '',
			),
		),
		array(
			'default_value' => 8,
			'min' => 1,
			'max' => '',
			'step' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'component_grid_options_field_posts_per_page',
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
			'elements' => array(
				0 => 'featured_image',
			),
			'return_format' => 'object',
			'key' => 'component_grid_options_field_posts_manual',
			'label' => 'Posts',
			'name' => 'posts_manual',
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
			'key' => 'component_grid_options_field_posts_dynamic',
			'label' => 'Post Selector',
			'name' => 'posts_dynamic',
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
			'key' => 'component_grid_options_button_link',
			'label' => 'Button Link',
			'name' => 'button_link',
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
