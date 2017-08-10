<?php
/**
 * Module/Layout template - Slideshow.
 *
 * @package bigbang
 */

$module_name = 'slideshow';

// Common Fields.
include( locate_template( '/plugins/helpers/common-fields.php' ) );

// Carousel Options Fields.
$desktop_slides = get_sub_field( 'desktop_slides' );
$desktop_slides_scroll = get_sub_field( 'desktop_slides_scroll' );
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
	$mobile_slides_scroll = get_sub_field( 'mobile_slides_scroll' );
	$mobile_arrows = var_export( get_sub_field( 'mobile_arrows' ), true );
	$mobile_loop = var_export( get_sub_field( 'mobile_loop' ), true );
	$mobile_dots = var_export( get_sub_field( 'mobile_dots' ), true );
}

// Get Slides.
if ( have_rows('slides') ): 
	?>

	<section <?php echo $module_attr; ?>>

		<div class="slides" data-slick='{
			"autoplay": <?php echo esc_attr( $desktop_autoplay ); ?>,
			"autoplaySpeed": <?php echo esc_attr( $desktop_autoplay_speed ); ?>,
			"arrows": <?php echo esc_attr( $desktop_arrows ); ?>,
			"slidesToShow": <?php echo esc_attr( $desktop_slides ); ?>,
			"slidesToScroll": <?php echo esc_attr( $desktop_slides_scroll ); ?>,
			"speed": <?php echo esc_attr( $desktop_speed ); ?>,
			"infinite": <?php echo esc_attr( $desktop_loop ); ?>,
			"dots": <?php echo esc_attr( $desktop_dots ); ?>,
			"fade": <?php echo esc_attr( $desktop_fade ); ?>,
			"easing": "<?php echo esc_attr( $desktop_easing ); ?>",
			"lazyLoad": "<?php echo esc_attr( $desktop_lazyload ); ?>",
			"prevArrow": "<?php echo esc_attr( $desktop_prevarrow ); ?>",
			"nextArrow": "<?php echo esc_attr( $desktop_nextarrow ); ?>",
			"useCss": false,
			"useTransform": false
			<?php if ( $responsive ) : ?>
			,"responsive": [
				{
					"breakpoint": <?php echo esc_attr( $responsive_breakpoint ); ?>,
					"settings": {
						"slidesToShow": <?php echo esc_attr( $mobile_slides ); ?>,
						"slidesToScroll": <?php echo esc_attr( $mobile_slides_scroll ); ?>,
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

					// Heading Fields.
					include( locate_template( '/plugins/helpers/add-heading.php' ) );

					// Background Fields.
					$background_image = get_sub_field( 'image' );
					$background_image = $background_image['sizes']['custom-full'];
					$overlay = true;

					// Button Fields.
					include( locate_template( '/plugins/helpers/button.php' ) );

					// Hero Fields.
					if ( is_front_page() === true ) {
						$tag = ( $tag === 'h1' ) ? 'h2' : $tag;
					}

					include( locate_template( $GLOBALS['framework_path'] . '/partials/card-slide-default.php' ) );

				} elseif ( $slide_type === 'custom' ) {
					
				}

			endwhile; ?>

		</div>

	</section>

	<?php
	// Initiate Slick Carousel.
	$slideshow_id = ( $custom_id ) ? '#' . $custom_id : '.module-slideshow';
	include( locate_template( '/plugins/helpers/slick.php' ) );
	
	// Initiate Scroll Magic parallax effect.
	if ( $parallax ) {
		$prlx_scene_id = $module_id;
		$prlx_element = '';
		$prlx_parent = '.parallax-parent';
		$prlx_children = '.parallax-parent .item-image';
		$prlx_size = '150%';
		$prlx_duration = '200%';

		include( locate_template( '/plugins/helpers/parallax.php' ) );
	}
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

