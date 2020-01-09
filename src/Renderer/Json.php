<?php

namespace Halfpastfour\PHPChartJS\Renderer;

/**
 * Class Json
 *
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
     * @throws \ReflectionException
     */
    public function render($flags = JSON_PRETTY_PRINT)
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

        return json_encode($config, $flags);
    }
}
