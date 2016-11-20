<?php

namespace Test;

use Halfpastfour\PHPChartJS\Chart\Bar;
use Halfpastfour\PHPChartJS\Chart\Bubble;
use Halfpastfour\PHPChartJS\Chart\Doughnut;
use Halfpastfour\PHPChartJS\Chart\Line;
use Halfpastfour\PHPChartJS\Chart\Pie;
use Halfpastfour\PHPChartJS\Chart\PolarArea;
use Halfpastfour\PHPChartJS\Chart\Radar;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\Factory;

/**
 * Class FactoryTest
 * @package Test
 */
class FactoryTest extends \PHPUnit_Framework_TestCase
{
	/**
	 *
	 */
	public function testBar()
	{
		$factory	= new Factory();
		$chart	= $factory->create($factory::BAR);

		$this->assertInstanceOf( ChartInterface::class, $chart );
		$this->assertInstanceOf( Bar::class, $chart );
	}

//	/**
//	 *
//	 */
//	public function testBubble()
//	{
//		$factory	= new Factory();
//		$chart	= $factory->create($factory::BUBBLE);
//
//		$this->assertInstanceOf( ChartInterface::class, $chart );
//		$this->assertInstanceOf( Bubble::class, $chart );
//	}
//
//	/**
//	 *
//	 */
//	public function testDoughnut()
//	{
//		$factory	= new Factory();
//		$chart	= $factory->create($factory::DOUGHNUT);
//
//		$this->assertInstanceOf( ChartInterface::class, $chart );
//		$this->assertInstanceOf( Doughnut::class, $chart );
//	}
//
//	/**
//	 *
//	 */
//	public function testLine()
//	{
//		$factory	= new Factory();
//		$chart	= $factory->create($factory::LINE);
//
//		$this->assertInstanceOf( ChartInterface::class, $chart );
//		$this->assertInstanceOf( Line::class, $chart );
//	}
//
//	/**
//	 *
//	 */
//	public function testPie()
//	{
//		$factory	= new Factory();
//		$chart	= $factory->create($factory::PIE);
//
//		$this->assertInstanceOf( ChartInterface::class, $chart );
//		$this->assertInstanceOf( Pie::class, $chart );
//	}
//
//	/**
//	 *
//	 */
//	public function testPolarArea()
//	{
//		$factory	= new Factory();
//		$chart	= $factory->create($factory::POLAR_AREA);
//
//		$this->assertInstanceOf( ChartInterface::class, $chart );
//		$this->assertInstanceOf( PolarArea::class, $chart );
//	}
//
//	/**
//	 *
//	 */
//	public function testRadar()
//	{
//		$factory	= new Factory();
//		$chart	= $factory->create($factory::RADAR);
//
//		$this->assertInstanceOf( ChartInterface::class, $chart );
//		$this->assertInstanceOf( Radar::class, $chart );
//	}
//
//	/**
//	 *
//	 */
//	public function testNonExisting()
//	{
//		$factory	= new Factory();
//		$this->expectException( \InvalidArgumentException::class );
//		$factory->create( 'foo' );
//	}
}