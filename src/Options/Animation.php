<?php

namespace Halfpastfour\PHPChartJS\Options;

use Halfpastfour\PHPChartJS\ArraySerializable;

/**
 * Class Animation
 * @package Halfpastfour\PHPChartJS\Options
 */
class Animation implements ArraySerializable, \JsonSerializable
{
	/**
	 * @return array
	 */
	public function getArrayCopy()
	{
		$data	= array();

		return $data;
	}

	/**
	 * @return string
	 */
	public function jsonSerialize()
	{
		return json_encode( $this->getArrayCopy() );
	}
}