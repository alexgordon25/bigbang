<?php
/**
 * Card/Layout template - Posts
 *
 * @package bigbang
 */

?>
<div class="item col-sm-6 <?php echo esc_attr( ' grid-' . $grid_layout); ?>">
	
	<a class="item-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		
		<?php
		if ( has_post_thumbnail() ) { 
			$grid_image_id = get_post_thumbnail_id();
			$grid_image = wp_get_attachment_image_src($grid_image_id,'custom-medium', true); 
			?>
			<div class="image-container">
				<div class="inner-content">
					<img class="item-image" src="<?php echo $grid_image[0]; ?>" alt="<?php the_title(); ?>">
				</div>
			</div>
		<?php }	?>
		
		<div class="description">
			<?php
			$taxonomies = get_taxonomies( '','objects' );
			$terms = array();
			foreach ( $taxonomies as $key => $taxonomy ) {
				$terms_array = wp_get_post_terms( $post->ID, $taxonomy->name,  array( 'fields' => 'names' ) );
				if ( !empty( $terms_array ) ) {
					foreach ( $terms_array as $key => $term_array ) {
						$terms[] = $term_array;
					}
				}
			} 

			if ( !empty( $terms ) ) { ?>
			<span class="terms"><?php echo esc_html( implode(', ', array_slice($terms, 0, 2) ) ); ?></span>
			<?php } ?>
			<h4><?php the_title(); ?></h4>
		</div>
	</a>

</div>
