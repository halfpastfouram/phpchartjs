<?php

namespace Halfpastfour\PHPChartJS\Options;

use Halfpastfour\PHPChartJS\ArraySerializable;
use Zend\Json\Json;

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
		$data	= [];

		return $data;
	}

	/**
	 * @return string
	 */
	public function jsonSerialize()
	{
		return Json::encode( $this->getArrayCopy() );
	}
}