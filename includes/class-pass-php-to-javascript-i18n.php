<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.wplauncher.com
 * @since      1.0.0
 *
 * @package    Pass_Php_To_Javascript
 * @subpackage Pass_Php_To_Javascript/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Pass_Php_To_Javascript
 * @subpackage Pass_Php_To_Javascript/includes
 * @author     Benjamin Shadle <benshadle@gmail.com>
 */
class Pass_Php_To_Javascript_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'pass-php-to-javascript',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
