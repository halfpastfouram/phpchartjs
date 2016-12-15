<?php

namespace Options;

use Halfpastfour\PHPChartJS\Options\Legend;
use Test\TestUtils;

class LegendTest extends \PHPUnit_Framework_TestCase
{
	private $legend;

	private $input_data = [
		'display'		=> true,
		'position'		=> 'position',
		'fullWidth'		=> true,
		'reverse'		=> true,
	];

	private $empty_data = [
		'display'		=> null,
		'position'		=> null,
		'fullWidth'		=> null,
		'reverse'		=> null,
	];

	public function setUp()
	{
		$this->legend = new Legend();
	}

	public function testEmpty()
	{
		$expected = $this->empty_data;
		$result = TestUtils::getAttributes($this->legend, $this->input_data);
		self::assertSame($expected, $result);
	}

	public function testGetAndSet() {
		$expected = $this->input_data;
		TestUtils::setAttributes($this->legend, $this->input_data);
		$result = TestUtils::getAttributes($this->legend, $this->input_data);
		self::assertSame($expected, $result);
	}
}
