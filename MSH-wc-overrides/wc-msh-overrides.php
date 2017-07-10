<?php
/**
 * Plugin Name: MSH-- Woo Custom Cart Text || Woo Create Account By Default
 * Description: MSH-- Woo Custom Cart Text ->  Replaces "add to cart"  with "Request Repair!"  || Woo Create Account By Default ->   * Changes cart to make account by default
 * Author: Dana Iser
 * Version: 1.0
 * Text Domain: MSH-- Woo Custom Cart Text || Woo Create Account By Default
 *
 * Copyright: (c) 2012-2099 [Dana Iser] (diser@mainstreethost.com)
 *
 * License: GNU General Public License v3.0
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html 
 *
 * @author    [MSH-Iser]
 * @copyright Copyright (c) 2012-2014, [MSH-Iser]
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License v3.0
 *
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// Changes add to cart text --diser 8/19/2016
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woo_custom_cart_button_text' );    
 
function woo_custom_cart_button_text() {
 
        return __( 'Request Repair!', 'woocommerce' );
 
}

// Changes add to cart text --diser 8/19/2016 
add_filter( 'woocommerce_product_add_to_cart_text', 'woo_archive_custom_cart_button_text' );    
 
function woo_archive_custom_cart_button_text() {
 
        return __( 'Request Repair!', 'woocommerce' );
 
}

// Changes cart to make account by default--diser 8/19/2016 
add_filter( 'woocommerce_create_account_default_checked', function( $isChecked) { return true; } );


