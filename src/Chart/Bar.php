<?php

namespace Halfpastfour\PHPChartJS\Chart;

use Halfpastfour\PHPChartJS\Chart;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\DataSet;
use Halfpastfour\PHPChartJS\DataSet\BarDataSet;
use Halfpastfour\PHPChartJS\Renderer;

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
	 * @return string
	 */
	public function render()
	{
		$renderer	= new Renderer( $this );
		return $renderer->render();
	}
}