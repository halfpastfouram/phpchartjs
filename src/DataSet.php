<?php

namespace Halfpastfour\PHPChartJS;

use Halfpastfour\PHPChartJS\Collection\Data;

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
	 * @return DataSet
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
	 * @return DataSet
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
	 * @return DataSet
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
	 * @return DataSet
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
	 * @return DataSet
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
	 * @return DataSet
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
	 * @return DataSet
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
	 * @return DataSet
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
	 * @return DataSet
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
	 * @return DataSet
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
	 * @return DataSet
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
		$data	= array(
			'data'	=> $this->data()->getArrayCopy()
		);

		if( $this->getType() ) $data['type'] = $this->getType();
		if( $this->getLabel() ) $data['label'] = $this->getLabel();
		if( $this->getXAxisID() ) $data['xAxisID'] = $this->getXAxisID();
		if( $this->getYAxisID() ) $data['yAxisID'] = $this->getYAxisID();
		if( $this->getBackgroundColor() ) $data['backgroundColor'] = $this->getBackgroundColor();
		if( $this->getBorderColor() ) $data['borderColor'] = $this->getBorderColor();
		if( $this->getBorderWidth() ) $data['borderWidth'] = $this->getBorderWidth();
		if( $this->getHoverBackgroundColor() ) $data['backgroundColor'] = $this->getHoverBackgroundColor();
		if( $this->getHoverBorderColor() ) $data['borderColor'] = $this->getHoverBorderColor();
		if( $this->getHoverBorderWidth() ) $data['borderWidth'] = $this->getHoverBorderWidth();

		return $data;
	}

	/**
	 *
	 */
	public function jsonSerialize()
	{
		return json_encode( $this->getArrayCopy() );
	}
}