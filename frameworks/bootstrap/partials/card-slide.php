<?php
/**
 * Card/Layout template - Slide default
 *
 * @package bigbang
 */

// Slides Fields
$slide_type = get_sub_field( 'slide_type' );

if ( $slide_type  === 'default' ) {

	$tag = get_sub_field( 'headline_tag' );

	// Is front-page you should use h2 only. SEO purpose.
	if ( is_front_page() === true ) {
		$tag = ( $tag === 'h1' ) ? 'h2' : $tag;
	}

	$headline = get_sub_field( 'headline' );
	$tagline = get_sub_field( 'tagline' );
	$description = get_sub_field( 'description' );
	$image = get_sub_field( 'image' );
	$link_type = get_sub_field( 'button_type' );
	$button_text = get_sub_field( 'button_text' );

	if ( $link_type === 'internal' ) {
		$link = get_sub_field( 'button_internal_url' );
	} elseif ( $link_type === 'external' ) {
		$link = get_sub_field( 'button_external_url' );
	}

} elseif ( $slide_type === 'custom' ) {
	
}
?>

<div class="item">

	<div class="parallax-parent">
		<div class="item-image" style="background-image:url(<?php echo esc_url( $image['sizes']['custom-full'] ); ?>);"></div>
	</div>
	
	<?php if ( $tag !== 'disable' ) { ?>

		<div class="container">

			<div class="description">
				<?php 
				if ( $tagline ) { ?>
				<span class="tagline"><?php echo esc_html( $tagline ); ?></span>
				<?php
				}

				if ( $headline ) { 
					echo wp_kses_post('<' . $tag . '>' . $headline . '</' . $tag . '>' );
				}

				if ( $description ) {
					echo wp_kses_post( $description );
				} ?>

				<?php if ( $link ) : ?>
				<a class="btn" href="<?php echo esc_url( $link ); ?>" title="<?php echo esc_attr( $headline ); ?>">
					<?php echo esc_html( $button_text ); ?>
				</a>
				<?php endif; ?>
			</div>

		</div>

	<?php } else { ?>

		<?php if ( $link ) : ?>
			<a class="slide-link" href="<?php echo esc_url( $link ); ?>" title="<?php echo esc_attr( $headline ); ?>"></a>
		<?php endif; ?>

	<?php } ?>

</div>
