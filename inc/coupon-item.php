<?php 

$offer = ! empty(rwmb_get_value( 'cf_offer' )) ? rwmb_get_value( 'cf_offer' ) : "";
$star = ! empty(rwmb_get_value( 'cf_star' )) ? rwmb_get_value( 'cf_star' ) : "";
$title = get_the_title();
$img = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
$shop = ! empty(rwmb_get_value( 'cf_shop' )) ? rwmb_get_value( 'cf_shop' ) : "";
$expires = ! empty(rwmb_get_value( 'cf_expires' )) ? rwmb_get_value( 'cf_expires' ) : "";
$coupon_btn = ! empty(rwmb_get_value( 'cf_button' )) ? rwmb_get_value( 'cf_button' ) : "";
$coupon = ! empty(rwmb_get_value( 'cf_coupon' )) ? rwmb_get_value( 'cf_coupon' ) : "";
$url = ! empty(rwmb_get_value( 'cf_aff_url' )) ? rwmb_get_value( 'cf_aff_url' ) : "";

?>

<div class="cf-col-lg-3 cf-col-md-3 cf-col-sm-12 cf-item">
	<div class="cf-singel-offer">
		<?php if( !empty($offer) ): ?>
		<div class="cf-offer">
			<span><?php echo esc_attr( $offer ); ?></span>
		</div>
		<?php endif; ?>

		<div class="cf-img">
			
			<?php if( !empty($img) ): ?>
			<img class="cf-item-img" src="<?php echo esc_url( $img ); ?>">
			<?php endif; ?>
			
			<?php if( !empty($star) ): ?>
    		<div class="cf-star">
    			<?php for ($i=0; $star > $i; $i) { 
    				echo '<i class="fas fa-star"></i>';
    				$i++;
    			} ?>
    		</div>
    		<?php endif; ?>

		</div>
		<div class="cf-body">
			
			<?php if( !empty($title) ): ?>
			<h3><?php echo esc_attr( $title ); ?></h3>
			<?php endif; ?>

			<?php if( !empty($shop) ): ?>
    		<div class="cf-offer-info">
    			<i class="fas fa-shopping-cart"></i>
    			<span><?php echo esc_attr( $shop ); ?></span>
    		</div>
    		<?php endif; ?>

    		<?php if( !empty($expires) ): ?>
    		<div class="cf-offer-info">
    			<i class="far fa-clock"></i>
    			<span><?php echo esc_attr( $expires ); ?></span>
    		</div>
    		<?php endif; ?>

    		<div class="cf-btn">
    			<?php if( !empty($coupon) ): ?>
    			<div class="cf-button" data-url="<?php echo esc_url( $url ); ?>" data-open="false">
    				<h3><?php echo esc_attr( $coupon_btn ); ?></h3>
    			</div>
    			<div class="cf-coupon">
    				<h3><?php echo esc_attr( $coupon ); ?></h3>
    			</div>
    			<?php else : ?>
				<div class="cf-button-deal" data-url="<?php echo esc_url( $url ); ?>" data-deal="true"> 
					<h3><?php echo esc_attr( $coupon_btn ); ?></h3> 
				</div>
				<?php endif; ?>
    		</div>

		</div>
	</div>
</div>

