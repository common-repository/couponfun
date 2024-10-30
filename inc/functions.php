<?php 

/**
* Enqueue scripts
*
* @since 		1.0.0
* @package   	CouponFun Plugin
* @author    	ThemeXL
*
*/

function cfxl_enqueue(){
	wp_enqueue_style( 'cf-font', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700' );
	wp_enqueue_style( 'cf-bootstrap', plugins_url( '../css/responsive.css', __FILE__ ) );
	wp_enqueue_style( 'cf-style', plugins_url( '../css/style.css', __FILE__ ) );

	wp_enqueue_script( 'cf-fontawesome', 'https://use.fontawesome.com/releases/v5.0.11/js/all.js', array( 'jquery' ), null, true );
	wp_enqueue_script( 'cf-script', plugins_url( '../js/script.js', __FILE__ ), array( 'jquery' ), null, true );
}
add_action( 'wp_enqueue_scripts', 'cfxl_enqueue' );

/**
* Admin Enqueue scripts
*
* @since 		1.0.0
* @package   	CouponFun Plugin
* @author    	ThemeXL
*
*/

function cfxl_admin_enqueue(){
	global $typenow, $pagenow;

	if( $typenow == 'cf_coupon' && $pagenow == 'edit.php' ):
		wp_enqueue_style( 'cf-admin-style', plugins_url( '../css/admin-style.css', __FILE__ ) );
	endif;
}
add_action( 'admin_enqueue_scripts', 'cfxl_admin_enqueue' );

/**
* Plugin setings
*
* @since 		1.0.0
* @package   	CouponFun Plugin
* @author    	ThemeXL
*
*/

function cfxl_customize_register( $wp_customize )
{
	$wp_customize->add_section('cfp_couponfun_plugin_section', array(
		'title'		=> 'CouponFun Plugin Settings',
		'priority'	=> 30
	));

	$wp_customize->add_setting('cfp_coupon_per_page', array(
		'default'	=> '',
		'transport'	=> 'refresh'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cfp_coupon_per_page_set', array(
		'label'		=> __( 'Posts Per page', 'couponfun' ),
		'section'	=> 'cfp_couponfun_plugin_section',
		'settings'	=> 'cfp_coupon_per_page',
		'type'		=> 'number'
	)) );

	$wp_customize->add_setting('cfp_margin_top_page', array(
		'default'	=> '',
		'transport'	=> 'refresh'
	));

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'cfp_margin_top_page_set', array(
		'label'		=> __( 'Margin top', 'couponfun' ),
		'section'	=> 'cfp_couponfun_plugin_section',
		'settings'	=> 'cfp_margin_top_page',
		'type'		=> 'number'
	)) );
}

add_action( 'customize_register', 'cfxl_customize_register' );

/**
* Paginate Links
*
* @since 		1.0.0
* @package   	CouponFun Plugin
* @author    	ThemeXL
*
*/

function cfxl_paginate_links( $paginate_links ){
	$links = '';
	if( !empty( $paginate_links ) ){

       foreach ( $paginate_links as $paginate_link ) {

          if( strpos( $paginate_link, 'page-numbers current' ) !== false ){
            $paginate_link = str_replace( "<span class='page-numbers current'>", "<a class='active-btn' href='javascript:void(0)'>", $paginate_link );
            $paginate_link = str_replace( "</span>", "</a>", $paginate_link );
            $links .= "<li>".$paginate_link."</li>";
          } 
          else {
            $links .= "<li>".$paginate_link."</li>";
          }
       }
    }
    return $links;
}

/**
* CouponFun Pro Theme Link
*
* @since 		1.0.0
* @package   	CouponFun Plugin
* @author    	ThemeXL
*
*/

function cfxl_couponfun_pro(){
    global $typenow, $pagenow;

    if ( $typenow == 'cf_coupon' && $pagenow == 'edit.php' ) {
         echo '<div class="notice is-dismissible cf-pro">
            <a href="http://demo.themexl.com/?theme=couponfun-wp" target="_blank"><img src="'.plugin_dir_url( dirname( __FILE__ ) ) . '/img/couponfun-pro.png'.'"></a>
         </div>';
    }

}
add_action('admin_notices', 'cfxl_couponfun_pro');