<?php

namespace Test;

use Halfpastfour\PHPChartJS\Chart\Bar;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\DataSet;

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
	public function testDataSet()
	{
		// Setup a new dataSet
		$dataSet = new DataSet();
		$this->assertNull( null, $dataSet->getOwner(), '' );

		// Assign dataSet to Bar chart
		$chart   = new Bar();
		$chart->addDataSet( $dataSet );
		$this->assertEquals( $chart, $dataSet->getOwner(), 'The owner of the dataSet is set and returned correctly' );
		$this->assertInstanceOf( ChartInterface::class, $dataSet->getOwner(),
			'The owner of the dataSet implements the correct interface' );

		// Type
		$this->assertNull( $dataSet->getType(), 'The type is not set' );

		$dataSet->setType( Bar::TYPE );
		$this->assertEquals( Bar::TYPE, $dataSet->getType(), 'The type is set and returned correctly' );

		// Label
		$this->assertNull( $dataSet->getLabel(), 'The label is not set' );

		$dataSet->setLabel( 'Foo' );
		$this->assertEquals( 'Foo', $dataSet->getLabel(), 'The label is set and returned correctly' );

		// Background colors
		$this->assertNull( $dataSet->getBackgroundColor(), 'The background color is not set' );

		$dataSet->setBackgroundColor( '#fff' );
		$this->assertEquals( '#fff', $dataSet->getBackgroundColor() );

		$backgroundColorArray = [ '#fff', 'rgb( 255, 255, 255 )', 'rgba( 255, 255, 255, .5 )', 'white' ];
		$dataSet->setBackgroundColor( $backgroundColorArray );
		$this->assertEquals(
			$backgroundColorArray, $dataSet->getBackgroundColor(),
			'The background color is set again and returned correctly'
		);

		// Border colors
		$this->assertNull( $dataSet->getBorderColor(), 'The border color is not set' );

		$dataSet->setBorderColor( '#fff' );
		$this->assertEquals( '#fff', $dataSet->getBorderColor(), 'The border color is set and returned correctly' );

		$borderColorArray = [ '#fff', 'rgb( 255, 255, 255 )', 'rgba( 255, 255, 255, .5 )', 'white' ];
		$dataSet->setBorderColor( $borderColorArray );
		$this->assertEquals(
			$borderColorArray, $dataSet->getBorderColor(), 'The border color is set again and returned correctly'
		);

		// Border skipped
		$this->assertNull( $dataSet->getBorderSkipped(), 'The border skipped value is not set' );

		$dataSet->setBorderSkipped( 'bottom' );
		$this->assertEquals( 'bottom', $dataSet->getBorderSkipped() );
	}
}