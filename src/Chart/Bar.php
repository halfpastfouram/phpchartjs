<?php

namespace Halfpastfour\PHPChartJS\Chart;

use Halfpastfour\PHPChartJS\Chart;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\Renderer;

class Bar extends Chart implements ChartInterface
{
	const TYPE = 'bar';

	/**
	 * @return string
	 */
	public function render()
	{
		$renderer	= new Renderer( $this );
		$renderer->render();
	}
}