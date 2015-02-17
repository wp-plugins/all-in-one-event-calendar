<?php
/**
 * EDD_SL_Plugin_Updater wrapper.
 *
 * @instantiator new
 *
 * @author     Time.ly Network Inc.
 * @since      2.2
 * @package    AI1EC
 * @subpackage AI1EC.Lib.Edd

 */
class Ai1ec_EDD_SL_Plugin_Updater extends EDD_SL_Plugin_Updater {

	/**
	 * @var string API URL.
	 */
	protected $_timely_api_url;

	/**
	 * @var array|null API data.
	 */
	protected $_timely_api_data;

	/**
	 * Class constructor.
	 *
	 * @param string $_api_url     The URL pointing to the custom API endpoint.
	 * @param string $_plugin_file Path to the plugin file.
	 * @param array  $_api_data    Optional data to send with API calls.
	 *
	 * @return Ai1ec_EDD_SL_Plugin_Updater
	 */
	public function __construct( $_api_url, $_plugin_file, $_api_data = null ) {
		$this->_timely_api_data = $_api_data;
		$_api_url               = $this->_modify_api_url(
			$_api_url,
			$_plugin_file,
			$_api_data
		);
		$this->_timely_api_url  = $_api_url;
		parent::__construct( $_api_url, $_plugin_file, $_api_data );
		$this->_timely_api_url = trailingslashit( $this->_timely_api_url );
	}

	/**
	 * WP hook handler.
	 *
	 * @param array  $args Request arguments.
	 * @param string $url  URL.
	 *
	 * @return array Modified arguments.
	 */
	public function http_request_args( $args, $url ) {
		if (
			$url !== $this->_timely_api_url ||
			! isset( $args['body']['edd_action'] ) ||
			'get_version' !== $args['body']['edd_action']
		) {
			return $args;
		}
		$args['method'] = 'GET';
		unset( $args['body'] );
		return $args;
	}

	/**
	 * Modifies API URL.
	 *
	 * @param string $_api_url     API URL.
	 * @param string $_plugin_file Plugin file.
	 * @param array  $_api_data    API data.
	 *
	 * @return string Modified URL.
	 */
	protected function _modify_api_url( $_api_url, $_plugin_file, $_api_data ) {
		$slug       = basename( $_plugin_file, '.php' );
		$api_params = array(
			'edd_action' 	=> 'get_version',
			'license' 		=> $_api_data['license'],
			'item_name'		=> urlencode( $_api_data['item_name'] ),
			'slug'			=> $slug,
			'author'		=> urlencode( $_api_data['author'] ),
			'url'			=> site_url(),
		);
		return add_query_arg(
			$api_params,
			trailingslashit( $_api_url )
		);
	}
}
