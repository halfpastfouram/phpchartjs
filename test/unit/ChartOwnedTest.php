<?php

namespace Halfpastfour\PHPChartJSTest;

use Halfpastfour\PHPChartJS\Chart\Bar;
use Halfpastfour\PHPChartJS\ChartOwnedInterface;
use Halfpastfour\PHPChartJS\Options;
use PHPUnit\Framework\TestCase;

/**
 * Class ChartOwnedTest
 *
 * @package Halfpastfour\PHPChartJSTest
 */
class ChartOwnedTest extends TestCase
{
    /**
     *
     */
    public function testSetOwner()
    {
        $options = new Options();
        $this->assertNull($options->owner(), 'Owner should be empty');

        $this->assertSame($options, $options->setOwner($bar = new Bar()));
        $this->assertSame($bar, $options->owner());
    }

    /**
     *
     */
    public function testOwnerFromChart()
    {
        $bar = new Bar();
        $this->assertInstanceOf(ChartOwnedInterface::class, $bar->options());
        $this->assertSame($bar, $bar->options()->owner());

        $this->assertInstanceOf(ChartOwnedInterface::class, $dataSet = $bar->createDataSet());
        $this->assertSame($dataSet->owner(), $bar);
    }
}
