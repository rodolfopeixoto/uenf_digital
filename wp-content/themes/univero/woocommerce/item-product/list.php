<?php global $product; ?>
<div class="media product-block widget-product ">
	<div class="media-left">
		<a href="<?php echo esc_url( get_permalink( $product->get_id() ) ); ?>" class="image">
			<?php univero_product_get_image(); ?>
		</a>
	</div>
	<div class="media-body">
		<div class="rating clearfix">
			<?php
            	if ($rating_html = wc_get_rating_html( $product->get_average_rating() )) {
            		echo wp_kses_post( wc_get_rating_html( $product->get_average_rating() ) );
            	}
        	?>
	    </div>
		<h3 class="name">
			<a href="<?php echo esc_url( get_permalink( $product->get_id() ) ); ?>"><?php echo wp_kses_post( $product->get_title() ); ?></a>
		</h3>
		<div class="price"><?php echo wp_kses_post($product->get_price_html()); ?></div>
		<div class="groups-button clearfix">
            <div class="addcart">
                <?php do_action( 'woocommerce_after_shop_loop_item' ); ?>
                <?php
                    $action_add = 'yith-woocompare-add-product';
                    $url_args = array(
                        'action' => $action_add,
                        'id' => $product->get_id()
                    );
                ?>
            </div>
            <?php
                if( class_exists( 'YITH_WCWL' ) ) {
                    echo do_shortcode( '[yith_wcwl_add_to_wishlist]' );
                }
            ?>

            <?php if (univero_get_config('show_quickview', true)) { ?>
                <div class="quick-view">
                    <a href="<?php the_permalink(); ?>" class="quickview icon-theme icon-theme--small icon-theme--light" data-productslug="<?php echo esc_attr($post->post_name); ?>">
                       <i class="mn-icon-41"> </i>
                    </a>
                </div>
            <?php } ?>
        </div>
	</div>
</div>