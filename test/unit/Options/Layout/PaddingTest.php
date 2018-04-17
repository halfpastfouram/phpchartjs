<?php

namespace Test\Options\Layout;

use Halfpastfour\PHPChartJS\Options\Layout\Padding;

/**
 * Class PaddingTest
 * @package Test\Options\Layout
 */
class PaddingTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Padding
     */
    protected $padding;

    /**
     *
     */
    public function setUp()
    {
        $this->padding = new Padding();
    }

    /**
     *
     */
    public function testBottom()
    {
        $this->assertNull($this->padding->getBottom());
        $this->padding->setBottom(20);
        $this->assertSame(20, $this->padding->getBottom());
    }

    /**
     *
     */
    public function testLeft()
    {
        $this->assertNull($this->padding->getLeft());
        $this->padding->setLeft(20);
        $this->assertSame(20, $this->padding->getLeft());
    }

    /**
     *
     */
    public function testRight()
    {
        $this->assertNull($this->padding->getRight());
        $this->padding->setRight(20);
        $this->assertSame(20, $this->padding->getRight());
    }

    /**
     *
     */
    public function testTop()
    {
        $this->assertNull($this->padding->getTop());
        $this->padding->setTop(20);
        $this->assertSame(20, $this->padding->getTop());
    }

    /**
     *
     */
    public function testJsonSerialize()
    {
        $this->padding->setTop(20);
        $result = json_decode($this->padding->jsonSerialize(), true);
        self::assertArraySubset([ 'top' => 20 ], $result);
    }
}
