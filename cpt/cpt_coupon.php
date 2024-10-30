<?php 
/**
* Coupon Custom Post Type
*
* @since 		1.0.0
* @package   	CouponFun Plugin
* @author    	ThemeXL
*
*/

function cfxl_coupon_cpt($value='')
{
	$labels = array(
		'name'                => __( 'Coupons', 'couponfun' ),
		'singular_name'       => __( 'Coupon', 'couponfun' ),
		'add_new'             => __( 'Add New Coupon', 'couponfun' ),
		'add_new_item'        => __( 'Add New Coupon', 'couponfun' ),
		'edit_item'           => __( 'Edit Coupon', 'couponfun' ),
		'new_item'            => __( 'New Coupon', 'couponfun' ),
		'view_item'           => __( 'View Coupon', 'couponfun' ),
		'search_items'        => __( 'Search Coupons', 'couponfun' ),
		'not_found'           => __( 'No Coupons found', 'couponfun' ),
		'not_found_in_trash'  => __( 'No Coupons found in Trash', 'couponfun' ),
		'parent_item_colon'   => __( 'Parent Coupon:', 'couponfun' ),
		'menu_name'           => __( 'Coupons', 'couponfun' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 26,
		'menu_icon'           => 'dashicons-tag',
		'capability_type'     => 'post',
		'supports'            => array(
			'title', 'thumbnail'
			)
	);

	register_post_type( 'cf_coupon', $args );
}

add_action( 'init', 'cfxl_coupon_cpt' );