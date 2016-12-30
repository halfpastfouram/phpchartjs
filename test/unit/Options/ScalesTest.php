<?php

namespace Options;

use Halfpastfour\PHPChartJS\Options\Scales;

/**
 * Class ScalesTest
 * @package Options
 */
class ScalesTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var Scales
	 */
	private $scales;

	/**
	 *
	 */
	public function setUp()
	{
		$this->scales = new Scales();
	}

	//TODO: Needs re-evaluation. We should be able to get "null" returned when empty.
	//TODO: Rest of testcases need development after decision on empty objects.
	/**
	 *
	 */
	public function testEmpty()
	{
		$expected = new Scales\XAxisCollection();
		$result   = $this->scales->getXAxes();
		self::assertEquals( $expected, $result );
	}
}
