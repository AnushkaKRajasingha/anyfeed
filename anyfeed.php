<?php
/*
  Plugin Name: AnyFeed Retriever
  Plugin URI: https://wordpress.org/plugins/anyfeed/
  Version: 1.0.0
  Description: Feed Integration Plugin | <a href="#">Documentation</a>
  Author: Anushka K R
  Author URI: http://anushka.pro/
  Text Domain: anyfeed
  Domain Path: /languages
  License: MIT
  Documentation : http://anushka.pro/anyfeed/doc
 */

if(!defined('SCSFEEDDIR')){
    define('SCSFEEDDRI',plugin_dir_url( __FILE__ ) );
}
if(!defined('SCSFEEDDIRPATH')){
    define('SCSFEEDDIRPATH',plugin_dir_path( __FILE__ ) );
}

require_once 'classes/typeFeeds.php';

/**
 * Initialize plugin
 */

$_anyfeedtype = new scsFeedType();