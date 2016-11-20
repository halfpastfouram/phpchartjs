<?php

namespace Halfpastfour\PHPChartJS\Chart;

use Halfpastfour\PHPChartJS\Chart;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\Renderer;

/**
 * Class PolarArea
 * @package Halfpastfour\PHPChartJS\Chart
 */
class PolarArea extends Chart implements ChartInterface
{
	const TYPE = 'polarArea';

	/**
	 * @return string
	 */
	public function render()
	{
		$renderer	= new Renderer( $this );
		return $renderer->render();
	}
}