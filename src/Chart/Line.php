<?php

namespace Halfpastfour\PHPChartJS\Chart;

use Halfpastfour\PHPChartJS\Chart;
use Halfpastfour\PHPChartJS\DataSet\LineDataSet;
use Halfpastfour\PHPChartJS\Options\LineOptions;

/**
 * Class Line
 * @package Halfpastfour\PHPChartJS\Chart
 */
class Line extends Chart
{
	const TYPE = 'line';

	/**
	 * The list of models that should be used for this chart type.
	 */
	const MODEL = [
		'dataset' => LineDataSet::class,
		'options' => LineOptions::class,
	];
}