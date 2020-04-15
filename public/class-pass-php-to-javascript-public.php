<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.wplauncher.com
 * @since      1.0.0
 *
 * @package    Pass_Php_To_Javascript
 * @subpackage Pass_Php_To_Javascript/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Pass_Php_To_Javascript
 * @subpackage Pass_Php_To_Javascript/public
 * @author     Benjamin Shadle <benshadle@gmail.com>
 */
class Pass_Php_To_Javascript_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Pass_Php_To_Javascript_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Pass_Php_To_Javascript_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/pass-php-to-javascript-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Pass_Php_To_Javascript_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Pass_Php_To_Javascript_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_register_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/pass-php-to-javascript-public.js', array( 'jquery' ), $this->version, false );

		wp_enqueue_script( $this->plugin_name);

		$add_something_nonce = wp_create_nonce( "add_something" );
		$ajax_url = admin_url( 'admin-ajax.php' );

		wp_localize_script( $this->plugin_name, 'pass_php_to_js_ajax_object', 
		  	array( 
				'ajax_url' => $ajax_url,
				'add_something_nonce'=> $add_something_nonce
			) 
		);
	}

}
