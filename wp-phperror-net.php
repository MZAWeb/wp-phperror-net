<?php
/*
Plugin Name: WP phperror.net
Description: Sets http://phperror.net/ as your error handler
Version: 0.1
Author: Daniel Dvorkin
Author URI: http://danieldvork.in
License: GPLv2 or later
*/

include "PHP-Error/src/php_error.php";

/*
 * plugins_loaded is the first hook that fires after loading all the plugins.
 * Setting a low priority as to get this working as soon as possible.
 */
add_action( 'plugins_loaded', 'wp_phperror_net_set', 1 );

function wp_phperror_net_set() {

	$defaults = array( 'wordpress'=> true );
	$args     = apply_filters( 'wp-phperror-net-settings', $defaults );

	\php_error\reportErrors( $args );

}

