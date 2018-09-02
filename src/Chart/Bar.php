<?php

namespace Halfpastfour\PHPChartJS\Chart;

use Halfpastfour\PHPChartJS\Chart;
use Halfpastfour\PHPChartJS\DataSet\BarDataSet;
use Halfpastfour\PHPChartJS\Options\BarOptions;

/**
 * Class Bar
 * @package Halfpastfour\PHPChartJS\Chart
 *
 * @method BarDataSet createDataSet
 * @method BarOptions options
 */
class Bar extends Chart
{
    /**
     * The internal type of chart.
     */
    const TYPE = 'bar';

    /**
     * The list of models that should be used for this chart type.
     */
    const MODEL = [
        'dataset' => BarDataSet::class,
        'options' => BarOptions::class,
    ];
}
