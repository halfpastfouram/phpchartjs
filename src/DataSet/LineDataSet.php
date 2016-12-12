<?php

namespace Halfpastfour\PHPChartJS\DataSet;

use Halfpastfour\PHPChartJS\DataSet;

/**
 * Class LineDataSet
 * @package Halfpastfour\PHPChartJS\DataSet
 */
class LineDataSet extends DataSet
{
	/**
	 * @var bool|string
	 */
	private $fill;

	/**
	 * @var string
	 */
	private $cubicInterpolationMode;

	/**
	 * @var int
	 */
	private $lineTension;

	/**
	 * @var string
	 */
	private $borderCapStyle;

	/**
	 * @var array
	 */
	private $borderDash;

	/**
	 * @var float
	 */
	private $borderDashOffset;

	/**
	 * @var string
	 */
	private $borderJoinStyle;

	/**
	 * @var string|string[]
	 */
	private $pointBorderColor;

	/**
	 * @var string|string[]
	 */
	private $pointBackgroundColor;

	/**
	 * @var int|int[]
	 */
	private $pointBorderWidth;

	/**
	 * @var int|int[]
	 */
	private $pointRadius;

	/**
	 * @var int|int[]
	 */
	private $pointHoverRadius;

	/**
	 * @var int|int[]
	 */
	private $pointHitRadius;

	/**
	 * @var string|string[]
	 */
	private $pointHoverBackgroundColor;

	/**
	 * @var string|string[]
	 */
	private $pointHoverBorderColor;

	/**
	 * @var int|int[]
	 */
	private $pointHoverBorderWidth;

	/**
	 * @var mixed
	 */
	private $pointStyle;

	/**
	 * @var bool
	 */
	private $showLine;

	/**
	 * @var bool
	 */
	private $spanGaps;

	/**
	 * @var bool
	 */
	private $steppedLine;
	
	/**
	 * @return boolean
	 */
	public function isFill()
	{
		return $this->fill;
	}

	/**
	 * @param boolean|string $fill
	 *
	 * @return $this
	 */
	public function setFill( $fill )
	{
		$this->fill = $fill;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCubicInterpolationMode()
	{
		return $this->cubicInterpolationMode;
	}

	/**
	 * @param string $cubicInterpolationMode
	 *
	 * @return $this
	 */
	public function setCubicInterpolationMode( $cubicInterpolationMode )
	{
		$this->cubicInterpolationMode = $cubicInterpolationMode;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getLineTension()
	{
		return $this->lineTension;
	}

	/**
	 * @param float $lineTension
	 *
	 * @return $this
	 */
	public function setLineTension( $lineTension )
	{
		$this->lineTension = floatval( $lineTension );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getBorderCapStyle()
	{
		return $this->borderCapStyle;
	}

	/**
	 * @param string $borderCapStyle
	 *
	 * @return $this
	 */
	public function setBorderCapStyle( $borderCapStyle )
	{
		$this->borderCapStyle = $borderCapStyle;

		return $this;
	}

	/**
	 * @return array
	 */
	public function getBorderDash()
	{
		return $this->borderDash;
	}

	/**
	 * @param array $borderDash
	 *
	 * @return $this
	 */
	public function setBorderDash( $borderDash )
	{
		$this->borderDash = $borderDash;

		return $this;
	}

	/**
	 * @return int
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
		$this->borderDashOffset = floatval( $borderDashOffset );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getBorderJoinStyle()
	{
		return $this->borderJoinStyle;
	}

	/**
	 * @param string $borderJoinStyle
	 *
	 * @return $this
	 */
	public function setBorderJoinStyle( $borderJoinStyle )
	{
		$this->borderJoinStyle = $borderJoinStyle;

		return $this;
	}

	/**
	 * @return string|\string[]
	 */
	public function getPointBorderColor()
	{
		return $this->pointBorderColor;
	}

	/**
	 * @param string|\string[] $pointBorderColor
	 *
	 * @return $this
	 */
	public function setPointBorderColor( $pointBorderColor )
	{
		$this->pointBorderColor = $pointBorderColor;

		return $this;
	}

	/**
	 * @return string|\string[]
	 */
	public function getPointBackgroundColor()
	{
		return $this->pointBackgroundColor;
	}

	/**
	 * @param string|\string[] $pointBackgroundColor
	 *
	 * @return $this
	 */
	public function setPointBackgroundColor( $pointBackgroundColor )
	{
		$this->pointBackgroundColor = $pointBackgroundColor;

		return $this;
	}

	/**
	 * @return int|\int[]
	 */
	public function getPointBorderWidth()
	{
		return $this->pointBorderWidth;
	}

	/**
	 * @param int|\int[] $pointBorderWidth
	 *
	 * @return $this
	 */
	public function setPointBorderWidth( $pointBorderWidth )
	{
		$this->pointBorderWidth = $pointBorderWidth;

		return $this;
	}

	/**
	 * @return int|\int[]
	 */
	public function getPointRadius()
	{
		return $this->pointRadius;
	}

	/**
	 * @param int|\int[] $pointRadius
	 *
	 * @return $this
	 */
	public function setPointRadius( $pointRadius )
	{
		$this->pointRadius = $pointRadius;

		return $this;
	}

	/**
	 * @return int|\int[]
	 */
	public function getPointHoverRadius()
	{
		return $this->pointHoverRadius;
	}

	/**
	 * @param int|\int[] $pointHoverRadius
	 *
	 * @return $this
	 */
	public function setPointHoverRadius( $pointHoverRadius )
	{
		$this->pointHoverRadius = $pointHoverRadius;

		return $this;
	}

	/**
	 * @return int|\int[]
	 */
	public function getPointHitRadius()
	{
		return $this->pointHitRadius;
	}

	/**
	 * @param int|\int[] $pointHitRadius
	 *
	 * @return $this
	 */
	public function setPointHitRadius( $pointHitRadius )
	{
		$this->pointHitRadius = $pointHitRadius;

		return $this;
	}

	/**
	 * @return string|\string[]
	 */
	public function getPointHoverBackgroundColor()
	{
		return $this->pointHoverBackgroundColor;
	}

	/**
	 * @param string|\string[] $pointHoverBackgroundColor
	 *
	 * @return $this
	 */
	public function setPointHoverBackgroundColor( $pointHoverBackgroundColor )
	{
		$this->pointHoverBackgroundColor = $pointHoverBackgroundColor;

		return $this;
	}

	/**
	 * @return string|\string[]
	 */
	public function getPointHoverBorderColor()
	{
		return $this->pointHoverBorderColor;
	}

	/**
	 * @param string|\string[] $pointHoverBorderColor
	 *
	 * @return $this
	 */
	public function setPointHoverBorderColor( $pointHoverBorderColor )
	{
		$this->pointHoverBorderColor = $pointHoverBorderColor;

		return $this;
	}

	/**
	 * @return int|\int[]
	 */
	public function getPointHoverBorderWidth()
	{
		return $this->pointHoverBorderWidth;
	}

	/**
	 * @param int|\int[] $pointHoverBorderWidth
	 *
	 * @return $this
	 */
	public function setPointHoverBorderWidth( $pointHoverBorderWidth )
	{
		$this->pointHoverBorderWidth = $pointHoverBorderWidth;

		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPointStyle()
	{
		return $this->pointStyle;
	}

	/**
	 * @param mixed $pointStyle
	 *
	 * @return $this
	 */
	public function setPointStyle( $pointStyle )
	{
		$this->pointStyle = $pointStyle;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isShowLine()
	{
		return $this->showLine;
	}

	/**
	 * @param boolean $showLine
	 *
	 * @return $this
	 */
	public function setShowLine( $showLine )
	{
		$this->showLine = $showLine;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isSpanGaps()
	{
		return $this->spanGaps;
	}

	/**
	 * @param boolean $spanGaps
	 *
	 * @return $this
	 */
	public function setSpanGaps( $spanGaps )
	{
		$this->spanGaps = $spanGaps;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isSteppedLine()
	{
		return $this->steppedLine;
	}

	/**
	 * @param boolean $steppedLine
	 *
	 * @return $this
	 */
	public function setSteppedLine( $steppedLine )
	{
		$this->steppedLine = $steppedLine;

		return $this;
	}
}