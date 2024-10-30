<?php 

/**
* Plugin Custom template
*
* @since 		1.0.0
* @package   	CouponFun Plugin
* @author    	ThemeXL
*
*/

get_header(); 

$posts_per_page = ! empty(get_theme_mod( 'cfp_coupon_per_page')) ? esc_attr(get_theme_mod( 'cfp_coupon_per_page' )) : '10';
$margin_top = ! empty(get_theme_mod( 'cfp_margin_top_page')) ? esc_attr(get_theme_mod( 'cfp_margin_top_page' )) : "0";

?>

<div class="cf-container cf-clearfix">
    <div class="cf-items cf-row" style="margin-top: <?php echo $margin_top; ?>px;">

<?php 
	$current_page = ( get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1 );

	$args = array(
		'post_type' 		=> 'cf_coupon',
		'post_status'		=> 'publish',
		'order' 			=> 'DESC',
		'posts_per_page'    => $posts_per_page,
		'paged'             => $current_page,
	);

	$query = new WP_Query( $args );
	$total_pages = $query->max_num_pages;

    $args = array(
       'total'              => $total_pages,
       'current'            => $current_page,
       'show_all'           => false,
       'end_size'           => 2,
       'mid_size'           => 2,
       'prev_next'          => true,
       'prev_text'          => '<i class="fa fa-angle-left" aria-hidden="true"></i>',
       'next_text'          => '<i class="fa fa-angle-right" aria-hidden="true"></i>',
       'type'               => 'array',
    );
    
    $paginate_links = paginate_links( $args );
	
	if ( $query->have_posts() ) :
		$count = 1;
		while ( $query->have_posts() ) : $query->the_post(); 

			require 'coupon-item.php';

			if( $count == 4 ){
				echo '<div class="cf-clearfix"></div>';
			}
			$count++;

		endwhile;

	endif;

	wp_reset_postdata();
?>
    	
    </div>

</div>

<?php 
    if( !empty( $paginate_links ) ): ?>
        <!-- pagination -->
        <div class="cf-container cf-clearfix">
	        <div class="cf-row">
	        	<div class="cf-pagination col-md-12">
		            <ul>
		                <?php echo cfxl_paginate_links( $paginate_links ); ?>
		            </ul>
		        </div>
	        </div>
	    </div>
        <!-- end pagination -->
    <?php endif; ?>

<?php get_footer();