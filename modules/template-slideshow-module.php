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
			while ( have_rows('slides') ) : the_row(); 

				// Slides Fields
				$slide_type = get_sub_field( 'slide_type' );

				if ( $slide_type  === 'default' ) {

					$tag = get_sub_field( 'headline_tag' );
					// Is front-page you should use h2 only. SEO purpose.
					if ( is_front_page() === true ) {
						$tag = ( $tag === 'h1' ) ? 'h2' : $tag;
					}

					if ( get_sub_field( 'headline' ) ) {
						$headline = get_sub_field( 'headline' );
					} else {
						$headline = get_the_title();
					}

					$image = get_sub_field( 'image' );

					$link_type = get_sub_field( 'button_type' );
					if ( $link_type === 'internal' ) {
						$link = get_sub_field( 'button_internal_url' );
					} elseif ( $link_type === 'external' ) {
						$link = get_sub_field( 'button_external_url' );
					}
				} elseif ( $slide_type === 'custom' ) {
					
				}
			?>

				<div class="item" data-lazy="<?php echo esc_url( $image['sizes']['custom-full'] ); ?>" style="background-image:url(<?php echo esc_url( $image['sizes']['custom-full'] ); ?>);">
					
					<?php if ( $tag !== 'disable' ) : ?>

						<div class="container">
							<div class="description">
								<?php echo wp_kses_post('<' . $tag . '>' . $headline . '</' . $tag . '>' );  ?>
							</div>
						</div>

					<?php endif; ?>

					<?php if ( $link ) : ?>
						<a class="btn"> href="<?php echo esc_url( $link ); ?>" title="<?php echo esc_attr( $headline ); ?>">More Info</a>
					<?php endif; ?>
					
				</div>

			<?php endwhile; ?>

		</div>

	</section>
	<?php
	$slideshow_id = ($custom_id) ? '#' . $custom_id : '.module-slideshow';
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

