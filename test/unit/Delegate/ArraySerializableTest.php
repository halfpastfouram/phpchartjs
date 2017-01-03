<?php

namespace Test\Delegate;

require_once __DIR__ . '/../../../vendor/autoload.php';

use Halfpastfour\PHPChartJS\Delegate\ArraySerializable;

/**
 * Class ArraySerializableTest
 * @package Test\Delegate
 */
class ArraySerializableTest extends \PHPUnit_Framework_TestCase
{
	/**
	 * @var A
	 */
	private $classA;

	/**
	 * @var B
	 */
	private $classB;

	/**
	 *
	 */
	public function setUp()
	{
		$this->classA = new A( 1, 2 );
		$this->classB = new B( 3, 4, 5, 6 );
	}

	/**
	 *
	 */
	public function testSuperclass()
	{
		$expected = [ 'a' => 1, 'b' => 2 , 'x' => null];
		ksort( $expected );
		$result = $this->classA->getArrayCopy();
		ksort( $result );
		self::assertSame( $expected, $result );
	}

	/**
	 *
	 */
	public function testSubclass()
	{
		$expected = [ 'a' => 3, 'b' => 4, 'c' => 5, 'd' => 6 , 'x' => null];
		ksort( $expected );
		$result = $this->classB->getArrayCopy();
		ksort( $result );
		self::assertSame( $expected, $result );
	}
}

/**
 * Class A
 * @package Delegate
 */
class A
{
	use ArraySerializable;

	/**
	 * @var int
	 */
	private $a;

	/**
	 * @var int
	 */
	private $b;

	/**
	 * @var int
	 */
	private $x;

	/**
	 * @var int
	 */
	private $y;

	/**
	 * A constructor.
	 *
	 * @param $a int
	 * @param $b int
	 */
	public function __construct( $a, $b )
	{
		$this->a = $a;
		$this->b = $b;
	}

	/**
	 * @return int
	 */
	public function getA()
	{
		return $this->a;
	}

	/**
	 * @param int $a
	 */
	public function setA( $a )
	{
		$this->a = $a;
	}

	/**
	 * @return int
	 */
	public function getB()
	{
		return $this->b;
	}

	/**
	 * @param int $b
	 */
	public function setB( $b )
	{
		$this->b = $b;
	}

	/**
	 * @return int
	 */
	public function X()
	{
		return $this->x;
	}

	/**
	 * this method should never be called by jsonSerialize because it is not
	 * a boolean.
	 *
	 * @return int
	 */
	public function isY()
	{
		return $this->y;
	}
}

/**
 * Class B
 * @package Delegate
 */
class B extends A
{
	/**
	 * @var int
	 */
	private $c;

	/**
	 * @var int
	 */
	private $d;

	/**
	 * B constructor.
	 *
	 * @param $a int
	 * @param $b int
	 * @param $c int
	 * @param $d int
	 */
	public function __construct( $a, $b, $c, $d )
	{
		parent::__construct( $a, $b );
		$this->c = $c;
		$this->d = $d;
	}

	/**
	 * @return int
	 */
	public function getC()
	{
		return $this->c;
	}

	/**
	 * @param int $c
	 */
	public function setC( $c )
	{
		$this->c = $c;
	}

	/**
	 * @return int
	 */
	public function getD()
	{
		return $this->d;
	}

	/**
	 * @param int $d
	 */
	public function setD( $d )
	{
		$this->d = $d;
	}
}
