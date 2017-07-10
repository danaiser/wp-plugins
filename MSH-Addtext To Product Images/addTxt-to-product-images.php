<?php
/*
Plugin Name: MSH- Add text to product images
Plugin URI: http://www.mainstreethost.com
Description: MSH- MSH- Add text to product images
Version: 1.0
Author: Mainstreethost | Dana Iser
Author URI: http://www.mainstreethost.com
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

 
function sv_add_text_above_wc_shop_image() {
    
    echo '<h4 style="text-align: center;">Click Image to Enlarge</h4>';
}
add_action( 'woocommerce_before_shop_loop_item_title', 'sv_add_text_above_wc_shop_image', 9 );