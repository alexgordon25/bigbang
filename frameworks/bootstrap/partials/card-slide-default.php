<?php
/**
 * Card/Layout template - Slide default
 *
 * @package bigbang
 *
 */

?>
<div class="item card-slide card-slide-default">
	
	<?php
	if ( $background_image ) { ?>
		<div class="bkg-image-container <?php if ( $parallax ) { echo esc_attr( 'parallax-parent' ); } ?>">
			<div class="item-image"  style="background-image:url(<?php echo esc_url( $background_image ); ?>);"></div>
		</div>
		<?php
	}

	if ( $overlay ) { ?>
		<div class="shadow-bkg"></div>
		<?php 
	} ?>

	<?php if ( $tag !== 'disable' ) { ?>

		<div class="container">

			<div class="description-container">

				<?php 
				include( locate_template( $GLOBALS['framework_path'] . '/partials/card-add-heading.php' ) ); 
				include( locate_template( $GLOBALS['framework_path'] . '/partials/card-button.php' ) );
				?>
				
			</div>

		</div>

	<?php } else { ?>

		<?php if ( $button_link ) : ?>
			<a class="link-container" href="<?php echo esc_url( $button_link ); ?>" title="<?php echo esc_attr( $headline ); ?>"></a>
		<?php endif; ?>

	<?php } ?>

</div>
