<?php

namespace Halfpastfour\PHPChartJS;

/**
 * Interface ArraySerializable
 * @package Halfpastfour\PHPChartJS
 */
interface ArraySerializable
{
	/**
	 * Should return a multidimensional array from the collection and it's rows.
	 *
	 * @return array A bi-dimensional array
	 */
	public function getArrayCopy();
}