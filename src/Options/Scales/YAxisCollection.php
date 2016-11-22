<?php

namespace Halfpastfour\PHPChartJS\Options\Scales;

use Halfpastfour\PHPChartJS\Collection;
use Halfpastfour\PHPChartJS\CollectionInterface;
use Zend\Json\Json;

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
		$rows	= [];
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
		return Json::encode( $this->getArrayCopy(), false, [ 'enableJsonExprFinder' => true ] );
	}
}