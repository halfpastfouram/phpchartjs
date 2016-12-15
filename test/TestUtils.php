<?php
/**
 * Created by PhpStorm.
 * User: gbonnema
 * Date: 15-12-2016
 * Time: 09:36
 */

namespace Test;

class TestUtils
{
	/**
	 * this method sets all defined attributes from the input array
	 * $input_data in the $obj and calls the setter.
	 *
	 * @param       $obj
	 * @param array $data
	 */
	public static function setAttributes( $obj, array $data )
	{

		if( !is_object( $obj ) ) {
			throw new \RuntimeException( "First param should be an object. " );
		}

		foreach( $data as $key => $value ) {
			$function = 'set' . ucfirst( $key );
			$obj->$function( $value );
		}
	}

	/**
	 * this method reads all defined attributes from the input array
	 * $input_data and calls the getter. It returns the resulting array.
	 *
	 * @param       $obj
	 * @param array $input_data
	 *
	 * @return array
	 */
	public static function getAttributes( $obj, array $input_data )
	{

		if( !is_object( $obj ) ) {
			throw new \RuntimeException( "First param should be an object. " );
		}

		$array = [];
		foreach( $input_data as $key => $value ) {
			$function      = ( gettype( $value ) == "boolean" ? 'is' : 'get' ) . ucfirst( $key );
			$array[ $key ] = $obj->$function( $value );
		}

		return $array;
	}
}