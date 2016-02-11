<?php

/**
 * Fired during plugin activation
 *
 * @link       twitter.com/anandinux
 * @since      1.0.0
 *
 * @package    Hisaab_Kitaab
 * @subpackage Hisaab_Kitaab/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Hisaab_Kitaab
 * @subpackage Hisaab_Kitaab/includes
 * @author     Anand <anand.kmk@gmail.com>
 */
class Hisaab_Kitaab_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
        
        add_role( 'anand_delivery_boy', 'Delivery Boy' );
        

	}

}
