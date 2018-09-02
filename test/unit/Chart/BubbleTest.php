<?php

namespace Test\Chart;

use Halfpastfour\PHPChartJS\Chart\Bubble;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\DataSet\BubbleDataSet;
use Halfpastfour\PHPChartJS\Options\BubbleOptions;

/**
 * Class BubbleTest
 * @package Test\Chart
 */
class BubbleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test the factory for creating a Bubble chart
     */
    public function testBar()
    {
        $bubble = new Bubble();

        // Check if correct class is returned.
        $this->assertInstanceOf(ChartInterface::class, $bubble, 'The correct interface should be implemented');
        $this->assertInstanceOf(Bubble::class, $bubble, 'The correct class should be created');
    }

    /**
     * Test the DataSet created by the Bar chart
     */
    public function testDataSet()
    {
        $bubble    = new Bubble();
        $chartData = [
            [ 'x' => rand(0, 40), 'y' => rand(0, 30), 'r' => rand(0, 50) ],
            [ 'x' => rand(0, 40), 'y' => rand(0, 30), 'r' => rand(0, 50) ],
            [ 'x' => rand(0, 40), 'y' => rand(0, 30), 'r' => rand(0, 50) ],
            [ 'x' => rand(0, 40), 'y' => rand(0, 30), 'r' => rand(0, 50) ],
            [ 'x' => rand(0, 40), 'y' => rand(0, 30), 'r' => rand(0, 50) ],
            [ 'x' => rand(0, 40), 'y' => rand(0, 30), 'r' => rand(0, 50) ],
        ];

        // DataSet
        $dataSet = $bubble->createDataSet();
        $this->assertInstanceOf(BubbleDataSet::class, $dataSet, 'The correct class should be created by the chart');

        // Populate the collection
        $dataSet->data()->exchangeArray($chartData);

        // Check if data is still correct.
        $bubble->addDataSet($dataSet);
        $this->assertEquals($chartData, $bubble->dataSets()->offsetGet(0)->data()->getArrayCopy());
    }

    /**
     *
     */
    public function testOptions()
    {
        $bar = new Bubble();
        $this->assertInstanceOf(BubbleOptions::class, $bar->options(), 'The correct class should be created');
    }
}
