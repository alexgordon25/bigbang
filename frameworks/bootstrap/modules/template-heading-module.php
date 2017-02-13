<?php
/**
 * Module/Layout template - Heading.
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

if ( get_sub_field( 'headline' ) ) {
	$headline = get_sub_field( 'headline' );
} else {
	$headline = get_the_title();
}
$tagline = get_sub_field( 'tagline' );
$description = get_sub_field( 'description' );
?>

<section class="module module-heading <?php echo esc_attr( $custom_class ); ?>" 
	id="<?php echo esc_attr( $custom_id ); ?>">

	<div class="container">

		<div class="description">

		<?php if ( $tag !== 'disable' ) : 

				if ( $tagline ) { ?>
				<span class="tagline"><?php echo esc_html( $tagline ); ?></span>
				<?php
				}

				if ( $headline ) { 
					echo wp_kses_post('<' . $tag . ' class="headline">' . $headline . '</' . $tag . '>' );
				} ?>


	
		<?php endif;

		if ( $description ) {
			echo wp_kses_post( $description );
		} ?>

		</div>

	</div>

</section>
