<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       twitter.com/anandinux
 * @since      1.0.0
 *
 * @package    Hisaab_Kitaab
 * @subpackage Hisaab_Kitaab/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Hisaab_Kitaab
 * @subpackage Hisaab_Kitaab/includes
 * @author     Anand <anand.kmk@gmail.com>
 */
class Hisaab_Kitaab_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'hisaab-kitaab',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
