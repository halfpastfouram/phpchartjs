<?php
/**
 * Created by PhpStorm.
 * User: gbonnema
 * Date: 29-12-2016
 * Time: 14:39
 */

namespace Options;

use Halfpastfour\PHPChartJS\Options\Layout;
use Test\TestUtils;

class LayoutTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var Layout
	 */
	private $layout;

	private $data_types = [
		'padding'	=> 1,
	];

	private $input_data = [
		'padding'	=> 2,
	];

	private $empty_data = [
		'padding'	=> null,
	];

	public function setUp()
	{
		$this->layout = new Layout();
	}

	public function testEmpty() {
		$expected = $this->empty_data;
		$result = TestUtils::getAttributes($this->layout, $this->data_types);
		self::assertEquals($expected, $result);
	}
	public function testPaddingInt() {
		$expected = $this->input_data;
		TestUtils::setAttributes($this->layout, $this->input_data);
		$result = TestUtils::getAttributes($this->layout, $this->data_types);
		self::assertEquals($expected, $result);
	}

	public function testPaddingObject() {
		$obj = $this->layout->padding();
		self::assertInstanceOf(Layout\Padding::class, $obj);
	}
}
