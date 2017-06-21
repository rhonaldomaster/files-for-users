<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://github.com/rhonaldomaster
 * @since             0.1.0
 * @package           Files_For_Users
 *
 * @wordpress-plugin
 * Plugin Name:       Files for users
 * Plugin URI:        https://github.com/rhonaldomaster/files-for-users
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           0.1.0
 * Author:            Rhonalf Martinez, Fabian Altahona
 * Author URI:        https://github.com/rhonaldomaster
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       files-for-users
 * Domain Path:       /languages
 * 
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-files-for-users-activator.php
 */
function activate_files_for_users() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-files-for-users-activator.php';
	Files_For_Users_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-files-for-users-deactivator.php
 */
function deactivate_files_for_users() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-files-for-users-deactivator.php';
	Files_For_Users_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_files_for_users' );
register_deactivation_hook( __FILE__, 'deactivate_files_for_users' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-files-for-users.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_files_for_users() {

	$plugin = new Files_For_Users();
	$plugin->run();

}
run_files_for_users();
