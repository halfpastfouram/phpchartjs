<?php

namespace Options\Tooltips;

use Halfpastfour\PHPChartJS\Options\Tooltips\Callbacks;
use Test\TestUtils;

/**
 * Class CallbacksTest
 * @package Options\Tooltips
 */
class CallbacksTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var Callbacks
	 */
	private $callbacks;

	/**
	 * @var array
	 */
	private $data_types = [
		'beforeTitle'  => '',
		'title'        => '',
		'afterTitle'   => '',
		'beforeLabel'  => '',
		'label'        => '',
		'labelColor'   => '',
		'afterLabel'   => '',
		'afterBody'    => '',
		'beforeFooter' => '',
		'footer'       => '',
		'afterFooter'  => '',
		'dataPoints'   => '',
	];

	/**
	 * @var array
	 */
	private $input_data = [
		'beforeTitle'  => 'beforeTitle',
		'title'        => 'title',
		'afterTitle'   => 'afterTitle',
		'beforeLabel'  => 'beforeLabel',
		'label'        => 'label',
		'labelColor'   => 'labelColor',
		'afterLabel'   => 'afterLabel',
		'afterBody'    => 'afterBody',
		'beforeFooter' => 'beforeFooter',
		'footer'       => 'footer',
		'afterFooter'  => 'afterFooter',
		'dataPoints'   => 'dataPoints',
	];

	/**
	 * @var array
	 */
	private $empty_data = [
		'beforeTitle'  => null,
		'title'        => null,
		'afterTitle'   => null,
		'beforeLabel'  => null,
		'label'        => null,
		'labelColor'   => null,
		'afterLabel'   => null,
		'afterBody'    => null,
		'beforeFooter' => null,
		'footer'       => null,
		'afterFooter'  => null,
		'dataPoints'   => null,
	];

	/**
	 *
	 */
	public function setUp()
	{
		$this->callbacks = new Callbacks();
	}

	/**
	 *
	 */
	public function testEmpty()
	{
		$expected = $this->empty_data;
		$result   = TestUtils::getAttributes( $this->callbacks, $this->data_types );
		self::assertSame( $expected, $result );
	}

	/**
	 *
	 */
	public function testGetAndSet()
	{
		$expected = $this->input_data;
		TestUtils::setAttributes( $this->callbacks, $this->input_data );
		$result = TestUtils::getAttributes( $this->callbacks, $this->data_types );
		self::assertSame( $expected, $result );
	}

	/**
	 *
	 */
	public function testJsonSerialize()
	{
		$expected = $this->input_data;
		TestUtils::setAttributes( $this->callbacks, $this->input_data );
		$result = json_decode( $this->callbacks->jsonSerialize(), true );
		self::assertSame( $expected, $result );
	}
}
