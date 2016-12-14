<?php

namespace Halfpastfour\PHPChartJS;

/**
 * Interface CollectionInterface
 */
interface CollectionInterface
{
	/**
	 * @param mixed $value
	 *
	 * @return $this
	 */
	public function append( $value );

	/**
	 * @param mixed $value
	 *
	 * @return $this
	 */
	public function prepend( $value );
}