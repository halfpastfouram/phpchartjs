<?php

namespace Halfpastfour\PHPChartJS\Chart;

use Halfpastfour\PHPChartJS\Chart;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\DataSet\PolarAreaDataSet;
use Halfpastfour\PHPChartJS\Options\PolarAreaOptions;
use Halfpastfour\PHPChartJS\Renderer;

/**
 * Class PolarArea
 * @package Halfpastfour\PHPChartJS\Chart
 */
class PolarArea extends Chart implements ChartInterface
{
	const TYPE = 'polarArea';

	/**
	 * @return PolarAreaDataSet
	 */
	public function createDataSet()
	{
		return new PolarAreaDataSet();
	}

	/**
	 * @return PolarAreaOptions
	 */
	public function options()
	{
		if( is_null( $this->options ) ) {
			$this->options	= new PolarAreaOptions( $this );
		}

		return $this->options;
	}
}