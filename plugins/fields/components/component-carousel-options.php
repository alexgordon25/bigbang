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
	'key' => 'group_component_carousel_options',
	'title' => 'component-carousel-options',
	'fields' => array(
		array(
			'default_value' => 1,
			'min' => 1,
			'max' => 4,
			'step' => '',
			'placeholder' => '',
			'prepend' => '#',
			'append' => 'slides',
			'key' => 'component_carousel_options_field_desktop_slides',
			'label' => 'Desktop Slides',
			'name' => 'desktop_slides',
			'type' => 'number',
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
			'default_value' => 500,
			'min' => '',
			'max' => '',
			'step' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'ms',
			'key' => 'component_carousel_options_field_desktop_speed',
			'label' => 'Desktop Speed',
			'name' => 'desktop_speed',
			'type' => 'number',
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
			'default_value' => 5000,
			'min' => '',
			'max' => '',
			'step' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => 'ms',
			'key' => 'component_carousel_options_field_desktop_autoplay_speed',
			'label' => 'Desktop Autoplay Speed',
			'name' => 'desktop_autoplay_speed',
			'type' => 'number',
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
			'multiple' => 0,
			'allow_null' => 0,
			'choices' => array(
				'linear' => 'linear',
				'ease' => 'ease',
				'ease-in' => 'ease-in',
				'ease-out' => 'ease-out',
				'ease-in-out' => 'ease-in-out',
			),
			'default_value' => array(
				'ease' => 'ease',
			),
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'return_format' => 'value',
			'key' => 'component_carousel_options_field_desktop_easing',
			'label' => 'Desktop Animation Easing',
			'name' => 'desktop_easing',
			'type' => 'select',
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
			'multiple' => 0,
			'allow_null' => 0,
			'choices' => array(
				'ondemand' => 'ondemand',
				'progressive' => 'progressive',			),
			'default_value' => array(
				'ondemand' => 'ondemand',
			),
			'ui' => 0,
			'ajax' => 0,
			'placeholder' => '',
			'return_format' => 'value',
			'key' => 'component_carousel_options_field_desktop_lazyload',
			'label' => 'Desktop Lazy loading',
			'name' => 'desktop_lazyload',
			'type' => 'select',
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
			'default_value' => 1,
			'message' => '',
			'ui' => 1,
			'ui_on_text' => 'Enable',
			'ui_off_text' => 'Disable',
			'key' => 'component_carousel_options_field_desktop_autoplay',
			'label' => 'Desktop Autoplay',
			'name' => 'desktop_autoplay',
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
			'default_value' => 1,
			'message' => '',
			'ui' => 1,
			'ui_on_text' => 'Enable',
			'ui_off_text' => 'Disable',
			'key' => 'component_carousel_options_field_desktop_loop',
			'label' => 'Desktop Loop',
			'name' => 'desktop_loop',
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
			'default_value' => 1,
			'message' => '',
			'ui' => 1,
			'ui_on_text' => 'Enable',
			'ui_off_text' => 'Disable',
			'key' => 'component_carousel_options_field_desktop_arrows',
			'label' => 'Desktop Arrows',
			'name' => 'desktop_arrows',
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
			'default_value' => 1,
			'message' => '',
			'ui' => 1,
			'ui_on_text' => 'Enable',
			'ui_off_text' => 'Disable',
			'key' => 'component_carousel_options_field_desktop_dots',
			'label' => 'Desktop Dots',
			'name' => 'desktop_dots',
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
			'key' => 'component_carousel_options_field_desktop_fade',
			'label' => 'Desktop Fade',
			'name' => 'desktop_fade',
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
			'default_value' => '<button type=\"button\" class=\"slick-prev\"><i class=\"fa fa-chevron-left\"></i></button>',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'component_carousel_options_field_desktop_prevarrow',
			'label' => 'Previous arrow',
			'name' => 'desktop_prevarrow',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
		),
		array(
			'default_value' => '<button type=\"button\" class=\"slick-next\"><i class=\"fa fa-chevron-right\"></i></button>',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'key' => 'component_carousel_options_field_desktop_nextarrow',
			'label' => 'Next arrow',
			'name' => 'desktop_nextarrow',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
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
			'key' => 'component_carousel_options_field_responsive',
			'label' => 'Responsive Support',
			'name' => 'responsive',
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
			'default_value' => 728,
			'min' => '',
			'max' => '',
			'step' => '',
			'placeholder' => '',
			'prepend' => 'Breakpoint',
			'append' => 'px',
			'key' => 'component_carousel_options_field_responsive_breakpoint',
			'label' => 'Responsive Breakpoint',
			'name' => 'responsive_breakpoint',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'component_carousel_options_field_responsive',
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
			'default_value' => 1,
			'min' => 1,
			'max' => 4,
			'step' => '',
			'placeholder' => '',
			'prepend' => '#',
			'append' => 'slides',
			'key' => 'component_carousel_options_field_mobile_slides',
			'label' => 'Mobile Slides',
			'name' => 'mobile_slides',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'component_carousel_options_field_responsive',
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
			'default_value' => 1,
			'message' => '',
			'ui' => 1,
			'ui_on_text' => 'Enable',
			'ui_off_text' => 'Disable',
			'key' => 'component_carousel_options_field_mobile_arrows',
			'label' => 'Mobile Arrows',
			'name' => 'mobile_arrows',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'component_carousel_options_field_responsive',
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
			'default_value' => 1,
			'message' => '',
			'ui' => 1,
			'ui_on_text' => 'Enable',
			'ui_off_text' => 'Disable',
			'key' => 'component_carousel_options_field_mobile_dots',
			'label' => 'Mobile Dots',
			'name' => 'mobile_dots',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'component_carousel_options_field_responsive',
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
