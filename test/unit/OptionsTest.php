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

	private $empty_options = [
		'layout'    => [
			'padding' => null,
		],
		'title'     => [
			'display'    => null,
			'position'   => null,
			'fullWidth'  => null,
			'fontSize'   => null,
			'fontFamily' => null,
			'fontColor'  => null,
			'fontStyle'  => null,
			'padding'    => null,
			'text'       => null,
		],
		'hover'     => [
			'mode'              => null,
			'intersect'         => null,
			'animationDuration' => null,
			'onHover'           => null,
		],
		'scales'    => [
			'xAxes' => [],
			'yAxes' => [],
		],
		'animation' => [
			'duration'   => null,
			'easing'     => null,
			'onProgress' => null,
			'onComplete' => null,
		],
		'legend'    => [
			'display'   => null,
			'position'  => null,
			'fullWidth' => null,
			'onClick'   => null,
			'onHover'   => null,
			'reverse'   => null,
		],
		'tooltips'  => [
			'enabled'            => null,
			'custom'             => null,
			'mode'               => null,
			'intersect'          => null,
			'position'           => null,
			'itemSort'           => null,
			'filter'             => null,
			'backgroundColor'    => null,
			'titleFontFamily'    => null,
			'titleFontSize'      => null,
			'titleFontStyle'     => null,
			'titleFontColor'     => null,
			'titleSpacing'       => null,
			'titleMarginBottom'  => null,
			'bodyFontFamily'     => null,
			'bodyFontSize'       => null,
			'bodyFontStyle'      => null,
			'bodyFontColor'      => null,
			'bodySpacing'        => null,
			'footerFontFamily'   => null,
			'footerFontSize'     => null,
			'footerFontStyle'    => null,
			'footerFontColor'    => null,
			'footerSpacing'      => null,
			'footerMarginTop'    => null,
			'xPadding'           => null,
			'yPadding'           => null,
			'caretSize'          => null,
			'cornerRadius'       => null,
			'multiKeyBackground' => null,
			'displayColors'      => null,
		],
	];

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
		$title = $this->options->getTitle();
		self::assertInstanceOf( Title::class, $title );
	}

	/**
	 *
	 */
	public function testLayout()
	{
		$layout = $this->options->getLayout();
		self::assertInstanceOf( Layout::class, $layout );
	}

	/**
	 *
	 */
	public function testAnimation()
	{
		$animation = $this->options->getAnimation();
		self::assertInstanceOf( Animation::class, $animation );
	}

	/**
	 *
	 */
	public function testHover()
	{
		$hover = $this->options->getHover();
		self::assertInstanceOf( Hover::class, $hover );
	}

	/**
	 *
	 */
	public function testScales()
	{
		$scales = $this->options->getScales();
		self::assertInstanceOf( Scales::class, $scales );
	}

	/**
	 *
	 */
	public function testLagend()
	{
		$legend = $this->options->getLegend();
		self::assertInstanceOf( Legend::class, $legend );
	}

	/**
	 *
	 */
	public function testTooltips()
	{
		$tooltips = $this->options->getTooltips();
		self::assertInstanceOf( Tooltips::class, $tooltips );
	}

	public function testJsonSerialize()
	{
		$expected = $this->empty_options;
		$result   = json_decode( $this->options->jsonSerialize(), true );
		self::assertEquals( $expected, $result );
	}
}
