<?php
/**
 * Module/Layout template - Newsletter.
 *
 * @package bigbang
 */

// Common Fields.
$custom_id = get_sub_field( 'custom_id' );
$custom_class = get_sub_field( 'custom_class' );
?>

<section class="module module-newsletter <?php echo esc_attr( $custom_class ); ?>" 
	id="<?php echo esc_attr( $custom_id ); ?>">

	<div class="container">
		
		<div class="newsletter-info col-sm-6">
			<h2><?php the_sub_field( 'headline' ); ?></h2>
			<?php the_sub_field( 'description' ); ?>
		</div>
		
		<div class="newsletter-form col-sm-6">
			<?php the_sub_field( 'form_embed' ); ?>
		</div>

	</div>

</section>
