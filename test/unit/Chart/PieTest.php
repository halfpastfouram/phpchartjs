<?php

namespace Test\Chart;

use Halfpastfour\PHPChartJS\Chart\Pie;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\DataSet\PieDataSet;
use Halfpastfour\PHPChartJS\Options\PieOptions;

/**
 * Class PieTest
 * @package Test\Chart
 */
class PieTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test the factory for creating a Pie chart
     */
    public function testPie()
    {
        $Pie = new Pie();

        // Check if correct class is returned.
        $this->assertInstanceOf(ChartInterface::class, $Pie, 'The correct interface has been implemented');
        $this->assertInstanceOf(Pie::class, $Pie, 'The correct class has been created');
    }

    /**
     * Test the DataSet created by the Pie chart
     */
    public function testDataSet()
    {
        $Pie       = new Pie();
        $chartData = [ 0, 1, 4, 2, 3, 0, 5, 2, 6 ];

        // DataSet
        $dataSet = $Pie->createDataSet();
        $this->assertInstanceOf(PieDataSet::class, $dataSet, 'The correct class has been created by the chart');

        // Populate the collection
        $dataSet->data()->exchangeArray($chartData);

        // Check if data is still correct.
        $Pie->addDataSet($dataSet);
        $this->assertEquals($chartData, $Pie->dataSets()->offsetGet(0)->data()->getArrayCopy());
    }

    /**
     *
     */
    public function testOptions()
    {
        $Pie = new Pie();
        $this->assertInstanceOf(PieOptions::class, $Pie->options(), 'The correct class should be created');
    }
}
