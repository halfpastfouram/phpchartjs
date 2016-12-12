<?php

namespace Halfpastfour\PHPChartJS\Chart;

use Halfpastfour\PHPChartJS\Chart;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\DataSet\BarDataSet;
use Halfpastfour\PHPChartJS\Options\BarOptions;

/**
 * Class Bar
 * @package Halfpastfour\PHPChartJS\Chart
 */
class Bar extends Chart implements ChartInterface
{
	const TYPE = 'bar';

	/**
	 * @return BarDataSet
	 */
	public function createDataSet()
	{
		return new BarDataSet();
	}

	/**
	 * @return BarOptions
	 */
	public function options()
	{
		if( is_null( $this->options ) ) {
			$this->options	= new BarOptions( $this );
		}

		return $this->options;
	}
}