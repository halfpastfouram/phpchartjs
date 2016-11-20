<?php

namespace Halfpastfour\PHPChartJS;

/**
 * Class DataSetCollection
 * @package Halfpastfour\PHPChartJS\Collection
 */
class DataSetCollection extends Collection implements CollectionInterface, \JsonSerializable
{
	/**
	 * @return array
	 */
	public function getArrayCopy()
	{
		$rows	= array();
		foreach( $this->rowSet as $row ) {
			/** @var DataSet $row */
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