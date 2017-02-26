<?php
/**
 * The template for displaying Modular Page Builder Template.
 *
 * Template Name: Modular Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bigbang
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
		$layouts = $page_layouts;

		foreach ($layouts as $layout) {
			$layout_names[] = $layout['name'];
		}

		if ( have_rows('modules') ):

		    while ( have_rows('modules') ) : the_row();

				foreach ($layout_names as $layout_name){
					if ( get_row_layout() == $layout_name ) {
						$module_path = locate_template( $GLOBALS['framework_path'] . '/modules/template-' . str_replace('_', '-', $layout_name) . '.php' );
						if ( !empty( $module_path ) ) {
					    	include( $module_path );
					    }
					}
				}

		    endwhile;

		else : ?>

		<section class="module module-noncontent">
			<div class="container">
				<h2><?php echo __( "Sorry. We don't have any content available yet. :(", "bigbang" ); ?></h2>
			</div>
		</section>
		
		<?php
		endif;

		// Default WP Content Field.
		wp_reset_postdata(); // Restore original Post Data from modules.
		if ( !empty( get_the_content() ) ) { ?>

		<section class="module module-default">
			<div class="container">
				<?php the_content(); ?>
			</div>
		</section>

		<?php } ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
