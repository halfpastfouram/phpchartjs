<?php

namespace Halfpastfour\PHPChartJS\Chart;

use Halfpastfour\PHPChartJS\Chart;
use Halfpastfour\PHPChartJS\DataSet\BubbleDataSet;
use Halfpastfour\PHPChartJS\Options\BubbleOptions;

/**
 * Class Bubble
 * @package Halfpastfour\PHPChartJS\Chart
 *
 * @method BubbleDataSet createDataSet
 * @method BubbleOptions options
 */
class Bubble extends Chart
{
    /**
     * The internal type of chart.
     */
    const TYPE = 'bubble';

    /**
     * The list of models that should be used for this chart type.
     */
    const MODEL = [
        'dataset' => BubbleDataSet::class,
        'options' => BubbleOptions::class,
    ];
}
