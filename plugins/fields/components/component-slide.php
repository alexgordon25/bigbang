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
	'key' => 'group_component_slide',
	'title' => 'component-slide',
	'fields' => array(
		array(
			'multiple' => 0,
			'allow_null' => 0,
			'choices' => array(
				'disable' => 'Disable',
				'h1' => '< h1 >',
				'h2' => '- < h2 >',
				'h3' => '-- < h3 >',
			),
			'default_value' => array(
				0 => 'h1',
			),
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'return_format' => 'value',
			'key' => 'component_slide_field_headline_tag',
			'label' => 'Headline Tag',
			'name' => 'headline_tag',
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
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'component_slide_field_headline',
			'label' => 'Headline',
			'name' => 'headline',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'component_slide_field_headline_tag',
						'operator' => '!=',
						'value' => 'disable',
					),
				),
			),
			'wrapper' => array(
				'width' => '75',
				'class' => '',
				'id' => '',
			),
		),
		array(
			'default_value' => '',
			'new_lines' => 'wpautop',
			'maxlength' => '',
			'placeholder' => '',
			'rows' => 5,
			'key' => 'component_slide_field_description',
			'label' => 'Description',
			'name' => 'description',
			'type' => 'textarea',
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
			'return_format' => 'array',
			'preview_size' => 'custom-small',
			'library' => 'all',
			'min_width' => '',
			'min_height' => '',
			'min_size' => '',
			'max_width' => '',
			'max_height' => '',
			'max_size' => '',
			'mime_types' => '',
			'key' => 'component_slide_field_image',
			'label' => 'Background Image',
			'name' => 'image',
			'type' => 'image',
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

endif;
