<?php
/**
 * Module/Layout template - Grid
 *
 * @package bigbang
 */

// Common Fields.
$custom_id = get_sub_field( 'custom_id' );
$custom_class = get_sub_field( 'custom_class' );
?>

<section class="module module-grid <?php echo esc_attr( $custom_class ); ?>" 
	id="<?php echo esc_attr( $custom_id ); ?>">

	<div class="container">
		
		<div class="newsletter-info">
			<?php the_sub_field( 'headline' ); ?>
			<?php the_sub_field( 'description' ); ?>
		</div>
		
		<div class="newsletter-form">
			<?php the_sub_field( 'form_embed' ); ?>
		</div>

	</div>

</section>
