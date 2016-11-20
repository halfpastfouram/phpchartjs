<?php

namespace Halfpastfour\PHPChartJS;

/**
 * Class Renderer
 * @package Halfpastfour\PHPChartJS
 */
class Renderer
{
	/**
	 * @var Chart
	 */
	private $chart;

	/**
	 * Renderer constructor.
	 *
	 * @param Chart $chart
	 */
	public function __construct( Chart $chart )
	{
		$this->chart = $chart;
	}

	/**
	 * Takes care of creating the JSON object required to instance a Chart with JavaScript.
	 */
	public function renderJSON()
	{
		$config = array(
			'type' => constant( get_class( $this->chart ) . "::TYPE" ),
			'data' => array(),
		);

		$labels = $this->chart->getLabels()->getArrayCopy();
		if( $labels ) $config['data']['labels'] = $labels;

		$dataSets = $this->chart->getDataSets()->getArrayCopy();
		if( $dataSets ) $config['data']['datasets'] = $dataSets;

		$options = $this->chart->options()->getArrayCopy();
		if( $options ) $config['options'] = (object) $options;

		return json_encode( $config );
	}

	/**
	 *
	 */
	public function render()
	{
		$dom = new \DOMDocument();

		// Render canvas HTML element
		$canvas = $dom->createElement( 'canvas' );
		$canvas->setAttribute( 'id', $this->chart->getId() );

		// Add title, height and width if applicable
		if( $this->chart->getTitle() ) $canvas->setAttribute( 'title', $this->chart->getTitle() );
		if( $this->chart->getHeight() ) $canvas->setAttribute( 'height', $this->chart->getHeight() );
		if( $this->chart->getWidth() ) $canvas->setAttribute( 'width', $this->chart->getWidth() );

		$dom->appendChild( $canvas );

		// Render JavaScript
		$script = array();


		// First, setup the canvas context
		$script[] = "var ctx = document.getElementById( \"{$this->chart->getId()}\" ).getContext( \"2d\" );";

		// Now, setup the chart instance
		$json     = $this->renderJSON();

		$script[] = "var chart = new Chart( ctx, {$json} );";

		// Render the script element
		$script = $dom->createElement( 'script', "\nwindow.onload=(function(oldLoad){return function(){\n"
			. "if( oldLoad ) oldLoad();\n"
			. implode( "\n", $script ) . "\n"
			. "}})(window.onload);\n"
		);
		$dom->appendChild( $script );

		return $dom->saveHTML();
	}
}