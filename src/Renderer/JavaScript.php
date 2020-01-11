<?php

namespace Halfpastfour\PHPChartJS\Renderer;

/**
 * Class JavaScript
 *
 * @package Halfpastfour\PHPChartJS\Renderer
 */
class JavaScript extends Renderer
{
    /**
     * Renders the necessary JavaScript for the chart to function in the frontend.
     *
     * @param int|null $flags
     *
     * @return string
     */
    public function render($flags = null)
    {
        $script = [];

        // First, setup the canvas context
        $script[] = "var ctx = document.getElementById(\"{$this->chart->getId()}\").getContext(\"2d\");";

        // Now, setup the chart instance
        $jsonRenderer = new Json($this->chart);
        $json         = $jsonRenderer->render($flags);
        $script[]     = "var chart = new Chart(ctx, {$json});";
        $scriptString = implode("\n", $script);

        // Return the script
        return <<<JS
window.onload=(function(oldLoad){return function(){
  if (oldLoad) {
    oldLoad();
  }
  
  {$scriptString};
  
  if (! window.hasOwnProperty('chartInstances')) {
    window.chartInstances = {};
  }
  
  window.chartInstances['{$this->chart->getId()}'] = chart;
}})(window.onload);
JS
            ;
    }
}
