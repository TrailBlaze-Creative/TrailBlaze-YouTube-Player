<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://trailblazecreative.com/
 * @since      1.0.0
 *
 * @package    Trailblaze_Youtube_Player
 * @subpackage Trailblaze_Youtube_Player/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Trailblaze_Youtube_Player
 * @subpackage Trailblaze_Youtube_Player/public
 * @author     TrailBlaze Creative <info@trailblazecreative.com>
 */
class Trailblaze_Youtube_Player_Public {

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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/trailblaze-youtube-player-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/trailblaze-youtube-player-public.js', array( 'jquery' ), $this->version, false );

	}


    // trailblaze_youtube_shortcode
    public function trailblaze_youtube_shortcode($atts) {
        // Define default attributes
        $atts = shortcode_atts(
            array(
                'user' => null,
                'channelId' => null,
                'playlist' => '',
                'fullscreen' => false,
                'accent' => '#fff',
                'controls' => true,
                'annotations' => false,
                'autoplay' => false,
                'chainVideos' => true,
                'browsePlaylists' => false,
                'playerTheme' => 'dark',
                'listTheme' => 'dark',
                'responsive' => true,
                'playId' => '',
                'sortList' => false,
                'reverseList' => false,
                'shuffleList' => false,
                'wmode' => 'opaque',
            ),
            $atts,
            'trailblaze_youtube'
        );

        // Generate a unique ID for the div
        $div_id = 'ytv-' . uniqid();

        // Start the output with the div
        $output = '<div id="' . $div_id . '" ></div>';

        // Add a script tag that initializes the YouTube TV script
        $output .= '<script>
            document.addEventListener("DOMContentLoaded", function(event) {
                let controller = new YTV("' . $div_id . '", 
                   ' . json_encode($atts) . '
                );
            });
        </script>';

        return $output;
    }

}
