<?php
/*
  Plugin Name: MSH Woo Store closed notice
  Plugin URI: http://www.mainstreethost.com
  Description: This plugin will allow you to put the cart in Maintenance mode just create the message you want when when a shop product or category page is visited in the html below
  Author: Dana Iser
  Version: 1.2
  Author URI: http://www.mainstreethost.com
  License: GPL3
 */


add_filter ('the_content', 'msh_woocommerce_maintenance');
function msh_woocommerce_maintenance($content) {
   if( is_woocommerce() or is_shop() or is_product_category() or is_product() or is_cart() or is_checkout() or is_account_page() ) {
      $content.= '<div class="maintMode" style="border:1px dotted #000; text-align:center; padding:10px;">';
      $content.= '<h4>Sorry but our Ecommerce store will up and running real soon</h4>';
      $content.= '<p>Thanks for your interest & please check back soon. If you have qustions about our products please use the form to the right.</p>';
      $content.= '</div>';
   }
   return $content;
}