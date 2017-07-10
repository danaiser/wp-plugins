<?php
/**
 * Plugin Name: MSH-- Custom Thank You Page 
 * Description: MSH-- Custom Thank You Page  -> modify thank you page with custom message 
 * Author: Dana Iser
 * Version: 1.0
 * Text Domain: MSH-- Custom Thank You Page
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


add_filter( 'woocommerce_thankyou_order_received_text', 'dimsh_custom_ty_msg' );

function dimsh_custom_ty_msg ( $thank_you_msg ) {
$thank_you_msg =  "<p style='color: red; font-weight: bold;'>You now need to ship your device to us</p>
<p style='color: red; font-weight: bold;'>Please choose a shipping method with insurance.</p>
<p style='color: red; font-weight: bold;'>Please take care in packing your device to insure no further damage occurs during shipping.</p>
<p style='color: red; font-weight: bold;'>Also be sure to include the <i>Order Number</i> so we know its yours.

<p style='color: red; font-weight: bold;'>Once you are certain you have packed the device in a shipping box well and have insured your device, please ship it to:</p>
<h2 style='color: black; font-weight: bold;'>The Igurus</h2>
<address style='color: black; font-weight: bold;'>5855 S.W. 21st St</br>
Topeka, KS<br/>
66604</address>
<br/>";
    return $thank_you_msg;
}