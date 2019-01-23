<?php
/*
Plugin Name: YouTube Subs
Plugin URI: https://www.valancers.com
Description: Display Youtube Subscriber Button
Version: 0.0.1
Author: Poonam
Author URI: https://www.valancers.com

*/

if(!defined('ABSPATH')){
  exit;
}// this function will stop users to access the source code directly


require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-scripts.php');
// this Loads the  Script file from include


require_once(plugin_dir_path(__FILE__).'/includes/youtubesubs-class.php');
// Load Class


// Register Widget
function register_youtubesubs(){
  register_widget('Youtube_Subs_Widget');
}

// Hook in function
add_action('widgets_init', 'register_youtubesubs');