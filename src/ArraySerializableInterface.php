<?php

namespace Halfpastfour\PHPChartJS;

/**
 * Interface ArraySerializableInterface
 * @package Halfpastfour\PHPChartJS
 */
interface ArraySerializableInterface
{
	/**
	 * Should return a multidimensional array from the collection and it's rows.
	 *
	 * @return array A bi-dimensional array
	 */
	public function getArrayCopy();
}