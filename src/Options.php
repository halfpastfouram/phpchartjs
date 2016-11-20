<?php

namespace Halfpastfour\PHPChartJS;

/**
 * Class Options
 * @package Halfpastfour\PHPChartJS
 */
class Options implements ChartOwnedInterface, \JsonSerializable
{
	use ChartOwned;

	/**
	 * @return string
	 */
	function jsonSerialize()
	{
		return '{}';
	}
}