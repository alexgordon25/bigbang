<?php
/**
 * Add Background image data to a module.
 *
 * @package bigbang
 * 
 */
$module_background_image = get_sub_field( 'bkg_image' );
$module_background_image = $module_background_image['sizes']['custom-full'];
$background_image = ( $push_background_image ) ? $push_background_image : $module_background_image;
$overlay = ( $push_overlay ) ? $push_overlay : get_sub_field( 'overlay' );
$parallax = ( $push_parallax ) ? $push_parallax : get_sub_field( 'parallax' );
$parallax_id = ( $push_parallax_id ) ? $push_parallax_id : get_sub_field( 'parallax_id' );