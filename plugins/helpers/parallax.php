<?php
/**
 * Function to initiate scroll magic parallax effect.
 *
 * @link http://scrollmagic.io/
 *
 * @package bigbang
 * 
 */

add_action( 'wp_footer', function() use ( $prlx_scene_id, $prlx_element, $prlx_parent, $prlx_children, $prlx_size, $prlx_duration) {
	if ( wp_script_is( 'parallax-js', 'done' ) ) {
		if ( ! $prlx_element ) {
			$prlx_element = 'document';
		}
		if ( ! $prlx_size ) {
			$prlx_size = '80%';
		}
		?>

		<script type="text/javascript">
		(function($) {
			$(document).ready(function($) {

				// Init scrollmagic controller for parallax.
				var controller = new ScrollMagic.Controller();

				// build scenes
				new ScrollMagic.Scene({
					triggerElement: "<?php echo esc_attr( $prlx_element ); ?>",
					triggerHook: "onEnter", 
					duration: "<?php echo esc_attr( $prlx_duration ); ?>"
					})
					.setTween("<?php echo esc_attr( $prlx_children ); ?>", {y: "<?php echo esc_attr( $prlx_size ); ?>", ease: Linear.easeNone})
					//.addIndicators()
					.addTo(controller);
			});
		})(jQuery);
		</script>

	<?php
	}
} , 200 );
