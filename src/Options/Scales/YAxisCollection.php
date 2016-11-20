<?php

namespace Halfpastfour\PHPChartJS\Options\Scales;

use Halfpastfour\PHPChartJS\Collection;
use Halfpastfour\PHPChartJS\CollectionInterface;

/**
 * Class YAxisCollection
 * @package Halfpastfour\PHPChartJS\Collection
 */
class YAxisCollection extends Collection implements CollectionInterface, \JsonSerializable
{
	/**
	 * @return array
	 */
	public function getArrayCopy()
	{
		$rows	= array();
		foreach( $this->rowSet as $row ) {
			/** @var YAxis $row */
			$rows[]	= $row->getArrayCopy();
		}

		return $rows;
	}

	/**
	 * @return string
	 */
	public function jsonSerialize()
	{
		return json_encode( $this->getArrayCopy() );
	}
}