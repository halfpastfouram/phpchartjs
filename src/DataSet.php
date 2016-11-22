<?php

namespace Halfpastfour\PHPChartJS;

use Halfpastfour\PHPChartJS\Collection\Data;
use Halfpastfour\PHPChartJS\Delegate\ArraySerializable;
use Zend\Json\Json;

/**
 * Class DataSet
 * @package Halfpastfour\PHPChartJS
 */
class DataSet implements ChartOwnedInterface, ArraySerializableInterface, \JsonSerializable
{
	use ChartOwned;
	use ArraySerializable;

	/**
	 * @var string
	 */
	protected $type;

	/**
	 * @var Data
	 */
	protected $data;

	/**
	 * @var string
	 */
	protected $label;

	/**
	 * @var string
	 */
	protected $xAxisID;

	/**
	 * @var string
	 */
	protected $yAxisID;

	/**
	 * @var string|string[]
	 */
	protected $backgroundColor;

	/**
	 * @var string|string[]
	 */
	protected $borderColor;

	/**
	 * @var int|int[]
	 */
	protected $borderWidth;

	/**
	 * @var string
	 */
	protected $borderSkipped;

	/**
	 * @var string|string[]
	 */
	protected $hoverBackgroundColor;

	/**
	 * @var string|string[]
	 */
	protected $hoverBorderColor;

	/**
	 * @var int|int[]
	 */
	protected $hoverBorderWidth;

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
	 *
	 */
	public function jsonSerialize()
	{
		return Json::encode( $this->getArrayCopy() );
	}
}