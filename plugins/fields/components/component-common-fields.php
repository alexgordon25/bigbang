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
	'key' => 'group_component_common_fields',
	'title' => 'component-common-fields',
	'fields' => array(
		array(
			'placement' => 'top',
			'endpoint' => 0,
			'key' => 'component_common_fields_field_tab_advanced',
			'label' => 'Advanced',
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
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'component_common_fields_field_custom_id',
			'label' => 'Custom CSS ID',
			'name' => 'custom_id',
			'type' => 'text',
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
			'key' => 'component_common_fields_field_custom_class',
			'label' => 'Custom CSS Class',
			'name' => 'custom_class',
			'type' => 'text',
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
			'key' => 'component_common_fields_field_custom_paddings',
			'label' => 'Custom Paddings',
			'name' => 'custom_paddings',
			'type' => 'true_false',
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
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '<i class="dashicons dashicons-arrow-up-alt"></i>',
			'append' => '',
			'key' => 'component_common_fields_field_padding_top',
			'label' => 'Padding Top',
			'name' => 'padding_top',
			'type' => 'text',
			'instructions' => 'Spacing above the module. Use valid CSS Units, ex: 10px or 10%.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'component_common_fields_field_custom_paddings',
						'operator' => '==',
						'value' => 1,
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
				'class' => '',
				'id' => '',
			),
		),
		array(
			'default_value' => '',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '<i class="dashicons dashicons-arrow-down-alt"></i>',
			'append' => '',
			'key' => 'component_common_fields_field_padding_bottom',
			'label' => 'Padding Bottom',
			'name' => 'padding_bottom',
			'type' => 'text',
			'instructions' => 'Spacing below the module. Use valid CSS Units, ex: 10px or 10%.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'component_common_fields_field_custom_paddings',
						'operator' => '==',
						'value' => 1,
					),
				),
			),
			'wrapper' => array(
				'width' => '20',
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