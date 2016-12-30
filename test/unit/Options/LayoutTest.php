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

	/**
	 * Test whether Layout stores the Padding object correctly and
	 * relays changes correctly. We are *not* testing Padding
	 */
	public function testPaddingObject() {
		self::assertInstanceOf(Layout\Padding::class, $this->layout->padding());
		$this->layout->padding()->setLeft(2.1);
		self::assertEquals(2, $this->layout->padding()->getLeft());
	}

	public function testJsonSerializeAllInt() {
		$expected = $this->input_data;
		TestUtils::setAttributes($this->layout, $this->input_data);
		$result = json_decode($this->layout->jsonSerialize(), true);
		self::assertEquals($expected, $result);
	}
	public function testJsonSerializePaddingObj() {
		$expected = $this->empty_data;
		$expected['padding'] = [
			"bottom" => null,
			"left"	=> null,
			"right"	=> 5,
			"top"	=> null,
		];

		$this->layout->padding()->setRight(5);
		$result = json_decode($this->layout->jsonSerialize(), true);
		self::assertSame($expected, $result);
	}
}
