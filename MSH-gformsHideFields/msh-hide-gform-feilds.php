<?php
/**
 * Plugin Name: MSH-- hide feild lables gforms
 * Description: MSH--  Remove the additional information and Reviews Tab   
 * Author: Dana Iser
 * Version: 1.0
 * Text Domain: MSH-- hide feild lables gforms
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

// Hide form feild labels 
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );