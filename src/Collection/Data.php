<?php

namespace Halfpastfour\PHPChartJS\Collection;

use Halfpastfour\PHPChartJS\Collection;
use Halfpastfour\PHPChartJS\CollectionInterface;

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
		return json_encode( $this->rowSet );
	}
}