<?php
/*
Plugin Name: Custom Widget Title Links
Plugin URI: http://www.mainstreethost.com
Description: Allows you to define a link within widget titles.
Version: 1.0
Author: Mainstreethost | Dana Iser
Author URI: http://www.mainstreethost.com
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
function custom_widget_link( $title ) {

	// if there's a link attached to the title that it starts with www, http, or /
	if ( ( substr( $title, 0, 4) == "www." ) || ( substr( $title, 0, 4) == "http" ) || ( substr( $title, 0, 1) == "/" ) ) {

		// split our title in half
		$title_pieces = explode( "|", $title );

		// if there's 2 pieces
		if ( count( $title_pieces ) == 2 ) {

			// add http if it's just www
			if ( substr( $title, 0, 4) == "www." ) {
				$title_pieces[0] = str_replace( "www.", "http://www.", $title_pieces[0] );
			}

			// create a new title from the url and the extracted title
			$title = '<a href="' . $title_pieces[0] . '" title="' . $title_pieces[1] . '">' . $title_pieces[1] . '</a>';
		}
	}

	return $title;
}
add_filter( "widget_title", "custom_widget_link" );

?>