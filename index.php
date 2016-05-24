<?php
/*
Plugin Name: Tachyons-CSS-Tiny
Description: Enqueues Tachyons CSS Framework
Plugin URI: https://github.com/DakotaLMartinez/wp-tachyons
Author: Dakota Lee Martinez
Author URI: http://github.com/DakotaLMartinez
Version: 1.0
License: GPL2
Text Domain: dlm
Domain Path: Domain Path
*/

/*

    Copyright (C) 2016  Dakota Lee Martinez  dakotaleemusic@gmail.com

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

function load_tachyons_styles() {
	wp_register_style( 'tachyons-css', plugin_dir_url(__FILE__) . 'css/tachyons.min.css');	
	wp_enqueue_style('tachyons-css');
}
add_action( 'wp_enqueue_scripts', 'load_tachyons_styles');