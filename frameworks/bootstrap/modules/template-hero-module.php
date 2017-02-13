<?php
/**
 * Module/Layout template - Hero.
 *
 * @package bigbang
 */

// Common Fields.
$custom_id = get_sub_field( 'custom_id' );
$custom_class = get_sub_field( 'custom_class' );

// Hero Fields.
$tag = get_sub_field( 'headline_tag' );
if ( is_front_page() === true ) {
	$tag = ( $tag === 'h1' ) ? 'h2' : $tag;
}
$image = get_sub_field( 'image' );

if ( get_sub_field( 'headline' ) ) {
	$headline = get_sub_field( 'headline' );
} else {
	$headline = get_the_title();
}

$link_type = get_sub_field( 'button_type' );
if ( $link_type === 'internal' ) {
	$link = get_sub_field( 'button_internal_url' );
} elseif ( $link_type === 'external' ) {
	$link = get_sub_field( 'button_external_url' );
}
?>

<section class="module module-hero <?php echo esc_attr( $custom_class ); ?>" 
	id="<?php echo esc_attr( $custom_id ); ?>">
	<?php if ( $link ) : ?>
		<a href="<?php echo esc_url( $link ); ?>" title="<?php echo esc_attr( $headline ); ?>">
	<?php endif; ?>
	<div class="item" style="background-image:url(<?php echo esc_url( $image['sizes']['custom-full'] ); ?>);">
		
		<?php if ( $tag !== 'disable' ) : ?>

			<div class="container">
				<div class="description">
					<?php echo wp_kses_post('<' . $tag . '>' . $headline . '</' . $tag . '>' );  ?>
				</div>
			</div>

		<?php endif; ?>
		
	</div>
	<?php if ( $link ) : ?>
		</a>
	<?php endif; ?>
</section>
