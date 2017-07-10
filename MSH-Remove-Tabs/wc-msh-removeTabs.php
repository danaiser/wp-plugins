<?php
/**
 * Plugin Name: MSH-- Remove the additional information and Reviews Tab 
 * Description: MSH--  Remove the additional information and Reviews Tab   
 * Author: Dana Iser
 * Version: 1.0
 * Text Domain: MSH-- Woo Custom Remove the additional information and Reviews Tab
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

// Removes Tabs --diser 9/30/2016
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 680, 642 );

function woo_remove_product_tabs( $tabs ) {


    unset( $tabs['reviews'] ); 			// Remove the reviews tab
    unset( $tabs['additional_information'] );  	// Remove the additional information tab

    return $tabs;

}


