<?php
/**
 * The bootstrap header for our theme.
 *
 * @package bigbang
 */

?>
<nav class="navbar navbar-default">

	<div class="topbar">
		<div class="container">
			<ul class="social-icons list-inline">
				<li>
					<a href="https://www.facebook.com/" target="_blank">
						<i class="fa fa-facebook"></i>
					</a>
				</li>
				<li>
					<a href="https://twitter.com/" target="_blank">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
			</ul>
		</div>
	</div>

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
						<?php if ( is_front_page() === true ) { ?>
							<h1><img alt="<?php bloginfo('name'); ?>" class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" /></h1>
						<?php } else { ?>
							<img alt="<?php bloginfo('name'); ?>" class="logo" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logo.png" />
						<?php } ?>
					</a>
				</div>
			</div>

			<div id="navbar" class="navbar-collapse collapse">
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