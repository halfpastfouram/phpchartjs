<?php

namespace Halfpastfour\PHPChartJS\Options\Scales;

use Halfpastfour\PHPChartJS\Collection;
use Halfpastfour\PHPChartJS\CollectionInterface;
use Zend\Json\Json;

/**
 * Class XAxisCollection
 * @package Halfpastfour\PHPChartJS\Collection
 */
class XAxisCollection extends Collection implements CollectionInterface, \JsonSerializable
{
	/**
	 * @return array
	 */
	public function getArrayCopy()
	{
		$rows = array();
		foreach( $this->rowSet as $row ) {
			/** @var XAxis $row */
			$rows[] = $row->getArrayCopy();
		}

		return $rows;
	}

	/**
	 * @return string
	 */
	public function jsonSerialize()
	{
		return Json::encode( $this->getArrayCopy(), false, array( 'enableJsonExprFinder' => true ) );
	}
}