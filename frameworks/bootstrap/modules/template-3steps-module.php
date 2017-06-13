<?php
/**
 * Module/Layout template - 3 Steps.
 *
 * @package bigbang
 */

$module_name = '3steps';

// Common Fields.
include( locate_template( '/plugins/helpers/common-fields.php' ) );

// Add Heading Fields.
include( locate_template( '/plugins/helpers/add-heading.php' ) );
?>

<section <?php echo $module_attr; ?>>

	<div class="heading-container">
		<div class="container">

		<?php include( locate_template( $GLOBALS['framework_path'] . '/partials/card-add-heading.php' ) ); ?>

		</div>
	</div>
	<div class="steps-container">
		<div class="container ">

		<?php if( have_rows('steps') ): ?>

			<ul class="steps list-inline">

			<?php while( have_rows('steps') ): the_row(); 

				$title = get_sub_field('title');
				$image = get_sub_field('image');
				?>

				<li class="step">

					<?php if ( $image ) { ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
				    <?php } ?>

					<?php if ( $title ) { ?>
						<h3><?php echo esc_html( $title ); ?></h3>
					<?php } ?>

					<?php if ( get_sub_field('description') ) {
						the_sub_field('description');
					} ?>

				</li>

			<?php endwhile; ?>

			</ul>

		<?php endif; ?>
			
		</div>

	</div>

</section>
