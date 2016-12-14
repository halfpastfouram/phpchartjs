<?php

namespace Halfpastfour\PHPChartJS;

use Halfpastfour\PHPChartJS\Options\Layout;
use Halfpastfour\PHPChartJS\Options\Title;
use Halfpastfour\PHPChartJS\Options\Animation;
use Halfpastfour\PHPChartJS\Options\Hover;
use Halfpastfour\PHPChartJS\Options\Scales;
use Halfpastfour\PHPChartJS\Options\Tooltips;
use Halfpastfour\PHPChartJS\Options\Legend;

/**
 * Class OptionsTest
 * @package Halfpastfour\PHPChartJS
 */
class OptionsTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var Options $options
	 */
	private $options;

	/**
	 *
	 */
	public function setUp()
	{
		$this->options = new Options();
	}

	/**
	 *
	 */
	public function testTitle()
	{
		$title = $this->options->title();
		self::assertInstanceOf( Title::class, $title );
	}

	/**
	 *
	 */
	public function testLayout()
	{
		$layout = $this->options->layout();
		self::assertInstanceOf( Layout::class, $layout );
	}

	/**
	 *
	 */
	public function testAnimation()
	{
		$animation = $this->options->animation();
		self::assertInstanceOf( Animation::class, $animation );
	}

	/**
	 *
	 */
	public function testHover()
	{
		$hover = $this->options->hover();
		self::assertInstanceOf( Hover::class, $hover );
	}

	/**
	 *
	 */
	public function testScales()
	{
		$scales = $this->options->scales();
		self::assertInstanceOf( Scales::class, $scales );
	}

	/**
	 *
	 */
	public function testLagend()
	{
		$legend = $this->options->legend();
		self::assertInstanceOf( Legend::class, $legend );
	}

	/**
	 *
	 */
	public function testTooltips()
	{
		$tooltips = $this->options->tooltips();
		self::assertInstanceOf( Tooltips::class, $tooltips );
	}
}
