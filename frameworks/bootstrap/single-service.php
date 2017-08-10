<?php
/**
 * The template for displaying all single post for services.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bigbang
 */

$current_id = $post->ID;
$featured_image_id = get_post_thumbnail_id();
$featured_image = wp_get_attachment_image_src($featured_image_id,'custom-full', true);
$featured_image = $featured_image[0];
?>

<?php
foreach ( $header_layouts as $header_layout) {
	$header_layout_names[] = $header_layout['name'];
}

if ( have_rows('service_header_modules', 'options') ):

	$header_module_id = 1;

    while ( have_rows('service_header_modules', 'options') ) : the_row();

		foreach ($header_layout_names as $layout_name){
			if ( get_row_layout() == $layout_name ) {
				if ( 'hero_module' == $layout_name ) {
					$push_tagline = get_field( 'subheadline' );
					$push_description = get_field( 'intro' );
					$push_background_image = $featured_image;
				}
				$module_path = locate_template( $GLOBALS['framework_path'] . '/modules/template-' . str_replace('_', '-', $layout_name) . '.php' );
				if ( !empty( $module_path ) ) {
			    	include( $module_path );
			    }
			    if ( 'hero_module' == $layout_name ) {
					unset($push_tagline);
					unset($push_description);
					unset($push_background_image);
				}
			}
		}

		$header_module_id++;

    endwhile;

endif; ?>

<section class="module module-service-detail module-single">

	<div class="bkg-image-container">
		<div class="item-image"></div>
	</div>

	<div class="container">

		<div class="row">

			<div class="service-sidebar col-md-4">
				
				<?php
				$services = new WP_Query( array(
					'post_type' => 'service',
					'order' => 'ASC'
				) );

				if ( $services->have_posts() ) : ?>

					<ul class="services-list">
					
					<?php
					while ( $services->have_posts() ) : 
						$services->the_post(); ?>
						
						<li>
							<a href="<?php the_permalink(); ?>" class="<?php if ( $current_id === $post->ID ) { echo esc_attr( 'active' ); } ?>">
								<?php 
								if ( get_field( 'icon_image' ) ) { ?>
									<img class="icon svg" src="<?php echo esc_url( get_field( 'icon_image' ) ); ?>" alt="<?php the_title(); ?>">
										<?php 
								} ?>
								<span><?php the_title(); ?></span>
							</a>
						</li>

					<?php
					endwhile;
					wp_reset_postdata();
					?>

					</ul>

				<?php
				endif; ?>

			</div>

			<div class="service-detail col-md-8">
				<?php the_content(); ?>
			</div>
		
		</div>
	</div>

</section>

<?php
foreach ( $footer_layouts as $footer_layout) {
	$footer_layout_names[] = $footer_layout['name'];
}

if ( have_rows('service_footer_modules', 'options') ):

	$footer_module_id = 1;

    while ( have_rows('service_footer_modules', 'options') ) : the_row();

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
