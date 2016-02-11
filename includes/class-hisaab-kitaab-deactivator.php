<?php

/**
 * Fired during plugin deactivation
 *
 * @link       twitter.com/anandinux
 * @since      1.0.0
 *
 * @package    Hisaab_Kitaab
 * @subpackage Hisaab_Kitaab/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Hisaab_Kitaab
 * @subpackage Hisaab_Kitaab/includes
 * @author     Anand <anand.kmk@gmail.com>
 */
class Hisaab_Kitaab_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
        remove_role( 'anand_delivery_boy');
	}

}
