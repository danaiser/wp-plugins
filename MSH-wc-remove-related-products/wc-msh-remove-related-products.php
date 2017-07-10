<?php
/**
 * Plugin Name: MSH-- Woo Remove related products
 * Description: MSH-- Woo Remove related products
 * Author: Dana Iser
 * Version: 1.0
 * Text Domain: MSH-- Woo Remove related products
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

// Removes related products --diser 10/04/2016
function wc_remove_related_products( $args )
{
    if (is_product() && has_term( 'meal-plans', 'product_cat'))
    {
        return array();
    } 

    return $args;
}
add_filter('woocommerce_related_products_args','wc_remove_related_products', 10);


