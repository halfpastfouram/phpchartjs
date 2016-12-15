<?php

namespace Halfpastfour\PHPChartJS;

use Halfpastfour\PHPChartJS\Collection\ArrayAccess;
use Zend\Json\Json;

/**
 * Class LabelsCollection
 * @package Halfpastfour\PHPChartJS\Collection
 */
class LabelsCollection extends ArrayAccess implements \JsonSerializable
{
	/**
	 * return string
	 */
	public function jsonSerialize()
	{
		return Json::encode( $this->data );
	}
}