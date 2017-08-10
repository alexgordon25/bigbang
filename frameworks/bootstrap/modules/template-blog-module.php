<?php
/**
 * Module/Layout template - Blog.
 *
 * @package bigbang
 */

$module_name = 'blog';

// Common Fields.
include( locate_template( '/plugins/helpers/common-fields.php' ) );

// Heading Fields.
include( locate_template( '/plugins/helpers/add-heading.php' ) );

// Blog Fields.
$posts_per_page = get_sub_field( 'posts_per_page' );

// Button Fields.
include( locate_template( '/plugins/helpers/button-group.php' ) );

if ( $tag !== 'disable' ) {
	$heading_container_class = 'col-md-4';
	$blog_container_class = 'col-md-8';
	$card_blog_class = 'col-sm-6';
} else {
	$heading_container_class = 'hidden';
	$blog_container_class = 'col-md-12';
	$card_blog_class = 'col-sm-3';
}

$blog = new WP_Query( array(
		'post_type' 		=> 'post',
		'posts_per_page'	=> $posts_per_page,
	));

// Checking $blog content.
if( $blog && $blog->have_posts() ) : 
	?>

	<section <?php echo $module_attr; ?>>

		<div class="container">
			
			<?php if ( $link_type != 'disable' && $tag !== 'disable' ) : ?>
			<div class="heading-container <?php echo esc_attr( $heading_container_class ); ?>">

				<?php include( locate_template( $GLOBALS['framework_path'] . '/partials/card-add-heading.php' ) ); ?>

				<?php include( locate_template( $GLOBALS['framework_path'] . '/partials/card-button.php' ) ); ?>

			</div>
			<?php endif; ?>

			<div class="blog-container <?php echo esc_attr( $blog_container_class ); ?>">

				<div class="row">

				<?php
				while($blog->have_posts()) : $blog->the_post();
					include( locate_template( $GLOBALS['framework_path'] . '/partials/card-blog.php' ) );
				endwhile; // End of the loop.
				wp_reset_postdata(); // Restore original Post Data.
				?>
				
				<?php if ( $tag === 'disable' ) {
					include( locate_template( $GLOBALS['framework_path'] . '/partials/card-button.php' ) );
				} ?>

				</div>

			</div>

		</div>

	</section>

	<?php
endif;
