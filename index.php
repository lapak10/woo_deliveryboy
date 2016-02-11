<?php
/*
Plugin Name: [WOO] delivery boy extension
Plugin URI: http://example.com
Description: An addon for adding delivery boy types.
Version: 0.1
Author: Anand Kumar Chaudhary
Author URI: http://about.me/anand.kmk
Plugin Type: Piklist
License: A "Slug" license name e.g. GPL2
*/
register_activation_hook( __FILE__, function(){

	add_role( 'anand_delivery_boy', 'Delivery Boy' );

} );

register_deactivation_hook( __FILE__, function(){
	remove_role( 'anand_delivery_boy' );
} );
