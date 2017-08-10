<?php
/**
 * Add inline styles with common fields data to each module.
 *
 * @package bigbang
 * 
 */

$module_name = ( $module_name ) ? $module_name : 'default';
$custom_id = get_sub_field( 'custom_id' );
$custom_class = get_sub_field( 'custom_class' );
$custom_paddings = get_sub_field( 'custom_paddings' );

$module_attr = ' class="module module-' . esc_attr( $module_name ) . ' ' . esc_attr( $custom_class ) . '"';

if ( $custom_id ) {
	$module_attr .= ' id="' . esc_attr( $custom_id ) . '"' . PHP_EOL;
}

if ( $custom_paddings === true ) {
	$padding_top = get_sub_field( 'padding_top' );
	$padding_bottom = get_sub_field( 'padding_bottom' );
	
	$module_attr .= ' style="';
	
	if ( $padding_top || $padding_top === '0' ) {
		$module_attr .= 'padding-top: ' . esc_attr( $padding_top ) . '; ';  
	}

	if ( $padding_bottom || $padding_bottom === '0' ) {
		$module_attr .= 'padding-bottom: ' . esc_attr( $padding_bottom ) . ';';
	}
	$module_attr .= '"';
}