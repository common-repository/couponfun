<?php
/*
Plugin Name: CouponFun
Description: CouponFun is a extremely powerful plugin & this is perfectly fits for your coupons, promo code, discounts, offers, daily deals. It helps you to promote different types of offers.
Version:     1.0.0
Author:      ThemeXL
Author URI:	 https://www.themexl.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: couponfun
*/

// Direct access not permitted
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
* Calling plugin important files
*
* @since 		1.0.0
* @package   	CouponFun Plugin
* @author    	ThemeXL
*
*/

require_once( plugin_dir_path( __FILE__ ) . 'inc/page_templater.php' );
require_once( plugin_dir_path( __FILE__ ) . 'cpt/cpt_coupon.php' );
require_once( plugin_dir_path( __FILE__ ) . 'inc/meta-box-master/meta-box.php' );
require_once( plugin_dir_path( __FILE__ ) . 'inc/meta-box.php' );
require_once( plugin_dir_path( __FILE__ ) . 'inc/functions.php' );