<?php

namespace Halfpastfour\PHPChartJS;

use Zend\Json\Json;

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
		$rows	= [];
		foreach( $this->data as $row ) {
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
		return Json::encode( $this->getArrayCopy() );
	}
}