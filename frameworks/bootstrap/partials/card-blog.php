<?php
/**
 * Card/Layout template - Blog Posts
 *
 * @package bigbang
 */

$external_link = get_field( 'external_url' );
if ( $external_link ) {
	$post_link = $external_link;
	$post_target = '_blank';
} else {
	$post_link = get_permalink();
	$post_target = '_self';
}
?>
<div class="item <?php echo esc_attr( $card_blog_class ); ?> card-blog-post">

	<?php
	if ( has_post_thumbnail() ) { 
		$grid_image_id = get_post_thumbnail_id();
		$grid_image = wp_get_attachment_image_src($grid_image_id,'custom-medium', true); 
		$grid_image = $grid_image[0];
	} else {
		$grid_image = get_template_directory_uri() . '/img/post-placeholder.jpg';
	} ?>

	<a class="item-link" href="<?php echo esc_url( $post_link ); ?>" title="<?php the_title(); ?>" target="<?php echo esc_attr( $post_target ); ?>">
		<div class="image-container">
			<div class="inner-content">
				<img class="item-image" src="<?php echo esc_url( $grid_image ); ?>" alt="<?php the_title(); ?>">
			</div>
		</div>
		<p class="info small">
	  		<span class="date-month"><?php the_time('M') ?></span>
	  		<span class="date-day"><?php the_time('j') ?></span>
		</p>
	</a>

	<div class="description">
		<a class="title-link" href="<?php echo esc_url( $post_link ); ?>" title="<?php the_title(); ?>" target="<?php echo esc_attr( $post_target ); ?>">
			<h4><?php the_title(); ?></h4>
		</a>
		<p class="intro">
			<?php echo wp_trim_words( get_field( 'intro' ), 15, '...' ); ?>
		</p>
	</div>

</div>
