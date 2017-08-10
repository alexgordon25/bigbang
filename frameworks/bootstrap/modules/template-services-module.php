<?php
/**
 * Module/Layout template - Services.
 *
 * @package bigbang
 */

$module_name = 'services';

// Common Fields.
include( locate_template( '/plugins/helpers/common-fields.php' ) );

// Add Heading Fields.
include( locate_template( '/plugins/helpers/add-heading.php' ) );

// Background Fields.
include( locate_template( '/plugins/helpers/background.php' ) );

// Get sidebar image
$fg_image = get_sub_field( 'fg_image' );
$fg_image = $fg_image['sizes']['custom-large'];
?>

<section <?php echo $module_attr; ?>>

	<?php include( locate_template( $GLOBALS['framework_path'] . '/partials/card-background.php' ) ); ?>

	<div class="container">
		
		<?php if ( $image ) : ?>
			<div class="col-container col-md-6">
				<img class="feature-img" src="<?php echo esc_url( $fg_image ); ?>" alt="<?php echo esc_attr( strip_tags( $headline ) ); ?>">
			</div>
		<?php endif; ?>

		<div class="col-container <?php if ( $fg_image ) { echo esc_attr( 'foreground col-md-6' ); } ?>">
			
			<?php if ( $tag !== 'disable' ) : ?>
			<div class="heading-container">
				<?php include( locate_template( $GLOBALS['framework_path'] . '/partials/card-add-heading.php' ) ); ?>
			</div>
			<?php endif; ?>

			<div class="services-container">

			<?php
			$posts = get_sub_field( 'service_posts' );

			if( $posts ): ?>
				<ul>
				<?php foreach( $posts as $post ) : ?>
					<?php setup_postdata( $post ); ?>
					<li class="<?php if ( ! $image ) { echo esc_attr( 'col-md-6' ); } ?>">

						<img class="icon" src="<?php echo esc_url( get_field( 'icon_image' ) ); ?>" alt="<?php the_title(); ?>">
						<a href="<?php the_permalink(); ?>">
							<h3><?php the_title(); ?></h3>
						</a>
						<p>
							<?php the_field('intro'); ?>
							<a href="<?php the_permalink(); ?>"><?php echo __('Leer más...', 'bigbang'); ?></a>
						</p>
						
					</li>
				<?php endforeach; ?>
				</ul>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
			
			</div>

		</div>

	</div>

</section>
