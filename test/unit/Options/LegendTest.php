<?php

namespace Options;

use Halfpastfour\PHPChartJS\Options\Legend;
use Test\TestUtils;
use Zend\Json\Expr;

/**
 * Class LegendTest
 * @package Options
 */
class LegendTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var Legend
	 */
	private $legend;

	/**
	 * @var array
	 */
	private $data_types = [
		'display'   => false,
		'position'  => '',
		'fullWidth' => false,
		'onClick'   => '',
		'onHover'   => '',
		'reverse'   => false,
	];

	/**
	 * @var array
	 */
	private $input_data_1 = [
		'display'   => true,
		'position'  => 'position',
		'fullWidth' => true,
		'onClick'   => null,
		'onHover'   => null,
		'reverse'   => true,
	];

	/**
	 * @var array
	 */
	private $input_data_2 = [
		'display'   => true,
		'position'  => 'position',
		'fullWidth' => true,
		'onClick'   => 'onClick',
		'onHover'   => 'onHover',
		'reverse'   => true,
	];

	/**
	 * @var array
	 */
	private $empty_data = [
		'display'   => null,
		'position'  => null,
		'fullWidth' => null,
		'onClick'   => null,
		'onHover'   => null,
		'reverse'   => null,
	];

	/**
	 *
	 */
	public function setUp()
	{
		$this->legend = new Legend();

		$this->input_data_2['onClick'] = new Expr( $this->input_data_2['onClick'] );
		$this->input_data_2['onHover'] = new Expr( $this->input_data_2['onHover'] );
	}

	/**
	 *
	 */
	public function testEmpty()
	{
		$expected = $this->empty_data;
		$result   = TestUtils::getAttributes( $this->legend, $this->data_types );
		self::assertSame( $expected, $result );
	}

	/**
	 *
	 */
	public function testGetAndSetWithoutExpr()
	{
		$expected = $this->input_data_1;
		TestUtils::setAttributes( $this->legend, $this->input_data_1 );
		$result = TestUtils::getAttributes( $this->legend, $this->data_types );
		self::assertSame( $expected, $result );
	}

	/**
	 *
	 */
	public function testOnClickExpr()
	{
		TestUtils::setAttributes( $this->legend, $this->input_data_2 );
		$result   = $this->legend->getOnClick()->__toString();
		$expected = $this->input_data_2['onClick']->__toString();
		self::assertEquals( $expected, $result );
	}

	/**
	 *
	 */
	public function testOnHoverExpr()
	{
		TestUtils::setAttributes( $this->legend, $this->input_data_2 );
		$result   = $this->legend->getOnHover()->__toString();
		$expected = $this->input_data_2['onHover']->__toString();
		self::assertEquals( $expected, $result );
	}
}
