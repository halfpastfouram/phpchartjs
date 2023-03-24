<?php

namespace Halfpastfour\PHPChartJSTest\Chart;

use Halfpastfour\PHPChartJS\Chart\Radar;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\DataSet\RadarDataSet;
use Halfpastfour\PHPChartJS\Options\RadarOptions;
use PHPUnit\Framework\TestCase;

/**
 * Class RadarTest
 * @package Halfpastfour\PHPChartJSTest\Chart
 */
class RadarTest extends TestCase
{
    /**
     * Test the factory for creating a Radar chart
     */
    public function testRadar()
    {
        $Radar = new Radar();

        // Check if correct class is returned.
        $this->assertInstanceOf(ChartInterface::class, $Radar, 'The correct interface has been implemented');
        $this->assertInstanceOf(Radar::class, $Radar, 'The correct class has been created');
    }

    /**
     * Test the DataSet created by the Radar chart
     */
    public function testDataSet()
    {
        $Radar       = new Radar();
        $chartData = [ 0, 1, 4, 2, 3, 0, 5, 2, 6 ];

        // DataSet
        $dataSet = $Radar->createDataSet();
        $this->assertInstanceOf(RadarDataSet::class, $dataSet, 'The correct class has been created by the chart');

        // Populate the collection
        $dataSet->data()->exchangeArray($chartData);

        // Check if data is still correct.
        $Radar->addDataSet($dataSet);
        $this->assertEquals($chartData, $Radar->dataSets()->offsetGet(0)->data()->getArrayCopy());
    }

    /**
     *
     */
    public function testOptions()
    {
        $Radar = new Radar();
        $this->assertInstanceOf(RadarOptions::class, $Radar->options(), 'The correct class should be created');
    }
}
