<?php

namespace Halfpastfour\PHPChartJS;

use Halfpastfour\PHPChartJS\Collection\Data;
use Zend\Json\Json;

/**
 * Class DataSet
 * @package Halfpastfour\PHPChartJS
 */
class DataSet implements ChartOwnedInterface, ArraySerializable, \JsonSerializable
{
	use ChartOwned;

	/**
	 * @var string
	 */
	private $type;

	/**
	 * @var Data
	 */
	private $data;

	/**
	 * @var string
	 */
	private $label;

	/**
	 * @var string
	 */
	private $xAxisID;

	/**
	 * @var string
	 */
	private $yAxisID;

	/**
	 * @var string|string[]
	 */
	private $backgroundColor;

	/**
	 * @var string|string[]
	 */
	private $borderColor;

	/**
	 * @var int|int[]
	 */
	private $borderWidth;

	/**
	 * @var string
	 */
	private $borderSkipped;

	/**
	 * @var string|string[]
	 */
	private $hoverBackgroundColor;

	/**
	 * @var string|string[]
	 */
	private $hoverBorderColor;

	/**
	 * @var int|int[]
	 */
	private $hoverBorderWidth;

	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param string $type
	 *
	 * @return $this
	 */
	public function setType( $type )
	{
		$this->type = $type;

		return $this;
	}

	/**
	 * @return Data
	 */
	public function data()
	{
		if( is_null( $this->data ) ) {
			$this->data	= new Data();
		}

		return $this->data;
	}

	/**
	 * @return string
	 */
	public function getLabel()
	{
		return $this->label;
	}

	/**
	 * @param string $label
	 *
	 * @return $this
	 */
	public function setLabel( $label )
	{
		$this->label = strval( $label );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getXAxisID()
	{
		return $this->xAxisID;
	}

	/**
	 * @param string $xAxisID
	 *
	 * @return $this
	 */
	public function setXAxisID( $xAxisID )
	{
		$this->xAxisID = strval( $xAxisID );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getYAxisID()
	{
		return $this->yAxisID;
	}

	/**
	 * @param string $yAxisID
	 *
	 * @return $this
	 */
	public function setYAxisID( $yAxisID )
	{
		$this->yAxisID = strval( $yAxisID );

		return $this;
	}

	/**
	 * @return string|\string[]
	 */
	public function getBackgroundColor()
	{
		return $this->backgroundColor;
	}

	/**
	 * @param string|\string[] $backgroundColor
	 *
	 * @return $this
	 */
	public function setBackgroundColor( $backgroundColor )
	{
		$this->backgroundColor = $backgroundColor;

		return $this;
	}

	/**
	 * @return string|\string[]
	 */
	public function getBorderColor()
	{
		return $this->borderColor;
	}

	/**
	 * @param string|\string[] $borderColor
	 *
	 * @return $this
	 */
	public function setBorderColor( $borderColor )
	{
		$this->borderColor = $borderColor;

		return $this;
	}

	/**
	 * @return int|\int[]
	 */
	public function getBorderWidth()
	{
		return $this->borderWidth;
	}

	/**
	 * @param int|\int[] $borderWidth
	 *
	 * @return $this
	 */
	public function setBorderWidth( $borderWidth )
	{
		$this->borderWidth = $borderWidth;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getBorderSkipped()
	{
		return $this->borderSkipped;
	}

	/**
	 * @param string $borderSkipped
	 *
	 * @return $this
	 */
	public function setBorderSkipped( $borderSkipped )
	{
		$this->borderSkipped = strval( $borderSkipped );

		return $this;
	}

	/**
	 * @return string|\string[]
	 */
	public function getHoverBackgroundColor()
	{
		return $this->hoverBackgroundColor;
	}

	/**
	 * @param string|\string[] $hoverBackgroundColor
	 *
	 * @return $this
	 */
	public function setHoverBackgroundColor( $hoverBackgroundColor )
	{
		$this->hoverBackgroundColor = $hoverBackgroundColor;

		return $this;
	}

	/**
	 * @return string|\string[]
	 */
	public function getHoverBorderColor()
	{
		return $this->hoverBorderColor;
	}

	/**
	 * @param string|\string[] $hoverBorderColor
	 *
	 * @return $this
	 */
	public function setHoverBorderColor( $hoverBorderColor )
	{
		$this->hoverBorderColor = $hoverBorderColor;

		return $this;
	}

	/**
	 * @return int|\int[]
	 */
	public function getHoverBorderWidth()
	{
		return $this->hoverBorderWidth;
	}

	/**
	 * @param int|\int[] $hoverBorderWidth
	 *
	 * @return $this
	 */
	public function setHoverBorderWidth( $hoverBorderWidth )
	{
		$this->hoverBorderWidth = $hoverBorderWidth;

		return $this;
	}

	/**
	 * @return array
	 */
	public function getArrayCopy()
	{
		$data	= [
			'data'	=> $this->data()->getArrayCopy()
		];

		if( !is_null( $this->type ) ) $data['type'] = $this->getType();
		if( !is_null( $this->label ) ) $data['label'] = $this->getLabel();
		if( !is_null( $this->xAxisID ) ) $data['xAxisID'] = $this->getXAxisID();
		if( !is_null( $this->yAxisID ) ) $data['yAxisID'] = $this->getYAxisID();
		if( !is_null( $this->backgroundColor ) ) $data['backgroundColor'] = $this->getBackgroundColor();
		if( !is_null( $this->borderColor ) ) $data['borderColor'] = $this->getBorderColor();
		if( !is_null( $this->borderWidth ) ) $data['borderWidth'] = $this->getBorderWidth();
		if( !is_null( $this->hoverBackgroundColor ) ) $data['hoverBackgroundColor'] = $this->getHoverBackgroundColor();
		if( !is_null( $this->hoverBorderColor ) ) $data['borderColor'] = $this->getHoverBorderColor();
		if( !is_null( $this->hoverBorderWidth ) ) $data['borderWidth'] = $this->getHoverBorderWidth();

		return $data;
	}

	/**
	 *
	 */
	public function jsonSerialize()
	{
		return Json::encode( $this->getArrayCopy() );
	}
}