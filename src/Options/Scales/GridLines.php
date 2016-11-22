<?php

namespace Halfpastfour\PHPChartJS\Options\Scales;

use Halfpastfour\PHPChartJS\ArraySerializable;
use Zend\Json\Json;

/**
 * Class GridLines
 * @package Halfpastfour\PHPChartJS\Options\Scales
 */
class GridLines implements ArraySerializable, \JsonSerializable
{
	/**
	 * @var bool
	 */
	private $display;

	/**
	 * @var string|string[]
	 */
	private $color;

	/**
	 * @var float[]
	 */
	private $borderDash;

	/**
	 * @var float
	 */
	private $borderDashOffset;

	/**
	 * @var int|int[]
	 */
	private $lineWidth;

	/**
	 * @var bool
	 */
	private $drawBorder;

	/**
	 * @var bool
	 */
	private $drawOnChartArea;

	/**
	 * @var bool
	 */
	private $drawTicks;

	/**
	 * @var int
	 */
	private $tickMarkLength;

	/**
	 * @var int
	 */
	private $zeroLineWidth;

	/**
	 * @var string
	 */
	private $zeroLineColor;

	/**
	 * @var bool
	 */
	private $offsetGridLines;

	/**
	 * @return boolean
	 */
	public function isDisplay()
	{
		return $this->display;
	}

	/**
	 * @param boolean $display
	 *
	 * @return $this
	 */
	public function setDisplay( $display )
	{
		$this->display = $display;

		return $this;
	}

	/**
	 * @return string|\string[]
	 */
	public function getColor()
	{
		return $this->color;
	}

	/**
	 * @param string|\string[] $color
	 *
	 * @return $this
	 */
	public function setColor( $color )
	{
		$this->color = $color;

		return $this;
	}

	/**
	 * @return \float[]
	 */
	public function getBorderDash()
	{
		return $this->borderDash;
	}

	/**
	 * @param \float[] $borderDash
	 *
	 * @return $this
	 */
	public function setBorderDash( $borderDash )
	{
		$this->borderDash = $borderDash;

		return $this;
	}

	/**
	 * @return float
	 */
	public function getBorderDashOffset()
	{
		return $this->borderDashOffset;
	}

	/**
	 * @param float $borderDashOffset
	 *
	 * @return $this
	 */
	public function setBorderDashOffset( $borderDashOffset )
	{
		$this->borderDashOffset = $borderDashOffset;

		return $this;
	}

	/**
	 * @return int|\int[]
	 */
	public function getLineWidth()
	{
		return $this->lineWidth;
	}

	/**
	 * @param int|\int[] $lineWidth
	 *
	 * @return $this
	 */
	public function setLineWidth( $lineWidth )
	{
		$this->lineWidth = $lineWidth;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isDrawBorder()
	{
		return $this->drawBorder;
	}

	/**
	 * @param boolean $drawBorder
	 *
	 * @return $this
	 */
	public function setDrawBorder( $drawBorder )
	{
		$this->drawBorder = $drawBorder;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isDrawOnChartArea()
	{
		return $this->drawOnChartArea;
	}

	/**
	 * @param boolean $drawOnChartArea
	 *
	 * @return $this
	 */
	public function setDrawOnChartArea( $drawOnChartArea )
	{
		$this->drawOnChartArea = $drawOnChartArea;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isDrawTicks()
	{
		return $this->drawTicks;
	}

	/**
	 * @param boolean $drawTicks
	 *
	 * @return $this
	 */
	public function setDrawTicks( $drawTicks )
	{
		$this->drawTicks = $drawTicks;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getTickMarkLength()
	{
		return $this->tickMarkLength;
	}

	/**
	 * @param int $tickMarkLength
	 *
	 * @return $this
	 */
	public function setTickMarkLength( $tickMarkLength )
	{
		$this->tickMarkLength = $tickMarkLength;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getZeroLineWidth()
	{
		return $this->zeroLineWidth;
	}

	/**
	 * @param int $zeroLineWidth
	 *
	 * @return $this
	 */
	public function setZeroLineWidth( $zeroLineWidth )
	{
		$this->zeroLineWidth = $zeroLineWidth;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getZeroLineColor()
	{
		return $this->zeroLineColor;
	}

	/**
	 * @param string $zeroLineColor
	 *
	 * @return $this
	 */
	public function setZeroLineColor( $zeroLineColor )
	{
		$this->zeroLineColor = $zeroLineColor;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isOffsetGridLines()
	{
		return $this->offsetGridLines;
	}

	/**
	 * @param boolean $offsetGridLines
	 *
	 * @return $this
	 */
	public function setOffsetGridLines( $offsetGridLines )
	{
		$this->offsetGridLines = $offsetGridLines;

		return $this;
	}

	/**
	 * @return array
	 */
	public function getArrayCopy()
	{
		$data	= [];

		if( !is_null( $this->display ) ) $data['display'] = $this->isDisplay();
		if( !is_null( $this->color ) ) $data['color'] = $this->getColor();
		if( !is_null( $this->borderDash ) ) $data['borderDash'] = $this->getBorderDash();
		if( !is_null( $this->borderDashOffset ) ) $data['borderDashOffset'] = $this->getBorderDashOffset();
		if( !is_null( $this->lineWidth ) ) $data['lineWidth'] = $this->getLineWidth();
		if( !is_null( $this->drawBorder ) ) $data['drawBorder'] = $this->isDrawBorder();
		if( !is_null( $this->drawOnChartArea ) ) $data['drawOnChartArea'] = $this->isDrawOnChartArea();
		if( !is_null( $this->drawTicks ) ) $data['drawTicks'] = $this->isDrawTicks();
		if( !is_null( $this->tickMarkLength ) ) $data['tickMarkLength'] = $this->getTickMarkLength();
		if( !is_null( $this->zeroLineWidth ) ) $data['zeroLineWidth'] = $this->getZeroLineWidth();
		if( !is_null( $this->zeroLineColor ) ) $data['zeroLineColor'] = $this->getZeroLineColor();
		if( !is_null( $this->offsetGridLines ) ) $data['offsetGridLines'] = $this->isOffsetGridLines();

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