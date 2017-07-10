<?php
/*
  Plugin Name: MSH Display Featured Image On Blog Index
  Plugin URI: http://www.mainstreethost.com
  Description: This plugin will allow you to display featured image on the blog post index page
  Author: Dana Iser
  Version: 1.2
  Author URI: http://www.mainstreethost.com
  License: GPL3
 */
 
add_action( 'pre_get_posts', 'add_featured_image' );

function add_featured_image( $query ) {

    if( $query->is_main_query() && $query->is_home() ) {
        //your image code
    }

}