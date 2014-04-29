<?php

/**
 * Class to group HTTP response related functionality
 *
 * @author     Time.ly Network Inc.
 * @since      2.0
 *
 * @package    AI1EC
 * @subpackage AI1EC.Http.Response
 */
class Ai1ec_Http_Response_Helper {

	/**
	 * Perform redirect to desired location and stop script execution after that
	 *
	 * When debug mode is activated redirect doesn't happen but instead link
	 * is outputted to screen, to allow developer to tamper with the flow, debug
	 * it and make changes as desired.
	 *
	 * @param string $location Location to redirect user to
	 * @param int    $code     HTTP response code to use in redirects
	 *
	 * @uses wp_redirect To create actual headers.
	 *
	 * @return int|NULL Method does call {@see self::stop()} to halt further
	 *                  script execution unless mocked
	 */
	public static function redirect( $location, $code = 302 ) {
		header( 'Location: ' . $location, true, $code );
		return self::stop();
	}

	/**
	 * Mockable method to halt script execution
	 *
	 * @param int $code Code to be used in `exit` statement
	 *
	 * @return void Method does not return
	 */
	public static function stop( $code = 0 ) {
		exit( $code );
	}

	/**
	 * Check if client accepts gzip and we should compress content
	 *
	 * Plugin settings, client preferences and server capabilities are
	 * checked to make sure we should use gzip for output compression.
	 *
	 * @uses Ai1ec_Settings::get_instance To early instantiate object
	 *
	 * @return bool True when gzip should be used
	 */
	static public function client_use_gzip() {
		if (
			isset( $_SERVER['HTTP_ACCEPT_ENCODING'] ) &&
			'identity' === $_SERVER['HTTP_ACCEPT_ENCODING'] ||
			! extension_loaded( 'zlib' )
		) {
			return false;
		}
		$zlib_output_handler = ini_get( 'zlib.output_handler' );
		if (
			in_array( 'ob_gzhandler', ob_list_handlers() ) ||
			in_array(
				strtolower( ini_get( 'zlib.output_compression' ) ),
				array( '1', 'on' )
			) ||
			! empty( $zlib_output_handler )
		) {
			return false;
		}
		return true;
	}

	/**
	 * ai1ec_utf8 function
	 *
	 * Encode value as safe UTF8 - discarding unrecognized characters.
	 * NOTE: objects will be cast as array.
	 *
	 * @uses iconv               To change encoding
	 * @uses mb_convert_encoding To change encoding if `iconv` is not available
	 *
	 * @param mixed $input Value to encode
	 *
	 * @return mixed UTF8 encoded value
	 *
	 * @throws Exception If no trans-coding method is available
	 */
	public static function utf8( $input ) {
		if ( NULL === $input ) {
			return NULL;
		}
		if ( is_scalar( $input ) ) {
			if ( function_exists( 'iconv' ) ) {
				return iconv( 'UTF-8', 'UTF-8//IGNORE', $input );
			}
			if ( function_exists( 'mb_convert_encoding' ) ) {
				return mb_convert_encoding( $input, 'UTF-8' );
			}
			throw new Exception(
				'Either `iconv` or `mb_convert_encoding` must be available.'
			);
		}
		if ( ! is_array( $input ) ) {
			$input = (array)$input;
		}
		return array_map( array( __CLASS__, 'utf8' ), $input );
	}
}