<?php
/**
 * Module/Layout template - Feature Content.
 *
 * @package bigbang
 */

$module_name = 'feature-content';

// Common Fields.
include( locate_template( '/plugins/helpers/common-fields.php' ) );

// Add Heading Fields.
include( locate_template( '/plugins/helpers/add-heading.php' ) );
?>

<section <?php echo $module_attr; ?>>

	<div class="heading-container">
		<div class="container">

		<?php include( locate_template( $GLOBALS['framework_path'] . '/partials/card-add-heading.php' ) ); ?>

		</div>
	</div>

	<?php if ( have_rows( 'items' ) ) : ?>

	<div class="items-container">
		<div class="container ">

		<?php
		while ( have_rows('items') ) : the_row(); 
			$feature_image = get_sub_field( 'image' );
			$feature_image = $feature_image['sizes']['custom-medium'];
			$background_image = get_sub_field( 'background_image' );
			$background_image = $background_image['sizes']['custom-medium'];
			
			// Button Fields.
			include( locate_template( '/plugins/helpers/button-group.php' ) );
		?>
		
		<div class="item col-sm-6 col-md-3">
			<?php if ( $button_link ) { ?>
			<a class="link" href="<?php echo esc_url( $button_link ); ?>">
			<?php } ?>
				<div class="square-item" style="background-image: url(<?php echo esc_url( $background_image ); ?>)">
				</div>
				<div class="circle-item" style="background-image: url(<?php echo esc_url( $feature_image ); ?>)">
				</div>
				<div class="description">
					<h2 class="title"><?php the_sub_field( 'title' ); ?></h2>
					<p><?php the_sub_field( 'description' ); ?></p>
				</div>
				<span class="button-text"><?php echo esc_html( $button_text ); ?></span>
			<?php if ( $button_link ) { ?>
			</a>
			<?php } ?>
		</div>				        

		<?php endwhile; ?>
			
		</div>

	</div>

	<?php endif; ?>

</section>
