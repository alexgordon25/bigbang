<?php
/**
 * Function to initiate slick script.
 *
 * @link http://kenwheeler.github.io/slick/
 *
 * @package bigbang
 *
 * @param string $slideshow_id. Id of element to initiate slick.
 * 
 */

add_action( 'wp_footer', function() use ( $slideshow_id ) {
	if ( wp_script_is( 'carousel-js', 'done' ) ) {
		?>

		<script type="text/javascript">
		(function($) {
			$(document).ready(function($) {
				var $slideshow = $('<?php echo $slideshow_id; ?> .slides');
				$slideshow.slick();
			});
		})(jQuery);
		</script>

	<?php
	}
} , 100 );
