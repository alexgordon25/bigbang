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
		'key' => 'group_module_slideshow',
		'title' => 'module-slideshow',
		'fields' => array(
			array(
				'placement' => 'top',
				'endpoint' => 0,
				'key' => 'module_slideshow_field_tab_slides',
				'label' => 'Slides',
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
				'sub_fields' => array(
					array(
						'multiple' => 0,
						'allow_null' => 0,
						'choices' => array(
							'default' => 'Default',
							'custom' => 'Custom Post-type',
						),
						'default_value' => array(
							0 => 'default',
						),
						'ui' => 0,
						'ajax' => 0,
						'placeholder' => '',
						'return_format' => 'value',
						'key' => 'module_slideshow_field_slide_type',
						'label' => 'Slide Type',
						'name' => 'slide_type',
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
						'clone' => array(
							0 => 'group_component_slide',
							1 => 'group_component_button',
						),
						'prefix_label' => 0,
						'prefix_name' => 0,
						'display' => 'seamless',
						'layout' => 'block',
						'key' => 'module_slideshow_field_default_slide',
						'label' => 'Default Slide',
						'name' => 'default_slide',
						'type' => 'clone',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => array(
							array(
								array(
									'field' => 'module_slideshow_field_slide_type',
									'operator' => '==',
									'value' => 'default',
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
						'post_type' => array(
						),
						'taxonomy' => array(
						),
						'allow_null' => 0,
						'multiple' => 0,
						'return_format' => 'object',
						'ui' => 1,
						'key' => 'module_slideshow_field_custom_slide',
						'label' => 'Custom Slide',
						'name' => 'custom_slide',
						'type' => 'post_object',
						'instructions' => '',
						'required' => 0,
						'conditional_logic' => array(
							array(
								array(
									'field' => 'module_slideshow_field_slide_type',
									'operator' => '==',
									'value' => 'custom',
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
				'min' => 0,
				'max' => 0,
				'layout' => 'block',
				'button_label' => 'Add Slide',
				'collapsed' => 'module_slideshow_field_slide_type',
				'key' => 'module_slideshow_field_slides',
				'label' => 'Slides',
				'name' => 'slides',
				'type' => 'repeater',
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
				'placement' => 'top',
				'endpoint' => 0,
				'key' => 'module_slideshow_field_tab_options',
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
					0 => 'group_component_carousel_options',
				),
				'prefix_label' => 0,
				'prefix_name' => 0,
				'display' => 'seamless',
				'layout' => 'block',
				'key' => 'module_slideshow_field_slideshow_options',
				'label' => 'Slideshow Options',
				'name' => 'slideshow_options',
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
				'key' => 'module_slideshow_field_more',
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
	
	$module_slideshow = array(
		'key' => 'layout_slideshow_module',
		'name' => 'slideshow_module',
		'label' => 'Slideshow',
		'display' => 'block',
		'sub_fields' => array(
			array(
				'clone' => array(
					0 => 'group_module_slideshow',
				),
				'prefix_label' => 0,
				'prefix_name' => 0,
				'display' => 'seamless',
				'layout' => 'block',
				'key' => 'layout_slideshow_module_field_slideshow',
				'label' => 'Slideshow',
				'name' => 'slideshow',
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