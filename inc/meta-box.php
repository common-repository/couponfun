<?php 

/**
* Coupon metabox
*
* @since 		1.0.0
* @package   	CouponFun Plugin
* @author    	ThemeXL
*
*/

add_filter( 'rwmb_meta_boxes', 'cfxl_meta_boxes' );
function cfxl_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'  => 'Coupon Info',
        'post_types'	=> 'cf_coupon',
        'fields' => array(
            array(
                'id'   => 'cf_offer',
                'name' => 'Offer',
                'type' => 'text',
            ),
            array(
                'id'   => 'cf_shop',
                'name' => 'Shop',
                'type' => 'text',
            ),
            array(
                'id'   => 'cf_expires',
                'name' => 'Expires On',
                'type' => 'text',
            ),
            array(
                'id'   => 'cf_coupon',
                'name' => 'Coupon Code (optional)',
                'type' => 'text',
            ),
            array(
                'id'   => 'cf_button',
                'name' => 'Button Text',
                'type' => 'text',
            ),
            array(
                'id'   => 'cf_aff_url',
                'name' => 'Affiliate URL',
                'type' => 'text',
            ),
            array(
                'name'            => 'Number of Star',
                'id'              => 'cf_star',
                'type'            => 'select',
                // Array of 'value' => 'Label' pairs
                'options'         => array(
                    '1'     => '1',
                    '2'     => '2',
                    '3'     => '3',
                    '4'     => '4',
                    '5'     => '5'
                ),
                // Allow to select multiple value?
                'multiple'        => false,
                // Placeholder text
                'placeholder'     => 'Number of star',
                // Display "Select All / None" button?
                'select_all_none' => true,
            ),

        ),
    );
    return $meta_boxes;
}
