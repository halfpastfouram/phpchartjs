<?php

namespace Halfpastfour\PHPChartJS\Chart;

use Halfpastfour\PHPChartJS\Chart;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\DataSet\BubbleDataSet;
use Halfpastfour\PHPChartJS\Options\BubbleOptions;

/**
 * Class Bubble
 * @package Halfpastfour\PHPChartJS\Chart
 */
class Bubble extends Chart implements ChartInterface
{
	const TYPE = 'bubble';

	/**
	 * @return BubbleDataSet
	 */
	public function createDataSet()
	{
		return new BubbleDataSet();
	}

	/**
	 * @return BubbleOptions
	 */
	public function options()
	{
		if( is_null( $this->options ) ) {
			$this->options	= new BubbleOptions( $this );
		}

		return $this->options;
	}
}