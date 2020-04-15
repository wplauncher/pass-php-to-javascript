<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.wplauncher.com
 * @since             1.0.0
 * @package           Pass_Php_To_Javascript
 *
 * @wordpress-plugin
 * Plugin Name:       Pass PHP to JavaScript
 * Plugin URI:        https://blog.wplauncher.com/pass-php-values-to-a-javascript-file-in-wordpress/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Benjamin Shadle
 * Author URI:        https://www.wplauncher.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       pass-php-to-javascript
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PASS_PHP_TO_JAVASCRIPT_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-pass-php-to-javascript-activator.php
 */
function activate_pass_php_to_javascript() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pass-php-to-javascript-activator.php';
	Pass_Php_To_Javascript_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-pass-php-to-javascript-deactivator.php
 */
function deactivate_pass_php_to_javascript() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-pass-php-to-javascript-deactivator.php';
	Pass_Php_To_Javascript_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_pass_php_to_javascript' );
register_deactivation_hook( __FILE__, 'deactivate_pass_php_to_javascript' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-pass-php-to-javascript.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_pass_php_to_javascript() {

	$plugin = new Pass_Php_To_Javascript();
	$plugin->run();

}
run_pass_php_to_javascript();
