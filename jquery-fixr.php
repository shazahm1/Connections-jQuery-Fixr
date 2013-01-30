<?php
/*
Plugin Name: Connections jQuery Fixr
Plugin URI: http://www.connections-pro.com
Description: Ensures the bundled version of jQuery is used.
Version: 1.0
Author: Steven A. Zahm
Author URI: http://www.connections-pro.com

Copyright 2013  Steven A. Zahm  (email : helpdesk@connections-pro.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function cn_register_jquery() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', '/wp-includes/js/jquery/jquery.js' );
}
add_action( 'wp_print_scripts', 'cn_register_jquery', 9999 );