<?php
/**
 * Function to register custom fields.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bigbang
 */

if ( function_exists('acf_add_local_field_group') ) :

	if ( $module_hero ) 		{ $page_layouts[] = $module_hero; }
	if ( $module_slideshow ) 	{ $page_layouts[] = $module_slideshow; }
	if ( $module_grid ) 		{ $page_layouts[] = $module_grid; }
	if ( $module_newsletter ) 	{ $page_layouts[] = $module_newsletter; }

acf_add_local_field_group(array(
	'key' => 'group_page_modules',
	'title' => 'page-modules',
	'fields' => array(
		array(
			'layouts' => $page_layouts,
			'min' => '',
			'max' => '',
			'button_label' => 'Add Module',
			'key' => 'page_modules_field_modules',
			'label' => 'modules',
			'name' => 'modules',
			'type' => 'flexible_content',
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
				'value' => 'page',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'the_content',
		1 => 'format',
		2 => 'featured_image',
	),
	'active' => 1,
	'description' => '',
));

endif;