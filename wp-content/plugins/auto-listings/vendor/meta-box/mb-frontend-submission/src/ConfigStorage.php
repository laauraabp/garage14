<?php
 /**
  * Store form configs in a persistent option that can be retrieved on form requests.
  */

namespace MBFS;

class ConfigStorage {
	const OPTION_NAME = 'mbfs_keys';

	public static function get( $key ) {
		$option = get_option( self::OPTION_NAME );
		return isset( $option[ $key ] ) ? $option[ $key ] : null;
	}

	public static function delete( $key ) {
		$option = get_option( self::OPTION_NAME );
		unset( $option[ $key ] );
		update_option( self::OPTION_NAME, $option );
	}

	public static function store( $config ) {
		$option         = get_option( self::OPTION_NAME );
		$key            = self::get_key( $config );
		$option[ $key ] = $config;
		update_option( self::OPTION_NAME, $option );

		return $key;
	}

	public static function get_key( $config ) {
		return md5( serialize( $config ) );
	}
}
