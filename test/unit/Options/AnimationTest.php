<?php

namespace Options;

use Halfpastfour\PHPChartJS\Options\Animation;
use Test\TestUtils;

class AnimationTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var Animation
	 */
	private $animation;

	private $data_types = [
		'duration'   => 1,
		'easing'     => '',
		'onProgress' => '',
		'onComplete' => '',
	];

	private $input_data = [
		'duration'   => 1,
		'easing'     => '',
		'onProgress' => 'function() { echo "onProgress"; }',
		'onComplete' => 'function() { echo "onComplete"; }',
	];

	private $empty_data = [
		'duration'   => null,
		'easing'     => null,
		'onProgress' => null,
		'onComplete' => null,
	];

	public function setUp()
	{
		$this->animation = new Animation();
	}

	public function testEmpty()
	{
		$expected = $this->empty_data;
		$result   = TestUtils::getAttributes( $this->animation, $this->data_types );
		self::assertEquals( $expected, $result );
	}

	public function testGetAndSet()
	{
		$expected = $this->input_data;
		TestUtils::setAttributes( $this->animation, $this->input_data );
		$result = TestUtils::getAttributes( $this->animation, $this->data_types );
		self::assertEquals( $expected, $result );
	}

}
