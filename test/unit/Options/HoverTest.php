<?php

namespace Options;

use Halfpastfour\PHPChartJS\Options\Hover;
use Test\TestUtils;

/**
 * Class HoverTest
 * @package Options
 */
class HoverTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var
	 */
	private $hover;

	/**
	 * @var array
	 */
	private $data_types = [
		'mode'              => '',
		'intersect'         => false,
		'animationDuration' => 1,
		'onHover'           => '',
	];

	/**
	 * @var array
	 */
	private $input_data = [
		'mode'              => 'mode',
		'intersect'         => true,
		'animationDuration' => 2,
		'onHover'           => 'function() { echo "onHover"; }',
	];

	/**
	 * @var array
	 */
	private $empty_data = [
		'mode'              => null,
		'intersect'         => null,
		'animationDuration' => null,
		'onHover'           => null,
	];

	/**
	 *
	 */
	public function setUp()
	{
		$this->hover = new Hover();
	}

	/**
	 *
	 */
	public function testEmpty()
	{
		$expected = $this->empty_data;
		$result   = TestUtils::getAttributes( $this->hover, $this->data_types );
		self::assertEquals( $expected, $result );
	}

	/**
	 *
	 */
	public function testGetAndSet()
	{
		$expected = $this->input_data;
		TestUtils::setAttributes( $this->hover, $this->input_data );
		$result = TestUtils::getAttributes( $this->hover, $this->data_types );
		self::assertEquals( $expected, $result );
	}
}
