<?php

namespace Halfpastfour\PHPChartJS\Chart;

use Halfpastfour\PHPChartJS\Chart;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\DataSet\RadarDataSet;
use Halfpastfour\PHPChartJS\Options\RadarOptions;

/**
 * Class Radar
 * @package Halfpastfour\PHPChartJS\Chart
 *
 * @method RadarDataSet createDataSet
 * @method RadarOptions options
 */
class Radar extends Chart implements ChartInterface
{
    /**
     * The internal type of chart.
     */
    const TYPE = 'radar';

    /**
     * The list of models that should be used for this chart type.
     */
    const MODEL = [
        'dataset' => RadarDataSet::class,
        'options' => RadarOptions::class,
    ];
}
