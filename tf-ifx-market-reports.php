<?php

/**
 * Plugin Name:       TF IFX Payments Market Reports
 * Description:       WordPress plugin for IFX Payments that creates a post from a JSON feed via ACF Options fields
 * Version:           1.0.0
 * Author:            Thinking Fox
 * Author URI:        https://www.thinkingfox.com/
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
require_once( ABSPATH . "wp-includes/pluggable.php" );

// Create an ACF options page
include( plugin_dir_path( __FILE__ ) . '/includes/options_page.php');
// Create ACF Fields for Market Report JSON URL & Market Report Title
include( plugin_dir_path( __FILE__ ) . '/includes/acf_fields.php');
// Include Date Format Function
include( plugin_dir_path( __FILE__ ) . '/includes/date.php');
// Get JSON data from JSON URL
include( plugin_dir_path( __FILE__ ) . '/includes/get_json.php');
// Create post
include( plugin_dir_path( __FILE__ ) . '/includes/create_post.php');


// Kernl Updater
require 'kernl-update-checker/kernl-update-checker.php';
$MyUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://kernl.us/api/v1/updates/602d07a4217b245aa7fa2a15/',
    __FILE__,
    'tf-ifx-market-reports'
);