<?php
	/*
	Plugin Name: Logout to Homepage
	Description: Directs user to the homepage after succesfully logging out of Wordpress rather than to the login screen.
	Version: 1.0.1
	Author: Jay Holtslander
	License: GPL2
	*/

add_action('wp_logout',create_function('','wp_redirect(home_url());exit();'));

?>