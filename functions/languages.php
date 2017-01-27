<?php
/**
 * BigBang languages setup.
 * Sets up and enables translation functionalities.
 *
 * @package bigbang
 */

add_action('after_setup_theme', 'load_translations');
function load_translations(){
	load_theme_textdomain( 'bigbang', get_template_directory() .'/languages' );
}
?>