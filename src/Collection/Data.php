<?php

namespace Halfpastfour\PHPChartJS\Collection;

use Zend\Json\Json;

/**
 * Class Data
 * @package Halfpastfour\PHPChartJS\Collection
 */
class Data extends ArrayAccess implements \JsonSerializable
{
	/**
	 * @return string
	 */
	public function jsonSerialize()
	{
		return Json::encode( $this->data );
	}
}