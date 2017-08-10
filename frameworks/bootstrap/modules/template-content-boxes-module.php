<?php
/**
 * Module/Layout template - Content Boxes.
 *
 * @package bigbang
 */

$module_name = 'content-boxes';

// Common Fields.
include( locate_template( '/plugins/helpers/common-fields.php' ) );

// Heading Fields.
include( locate_template( '/plugins/helpers/add-heading.php' ) );

// Background Fields.
include( locate_template( '/plugins/helpers/background.php' ) );

// Content Boxes Fields.
$initial_orientation = get_sub_field( 'initial_orientation' );
$odd_orientation = $initial_orientation;
$even_orientation = ( 'left' === $initial_orientation ) ? 'right' : 'left';
$rounded_img = get_sub_field( 'rounded_img' );
$remove_gutter = get_sub_field( 'remove_gutter' );
if ( $remove_gutter ) {
	$remove_gutter_class = 'no-gutter';
}

// Button Fields.
$module_link_type = get_sub_field( 'button_type' );
$module_button_text = get_sub_field( 'button_text' );
if ( $module_link_type === 'internal' ) {
	$module_button_link = get_sub_field( 'button_internal_url' );
} elseif ( $module_link_type === 'external' ) {
	$module_button_link = get_sub_field( 'button_external_url' );
}
?>
<section <?php echo $module_attr; ?>>

	<?php if ( ! $remove_gutter ) { ?>
	<div class="container">
	<?php } ?>
		
		<?php if ( $tag !== 'disable' ) : ?>
		<div class="heading-container">
			<?php include( locate_template( $GLOBALS['framework_path'] . '/partials/card-add-heading.php' ) ); ?>
		</div>
		<?php endif; ?>

		<?php
		if ( have_rows( 'item_callout' ) ) :
			?>
			<div class="content-boxes-container <?php echo esc_attr( $remove_gutter_class ); ?>">

				<ul>
				
				<?php
				$i = 1;
				while ( have_rows( 'item_callout' ) ) : the_row();
					$image = get_sub_field( 'image' );
					$video_src = get_sub_field( 'video_src' );
					$item_callout_class = 'default';
					$video_poster_class = '';

					// Item Heading Fields.
					include( locate_template( '/plugins/helpers/add-heading.php' ) );
					
					// Item Button Fields.
					include( locate_template( '/plugins/helpers/button-group.php' ) );

					if ( ( $video_src === 'youtube' || $video_src === 'vimeo' ) 
						&& (  $rounded_img === false ) ) { 
						$item_callout_class = 'video';
						$video_poster_class = 'video-poster';
					} elseif ( $rounded_img === true ) {
						$item_callout_class = 'rounded-img';
					}

					if ( ( $i % 2 ) != 0 ) {
						$img_orientation = $odd_orientation;
						$text_orientation = $even_orientation;
					} else {
						$img_orientation = $even_orientation;
						$text_orientation = $odd_orientation;
					} 
				?>
				<li class="item-callout <?php echo esc_attr( $item_callout_class ); ?>">
					
					<?php if ( $link_type != 'disable' && ! $button_text ) { ?>
					<a class="item-link" href="<?php echo esc_url( $button_link ); ?>" >
					<?php } ?>

						<div class="item-image-container <?php echo esc_attr( $img_orientation ); ?> <?php echo esc_attr( $video_poster_class ); ?>">
							
							<img src="<?php echo esc_url( $image['sizes']['large'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>">
							
							<?php
							if ( $rounded_img === false ) :
								if ( $video_src === 'youtube' ) {
								?>
								<iframe src="https://www.youtube.com/embed/<?php the_sub_field( 'video_id' ); ?>?modestbranding=1&amp;controls=2&amp;showinfo=1&amp;rel=0&amp;wmode=transparent" frameborder="0" allowfullscreen></iframe>
								<?php
								} elseif ( $video_src === 'vimeo' ) {
									?>
								<iframe src="https://player.vimeo.com/video/<?php the_sub_field( 'video_id' ); ?>?api=1&amp;js_api=1&amp;title=0&amp;byline=0&amp;portrait=0&amp;playbar=0&amp;player_id=okplayer&amp;loop=0&amp;badge=0" frameborder="0" allowfullscreen="true"></iframe>
								<?php
								}
							endif;
							?>

						</div>

						<div class="item-text-container <?php echo esc_attr( $text_orientation ); ?>">

							<?php 
							include( locate_template( $GLOBALS['framework_path'] . '/partials/card-add-heading.php' ) );

							if ( $button_text ) {
								include( locate_template( $GLOBALS['framework_path'] . '/partials/card-button.php' ) );						
							}
							?>						

						</div>

					<?php if ( $link_type != 'disable' && ! $button_text ) { ?>
					</a>
					<?php } ?>

				</li>
				<?php
				$i++;
				endwhile;
				?>

				</ul>

			</div>

			<?php if ( $module_link_type != 'disable' ) { ?>
			<div class="module-button-container">
				<a class="btn" href="<?php echo esc_url( $module_button_link ); ?>" title="<?php echo esc_attr( $module_button_text ); ?>">
					<?php echo esc_html( $module_button_text ); ?>
				</a>
			</div>
			<?php } ?>

		<?php endif; ?>
		
	
	<?php if ( ! $remove_gutter ) { ?>
	</div>
	<?php } ?>

</section>
