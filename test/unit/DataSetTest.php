<?php

namespace Test;

use Halfpastfour\PHPChartJS\ArraySerializableInterface;
use Halfpastfour\PHPChartJS\Chart\Bar;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\ChartOwnedInterface;
use Halfpastfour\PHPChartJS\Collection;
use Halfpastfour\PHPChartJS\Collection\Data;
use Halfpastfour\PHPChartJS\CollectionInterface;
use Halfpastfour\PHPChartJS\DataSet;
use Zend\Json\Json;

require_once __DIR__ . '/../../vendor/autoload.php';

/**
 * Class DataSetTest
 * @package Test
 */
class DataSetTest extends \PHPUnit_Framework_TestCase
{
	/**
	 *
	 */
	public function testImplementation()
	{
		$dataSet = new DataSet();
		$this->assertInstanceOf( ChartOwnedInterface::class, $dataSet, 'Class implements ChartOwnedInterface' );
		$this->assertInstanceOf(
			ArraySerializableInterface::class,
			$dataSet,
			'Class implements ArraySerializableInterface'
		);
		$this->assertInstanceOf( \JsonSerializable::class, $dataSet, 'Class implements JsonSerializable' );
	}

	/**
	 *
	 */
	public function testOwner()
	{
		$dataSet = new DataSet();

		$this->assertNull( $dataSet->getOwner(), 'The dataset has no owner' );

		$chart = new Bar();
		$chart->addDataSet( $dataSet );

		$this->assertEquals( $chart, $dataSet->getOwner(), 'The owner of the dataSet is set and returned correctly' );
		$this->assertInstanceOf(
			ChartInterface::class, $dataSet->getOwner(),
			'The owner of the dataSet implements the correct interface'
		);
	}

	/**
	 *
	 */
	public function testType()
	{
		$dataSet = new DataSet();

		$this->assertNull( $dataSet->getType(), 'The type is not set' );

		$dataSet->setType( Bar::TYPE );
		$this->assertEquals( Bar::TYPE, $dataSet->getType(), 'The type is set and returned correctly' );
	}

	/**
	 *
	 */
	public function testData()
	{
		$dataSet = new DataSet();

		$dataCollection	= $dataSet->data();
		$this->assertInstanceOf( Data::class, $dataCollection, 'The data collection is the right class' );
		$this->assertInstanceOf( Collection::class, $dataCollection, 'The data collection extends Collection' );
		$this->assertInstanceOf(
			CollectionInterface::class, $dataCollection, 'The data collection implements CollectionInterface'
		);
		$this->assertInstanceOf(
			\JsonSerializable::class, $dataCollection, 'The data collection implements JsonSerializable'
		);


		$this->assertEmpty( $dataSet->data()->getArrayCopy(), 'The data inside the dataSet is empty' );

		$dataCollection->append( 1 );
		$this->assertEquals( [ 1 ] , $dataCollection->getArrayCopy(), 'The data consists of one value: 1' );

		$dataCollection->prepend( 0 );
		$this->assertEquals( [ 0, 1 ] , $dataCollection->getArrayCopy(), 'The data consists of values: 0, 1' );

		$dataCollection->offsetSet( 2, 2 );
		$this->assertEquals( [ 0, 1, 2 ] , $dataCollection->getArrayCopy(), 'The data consists of values: 0, 1, 2' );
		$this->assertEquals( 1, $dataCollection->offsetGet( 1 ), 'The value at position 1 equals 1' );

		$dataCollection->offsetUnset( 1 );
		$this->assertArrayNotHasKey( 1, $dataCollection->getArrayCopy(), 'Value at offset 1 has been removed' );

		$expectedValue = [ 0 => 0, 2 => 2 ];
		$this->assertEquals( $expectedValue, $dataCollection->getArrayCopy(), 'The data consists of values: 0, 2' );

		$this->assertEquals(
			Json::encode( $expectedValue ), $dataCollection->jsonSerialize(), 'The serialized data is correct'
		);

		$newValues = [ 1, 2, 3, 'Foo', 'Bar', 'Baz' ];
		$result    = $dataCollection->exchangeArray( $newValues );
		$this->assertEquals( $expectedValue, $result, 'Exchanging array returns correct value' );
		$this->assertEquals( $newValues, $dataCollection->getArrayCopy(), 'New values have been set correctly' );
		$this->assertEquals(
			Json::encode( $newValues ), $dataCollection->jsonSerialize(), 'The serialized data is correct'
		);
	}

	/**
	 *
	 */
	public function testLabel()
	{
		$dataSet = new DataSet();

		$this->assertNull( $dataSet->getLabel(), 'The label is not set' );

		$dataSet->setLabel( 'Foo' );
		$this->assertEquals( 'Foo', $dataSet->getLabel(), 'The label is set and returned correctly' );
	}

	/**
	 *
	 */
	public function testBackgroundColor()
	{
		$dataSet = new DataSet();

		$this->assertNull( $dataSet->getBackgroundColor(), 'The background color is not set' );

		$dataSet->setBackgroundColor( '#fff' );
		$this->assertEquals( '#fff', $dataSet->getBackgroundColor() );

		$backgroundColorArray = [ '#fff', 'rgb( 255, 255, 255 )', 'rgba( 255, 255, 255, .5 )', 'white' ];
		$dataSet->setBackgroundColor( $backgroundColorArray );
		$this->assertEquals(
			$backgroundColorArray, $dataSet->getBackgroundColor(),
			'The background color is set again and returned correctly'
		);
	}

	/**
	 *
	 */
	public function testBorderColor()
	{
		$dataSet = new DataSet();

		$this->assertNull( $dataSet->getBorderColor(), 'The border color is not set' );

		$dataSet->setBorderColor( '#fff' );
		$this->assertEquals( '#fff', $dataSet->getBorderColor(), 'The border color is set and returned correctly' );

		$borderColorArray = [ '#fff', 'rgb( 255, 255, 255 )', 'rgba( 255, 255, 255, .5 )', 'white' ];
		$dataSet->setBorderColor( $borderColorArray );
		$this->assertEquals(
			$borderColorArray, $dataSet->getBorderColor(), 'The border color is set again and returned correctly'
		);
	}

	/**
	 *
	 */
	public function testBorderSkipped()
	{
		$dataSet = new DataSet();

		$this->assertNull( $dataSet->getBorderSkipped(), 'The border skipped value is not set' );

		$this->assertInstanceOf(
			DataSet::class, $dataSet->setBorderSkipped( 'bottom' ), 'The correct class is returned'
		);
		$this->assertEquals( 'bottom', $dataSet->getBorderSkipped(), 'The correct value is returned' );
	}

	/**
	 *
	 */
	public function testAxes()
	{
		$dataSet = new DataSet();

		$this->assertNull( $dataSet->getXAxisID(), 'The xAxisID value is not set' );

		$this->assertInstanceOf( DataSet::class, $dataSet->setXAxisID( 'myXAxis' ) );
		$this->assertEquals( 'myXAxis', $dataSet->getXAxisID(), 'The correct value is returned' );
		$this->assertEquals( [ 'xAxisID' => 'myXAxis' ], $dataSet->getArrayCopy() );
		var_dump( $dataSet->jsonSerialize() );
//		$this->assertEquals(
//			Json::encode( [ 'xAxisID' => 'myXAxis' ] ), $dataSet->jsonSerialize(), 'The serialized data is correct'
//		);

		$this->assertNull( $dataSet->getYAxisID(), 'The yAxisID value is not set' );

		$this->assertInstanceOf( DataSet::class, $dataSet->setYAxisID( 'myYAxis' ) );
		$this->assertEquals( 'myYAxis', $dataSet->getYAxisID(), 'The correct value is returned' );
		$this->assertEquals(
			Json::encode( [
				'xAxisID' => 'myXAxis',
				'yAxisID' => 'myYAxis'
			] ), $dataSet->jsonSerialize(), 'The serialized data is correct'
		);
	}
}