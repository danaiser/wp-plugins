<?php
/*
  Plugin Name: USATS  woo 3.0 gallery & slider support
  Plugin URI: http://www.usatechsolutions.com
  Description: adds support for the new woo 3.0 slider & zoom
  Author: Dana Iser
  Version: 1
  Author URI: http://www.usatechsolutions.com
  License: GPL3
 */
add_action( 'after_setup_theme', 'yourtheme_setup' );

function yourtheme_setup() {

add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );
}