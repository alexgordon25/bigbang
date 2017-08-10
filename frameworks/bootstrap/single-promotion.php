<?php
/**
 * The template for displaying all single post for promotions.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bigbang
 */

$tag = 'h1';
$headline = get_the_title();
$tagline = get_field( 'subheadline' );
$intro = get_field( 'intro' );
$current_id = $post->ID;
?>

<?php
foreach ( $header_layouts as $header_layout) {
	$header_layout_names[] = $header_layout['name'];
}

if ( have_rows('promotion_header_modules', 'options') ):

	$header_module_id = 1;

    while ( have_rows('promotion_header_modules', 'options') ) : the_row();

		foreach ($header_layout_names as $layout_name){
			if ( get_row_layout() == $layout_name ) {
				$module_path = locate_template( $GLOBALS['framework_path'] . '/modules/template-' . str_replace('_', '-', $layout_name) . '.php' );
				if ( !empty( $module_path ) ) {
			    	include( $module_path );
			    }
			}
		}

		$header_module_id++;

    endwhile;

endif; ?>

</section>

<section class="module module-promotion-detail module-single">

	<div class="bkg-image-container">
		<div class="item-image"></div>
	</div>

	<div class="container">

		<div class="service-detail">

			<div class="item">
				<div class="row">
					<div class="col-sm-4">
	                    <?php
					  	if ( has_post_thumbnail() ) :
					  		$featured_image_id = get_post_thumbnail_id();
							$featured_image = wp_get_attachment_image_src($featured_image_id,'custom-small', true);
							$featured_image_large = wp_get_attachment_image_src($featured_image_id,'custom-full', true);
					  		?>
							<div class="thumbnail">
								<a href="<?php echo $featured_image_large[0]; ?>" data-gallery title="<?php the_title(); ?>">
	            					<img src="<?php echo $featured_image[0]; ?>" alt="<?php the_title(); ?>" />
	            				</a>
	                     	</div>
	                 	<?php endif; ?>		
					</div>
					<div class="col-sm-8">

	                    <h3><?php the_title(); ?></h3>
	                    
	                    <?php the_content(); ?>

					</div>
				</div>

			</div>
			
		</div>
		
	</div>

</section>

<?php
foreach ( $header_layouts as $footer_layout) {
	$footer_layout_names[] = $footer_layout['name'];
}

if ( have_rows('promotion_footer_modules', 'options') ):

	$footer_module_id = 1;

    while ( have_rows('promotion_footer_modules', 'options') ) : the_row();

		foreach ($footer_layout_names as $layout_name){
			if ( get_row_layout() == $layout_name ) {
				$module_path = locate_template( $GLOBALS['framework_path'] . '/modules/template-' . str_replace('_', '-', $layout_name) . '.php' );
				if ( !empty( $module_path ) ) {
			    	include( $module_path );
			    }
			}
		}

		$footer_module_id++;

    endwhile;

endif; ?>
