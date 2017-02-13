<?php
/**
 * Module/Layout template - Grid
 *
 * @package bigbang
 */

// Common Fields.
$custom_id = get_sub_field( 'custom_id' );
$custom_class = get_sub_field( 'custom_class' );

// Grid Options Fields.
$grid_layout = get_sub_field( 'grid_layout' );
$remove_gutter = get_sub_field( 'remove_gutter' );
$gutter_class = ( $remove_gutter === true ) ? 'full-width' : 'container';
$grid_selection = get_sub_field( 'grid_selection' );
$posts_per_page = get_sub_field( 'posts_per_page' );
if ( $grid_selection === 'dynamic' ) {
	$grid_order = get_sub_field( 'grid_order' );
	$grid_orderby = get_sub_field( 'grid_orderby' );
	$posts_dynamic = get_sub_field( 'posts_dynamic' );
	$taxonomy_selector = get_sub_field( 'taxonomy_selector' );
	$tax_query = array();
	$grid_taxonomies = array();
	if ( !empty( $taxonomy_selector ) ) {
		foreach ( $taxonomy_selector as $key => $taxonomy ) {
			$grid_taxonomies[] = $taxonomy->taxonomy;
			if ( count($taxonomy_selector) > 1 ){
				$tax_query['relation'] = 'OR';
			}
			$tax_query[] = array(
					'taxonomy' => $taxonomy->taxonomy,
					'field'    => 'term_id',
					'terms'    => $taxonomy->term_id,
				);
		}
	}
	$grid = new WP_Query( array(
		'post_type' 		=> $posts_dynamic,
		'posts_per_page'	=> $posts_per_page,
		'orderby'			=> $grid_orderby,
		'order'				=> $grid_order,
		'tax_query' 		=> $tax_query,
	));
} elseif ( $grid_selection === 'manual' ) {
	$posts_manual = get_sub_field( 'posts_manual' );
}
$grid_button_link = get_sub_field( 'grid_button_link' );
$link_type = $grid_button_link['button_type'];
$button_text = $grid_button_link['button_text'];

if ( $link_type === 'internal' ) {
	$link = $grid_button_link['button_internal_url'];
} elseif ( $link_type === 'external' ) {
	$link = $grid_button_link['button_external_url'];
}

// Checking $grid content.
if( $grid->have_posts() ) : 
	?>

	<section class="module module-grid <?php echo esc_attr( $custom_class ); ?>" 
		id="<?php echo esc_attr( $custom_id ); ?>">
		
		<div class="<?php echo esc_attr($gutter_class); ?>">

			<?php
			while($grid->have_posts()) : $grid->the_post();
				if ( $grid_layout === 'square' ) {
					include( locate_template( $GLOBALS['framework_path'] . '/partials/card-square-thumbs.php' ) );
				} elseif ( $grid_layout === 'post' ) {
					include( locate_template( $GLOBALS['framework_path'] . '/partials/card-posts.php' ) );
				}
			endwhile; // End of the loop.
			wp_reset_postdata(); // Restore original Post Data.
			?>
		
		</div>

	</section>

	<?php
endif;
