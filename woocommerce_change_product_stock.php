<?php
/**
 * Example with hook, after Woocommerce is loaded.
 */
function change_product_stock( $product_id, $stock ) {
    $product = wc_get_product( $product_id );
    $product->set_stock_quantity(10);
    $product->set_stock_status();
    $product->save();
}

add_action( 'woocommerce_init', function() {
    change_product_stock( $product_id = 1397, $stock = 0 );
});
