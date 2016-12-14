<?php

namespace Halfpastfour\PHPChartJS\Collection;

/**
 * Interface ArrayAccessInterface
 * @package Halfpastfour\PHPChartJS\Collection
 */
interface ArrayAccessInterface
{
	/**
	 * Should return the previous row from the collection. Returns false when no previous row is available.
	 *
	 * @return mixed
	 */
	public function previous();

	/**
	 * Should set the data for the collection and return the previous set of data.
	 *
	 * @param array $p_aData The data should be a multidimensional array.
	 * @return array A bi-dimensional array
	 */
	public function exchangeArray( array $p_aData );

	/**
	 * Should perform the php function usort on the dataset.
	 *
	 * @param \Closure $callback
	 *
	 * @return $this
	 */
	public function usort( \Closure $callback );

	/**
	 * Should perform the php function ksort on the dataset.
	 *
	 * @return $this
	 */
	public function ksort();

	/**
	 * Count the rows of data the collection contains.
	 *
	 * @return int
	 */
	public function count();
}