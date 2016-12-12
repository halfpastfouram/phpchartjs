<?php

namespace Halfpastfour\PHPChartJS;

/**
 * Class Collection
 * @package Halfpastfour\PHPChartJS
 */
abstract class Collection
{
	/**
	 * The internal set of data.
	 *
	 * @var array
	 */
	protected $data = [];

	/**
	 * The current internal cursor position.
	 *
	 * @var int
	 */
	protected $cursor = 0;

	/**
	 * The calulated count of the set of data.
	 *
	 * @var int
	 */
	protected $count;

	/**
	 * The calculated key map.
	 *
	 * @var array
	 */
	protected $keyMap = [];

	/**
	 * Calculates the keymap for the collection.
	 *
	 * @return $this
	 */
	protected function calculateKeyMap()
	{
		$this->keyMap = array_keys( $this->data );

		return $this;
	}

	/**
	 * Returns the calculated keymap for the collection.
	 *
	 * @return array
	 */
	public function getKeyMap()
	{
		$this->calculateKeyMap();

		return $this->keyMap;
	}

	/**
	 * Returns key by given cursor position.
	 *
	 * @param int $cursor The cursor position to check.
	 *
	 * @return mixed
	 */
	public function getKey( $cursor )
	{
		$this->calculateKeyMap();
		if( !array_key_exists( $cursor, $this->keyMap ) ) {
			return false;
		}

		return $this->keyMap[ $cursor ];
	}

	/**
	 * Check if the given offset exists in the set of data.
	 *
	 * @param mixed $offset The offset to check.
	 *
	 * @return bool
	 */
	public function offsetExists( $offset )
	{
		// Can not retrieve a key based on a value other than a string or integer
		if( !is_string( $offset ) && !is_int( $offset ) ) {
			return false;
		}

		return array_key_exists( $offset, $this->data );
	}

	/**
	 * Get a value from the given offset.
	 *
	 * @param mixed $offset The offset to get the value from.
	 *
	 * @return mixed
	 */
	public function offsetGet( $offset )
	{
		if( $this->offsetExists( $offset ) ) {
			return $this->data[ $offset ];
		} else {
			return false;
		}
	}

	/**
	 * Set a value at the given offset.
	 *
	 * @param mixed $offset The offset to set the value at.
	 * @param mixed $value  The value to set.
	 *
	 * @return $this
	 */
	public function offsetSet( $offset, $value )
	{
		$this->data[ $offset ] = $value;

		return $this;
	}

	/**
	 * Unset a value at the given offset. Does nothing if the offset is not found.
	 *
	 * @param mixed $offset The offset to unset the value from.
	 *
	 * @return $this
	 */
	public function offsetUnset( $offset )
	{
		if( $this->offsetExists( $offset ) ) {
			unset( $this->data[ $offset ] );
		}

		return $this;
	}

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
	 * Count the rows of data the collection contains.
	 *
	 * @return int
	 */
	public function count()
	{
		return $this->count = count( $this->data );
	}

	/**
	 * Get the internal cursor.
	 *
	 * @return int
	 */
	public function getCursor()
	{
		return $this->cursor;
	}

	/**
	 * Return the value of the current internal cursor position.
	 *
	 * @return mixed
	 */
	public function current()
	{
		return $this->offsetGet( $this->getKey( $this->getCursor() ) );
	}

	/**
	 * Decrease the internal cursor by one and return the value of the new internal cursor position.
	 *
	 * @return mixed
	 */
	public function previous()
	{
		$this->cursor--;

		return $this->offsetGet( $this->getKey( $this->getCursor() ) );
	}

	/**
	 * Increase the internal cursor by one and return the value of the new internal cursor position.
	 *
	 * @return mixed
	 */
	public function next()
	{
		$this->cursor++;

		return $this->offsetGet( $this->getKey( $this->getCursor() ) );
	}

	/**
	 * Return the current key according to the internal cursor position.
	 *
	 * @return string|int|bool
	 */
	public function key()
	{
		return $this->getKey( $this->getCursor() );
	}

	/**
	 * Test if the current internal cursor position is valid.
	 *
	 * @return bool
	 */
	public function valid()
	{
		return !!$this->key();
	}

	/**
	 * Set the internal cursor to the first value in the array of data.
	 *
	 * @return $this
	 */
	public function rewind()
	{
		$this->cursor = 0;
		reset( $this->data );

		return $this;
	}

	/**
	 * Should return a multidimensional array from the collection and it's rows.
	 *
	 * @return array A bi-dimensional array
	 */
	public function getArrayCopy()
	{
		return $this->data;
	}

	/**
	 * Should set the data for the collection and return the previous set of data.
	 *
	 * @param array $data
§	 *
	 * @return array
	 */
	public function exchangeArray( array $data )
	{
		// Gather return data
		$returnArray = $this->getArrayCopy();
		// Reset the items
		$this->data = [];

		foreach( $data as $index => $row ) {
			$this->offsetSet( $index, $row );
		}

		return $returnArray;
	}

	/**
	 * Provide a callback to use for sorting the data.
	 *
	 * @param \Closure $callback The callback to be used.
	 *
	 * @return $this
	 */
	public function usort( \Closure $callback )
	{
		usort( $this->data, $callback );
		$this->rewind();

		return $this;
	}

	/**
	 * Sort the data by key.
	 *
	 * @param int $sortFlags Optional flags to provide to ksort.
	 *
	 * @return $this
	 */
	public function ksort( $sortFlags = null )
	{
		ksort( $this->data, $sortFlags );

		return $this;
	}
}