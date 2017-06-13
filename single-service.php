<?php
/**
 * The template for displaying all single post for services.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bigbang
 */

get_header();
?>

<div id="primary" class="content-area">

	<?php
	while ( have_posts() ) : the_post();
		include( locate_template( $GLOBALS['framework_path'] . '/single-service.php' ) );
	endwhile;
	?>

</div>

<?php
get_footer();
