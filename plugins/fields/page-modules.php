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
	if ( $module_heading ) 		{ $page_layouts[] = $module_heading; }
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
	array(
		'default_value' => 0,
		'message' => '',
		'ui' => 1,
		'ui_on_text' => 'Enable',
		'ui_off_text' => 'Disable',
		'key' => 'page_modules_field_show_the_content',
		'label' => 'Show WP Content Editor ',
		'name' => 'show_the_content',
		'type' => 'true_false',
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
		'key' => 'page_modules_field_the_content',
		'label' => 'WP Content Editor',
		'name' => '',
		'type' => 'message',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => array(
			array(
				array(
					'field' => 'page_modules_field_show_the_content',
					'operator' => '==',
					'value' => 1,
				),
			),
		),
		'wrapper' => array(
			'width' => '',
			'class' => '',
			'id' => '',
		),
		'message' => '',
		'new_lines' => '',
		'esc_html' => 0,
	),
	'location' => array(
		array(
			array(
				'param' => 'post_template',
				'operator' => '==',
				'value' => 'modules-template.php',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'seamless',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => array(
		0 => 'format',
		1 => 'featured_image',
	),
	'active' => 1,
	'description' => '',
));

function my_acf_admin_head() {
	?>
	<script type="text/javascript">
	(function($) {
		
		$(document).ready(function(){
			
			$( '.acf-field-page-modules-field-the-content .acf-input' ).append( $( '#postdivrich' ) );
			
		});
		
	})(jQuery);    
	</script>
	<style type="text/css">
		.acf-field #wp-content-wrap {
			
		}
	</style>
	<?php        
}
add_action('acf/input/admin_head', 'my_acf_admin_head');

endif;