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
	'key' => 'group_component_form',
	'title' => 'component-form',
	'fields' => array(
		array(
			'multiple' => 0,
			'allow_null' => 0,
			'choices' => array(
				'default-form' => 'Default',
				'w-background' => 'With Background Image',
				'float-form' => 'Float Form',
			),
			'default_value' => array(
				0 => 'default-form',
			),
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'return_format' => 'value',
			'key' => 'component_form_field_form_layout',
			'label' => 'Form Layout',
			'name' => 'form_layout',
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
			'key' => 'component_form_field_form',
			'label' => 'Formulario',
			'name' => 'form',
			'type' => 'ninja_forms_field',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'allow_null' => 0,
			'allow_multiple' => 0,
		),
		array(
			'multiple' => 0,
			'allow_null' => 0,
			'choices' => array(
				'alignright' => 'Right',
				'alignleft' => 'Left',
			),
			'default_value' => array(
				0 => 'alignright',
			),
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'return_format' => 'value',
			'key' => 'component_form_field_form_align',
			'label' => 'Form Align',
			'name' => 'form_align',
			'type' => 'select',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'component_form_field_form_layout',
						'operator' => '==',
						'value' => 'float-form',
					),
				),
			),
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
