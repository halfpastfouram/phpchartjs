<?php

namespace Halfpastfour\PHPChartJS;

use Zend\Json\Json;

/**
 * Class LabelsCollection
 * @package Halfpastfour\PHPChartJS\Collection
 */
class LabelsCollection extends Collection implements \JsonSerializable
{
	/**
	 * return string
	 */
	public function jsonSerialize()
	{
		return Json::encode( $this->data );
	}
}