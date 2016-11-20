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
	 * @return LineDataSet
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
	 * @return LineDataSet
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
	 * @return LineDataSet
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
	 * @return LineDataSet
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
	 * @return LineDataSet
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
	 * @return LineDataSet
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
	 * @return LineDataSet
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
	 * @return LineDataSet
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
	 * @return LineDataSet
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
	 * @return LineDataSet
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
	 * @return LineDataSet
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
	 * @return LineDataSet
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
	 * @return LineDataSet
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
	 * @return LineDataSet
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
	 * @return LineDataSet
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
	 * @return LineDataSet
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
	 * @return LineDataSet
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
	 * @return LineDataSet
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
	 * @return LineDataSet
	 */
	public function setSteppedLine( $steppedLine )
	{
		$this->steppedLine = $steppedLine;

		return $this;
	}

	/**
	 * @return array
	 */
	public function getArrayCopy()
	{
		$data	= parent::getArrayCopy();

		if( !is_null( $this->fill ) ) $data['fill'] = $this->isFill();
		if( !is_null( $this->cubicInterpolationMode ) )
			$data['cubicInterpolationMode'] = $this->getCubicInterpolationMode();
		if( !is_null( $this->lineTension ) ) $data['lineTension'] = $this->getLineTension();
		if( !is_null( $this->borderCapStyle ) ) $data['borderCapStyle'] = $this->getBorderCapStyle();
		if( !is_null( $this->borderDash ) ) $data['borderDash'] = $this->getBorderDash();
		if( !is_null( $this->borderDashOffset ) ) $data['borderDashOffset'] = $this->getBorderDashOffset();
		if( !is_null( $this->borderJoinStyle ) ) $data['borderJoinStyle'] = $this->getBorderJoinStyle();
		if( !is_null( $this->pointBorderColor ) ) $data['pointBorderColor'] = $this->getPointBorderColor();
		if( !is_null( $this->pointBackgroundColor ) ) $data['pointBackgroundColor'] = $this->getPointBackgroundColor();
		if( !is_null( $this->pointBorderWidth ) ) $data['pointBorderWidth'] = $this->getPointBorderWidth();
		if( !is_null( $this->pointRadius ) ) $data['pointRadius'] = $this->getPointRadius();
		if( !is_null( $this->pointHoverRadius ) ) $data['pointHoverRadius'] = $this->getPointHoverRadius();
		if( !is_null( $this->pointHitRadius ) ) $data['pointHitRadius'] = $this->getPointHitRadius();
		if( !is_null( $this->pointHoverBackgroundColor ) )
			$data['pointHoverBackgroundColor'] = $this->getPointHoverBackgroundColor();
		if( !is_null( $this->pointHoverBorderColor ) )
			$data['pointHoverBorderColor'] = $this->getPointHoverBorderColor();
		if( !is_null( $this->pointHoverBorderWidth ) )
			$data['pointHoverBorderWidth'] = $this->getPointHoverBorderWidth();
		if( !is_null( $this->pointStyle ) ) $data['pointStyle'] = $this->getPointStyle();
		if( !is_null( $this->showLine ) ) $data['pointStyle'] = $this->isShowLine();
		if( !is_null( $this->spanGaps ) ) $data['spanGaps'] = $this->isSpanGaps();
		if( !is_null( $this->steppedLine ) ) $data['steppedLine'] = $this->isSteppedLine();

		return $data;
	}
}