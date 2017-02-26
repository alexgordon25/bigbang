<?php
/**
 * The template for displaying the footer.
 *
 * @package bigbang
 */

if ( $GLOBALS['framework'] !== 'clean' ) {
	include( locate_template( $GLOBALS['framework_path'] . '/footer.php' ) );
}

wp_footer(); 
?>

</body>
</html>
