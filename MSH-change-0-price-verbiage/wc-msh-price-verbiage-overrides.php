<?php
/**
 * Plugin Name: MSH-- Woo Custom 0 price Text
 * Description: MSH-- Woo Custom 0 price Text
 * Author: Dana Iser
 * Version: 1.0
 * Text Domain: MSH-- Woo Custom 0 price Text
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

// Changes 0.00 price from FREE to FREE ESTIMATE to --diser 10/20/2016 add_filter('woocommerce_empty_price_html', 'nil_price_message');  function nil_price_message() {    return 'Ring for price';  }

