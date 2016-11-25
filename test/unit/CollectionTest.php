<?php

namespace Test;

use Halfpastfour\PHPChartJS\ArraySerializableInterface;
use Halfpastfour\PHPChartJS\Collection;
use Halfpastfour\PHPChartJS\CollectionInterface;

/**
 * Class MyCollection
 * @package Test
 */
class MyCollection extends Collection implements CollectionInterface {}

/**
 * Class CollectionTest
 * @package Test
 */
class CollectionTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var Collection
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
		$this->assertInstanceOf( \Iterator::class, $this->collection );
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
		$this->assertEquals( 'Bar', $this->collection->current() );
	}

	/**
	 *
	 */
	public function testPrepend()
	{
		$this->assertInstanceOf( Collection::class, $this->collection->prepend( 'Foo' ) );
		$this->assertEquals( 'Foo', $this->collection->current() );
	}

	/**
	 *
	 */
	public function testAlteration()
	{
		$this->assertTrue( is_array( $this->collection->getArrayCopy() ) );
		$this->assertEmpty( $this->collection->getArrayCopy() );

		$this->collection->append( 'Bar' )->prepend( 'Foo' );
		$this->assertEquals( [ 'Foo', 'Bar' ], $this->collection->getArrayCopy() );

		$this->collection->offsetSet( 2, 'Baz' );
		$this->assertEquals( [ 'Foo', 'Bar', 'Baz' ], $this->collection->getArrayCopy() );

		$this->collection->offsetUnset( 1 );
		$this->assertArrayNotHasKey( 1, $this->collection->getArrayCopy() );
		$this->assertEquals( [ 0 => 'Foo', 2 => 'Baz' ], $this->collection->getArrayCopy() );

		$this->assertFalse( $this->collection->offsetExists( 1 ) );
		$this->assertTrue( $this->collection->offsetExists( 2 ) );

		$newValues = [ 1, 2, 3, 'Foo', 'Bar', 'Baz' ];
		$oldValues = $this->collection->exchangeArray( $newValues );
		$this->assertEquals( [ 0 => 'Foo', 2 => 'Baz' ], $oldValues );
		$this->assertEquals( $newValues, $this->collection->getArrayCopy() );
	}
}
