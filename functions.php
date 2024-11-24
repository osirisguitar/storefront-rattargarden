<?php
/*add_action( 'get_header', 'remove_storefront_sidebar' );
 
function remove_storefront_sidebar() {
   //if ( is_product() ) {
      remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
   //}
}*/
add_action('init' , 'remove_functions' , 15 );
function remove_functions() {
  remove_action( 'storefront_before_content', 'woocommerce_breadcrumb', 10 );
  remove_action( 'storefront_footer', 'storefront_credit', 20 );
}
