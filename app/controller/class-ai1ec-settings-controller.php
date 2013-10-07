<?php
//
//  class-ai1ec-settings-controller.php
//  all-in-one-event-calendar
//
//  Created by The Seed Studio on 2011-07-13.
//

/**
 * Ai1ec_Settings_Controller class
 *
 * @package Controllers
 * @author time.ly
 **/
class Ai1ec_Settings_Controller {
	/**
	 * _instance class variable
	 *
	 * Class instance
	 *
	 * @var null | object
	 **/
	private static $_instance = NULL;

	/**
	 * Constructor
	 *
	 * Default constructor
	 **/
	private function __construct() { }

	/**
	 * get_instance function
	 *
	 * Return singleton instance
	 *
	 * @return object
	 **/
	static function get_instance() {
		if( self::$_instance === NULL ) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	/**
	 * Display this plugin's settings page in the admin.
	 *
	 * @return void
	 */
	function view_settings() {
		global $ai1ec_view_helper,
		       $ai1ec_settings;

		if( isset( $_REQUEST['ai1ec_save_settings'] ) ) {
			$this->save( 'settings' );
		}
		$args = array(
			'title' => __( 'All-in-One Event Calendar: Settings', AI1EC_PLUGIN_NAME ),
			'settings_page' => $ai1ec_settings->settings_page,
		);
		$ai1ec_view_helper->display_admin( 'settings.php', $args );
	}

	/**
	 * Save the submitted settings form.
	 *
	 * @param string $settings_page Which settings page is being saved.
	 * @return void
	 */
	function save( $settings_page ) {
		global $ai1ec_settings,
		       $ai1ec_view_helper;

		$ai1ec_settings->update( $settings_page, $_REQUEST );
		do_action( 'ai1ec_save_settings', $settings_page, $_REQUEST );
		$ai1ec_settings->save();

		$args = array(
			'msg' => __( 'Settings Updated.', AI1EC_PLUGIN_NAME )
		);

		$ai1ec_view_helper->display_admin( "save_successful.php", $args );
	}

	/**
	 * Disable data notification (AJAX callback).
	 *
	 * @return void
	 **/
	function disable_notification() {
		global $ai1ec_view_helper, $ai1ec_settings;

		$ai1ec_settings->update_notification( false );
		$output = array(
			'error' 	=> false,
			'message'	=> 'Request successful.'
		);

		$ai1ec_view_helper->json_response( $output );
	}

	/**
	 * Disable standard notification (AJAX callback).
	 *
	 * @return void
	 **/
	function disable_standard_notice() {
		global $ai1ec_view_helper, $ai1ec_settings;

		$ai1ec_settings->update_standard_notification( false );
		$output = array(
			'error' 	=> false,
			'message'	=> 'Request successful.'
		);
		
		$ai1ec_view_helper->json_response( $output );
	}
	/**
	 * Disable intro video (AJAX callback).
	 *
	 * @return void
	 **/
	function disable_intro_video() {
		global $ai1ec_view_helper, $ai1ec_settings;

		$ai1ec_settings->update_intro_video( false );
		$output = array(
			'error' 	=> false,
			'message'	=> 'Request successful.'
		);

		$ai1ec_view_helper->json_response( $output );
	}

	/**
	 * Add meta boxes to settings screen.
	 *
	 * @return void
	 */
	function add_settings_meta_boxes() {
		global $ai1ec_settings_helper,
					 $ai1ec_settings;

		// Add the 'General Settings' meta box.
		add_meta_box(
			'ai1ec-general-settings',
			_x( 'General Settings', 'meta box', AI1EC_PLUGIN_NAME ),
			array( &$ai1ec_settings_helper, 'general_settings_meta_box' ),
			$ai1ec_settings->settings_page,
			'left-side',
			'default'
		);
		// Add the 'Advanced Settings' meta box.
		add_meta_box(
			'ai1ec-advanced-settings',
			_x( 'Advanced Settings', 'meta box', AI1EC_PLUGIN_NAME ),
			array( &$ai1ec_settings_helper, 'advanced_settings_meta_box' ),
			$ai1ec_settings->settings_page,
			'left-side',
			'default'
		);
		// Add the 'Timely Support' meta box.
		add_meta_box(
			'ai1ec-support',
			_x( 'Timely Support', 'meta box', AI1EC_PLUGIN_NAME ),
			array( &$ai1ec_settings_helper, 'support_meta_box' ),
			$ai1ec_settings->settings_page,
			'right-side',
			'default'
		);
	}

	/**
	 * plugin_action_links function
	 *
	 * Adds a link to Settings page in plugin list page.
	 *
	 * @return array
	 **/
	function plugin_action_links( $links ) {
		$settings = sprintf( __( '<a href="%s">Settings</a>', AI1EC_PLUGIN_NAME ), admin_url( AI1EC_SETTINGS_BASE_URL ) );
		array_unshift( $links, $settings );
		return $links;
	}

	/**
	 * plugin_row_meta function
	 *
	 *
	 *
	 * @return void
	 **/
	function plugin_row_meta( $links, $file ) {
		if( $file == AI1EC_PLUGIN_BASENAME ) {
			$links[] = sprintf( __( '<a href="%s" target="_blank">Donate</a>', AI1EC_PLUGIN_NAME ), 'https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=9JJMUW48W2ED8' );
			$links[] = sprintf( __( '<a href="%s" target="_blank">Get Support</a>', AI1EC_PLUGIN_NAME ), 'http://help.time.ly/' );
		}

		return $links;
	}

}
// END class
