<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/rhonaldomaster
 * @since      1.0.0
 *
 * @package    Files_For_Users
 * @subpackage Files_For_Users/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Files_For_Users
 * @subpackage Files_For_Users/includes
 * @author     Rhonalf Martinez <rhonaldomaster@gmail.com>
 */
class Files_For_Users_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'files-for-users',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
