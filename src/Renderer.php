<?php

namespace Halfpastfour\PHPChartJS;

use Zend\Json\Json;

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
	 * @param ChartInterface $chart
	 */
	public function __construct( ChartInterface $chart )
	{
		$this->chart = $chart;
	}

	/**
	 * Takes care of creating the JSON object required to instance a Chart with JavaScript.
	 *
	 * @param bool $pretty
	 *
	 * @return string
	 */
	public function renderJSON( $pretty = false )
	{
		$config = [
			'type' => constant( get_class( $this->chart ) . "::TYPE" ),
			'data' => [],
		];

		$labels = $this->chart->labels()->getArrayCopy();
		if( $labels ) $config['data']['labels'] = $labels;

		$dataSets = $this->chart->dataSets()->getArrayCopy();
		if( $dataSets ) $config['data']['datasets'] = $dataSets;

		$options = $this->chart->options()->getArrayCopy();
		if( $options ) $config['options'] = $options;

		$output	= Json::encode( $config, false, [ 'enableJsonExprFinder' => true ] );
		if( !!$pretty ) $output = Json::prettyPrint( $output );

		return $output;
	}

	/**
	 * Renders the necessary HTML and JavaScript for the chart to function in the frontend.
	 *
	 * @param bool $pretty
	 *
	 * @return string
	 */
	public function render( $pretty = false )
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
		$script = [];

		// First, setup the canvas context
		$script[] = "var ctx = document.getElementById( \"{$this->chart->getId()}\" ).getContext( \"2d\" );";

		// Now, setup the chart instance
		$json     = $this->renderJSON( !!$pretty );
		$script[] = "var chart = new Chart( ctx, {$json} );";

		// Render the script element
		$script = $dom->createElement(
			'script', "\nwindow.onload=(function(oldLoad){return function(){\n"
			. "if( oldLoad ) oldLoad();\n"
			. implode( "\n", $script ) . "\n"
			. "}})(window.onload);\n"
		);
		$dom->appendChild( $script );

		return $dom->saveHTML();
	}
}