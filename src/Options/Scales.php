<?php

namespace Halfpastfour\PHPChartJS\Options;

use Halfpastfour\PHPChartJS\ArraySerializable;
use Halfpastfour\PHPChartJS\Options\Scales\XAxis;
use Halfpastfour\PHPChartJS\Options\Scales\XAxisCollection;
use Halfpastfour\PHPChartJS\Options\Scales\YAxis;
use Halfpastfour\PHPChartJS\Options\Scales\YAxisCollection;
use Zend\Json\Json;

/**
 * Class Scales
 * @package Halfpastfour\PHPChartJS\Options
 */
class Scales implements ArraySerializable, \JsonSerializable
{
	/**
	 * @var XAxisCollection
	 */
	private $xAxes;

	/**
	 * @var YAxisCollection
	 */
	private $yAxes;

	/**
	 * @return XAxis
	 */
	public function createXAxis()
	{
		return new XAxis();
	}

	/**
	 * @return YAxis
	 */
	public function createYAxis()
	{
		return new YAxis();
	}

	/**
	 * @return XAxisCollection
	 */
	public function xAxes()
	{
		if( is_null( $this->xAxes ) ) {
			$this->xAxes	= new XAxisCollection();
		}

		return $this->xAxes;
	}

	/**
	 * @return YAxisCollection
	 */
	public function yAxes()
	{
		if( is_null( $this->yAxes ) ) {
			$this->yAxes	= new YAxisCollection();
		}

		return $this->yAxes;
	}

	/**
	 * @return array
	 */
	public function getArrayCopy()
	{
		$data	= array();

		if( !is_null( $this->xAxes ) ) $data['xAxes']	= $this->xAxes()->getArrayCopy();
		if( !is_null( $this->yAxes ) ) $data['yAxes']	= $this->yAxes()->getArrayCopy();

		return $data;
	}

	/**
	 * @return string
	 */
	public function jsonSerialize()
	{
		return Json::encode( $this->getArrayCopy() );
	}
}