<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://trailblazecreative.com/
 * @since      1.0.0
 *
 * @package    Trailblaze_Youtube_Player
 * @subpackage Trailblaze_Youtube_Player/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Trailblaze_Youtube_Player
 * @subpackage Trailblaze_Youtube_Player/includes
 * @author     TrailBlaze Creative <info@trailblazecreative.com>
 */
class Trailblaze_Youtube_Player_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'trailblaze-youtube-player',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
