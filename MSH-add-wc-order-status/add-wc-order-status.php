<?php
/**
 * Plugin Name: MSH-- Woo Add Order Status "Awaiting shipment" || Woo Reset new order status
 * Description: MSH-- Woo Add Order Status "Awaiting shipment" -> Adds "Awaiting shipment" status to woocommerce || Woo Reset new * order status -->   Changes new order status from "processing" to "awaiting shipment" 
 * Author: Dana Iser
 * Version: 1.0
 * Text Domain: MSH-- Woo Add Order Status->Awaiting shipment || Woo Reset new order status
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

/** 
 * Register new status
**/
function register_awaiting_shipment_order_status() {
    register_post_status( 'wc-awaiting-shipment', array(
        'label'                     => 'Awaiting shipment',
        'public'                    => true,
        'exclude_from_search'       => false,
        'show_in_admin_all_list'    => true,
        'show_in_admin_status_list' => true,
        'label_count'               => _n_noop( 'Awaiting shipment <span class="count">(%s)</span>', 'Awaiting shipment <span class="count">(%s)</span>' )
    ) );
}
add_action( 'init', 'register_awaiting_shipment_order_status' );

// Add to list of WC Order statuses
function add_awaiting_shipment_to_order_statuses( $order_statuses ) {

    $new_order_statuses = array();

    // add new order status after processing
    foreach ( $order_statuses as $key => $status ) {

        $new_order_statuses[ $key ] = $status;

        if ( 'wc-processing' === $key ) {
            $new_order_statuses['wc-awaiting-shipment'] = 'Awaiting Shipment';
        }
    }

    return $new_order_statuses;
}
add_filter( 'wc_order_statuses', 'add_awaiting_shipment_to_order_statuses' );

//  Reset status of new orders from "processing" to "awaiting shipment" 
add_action( 'woocommerce_thankyou', 'custom_woocommerce_auto_complete_order' );
function custom_woocommerce_auto_complete_order( $order_id ) {
    global $woocommerce;
     if ( !$order_id )
        return;
    $order = new WC_Order( $order_id );
    $order->update_status( 'awaiting-shipment' );
}


