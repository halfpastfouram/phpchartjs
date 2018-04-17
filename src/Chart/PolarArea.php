<?php

namespace Halfpastfour\PHPChartJS\Chart;

use Halfpastfour\PHPChartJS\Chart;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\DataSet\PolarAreaDataSet;
use Halfpastfour\PHPChartJS\Options\PolarAreaOptions;

/**
 * Class PolarArea
 * @package Halfpastfour\PHPChartJS\Chart
 *
 * @method PolarAreaDataSet createDataSet
 * @method PolarAreaOptions options
 */
class PolarArea extends Chart implements ChartInterface
{
    /**
     * The internal type of chart.
     */
    const TYPE = 'polarArea';

    /**
     * The list of models that should be used for this chart type.
     */
    const MODEL = [
        'dataset' => PolarAreaDataSet::class,
        'options' => PolarAreaOptions::class,
    ];
}
