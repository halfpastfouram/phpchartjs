<?php

namespace Halfpastfour\PHPChartJS\Chart;

use Halfpastfour\PHPChartJS\Chart;
use Halfpastfour\PHPChartJS\DataSet\ScatterDataSet;
use Halfpastfour\PHPChartJS\Options\ScatterOptions;

/**
 * Class Scatter
 *
 * @package Halfpastfour\PHPChartJS\Chart
 *
 * @method ScatterDataSet createDataSet
 * @method ScatterOptions options
 */
class Scatter extends Chart
{
    /**
     * The internal type of chart.
     */
    const TYPE = 'scatter';

    /**
     * The list of models that should be used for this chart type.
     */
    const MODEL = [
        'dataset' => ScatterDataSet::class,
        'options' => ScatterOptions::class,
    ];
}
