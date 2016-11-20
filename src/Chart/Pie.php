<?php

namespace Halfpastfour\PHPChartJS\Chart;

use Halfpastfour\PHPChartJS\Chart;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\Renderer;

/**
 * Class Pie
 * @package Halfpastfour\PHPChartJS\Chart
 */
class Pie extends Chart implements ChartInterface
{
	const TYPE = 'pie';

	/**
	 * @return string
	 */
	public function render()
	{
		$renderer	= new Renderer( $this );
		return $renderer->render();
	}
}