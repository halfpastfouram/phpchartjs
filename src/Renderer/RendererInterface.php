<?php

namespace Halfpastfour\PHPChartJS\Renderer;

use Halfpastfour\PHPChartJS\Chart;

/**
 * Interface RendererInterface
 */
interface RendererInterface
{
    /**
     * RendererInterface constructor. Expects an instance of a chart.
     *
     * @param Chart $chart
     */
    public function __construct(Chart $chart);

    /**
     * Render the chart with the current strategy, returning a string.
     *
     * @param int|null $flags
     *
     * @return string
     */
    public function render($flags = null);
}
