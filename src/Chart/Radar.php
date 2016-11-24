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
	 * @return RadarDataSet
	 */
	public function createDataSet()
	{
		return new RadarDataSet();
	}

	/**
	 * @return RadarOptions
	 */
	public function options()
	{
		if( is_null( $this->options ) ) {
			$this->options	= new RadarOptions( $this );
		}

		return $this->options;
	}
}