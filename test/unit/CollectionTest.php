<?php

namespace Test;

use Halfpastfour\PHPChartJS\Collection;
use Halfpastfour\PHPChartJS\CollectionInterface;

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

	public function setUp()
	{
		$this->collection = new MyCollection();
	}

	/**
	 *
	 */
	public function testImplementation()
	{
		$this->assertInstanceOf( Collection::class, $this->collection, 'Extends correct abstract class' );
		$this->assertInstanceOf( CollectionInterface::class, $this->collection, 'Implements correct interface' );
	}

	public function testValues()
	{
		$this->assertEmpty( $this->collection->getArrayCopy(), 'The data inside the dataSet is empty' );

		$this->collection->append( 1 );
		$this->assertEquals( [ 1 ] , $this->collection->getArrayCopy(), 'The data consists of one value: 1' );

		$this->collection->prepend( 0 );
		$this->assertEquals( [ 0, 1 ] , $this->collection->getArrayCopy(), 'The data consists of values: 0, 1' );

		$this->collection->offsetSet( 2, 2 );
		$this->assertEquals( [ 0, 1, 2 ] , $this->collection->getArrayCopy(), 'The data consists of values: 0, 1, 2' );
		$this->assertEquals( 1, $this->collection->offsetGet( 1 ), 'The value at position 1 equals 1' );

		$this->collection->offsetUnset( 1 );
		$this->assertArrayNotHasKey( 1, $this->collection->getArrayCopy(), 'Value at offset 1 has been removed' );

		$expectedValue = [ 0 => 0, 2 => 2 ];
		$this->assertEquals( $expectedValue, $this->collection->getArrayCopy(), 'The data consists of values: 0, 2' );

		$newValues = [ 1, 2, 3, 'Foo', 'Bar', 'Baz' ];
		$result    = $this->collection->exchangeArray( $newValues );
		$this->assertEquals( $expectedValue, $result, 'Exchanging array returns correct value' );
		$this->assertEquals( $newValues, $this->collection->getArrayCopy(), 'New values have been set correctly' );
	}
}