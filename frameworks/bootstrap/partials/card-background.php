<?php
/**
 * Card/Layout template - Background Image
 *
 * @package bigbang
 */

if ( $background_image ) { ?>
	<div class="bkg-image-container" id="<?php if ( $parallax ) { echo esc_attr( $parallax_id ); } ?>">
		<div class="item-image <?php if ( $parallax ) { echo esc_attr( 'parallax-img' ); } ?>"  style="background-image:url(<?php echo esc_url( $background_image ); ?>);"></div>
	</div>
	<?php
}

if ( $overlay ) { ?>
	<div class="shadow-bkg"></div>
	<?php 
} 

// Initiate Scroll Magic parallax effect.
if ( $parallax ) {
	$prlx_scene_id = $module_id;
	$prlx_element = '#' . $parallax_id;
	$prlx_parent = '#' . $parallax_id;
	$prlx_children = '#' . $parallax_id . ' .parallax-img';
	$prlx_size = '80%';
	$prlx_duration = '200%';

	include( locate_template( '/plugins/helpers/parallax.php' ) );
}
?>
