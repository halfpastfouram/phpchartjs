<?php

namespace Halfpastfour\PHPChartJS\Chart;

use Halfpastfour\PHPChartJS\Chart;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\DataSet\PieDataSet;
use Halfpastfour\PHPChartJS\Options\PieOptions;

/**
 * Class Pie
 * @package Halfpastfour\PHPChartJS\Chart
 *
 * @method PieDataSet createDataSet
 * @method PieOptions options
 */
class Pie extends Chart implements ChartInterface
{
    /**
     * The internal type of chart.
     */
    const TYPE = 'pie';

    /**
     * The list of models that should be used for this chart type.
     */
    const MODEL = [
        'dataset' => PieDataSet::class,
        'options' => PieOptions::class,
    ];
}
