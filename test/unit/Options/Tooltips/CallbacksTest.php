<?php

namespace Options\Tooltips;

use Zend\Json\Expr;

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
		'title'     => '',
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
		'beforeTitle'  => "function() { echo 'Hello'; }",
		'title'        => "function() { echo 'Hello'; }",
		'afterTitle'   => "function() { echo 'Hello'; }",
		'beforeLabel'  => "function() { echo 'Hello'; }",
		'label'        => "function() { echo 'Hello'; }",
		'labelColor'   => "function() { echo 'Hello'; }",
		'afterLabel'   => "function() { echo 'Hello'; }",
		'afterBody'    => "function() { echo 'Hello'; }",
		'beforeFooter' => "function() { echo 'Hello'; }",
		'footer'       => "function() { echo 'Hello'; }",
		'afterFooter'  => "function() { echo 'Hello'; }",
		'dataPoints'   => "function() { echo 'Hello'; }",
	];

	/**
	 * @var array
	 */
	private $empty_data   = [
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

	private $initial_data = [];

	/**
	 *
	 */
	public function setUp()
	{
		$this->callbacks = new Callbacks();

		// Re-initialize Expr properties
		$keys = array_keys( $this->empty_data );
		foreach( $keys as $key ) {
			$this->initial_data[ $key ] = new Expr( '' );
		}
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
		array_walk(
			$result, function ( &$value ) {
			$value = strval( $value );
		}
		);
		self::assertSame( $expected, $result );
	}

}
