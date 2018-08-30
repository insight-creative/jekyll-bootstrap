<?php
/**
 * Insight Responsive functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Insight-Responsive
 */

function upeChildScripts(){
	wp_enqueue_script('customJS', get_stylesheet_directory_uri() . '/JS/customJS.js');
}
add_action('wp_enqueue_scripts', 'upeChildScripts')
?>
