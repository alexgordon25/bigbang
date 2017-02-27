<?php
/**
 * Function to register custom fields.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bigbang
 */

if( function_exists( 'acf_add_local_field_group' ) ) :

	/**
	 * Populate sidebars list as a ACF Selector.
	 */
	function get_sidebar_list( $field ) {
		
		$field['choices'] = array();

			$wp_registered_sidebars = $GLOBALS['wp_registered_sidebars'];
	    	$sidebar_choices = array();
			foreach ( $wp_registered_sidebars as $key => $value ) {
				$sidebar_choices[$key] = $value['name'];
			}
		
		$field['choices'] = $sidebar_choices;
		
		return $field;
	}

	add_filter('acf/load_field/key=theme_options_field_sidebar', 'get_sidebar_list');

	$theme_options_footer = array(
		array(
			'key' => 'theme_options_field_tab_footer',
			'label' => 'Footer',
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
			'placement' => 'top',
			'endpoint' => 0,
		),
		array(
			'sub_fields' => array(
				array(
					'key' => 'theme_options_field_column_title',
					'label' => 'Column Title',
					'name' => 'column_title',
					'type' => 'text',
					'instructions' => '',
					'required' => 0,
					'conditional_logic' => 0,
					'wrapper' => array(
						'width' => '',
						'class' => '',
						'id' => '',
					),
					'default_value' => '',
					'placeholder' => '',
					'prepend' => '',
					'append' => '',
					'maxlength' => '',
				),
				array(
					'layouts' => array(
						array(
							'key' => 'theme_options_field_plain_content',
							'name' => 'plain_content',
							'label' => 'Plain Content',
							'display' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'theme_options_field_description_about_us',
									'label' => 'Short Description',
									'name' => 'description_about_us',
									'type' => 'textarea',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'maxlength' => '',
									'rows' => 3,
									'new_lines' => 'br',
								),
							),
							'min' => '',
							'max' => '',
						),
						array(
							'key' => 'theme_options_field_contact_us',
							'name' => 'contact_us',
							'label' => 'Contact Us',
							'display' => 'block',
							'sub_fields' => array(
								array(
									'default_value' => 1,
									'message' => '',
									'ui' => 1,
									'ui_on_text' => 'Enable',
									'ui_off_text' => 'Disable',
									'key' => 'theme_options_field_show_address',
									'label' => 'Show Address',
									'name' => 'show_address',
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
									'key' => 'theme_options_field_show_phones',
									'label' => 'Show Phones',
									'name' => 'show_phones',
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
									'key' => 'theme_options_field_show_toll_free',
									'label' => 'Show Toll Free',
									'name' => 'show_toll_free',
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
									'key' => 'theme_options_field_show_fax',
									'label' => 'Show Fax',
									'name' => 'show_fax',
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
									'key' => 'theme_options_field_show_email',
									'label' => 'Show Email',
									'name' => 'show_email',
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
							),
							'min' => '',
							'max' => '',
						),
						array(
							'key' => 'theme_options_field_show_location_map',
							'name' => 'show_location_map',
							'label' => 'Location Map',
							'display' => 'block',
							'sub_fields' => array(),
							'min' => '',
							'max' => '',
						),
						array(
							'key' => 'theme_options_field_show_social_icons',
							'name' => 'show_social_icons',
							'label' => 'Social Icons',
							'display' => 'block',
							'sub_fields' => array(),
							'min' => '',
							'max' => '',
						),
						array(
							'key' => 'theme_options_field_sidebar_selector',
							'name' => 'sidebar_selector',
							'label' => 'Sidebar Selector',
							'display' => 'block',
							'sub_fields' => array(
								array(
									'multiple' => 0,
									'allow_null' => 0,
									'choices' => array(),
									'default_value' => array(
									),
									'ui' => 0,
									'ajax' => 0,
									'placeholder' => '',
									'return_format' => 'value',
									'key' => 'theme_options_field_sidebar',
									'label' => 'Sidebar ',
									'name' => 'sidebar',
									'type' => 'select',
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
							'max' => 2,
						),
						array(
							'key' => 'theme_options_field_embeded_content',
							'name' => 'embeded_content',
							'label' => 'Embeded Content',
							'display' => 'block',
							'sub_fields' => array(
								array(
									'key' => 'theme_options_field_embed',
									'label' => 'Embed Code',
									'name' => 'embed',
									'type' => 'textarea',
									'instructions' => '',
									'required' => 0,
									'conditional_logic' => 0,
									'wrapper' => array(
										'width' => '',
										'class' => '',
										'id' => '',
									),
									'default_value' => '',
									'placeholder' => '',
									'maxlength' => '',
									'rows' => 8,
									'new_lines' => 'br',
								),
							),
							'min' => '',
							'max' => '',
						),
					),
					'min' => '',
					'max' => 4,
					'button_label' => 'Add Footer Content',
					'key' => 'theme_options_field_footer_content',
					'label' => 'Column Content',
					'name' => 'footer_content',
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
			'min' => 0,
			'max' => 4,
			'layout' => 'block',
			'button_label' => 'Add Column',
			'collapsed' => 'theme_options_field_column_title',
			'key' => 'theme_options_field_footer_columns',
			'label' => 'Footer Columns',
			'name' => 'footer_columns',
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
	);

	$theme_options_fields[] = $theme_options_footer;

endif;
