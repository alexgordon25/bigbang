<?php
/**
 * Card/Layout template - Add Heading
 *
 * @package bigbang
 */

if ( $tag !== 'disable' ) : ?>

	<div class="description card-heading">

		<?php
		if ( $tagline ) { ?>
		<span class="tagline"><?php echo esc_html( $tagline ); ?></span>
		<?php
		}

		if ( $headline ) { 
			echo wp_kses_post('<' . $tag . ' class="headline">' . $headline . '</' . $tag . '>' );
		}

		if ( $description ) {
			echo wp_kses_post( $description );
		} ?>

	</div>

<?php
endif;
