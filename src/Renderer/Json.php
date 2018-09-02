<?php

namespace Halfpastfour\PHPChartJS\Renderer;

use Zend\Json\Json as JsonHelper;

/**
 * Class Json
 * @package Halfpastfour\PHPChartJS\Renderer
 */
class Json extends Renderer
{
    /**
     * Render the necessary JSON for the chart to function in the frontend.
     *
     * @param int|null $flags
     *
     * @return string
     */
    public function render($flags = null)
    {
        $config = [
            'type' => constant(get_class($this->chart) . "::TYPE"),
            'data' => [],
        ];

        $labels = $this->chart->labels()->getArrayCopy();
        if ($labels) {
            $config['data']['labels'] = $labels;
        }

        $dataSets = $this->chart->dataSets()->getArrayCopy();
        if ($dataSets) {
            $config['data']['datasets'] = $dataSets;
        }

        $options = $this->chart->options()->getArrayCopy();
        if ($options) {
            $config['options'] = $options;
        }

        $output = JsonHelper::encode($config, false, [ 'enableJsonExprFinder' => true ]);
        if ($flags & Renderer::RENDER_PRETTY) {
            $output = JsonHelper::prettyPrint($output);
        }

        return $output;
    }
}
