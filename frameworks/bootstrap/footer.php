<?php
/**
 * The bootstrap footer for our theme.
 *
 * @package bigbang
 */

$footer_column = count( get_field( 'footer_columns', 'options' ) );

if ( $footer_column === 2 ) {
	$column_class = 'col-sm-6';
} elseif ( $footer_column === 3 ) {
	$column_class = 'col-sm-4';
} elseif ( $footer_column === 4 ) {
	$column_class = 'col-sm-6 col-md-3';
} else {
	$column_class = 'col-sm-12';
}

if( have_rows( 'footer_columns', 'options' ) ) : 
	?>

<section class="footer-content">
    <div class="container">

	    <div class="row">

			<?php
		    while ( have_rows( 'footer_columns', 'options' ) ) : the_row();
		    	$column_title = get_sub_field( 'column_title' );

				if ( have_rows('footer_content', 'options') ) : ?>

					<div class="item <?php echo esc_attr( $column_class ); ?>">

						<?php if ( $column_title ) { ?>
						<h2><?php echo esc_html( $column_title ); ?></h2>
						<?php } ?>

						<?php
						while ( have_rows('footer_content', 'options') ) : the_row(); ?>

							<div class="item-element">

							<?php
							if ( get_row_layout() == 'plain_content' ) {
								?>
								
								<p><?php the_sub_field( 'short_description' ); ?></p>
								
							<?php
							} elseif ( get_row_layout() == 'show_social_icons' ) {

								if ( get_field( 'social_icons', 'options' ) ) :
									?>

						    		<ul class="social-icons list-inline">	

										<?php
									    while ( have_rows('social_icons', 'options') ) : the_row(); ?>

									    <li>
									    	<a href="<?php the_sub_field( 'url' ); ?>" title="<?php the_sub_field( 'title' ); ?>" target="_blank">
									    		<i class="<?php the_sub_field( 'class' ); ?>"></i>
									    		<span class="social-text"><?php the_sub_field( 'title' ); ?></span>
									    	</a>
								    	</li>

									    <?php endwhile; ?>

								    </ul>

								<?php endif; ?>

								
							<?php
							} elseif ( get_row_layout() == 'contact_us' ) {
								?>

								<div class="contact-container">

									<?php if ( get_sub_field( 'show_address' ) === true && get_field( 'address', 'options' ) ) : ?>
										<div class="item">
											<h5><?php echo __('Address', 'bigbang'); ?></h5>
											<p class="address"><?php the_field( 'address', 'options' ); ?></p>
										</div>
									<?php endif; ?>

									<?php if ( get_sub_field( 'show_phones' ) === true && get_field( 'phones', 'options' ) ) : ?>
										<div class="item">
											<h5><?php echo __('Phone', 'bigbang'); ?></h5>
											<p class="phone" href="tel:<?php the_field( 'phones', 'options' ); ?>">
												<?php the_field( 'phones', 'options' ); ?>
											</p>
										</div>
									<?php endif; ?>

									<?php if ( get_sub_field( 'show_toll_free' ) === true && get_field( 'toll_free', 'options' ) ) : ?>
										<div class="item">
											<h5><?php echo __('Toll Free', 'bigbang'); ?></h5>
											<p class="phone" href="tel:<?php the_field( 'toll_free', 'options' ); ?>">
												<?php the_field( 'toll_free', 'options' ); ?>
											</p>
										</div>
									<?php endif; ?>

									<?php if ( get_sub_field( 'show_fax' ) === true && get_field( 'fax', 'options' ) ) : ?>
										<div class="item">
											<h5><?php echo __('Fax', 'bigbang'); ?></h5>
											<p class="phone" href="tel:<?php the_field( 'fax', 'options' ); ?>">
												<?php the_field( 'fax', 'options' ); ?>
											</p>
										</div>
									<?php endif; ?>

									<?php if ( get_sub_field( 'show_email' ) === true && get_field( 'email', 'options' ) ) : ?>
										<div class="item">
											<h5><?php echo __('Email', 'bigbang'); ?></h5>
											<p class="email"> 
												<a href="mailto:<?php the_field( 'email', 'options' ); ?>" title="<?php the_field( 'email', 'options' ); ?>">
													<?php the_field( 'email', 'options' ); ?>
												</a>
											</p>
										</div>
									<?php endif; ?>

								</div>

							<?php
							} elseif ( get_row_layout() == 'show_location_map' ) {

								$location = get_field( 'location_map', 'options');

								if( !empty($location) ):
								?>
								<div class="acf-map">
									<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
								</div>
								<?php endif;

							} elseif ( get_row_layout() == 'embeded_content' ) {
								
								the_sub_field( 'embed' );

							} elseif ( get_row_layout() == 'sidebar_selector' ) {
								
								if ( is_active_sidebar( get_sub_field( 'sidebar' ) ) ) { ?>
									
									<div class="widget-section" role="complementary">
										<?php dynamic_sidebar( get_sub_field( 'sidebar' ) ); ?>
									</div>
								
								<?php } 

							} ?>

							</div>

						<?php
					    endwhile; ?>

				    </div>

				<?php endif;

		    endwhile; ?>

		</div>

    </div>
    <a id="scroll-top" href="#"><i class="fa fa-chevron-up"></i></a>
</section>

<?php
endif; ?>

<footer>
	<div class="container">
		
		<div class="row">
			<div class="col-sm-12">
				<?php
				wp_nav_menu( array(
						'theme_location'  => 'main',
						'items_wrap'      => '<ul class="nav-footer list-inline">%3$s</ul>',
						'depth'           => 1
						)
					);
				?>
				<p class="copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
			</div>
		</div>

	</div>
</footer>
