<?php

namespace Test;

use Halfpastfour\PHPChartJS\ArraySerializableInterface;
use Halfpastfour\PHPChartJS\Collection;
use Halfpastfour\PHPChartJS\CollectionInterface;

/**
 * Class MyCollection
 * @package Test
 */
class MyCollection extends Collection\ArrayAccess {}

/**
 * Class CollectionTest
 * @package Test
 */
class CollectionTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var Collection\ArrayAccess
	 */
	private $collection;

	/**
	 *
	 */
	public function setUp()
	{
		$this->collection = new MyCollection();
	}

	/**
	 *
	 */
	public function testImplementation()
	{
		$this->assertInstanceOf( Collection::class, $this->collection );
		$this->assertInstanceOf( CollectionInterface::class, $this->collection );
		$this->assertInstanceOf( \Iterator::class, $this->collection->getIterator() );
		$this->assertInstanceOf( \ArrayAccess::class, $this->collection );
		$this->assertInstanceOf( \Countable::class, $this->collection );
		$this->assertInstanceOf( \Countable::class, $this->collection );
		$this->assertInstanceOf( ArraySerializableInterface::class, $this->collection );
	}

	/**
	 *
	 */
	public function testAppend()
	{
		$this->assertInstanceOf( Collection::class, $this->collection->append( 'Bar' ) );
		$this->assertEquals( 'Bar', $this->collection->getIterator()->current() );
	}

	/**
	 *
	 */
	public function testPrepend()
	{
		$this->assertInstanceOf( Collection::class, $this->collection->prepend( 'Foo' ) );
		$this->assertEquals( 'Foo', $this->collection->getIterator()->current() );
	}

	/**
	 *
	 */
	public function testAlteration()
	{
		$this->assertTrue( is_array( $this->collection->getArrayCopy() ) );
		$this->assertEmpty( $this->collection->getArrayCopy() );

		$this->assertEquals( 0, $this->collection->count() );
		$this->collection->append( 'Bar' )->prepend( 'Foo' );
		$this->assertEquals( [ 'Foo', 'Bar' ], $this->collection->getArrayCopy() );
		$this->assertEquals( 2, $this->collection->count() );

		$this->collection->offsetSet( 2, 'Baz' );
		$this->assertEquals( [ 'Foo', 'Bar', 'Baz' ], $this->collection->getArrayCopy() );
		$this->assertEquals( 3, $this->collection->count() );

		$this->collection->offsetUnset( 1 );
		$this->assertArrayNotHasKey( 1, $this->collection->getArrayCopy() );
		$this->assertEquals( [ 0 => 'Foo', 2 => 'Baz' ], $this->collection->getArrayCopy() );
		$this->assertEquals( 2, $this->collection->count() );

		$this->assertFalse( $this->collection->offsetExists( 1 ) );
		$this->assertTrue( $this->collection->offsetExists( 2 ) );

		$newValues = [ 1, 2, 3, 'Foo', 'Bar', 'Baz' ];
		$oldValues = $this->collection->exchangeArray( $newValues );
		$this->assertEquals( [ 0 => 'Foo', 2 => 'Baz' ], $oldValues );
		$this->assertEquals( $newValues, $this->collection->getArrayCopy() );
		$this->assertEquals( 6, $this->collection->count() );
	}

	/**
	 *
	 */
	public function testCursor()
	{
		$this->collection->exchangeArray( [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ] );
		$iterator	= $this->collection->getIterator();
		$this->assertEquals( 1, $iterator->current() );
		$iterator->next();
		$this->assertEquals( 2, $iterator->current() );

		// Skip two values
		$this->collection->getIterator()->next();
		$this->collection->getIterator()->next();
		$this->collection->getIterator()->previous();
		$this->assertEquals( 3, $this->collection->getIterator()->current() );
		$this->assertEquals( 2, $this->collection->getIterator()->getCursor() );

		// skip all the way to the end
		$iterator->next();
		$iterator->next();
		$iterator->next();
		$iterator->next();
		$iterator->next();
		$iterator->next();
		$iterator->next();

		$this->assertTrue( $iterator->valid() );
		$iterator->next();
		$this->assertFalse( $iterator->current() );
		$this->assertFalse( $iterator->valid() );

		// Rewind
		$this->collection->getIterator()->rewind();
		$this->assertEquals( 1, $iterator->current() );
	}

	/**
	 *
	 */
	public function testUsort()
	{
		$this->collection->exchangeArray( [ 4, 5, 3, 7, 1, 8, 9, 6, 10, 2 ] );
		$this->collection->usort( function( $a, $b ) {
			return strnatcmp( $a, $b );
		} );

		$this->assertEquals( [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 ], $this->collection->getArrayCopy() );
	}

	/**
	 *
	 */
	public function testKsort()
	{
		$this->collection->exchangeArray( [ 1 => 2, 3 => 3, 0 => 1 ] );
		$this->collection->ksort();
		$this->assertEquals( [ 0 => 1, 1 => 2, 3 => 3 ], $this->collection->getArrayCopy() );

		$this->collection->exchangeArray( [ 10 => 2, 13 => 3, 2 => 1 ] );
		$this->collection->ksort( SORT_NATURAL );
		$this->assertEquals( [ 2 => 1, 10 => 2, 13 => 3 ], $this->collection->getArrayCopy() );
	}

	/**
	 *
	 */
	public function testTraversing()
	{
		$data = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'foo', 'bar', 'baz' => array( 'apple', 'orange', 'pear' ) ];
		$this->collection->exchangeArray( $data );
		foreach( $this->collection as $index => $item ) {
			$this->assertEquals( $data[ $index ], $item );
		}
	}

	/**
	 *
	 */
	public function testKeyMap()
	{
		$data = [ 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 'foo', 'bar', 'baz' => array( 'apple', 'orange', 'pear' ) ];
		$this->collection->exchangeArray( $data );
		$this->assertEquals( array_keys( $data ), $this->collection->getIterator()->getKeyMap() );
	}
}
