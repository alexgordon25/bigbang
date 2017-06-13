<?php
/**
 * Add Button group data to a module.
 *
 * @package bigbang
 * 
 */

$button_data = get_sub_field( 'button_link' );
$link_type = $button_data['button_type'];
$button_text = $button_data['button_text'];
if ( $link_type === 'internal' ) {
	$button_link = $button_data['button_internal_url'];
} elseif ( $link_type === 'external' ) {
	$button_link = $button_data['button_external_url'];
}
