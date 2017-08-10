<?php
/**
 * Card/Layout template - Button
 *
 * @package bigbang
 */

if ( $link_type != 'disable' ) : ?>

	<div class="btn-container card-button">
	
		<a class="btn" href="<?php echo esc_url( $button_link ); ?>" title="<?php echo esc_attr( $button_text ); ?>">
			<?php echo esc_html( $button_text ); ?>
		</a>

	</div>

	<?php 
endif;
