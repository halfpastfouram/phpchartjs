<?php

namespace Halfpastfour\PHPChartJS\Chart;

use Halfpastfour\PHPChartJS\Chart;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\DataSet\RadarDataSet;
use Halfpastfour\PHPChartJS\Options\RadarOptions;

/**
 * Class Radar
 * @package Halfpastfour\PHPChartJS\Chart
 */
class Radar extends Chart implements ChartInterface
{
	const TYPE = 'radar';

	/**
	 * The list of models that should be used for this chart type.
	 */
	const MODEL = [
		'dataset' => RadarDataSet::class,
		'options' => RadarOptions::class,
	];
}