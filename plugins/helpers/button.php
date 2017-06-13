<?php
/**
 * Add Button data to a module.
 *
 * @package bigbang
 * 
 */

$link_type = get_sub_field( 'button_type' );
$button_text = get_sub_field( 'button_text' );
if ( $link_type === 'internal' ) {
	$button_link = get_sub_field( 'button_internal_url' );
} elseif ( $link_type === 'external' ) {
	$button_link = get_sub_field( 'button_external_url' );
}