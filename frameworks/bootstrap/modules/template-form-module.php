<?php
/**
 * Module/Layout template - Form.
 *
 * @package bigbang
 */

$module_name = 'form';

// Form Fields.
$form_layout = get_sub_field( 'form_layout' );
$form_align = get_sub_field( 'form_align' );
$module_name = $module_name . ' ' . $form_layout;
if ( $form_layout === 'float-form' && $form_align ) {
	$module_name = $module_name . ' ' . $form_align;
}

// Common Fields.
include( locate_template( '/plugins/helpers/common-fields.php' ) );

// Heading Fields.
include( locate_template( '/plugins/helpers/add-heading.php' ) );

// Background Fields.
include( locate_template( '/plugins/helpers/background.php' ) );

?>

<section <?php echo $module_attr; ?>>

	<?php include( locate_template( $GLOBALS['framework_path'] . '/partials/card-background.php' ) ); ?>

	<div class="container">

		<div class="form-wrapper">

			<?php include( locate_template( $GLOBALS['framework_path'] . '/partials/card-add-heading.php' ) ); ?>
			
			<div class="form-container">
				<?php
				$form = get_sub_field('form');
			    if ( function_exists( 'ninja_forms_display_form' ) ) {
			        ninja_forms_display_form( $form );
			    } ?>
			</div>

		</div>

	</div>

</section>

<?php
add_action( 'wp_footer', function() {
	if ( wp_script_is( 'main-js', 'done' ) ) {
		?>

		<script type="text/javascript">
		(function($) {
			$(document).ready(function($) {

				$('.module-form.float-form').on('click', '.card-heading', function(event) {
					event.preventDefault();
					$(this).next().toggleClass('collapsed');
				});

			});
		})(jQuery);
		</script>

	<?php
	}
} , 200 );
