<?php

/*
Plugin Name: Advanced Custom Fields: Facebook
Plugin URI: PLUGIN_URL
Description: DESCRIPTION
Version: 1.0.0
Author: Ben Sochar
Author URI: AUTHOR_URL
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/




// 1. set text domain
// Reference: https://codex.wordpress.org/Function_Reference/load_plugin_textdomain
load_plugin_textdomain( 'acf-facebookfeed', false, dirname( plugin_basename(__FILE__) ) . '/lang/' );
try {
  include_once("facebook-php-sdk-master/src/facebook.php");
} catch(Exception $e) {
  error_log($e);
}

include_once('facebookfeed-options.php');
include_once('facebookfeed-functions.php');




// 2. Include field type for ACF5
// $version = 5 and can be ignored until ACF6 exists
function include_field_types_facebookfeed( $version ) {

	include_once('acf-facebookfeed-v5.php');

}

add_action('acf/include_field_types', 'include_field_types_facebookfeed');




// 3. Include field type for ACF4
function register_fields_facebookfeed() {

	include_once('acf-facebookfeed-v4.php');

}

add_action('acf/register_fields', 'register_fields_facebookfeed');




?>
