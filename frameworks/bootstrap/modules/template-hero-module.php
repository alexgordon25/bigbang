<?php
/**
 * Module/Layout template - Hero.
 *
 * @package bigbang
 */

$module_name = 'hero';

// Common Fields.
include( locate_template( '/plugins/helpers/common-fields.php' ) );

// Heading Fields.
include( locate_template( '/plugins/helpers/add-heading.php' ) );

// Background Fields.
include( locate_template( '/plugins/helpers/background.php' ) );

// Button Fields.
include( locate_template( '/plugins/helpers/button.php' ) );

// Hero Fields.
$headline = ( $headline ) ? $headline : get_the_title();
if ( is_front_page() === true ) {
	$tag = ( $tag === 'h1' ) ? 'h2' : $tag;
}
?>

<section <?php echo $module_attr; ?>>

	<?php
	include( locate_template( $GLOBALS['framework_path'] . '/partials/card-slide-default.php' ) );
	?>

</section>

<?php
// Initiate Scroll Magic parallax effect.
if ( $parallax ) {
	$prlx_scene_id = $module_id;
	$prlx_element = '';
	$prlx_parent = '.parallax-parent';
	$prlx_children = '.parallax-parent .item-image';
	$prlx_size = '150%';
	$prlx_duration = '200%';

	include( locate_template( '/plugins/helpers/parallax.php' ) );
} ?>
