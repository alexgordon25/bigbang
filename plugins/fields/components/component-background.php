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
	'key' => 'group_component_background',
	'title' => 'component-background',
	'fields' => array(
		array(
			'placement' => 'top',
			'endpoint' => 0,
			'key' => 'component_background_field_tab_background',
			'label' => 'Background',
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
			'key' => 'component_background_field_bkg_image',
			'label' => 'Background Image',
			'name' => 'bkg_image',
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
		array(
			'default_value' => 0,
			'message' => '',
			'ui' => 1,
			'ui_on_text' => 'Enable',
			'ui_off_text' => 'Disable',
			'key' => 'component_background_field_overlay',
			'label' => 'Dark Overlay',
			'name' => 'overlay',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '20',
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
			'key' => 'component_background_field_parallax',
			'label' => 'Parallax Effect',
			'name' => 'parallax',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
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
			'prepend' => '',
			'append' => '',
			'key' => 'component_background_field_parallax_id',
			'label' => 'Parallax ID',
			'name' => 'parallax_id',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'component_background_field_parallax',
						'operator' => '==',
						'value' => 1,
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
