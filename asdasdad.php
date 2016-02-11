<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              twitter.com/anandinux
 * @since             1.0.0
 * @package           Hisaab_Kitaab
 *
 * @wordpress-plugin
 * Plugin Name:       Hisab Kitab
 * Plugin URI:        example.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Anand
 * Author URI:        twitter.com/anandinux
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       hisaab-kitaab
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-hisaab-kitaab-activator.php
 */
function activate_hisaab_kitaab() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hisaab-kitaab-activator.php';
	Hisaab_Kitaab_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-hisaab-kitaab-deactivator.php
 */
function deactivate_hisaab_kitaab() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-hisaab-kitaab-deactivator.php';
	Hisaab_Kitaab_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_hisaab_kitaab' );
register_deactivation_hook( __FILE__, 'deactivate_hisaab_kitaab' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-hisaab-kitaab.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_hisaab_kitaab() {

	$plugin = new Hisaab_Kitaab();
	$plugin->run();

}
run_hisaab_kitaab();
