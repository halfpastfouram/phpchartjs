<?php

namespace Halfpastfour\PHPChartJS\Options;

use Halfpastfour\PHPChartJS\ArraySerializable;
use Zend\Json\Json;

/**
 * Class Hover
 * @package Halfpastfour\PHPChartJS\Options
 */
class Hover implements ArraySerializable, \JsonSerializable
{
	/**
	 * @return array
	 */
	public function getArrayCopy()
	{
		return array();
	}

	/**
	 * @return string
	 */
	public function jsonSerialize()
	{
		return Json::encode( $this->getArrayCopy() );
	}
}