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
		$this->chart	= $chart;
	}

	/**
	 *
	 */
	public function renderJSON()
	{
		$dataSets	= $this->chart->getDataSets()->getArrayCopy();
		$options	= $this->chart->options()->jsonSerialize();
		$labels		= $this->chart->getLabels()->jsonSerialize();

		var_dump( $options, $dataSets, $labels );

		return json_encode( (object) array(
			'type'		=> constant( get_class( $this->chart ) . "::TYPE" ),
			'dataSets'	=> $dataSets,
		) );
	}

	/**
	 *
	 */
	public function render()
	{
		$dom	= new \DOMDocument();

		// Render canvas HTML element
		$canvas	= $dom->createElement( 'canvas' );
		$canvas->setAttribute( 'id', $this->chart->getId() );

		// Add title, width and height if applicable
		if( $this->chart->getTitle() ) $canvas->setAttribute( 'title', $this->chart->getTitle() );
		if( $this->chart->getWidth() ) $canvas->setAttribute( 'width', $this->chart->getWidth() );
		if( $this->chart->getHeight() ) $canvas->setAttribute( 'height', $this->chart->getHeight() );

		$dom->appendChild( $canvas );

		// Render JavaScript
		$script	= array();

		// First, setup the canvast context
		$script[]	= "var ctx = document.getElementByid( \"{$this->chart->getId()}\" ).getContext( \"2d\" );";

		// Now, setup the chart instance
		$json		= $this->renderJson();
		$script[]	= "var chart = new Chart( ctx, {$json} );";

		// Render the script element
		$script	= $dom->createElement( 'script', "\n" . implode( "\n", $script ) . "\n" );
		$dom->appendChild( $script );

		var_dump( $dom->saveHTML() );
	}
}