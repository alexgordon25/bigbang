<?php
/**
 * Add heading data to a module.
 *
 * @package bigbang
 * 
 */

$tag = ( $push_tag ) ? $push_tag : get_sub_field( 'headline_tag' );
$headline = ( $push_headline ) ? $push_headline : get_sub_field( 'headline' );
$tagline = ( $push_tagline ) ? $push_tagline : get_sub_field( 'tagline' );
$description = ( $push_description ) ? $push_description : get_sub_field( 'description' );