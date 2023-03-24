<?php

namespace Halfpastfour\PHPChartJSTest\Options\Layout;

use Halfpastfour\PHPChartJS\Options\Layout\Padding;
use PHPUnit\Framework\TestCase;

/**
 * Class PaddingTest
 * @package Halfpastfour\PHPChartJSTest\Options\Layout
 */
class PaddingTest extends TestCase
{
    /**
     * @var Padding
     */
    protected $padding;

    /**
     *
     */
    public function setUp(): void
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
        $result = $this->padding->jsonSerialize();
        self::assertArrayHasKey('top', $result);
        self::assertEquals(20, $result['top']);
    }
}
