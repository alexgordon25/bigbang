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
	'key' => 'group_component_button',
	'title' => 'component-button',
	'fields' => array(
		array(
			'multiple' => 0,
			'allow_null' => 0,
			'choices' => array(
				'disable' => 'disable',
				'internal' => 'internal',
				'external' => 'external',
			),
			'default_value' => array(
			),
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'return_format' => 'value',
			'key' => 'component_button_field_button_type',
			'label' => 'Button Type',
			'name' => 'button_type',
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
			'key' => 'component_button_field_button_text',
			'label' => 'Button Text',
			'name' => 'button_text',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'component_button_field_button_type',
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
			'post_type' => array(
			),
			'taxonomy' => array(
			),
			'allow_null' => 0,
			'multiple' => 0,
			'allow_archives' => 1,
			'key' => 'component_button_field_page_link',
			'label' => 'Button URL',
			'name' => 'button_internal_url',
			'type' => 'page_link',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'component_button_field_button_type',
						'operator' => '==',
						'value' => 'internal',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
		),
		array(
			'default_value' => '',
			'placeholder' => '',
			'key' => 'component_button_field_button_external_url',
			'label' => 'Button URL',
			'name' => 'button_external_url',
			'type' => 'url',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'component_button_field_button_type',
						'operator' => '==',
						'value' => 'external',
					),
				),
			),
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
