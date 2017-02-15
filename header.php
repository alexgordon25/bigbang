<?php
/**
 * The header for our theme.
 *
 * @package bigbang
 */

?><!doctype html>
<html <?php language_attributes(); ?> class="no-skrollr no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
	<link href="//www.google-analytics.com" rel="dns-prefetch">
    <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/touch.png" rel="apple-touch-icon-precomposed">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
	<meta name="description" content="<?php bloginfo('description'); ?>">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!--[if lt IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<header>
	<?php
		switch ( $GLOBALS['framework'] ) {
			case 'bootstrap':
				include( locate_template( $GLOBALS['framework_path'] . '/header.php' ) );
				break;

			case 'foundation':
				include( locate_template( $GLOBALS['framework_path'] . '/header.php' ) );
				break;

			default:
				break;
		}
	?>
</header>
