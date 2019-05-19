<?php

/*
Plugin Name: D3map
Description: short code: [d3-info-map]
Version: 1.0
Author: alex
*/

if (!defined('ABSPATH')) {
	exit;
}

// Add short code for the plugin
function short_code() {
	include 'd3map.php';
}

add_shortcode('d3-info-map', 'short_code');

// Add the scripts
function add_all_scripts() {
	wp_enqueue_script('visual', plugins_url('/visual.js',__FILE__), array(),'1.0',true);
//	wp_enqueue_style( 'calculator_style', plugins_url('/css/calculator_style.css', __FILE__), array(), '1.0');
//	wp_enqueue_script('json_settings', plugins_url('/VIC_LGA_POLYGON_shp.json', __FILE__), array(), true );
}

add_action('wp_enqueue_scripts', 'add_all_scripts');
