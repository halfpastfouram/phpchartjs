<?php

namespace Halfpastfour\PHPChartJS\Collection;

use Halfpastfour\PHPChartJS\Collection;
use Halfpastfour\PHPChartJS\CollectionInterface;
use Zend\Json\Json;

/**
 * Class Data
 * @package Halfpastfour\PHPChartJS\Collection
 */
class Data extends Collection implements CollectionInterface, \JsonSerializable
{
	/**
	 * @return string
	 */
	public function jsonSerialize()
	{
		return Json::encode( $this->data );
	}
}