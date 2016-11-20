<?php

namespace Halfpastfour\PHPChartJS\Chart;

use Halfpastfour\PHPChartJS\Chart;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\Renderer;

/**
 * Class Radar
 * @package Halfpastfour\PHPChartJS\Chart
 */
class Radar extends Chart implements ChartInterface
{
	const TYPE = 'radar';

	/**
	 * @return string
	 */
	public function render()
	{
		$renderer	= new Renderer( $this );
		return $renderer->render();
	}
}