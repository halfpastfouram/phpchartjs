<?php

namespace Halfpastfour\PHPChartJS\Options;

use Halfpastfour\PHPChartJS\ArraySerializable;
use Halfpastfour\PHPChartJS\Options\Scales\XAxes;
use Halfpastfour\PHPChartJS\Options\Scales\YAxes;

/**
 * Class Scales
 * @package Halfpastfour\PHPChartJS\Options
 */
class Scales implements ArraySerializable, \JsonSerializable
{
	/**
	 * @var XAxes
	 */
	private $xAxes;

	/**
	 * @var YAxes
	 */
	private $yAxes;

	/**
	 * @return XAxes
	 */
	public function xAxes()
	{
		if( is_null( $this->xAxes ) ) {
			$this->xAxes	= new XAxes();
		}

		return $this->xAxes;
	}

	/**
	 * @return YAxes
	 */
	public function yAxes()
	{
		if( is_null( $this->yAxes ) ) {
			$this->yAxes	= new YAxes();
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
		return json_encode( $this->getArrayCopy() );
	}
}