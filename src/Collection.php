<?php

namespace Halfpastfour\PHPChartJS;

/**
 * Class Collection
 * @package Halfpastfour\PHPChartJS
 */
abstract class Collection
{
	/**
	 * @var array
	 */
	protected $rowSet	= array();

	/**
	 * @var int
	 */
	protected $cursor	= 0;

	/**
	 * @var int
	 */
	protected $count;

	/**
	 * @var array
	 */
	protected $keyMap	= array();


	/**
	 * Calculates the keymap for the collection.
	 *
	 * @return $this
	 */
	protected function calculateKeyMap()
	{
		$this->keyMap	= array_keys( $this->rowSet );
		return $this;
	}

	/**
	 * Returns the calculated keymap for the collection.
	 *
	 * @return array
	 */
	public function getKeyMap()
	{
		if( !$this->keyMap ) $this->calculateKeyMap();
		return $this->keyMap;
	}

	/**
	 * Returns key by given cursor
	 *
	 * @param int $cursor
	 *
	 * @return mixed
	 */
	public function getKey( $cursor )
	{
		if( !$this->keyMap ) $this->calculateKeyMap();
		if( !array_key_exists( $cursor, $this->keyMap ) ) {
			return false;
		}
		return $this->keyMap[ $cursor ];
	}

	/**
	 * @param mixed $offset
	 * @return bool
	 */
	public function offsetExists( $offset )
	{
		// Can not retrieve a key based on a value other than a string and integer
		if( !is_string( $offset ) && !is_int( $offset ) ) {
			return false;
		}
		return array_key_exists( $offset, $this->rowSet );
	}

	/**
	 * @param mixed $offset
	 * @return mixed
	 */
	public function offsetGet( $offset )
	{
		if( $this->offsetExists( $offset ) ) {
			return $this->rowSet[ $offset ];
		} else {
			return false;
		}
	}

	/**
	 * @param mixed $offset
	 * @param mixed $value
	 *
	 * @return $this
	 */
	public function offsetSet( $offset, $value )
	{
		$this->rowSet[ $offset ] = $value;
		return $this;
	}

	/**
	 * @param mixed $offset
	 *
	 * @return $this
	 */
	public function offsetUnset( $offset )
	{
		if( $this->offsetExists( $offset ) ) {
			unset( $this->rowSet[ $offset ] );
		}
		return $this;
	}

	/**
	 * @param mixed $value
	 *
	 * @return $this
	 */
	public function prepend( $value )
	{
		array_unshift( $this->rowSet, $value );

		return $this;
	}

	/**
	 * @param mixed $value
	 *
	 * @return $this
	 */
	public function append( $value )
	{
		$this->rowSet[]	= $value;

		return $this;
	}

	/**
	 * @return int
	 */
	public function count()
	{
		return $this->count	= count( $this->rowSet );
	}

	/**
	 * @return int
	 */
	public function getCursor()
	{
		return $this->cursor;
	}

	/**
	 * @return mixed
	 */
	public function current()
	{
		return $this->offsetGet( $this->getKey( $this->getCursor() ) );
	}

	/**
	 * @return mixed
	 */
	public function previous()
	{
		$this->cursor--;
		return $this->offsetGet( $this->getKey( $this->getCursor() ) );
	}

	/**
	 * @return mixed
	 */
	public function next()
	{
		$this->cursor++;
		return $this->offsetGet( $this->getKey( $this->getCursor() ) );
	}

	/**
	 * @return mixed
	 */
	public function key()
	{
		return $this->getKey( $this->getCursor() );
	}

	/**
	 * @return bool
	 */
	public function valid()
	{
		return !!$this->current();
	}

	/**
	 * @return $this
	 */
	public function rewind()
	{
		$this->cursor	= 0;
		reset( $this->rowSet );
		return $this;
	}

	/**
	 * Should return a multidimensional array from the collection and it's rows.
	 *
	 * @return array A bi-dimensional array
	 */
	public function getArrayCopy()
	{
		return $this->rowSet;
	}

	/**
	 * Should set the data for the collection and return the previous set of data.
	 *
	 * @param array $data The data should be a bi-dimensional array.
	 *
	 * @return array A bi-dimensional array
	 */
	public function exchangeArray( array $data )
	{
		// Prevent the array from being one-dimensional
		if( $this->count() == count( $data, COUNT_RECURSIVE ) ) {
			throw new \InvalidArgumentException( 'Given argument must be bi-dimensional.' );
		}

		// Gather return data
		$returnArray	= $this->getArrayCopy();
		// Reset the items
		$this->rowSet		= array();

		foreach( $data as $index => $row ) {
			$this->offsetSet( $index, $row );
		}

		return $returnArray;
	}

	/**
	 * @param \Closure $callback
	 *
	 * @return $this
	 */
	public function usort( \Closure $callback )
	{
		usort( $this->rowSet, $callback );
		$this->rewind();
		return $this;
	}

	/**
	 * @return $this
	 */
	public function ksort()
	{
		ksort( $this->rowSet );
		return $this;
	}
}