<?php
/**
 * Card/Layout template - Posts with left thumb
 *
 * @package bigbang
 */

?>
<div class="item col-sm-6 <?php echo esc_attr( ' grid-' . $grid_layout . '-' . $posts_dynamic ); ?>">
	<div class="row">
		<div class="col-sm-4">
			<?php
			if ( has_post_thumbnail() ) { 
				$grid_image_id = get_post_thumbnail_id();
				$grid_image = wp_get_attachment_image_src($grid_image_id,'custom-medium', true); 
				$grid_image = $grid_image[0];
			} else {
				$grid_image = get_template_directory_uri() . '/img/post-placeholder.jpg';
			} ?>
			<div class="thumbnail">
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<img src="<?php echo esc_url( $grid_image ); ?>" alt="<?php the_title(); ?>" />
				</a>
			</div>
		</div>
		<div class="col-sm-8">

			<h3>
				<a class="item-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_title(); ?>
				</a>
			</h3>
			<?php 
			if ($pos=strpos($post->post_content, '<!--more-->')) {
				the_content( '' );
			} else {
				echo '<p>' . wp_trim_words( $post->post_content, 25, '...' ) . '</p>';
			} ?>

		</div>
	</div>

</div>
