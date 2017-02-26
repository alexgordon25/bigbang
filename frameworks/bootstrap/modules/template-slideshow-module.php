<?php
/**
 * Module/Layout template - Slideshow.
 *
 * @package bigbang
 */

// Common Fields.
$custom_id = get_sub_field( 'custom_id' );
$custom_class = get_sub_field( 'custom_class' );

// Carousel Options Fields.
$desktop_slides = get_sub_field( 'desktop_slides' );
$desktop_speed = get_sub_field( 'desktop_speed' );
$desktop_autoplay_speed = get_sub_field( 'desktop_autoplay_speed' );
$desktop_easing = get_sub_field( 'desktop_easing' );
$desktop_lazyload = get_sub_field( 'desktop_lazyload' );
$desktop_prevarrow = get_sub_field( 'desktop_prevarrow' );
$desktop_nextarrow = get_sub_field( 'desktop_nextarrow' );
$desktop_autoplay = var_export( get_sub_field( 'desktop_autoplay' ), true );
$desktop_arrows = var_export( get_sub_field( 'desktop_arrows' ), true );
$desktop_loop = var_export( get_sub_field( 'desktop_loop' ), true );
$desktop_dots = var_export( get_sub_field( 'desktop_dots' ), true );
$desktop_fade = var_export( get_sub_field( 'desktop_fade' ), true );
$parallax = var_export( get_sub_field( 'parallax' ), true );
$responsive = get_sub_field( 'responsive' );
if ( $responsive ) {
	$responsive_breakpoint = get_sub_field( 'responsive_breakpoint' );
	$mobile_slides = get_sub_field( 'mobile_slides' );
	$mobile_arrows = var_export( get_sub_field( 'mobile_arrows' ), true );
	$mobile_loop = var_export( get_sub_field( 'mobile_loop' ), true );
	$mobile_dots = var_export( get_sub_field( 'mobile_dots' ), true );
}

// Get Slides.
if ( have_rows('slides') ): 
	?>

	<section class="module module-slideshow <?php echo esc_attr( $custom_class ); ?>" 
		id="<?php echo esc_attr( $custom_id ); ?>">

		<div class="slides" data-slick='{
			"autoplay": <?php echo esc_attr( $desktop_autoplay ); ?>,
			"autoplaySpeed": <?php echo esc_attr( $desktop_autoplay_speed ); ?>,
			"arrows": <?php echo esc_attr( $desktop_arrows ); ?>,
			"slidesToShow": <?php echo esc_attr( $desktop_slides ); ?>,
			"slidesToScroll": <?php echo esc_attr( $desktop_slides ); ?>,
			"speed": <?php echo esc_attr( $desktop_speed ); ?>,
			"infinite": <?php echo esc_attr( $desktop_loop ); ?>,
			"dots": <?php echo esc_attr( $desktop_dots ); ?>,
			"fade": <?php echo esc_attr( $desktop_fade ); ?>,
			"easing": "<?php echo esc_attr( $desktop_easing ); ?>",
			"lazyLoad": "<?php echo esc_attr( $desktop_lazyload ); ?>",
			"prevArrow": "<?php echo esc_attr( $desktop_prevarrow ); ?>",
			"useCss": false,
			"useTransform": false,
			"nextArrow": "<?php echo esc_attr( $desktop_nextarrow ); ?>"
			<?php if ( $responsive ) : ?>
			,"responsive": [
				{
					"breakpoint": <?php echo esc_attr( $responsive_breakpoint ); ?>,
					"settings": {
						"slidesToShow": <?php echo esc_attr( $mobile_slides ); ?>,
						"slidesToScroll": <?php echo esc_attr( $mobile_slides ); ?>,
						"arrows": <?php echo esc_attr( $mobile_arrows ); ?>,
						"dots": <?php echo esc_attr( $mobile_dots ); ?>
					}
				}
		  	]
		  	<?php endif; ?>
			}'>

			<?php
			// loop through the rows of data
			while ( have_rows( 'slides' ) ) : the_row(); 
				include( locate_template( $GLOBALS['framework_path'] . '/partials/card-slide.php' ) );
			endwhile; ?>

		</div>

	</section>

	<?php
	$slideshow_id = ( $custom_id ) ? '#' . $custom_id : '.module-slideshow';
	add_action( 'wp_footer', function() use ( $slideshow_id, $parallax ) {
		if ( wp_script_is( 'carousel-js', 'done' ) ) {
			?>

			<script type="text/javascript">
			(function( $ ) {
				$(document).ready(function( $ ) {
					var $slideshow = $('<?php echo $slideshow_id; ?> .slides');
					var	parallax = <?php echo $parallax; ?>;
					$slideshow.slick();
					if ( parallax === true ) {
						// init controller
						var controller = new ScrollMagic.Controller({globalSceneOptions: {triggerHook: "onEnter", duration: "100%"}});

						// build scenes
						$( '.parallax-parent' ).each(function() {
							new ScrollMagic.Scene({triggerElement: $(this)})
								.setTween($(this).children('.item-image'), {y: "80%", ease: Linear.easeNone})
								//.addIndicators()
								.addTo(controller);
						});
					}
				});
			})(jQuery);
			</script>

		<?php
		}
	} , 100 );
	?>

<?php else : ?>

	<section class="module module-default">

		<div class="item">	
			<div class="description centered">
				<h1>No slide entered</h1>
			</div>
		</div>

	</section>
		
<?php endif; ?>

