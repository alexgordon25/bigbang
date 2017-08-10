<?php
/**
 * The bootstrap header for our theme.
 *
 * @package bigbang
 */

?>
<nav class="navbar navbar-fixed-top">

	<div class="mainbar">
		
		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="logo-wrapper">
					<a href="<?php echo home_url(); ?>">
						<?php
						$logo_desktop = get_field( 'logo_desktop', 'options' );
						$logo_mobile = get_field( 'logo_mobile', 'options' );
						$logo_retina = get_field( 'logo_retina', 'options' );
						if ( $logo_retina ) {
							$logo_url = $logo_retina;
						} elseif ( $logo_desktop ) {
							$logo_url = $logo_desktop;
						} else {
							$logo_url = get_template_directory_uri() . '/img/logo.png';
						}
						?>

						<?php if ( is_front_page() === true ) { echo '<h1>'; } ?>

							<img alt="<?php bloginfo( 'name' ); ?>" class="logo <?php if( $logo_mobile && empty( $logo_retina ) ) { echo esc_attr( 'desktop' ); } ?>" src="<?php echo esc_url( $logo_url ); ?>" />

							<?php 
							if ( $logo_mobile && empty( $logo_retina ) ) { ?>
							<img alt="<?php bloginfo( 'name' ); ?>" class="logo mobile" src="<?php echo esc_url( $logo_mobile ); ?>" />
							<?php } ?>

						<?php if ( is_front_page() === true ) { echo '</h1>'; } ?>
					</a>
				</div>
				
				<?php
				if ( get_field( 'contact_icons', 'options' ) ) : ?>
					<div class="contact-links">
						<ul class="contact_icons-links list-inline">  

							<?php
							while ( have_rows('contact_icons', 'options') ) : the_row(); ?>

							<li class="<?php echo sanitize_title( get_sub_field( 'title' ) ); ?>">
								<?php if ( get_sub_field( 'url' ) ) { ?>
								<a href="<?php the_sub_field( 'url' ); ?>" title="<?php the_sub_field( 'title' ); ?>" target="_blank">
								<?php } ?>
									<i class="<?php the_sub_field( 'class' ); ?>"></i>
									<span class="title"><?php the_sub_field( 'title' ); ?></span>
									<span class="text"><?php the_sub_field( 'text' ); ?></span>
								<?php if ( get_sub_field( 'url' ) ) { ?>									
								</a>
								<?php } ?>
							</li>

							<?php endwhile; ?>

						</ul>
					</div>
				<?php 
				endif; ?>
	
			</div>

			<div id="navbar" class="navbar-collapse collapse">

				<div class="topbar">

					<div class="topbar-inner-wrapper">
						<div class="topbar-inner">

						<?php
						if ( get_field( 'social_icons', 'options' ) ) : ?>

				    		<ul class="social-icons list-inline">	

								<?php
							    while ( have_rows('social_icons', 'options') ) : the_row(); ?>

							    <li>
							    	<a href="<?php the_sub_field( 'url' ); ?>" title="<?php the_sub_field( 'title' ); ?>" target="_blank">
							    		<i class="<?php the_sub_field( 'class' ); ?>"></i>
							    		<span class="text"><?php the_sub_field( 'title' ); ?></span>
							    	</a>
						    	</li>

							    <?php endwhile; ?>

						    </ul>

						<?php 
						endif;

						if ( get_field( 'other_icons', 'options' ) ) : ?>

							<ul class="other-icons list-inline">  

								<?php
								while ( have_rows('other_icons', 'options') ) : the_row(); ?>

								<li>
									<a href="<?php the_sub_field( 'url' ); ?>" title="<?php the_sub_field( 'title' ); ?>" target="_blank">
										<i class="<?php the_sub_field( 'class' ); ?>"></i>
										<span class="text"><?php the_sub_field( 'title' ); ?></span>
									</a>
								</li>

								<?php endwhile; ?>

							</ul>

						<?php 
						endif; ?>

						</div>
					</div>

				</div>

				<div class="search-container">
					<?php get_search_form(); ?>
				</div>

				<?php
				wp_nav_menu( array(
					'theme_location'  => 'main',
					'menu'            => '',
					'container'       => false,
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'nav navbar-nav',
					'menu_id'         => '',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul class="nav navbar-nav nav-main">%3$s</ul>',
					'depth'           => 2,
					'walker'          => new wp_bootstrap_navwalker(),
					)
				); ?>

			</div><!--/.nav-collapse -->

		</div>	
		
	</div>

</nav>