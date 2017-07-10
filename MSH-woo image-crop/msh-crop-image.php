<?php
/*
  Plugin Name: MSH Image Crop 
  Plugin URI: http://Mmainstreethost.com
  Description: This plugin will allow you change post thumbnail crop position in WordPress WITHOUT HACKING CORE and changes Woocommerce to display 12 products per page. 
  Author: Dana Iser
  Version: 1.2
  Author URI: http://www.mainstreethost.com
  License: GPL3
 */
 
/*
Some people have looked at this and felt that there was no way to override the $s_y = floor( ($orig_h - $crop_h) / 2 ); line without hacking core. this is something that lets you basically ‘short-circuit’ the function in question:
                // plugins can use this to provide custom resize dimensions
                $output = apply_filters( 'image_resize_dimensions', null, $orig_w, $orig_h, $dest_w, $dest_h, $crop );
                if ( null !== $output )
                    return $output;


So here’s our function to make all crops start at (0,0) — customize it as you like:
*/

function my_awesome_image_resize_dimensions( $payload, $orig_w, $orig_h, $dest_w, $dest_h, $crop ){

    // Change this to a conditional that decides whether you 
    // want to override the defaults for this image or not.
    if( false )
        return $payload;

    if ( $crop ) {
        // crop the largest possible portion of the original image that we can size to $dest_w x $dest_h
        $aspect_ratio = $orig_w / $orig_h;
        $new_w = min($dest_w, $orig_w);
        $new_h = min($dest_h, $orig_h);

        if ( !$new_w ) {
            $new_w = intval($new_h * $aspect_ratio);
        }

        if ( !$new_h ) {
            $new_h = intval($new_w / $aspect_ratio);
        }

        $size_ratio = max($new_w / $orig_w, $new_h / $orig_h);

        $crop_w = round($new_w / $size_ratio);
        $crop_h = round($new_h / $size_ratio);

        $s_x = 0; // [[ formerly ]] ==> floor( ($orig_w - $crop_w) / 2 );
        $s_y = 0; // [[ formerly ]] ==> floor( ($orig_h - $crop_h) / 2 );
    } else {
        // don't crop, just resize using $dest_w x $dest_h as a maximum bounding box
        $crop_w = $orig_w;
        $crop_h = $orig_h;

        $s_x = 0;
        $s_y = 0;

        list( $new_w, $new_h ) = wp_constrain_dimensions( $orig_w, $orig_h, $dest_w, $dest_h );
    }

    // if the resulting image would be the same size or larger we don't want to resize it
    if ( $new_w >= $orig_w && $new_h >= $orig_h )
        return false;

    // the return array matches the parameters to imagecopyresampled()
    // int dst_x, int dst_y, int src_x, int src_y, int dst_w, int dst_h, int src_w, int src_h
    return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );

}
add_filter( 'image_resize_dimensions', 'my_awesome_image_resize_dimensions', 10, 6 );

// Display 12 products per page. 
add_filter( 'loop_shop_per_page', create_function( '$cols', 'return 12;' ), 20 );

