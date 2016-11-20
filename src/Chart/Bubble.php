<?php

namespace Halfpastfour\PHPChartJS\Chart;

use Halfpastfour\PHPChartJS\Chart;
use Halfpastfour\PHPChartJS\ChartInterface;
use Halfpastfour\PHPChartJS\Renderer;

/**
 * Class Bubble
 * @package Halfpastfour\PHPChartJS\Chart
 */
class Bubble extends Chart implements ChartInterface
{
	const TYPE = 'bubble';

	/**
	 * @return string
	 */
	public function render()
	{
		$renderer	= new Renderer( $this );
		return $renderer->render();
	}
}