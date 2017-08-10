<?php
/**
 * Module/Layout template - Newsletter.
 *
 * @package bigbang
 */

$module_name = 'newsletter';

// Common Fields.
include( locate_template( '/plugins/helpers/common-fields.php' ) );

// Background Fields.
include( locate_template( '/plugins/helpers/background.php' ) );
?>

<section <?php echo $module_attr; ?>>
	
	<?php include( locate_template( $GLOBALS['framework_path'] . '/partials/card-background.php' ) ); ?>

	<div class="container">
		
		<div class="newsletter-info col-sm-6">
			<h2><?php the_sub_field( 'headline' ); ?></h2>
			<?php the_sub_field( 'description' ); ?>
		</div>
		
		<div class="newsletter-form col-sm-6">
			<?php the_sub_field( 'form_embed' ); ?>
		</div>

	</div>

</section>
