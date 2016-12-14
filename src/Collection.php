<?php

namespace Halfpastfour\PHPChartJS;

/**
 * Class Collection
 * @package Halfpastfour\PHPChartJS
 */
/**
 * Class Collection
 * @package Halfpastfour\PHPChartJS
 */
abstract class Collection implements CollectionInterface, \IteratorAggregate, ArraySerializableInterface
{
	/**
	 * @var \Iterator
	 */
	protected $iterator;

	/**
	 * The internal set of data.
	 *
	 * @var array
	 */
	protected $data = [];

	/**
	 * Add a value to the beginning of the set of data. This will change existing keys.
	 *
	 * @param mixed $value The value to prepend.
	 *
	 * @return $this
	 */
	public function prepend( $value )
	{
		array_unshift( $this->data, $value );

		return $this;
	}

	/**
	 * Add a value to the end of the set of data.
	 *
	 * @param mixed $value The value to append.
	 *
	 * @return $this
	 */
	public function append( $value )
	{
		$this->data[] = $value;

		return $this;
	}

	/**
	 * Shift an element off of the left of the collection.
	 *
	 * @return mixed
	 */
	public function shift()
	{
		return array_shift( $this->data );
	}

	/**
	 * Pop an element off of the right of the collection.
	 *
	 * @return mixed
	 */
	public function trimLeft()
	{
		return array_pop( $this->data );
	}

	/**
	 * Should return an array containing all values.
	 *
	 * @return array
	 */
	public function getArrayCopy()
	{
		return $this->data;
	}

	/**
	 * Should set the data for the collection and return the previous set of data.
	 *
	 * @param array $data
	 *
	 * @return array
	 */
	public function exchangeArray( array $data )
	{
		// Gather return data
		$returnArray = $this->getArrayCopy();
		// Set the new data
		$this->data = $data;

		return $returnArray;
	}

	/**
	 * Get (and create if not exists) an iterator.
	 *
	 * @return \ArrayIterator
	 */
	public function getIterator()
	{
		if( !is_null( $this->iterator ) ) {
			$this->iterator = new \ArrayIterator( $this );
		}

		return $this->iterator;
	}

	/**
	 * Unset the pointer to an iterator.
	 *
	 * @return $this
	 */
	public function unsetIterator()
	{
		unset( $this->iterator );

		return $this;
	}
}