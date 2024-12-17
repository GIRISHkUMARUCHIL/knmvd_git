<?php
/*
Plugin Name: Simple Plugin
Plugin URI: https://example.com
Description: A simple WordPress plugin template.
Version: 1.0
Author: Girish Kumar
Author URI: https://example.com
License: GPL2
*/

// Prevent direct access
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

// Main plugin function
function simple_plugin_function() {
    echo '<p>Hello, this is a simple plugin output!</p>';
}

// Hook into the 'wp_footer' action
add_action( 'wp_footer', 'simple_plugin_function' );
