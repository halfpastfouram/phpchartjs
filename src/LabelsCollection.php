<?php

namespace Halfpastfour\PHPChartJS;

/**
 * Class LabelsCollection
 * @package Halfpastfour\PHPChartJS\Collection
 */
class LabelsCollection extends Collection implements CollectionInterface, \JsonSerializable
{
	/**
	 * return string
	 */
	public function jsonSerialize()
	{
		return json_encode( $this->rowSet );
	}
}