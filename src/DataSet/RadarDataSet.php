<?php

namespace Halfpastfour\PHPChartJS\DataSet;

use Halfpastfour\PHPChartJS\DataSet;

/**
 * Class RadarDataSet
 * @package Halfpastfour\PHPChartJS\DataSet
 */
class RadarDataSet extends DataSet
{
	/**
	 * @var bool
	 */
	private $fill;

	/**
	 * @var int
	 */
	private $lineTension;

	/**
	 * @var string
	 */
	private $borderCapStyle;

	/**
	 * @var int[]
	 */
	private $borderDash;

	/**
	 * @var int
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
	private $hitRadius;

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
	 * @var string|string[]
	 */
	private $pointStyle;

	/**
	 * @return boolean
	 */
	public function isFill()
	{
		return $this->fill;
	}

	/**
	 * @param boolean $fill
	 *
	 * @return $this
	 */
	public function setFill( $fill )
	{
		$this->fill = $fill;

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
	 * @param int $lineTension
	 *
	 * @return $this
	 */
	public function setLineTension( $lineTension )
	{
		$this->lineTension = $lineTension;

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
	 * @return \int[]
	 */
	public function getBorderDash()
	{
		return $this->borderDash;
	}

	/**
	 * @param \int[] $borderDash
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
	 * @param int $borderDashOffset
	 *
	 * @return $this
	 */
	public function setBorderDashOffset( $borderDashOffset )
	{
		$this->borderDashOffset = $borderDashOffset;

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
	public function getHitRadius()
	{
		return $this->hitRadius;
	}

	/**
	 * @param int|\int[] $hitRadius
	 *
	 * @return $this
	 */
	public function setHitRadius( $hitRadius )
	{
		$this->hitRadius = $hitRadius;

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
	 * @return string|\string[]
	 */
	public function getPointStyle()
	{
		return $this->pointStyle;
	}

	/**
	 * @param string|\string[] $pointStyle
	 *
	 * @return $this
	 */
	public function setPointStyle( $pointStyle )
	{
		$this->pointStyle = $pointStyle;

		return $this;
	}

	/**
	 * @return array
	 */
	public function getArrayCopy()
	{
		$data = parent::getArrayCopy();

		if( !is_null( $this->fill ) ) $data['fill'] = $this->isFill();
		if( !is_null( $this->lineTension ) ) $data['lineTension'] = $this->getLineTension();
		if( !is_null( $this->borderCapStyle ) ) $data['borderCapStyle'] = $this->getBorderCapStyle();
		if( !is_null( $this->borderDash ) ) $data['borderDash'] = $this->getBorderDash();
		if( !is_null( $this->borderDashOffset ) ) $data['borderDashOffset'] = $this->getBorderDashOffset();
		if( !is_null( $this->borderJoinStyle ) ) $data['borderJoinStyle'] = $this->getBorderJoinStyle();
		if( !is_null( $this->pointBackgroundColor ) ) $data['pointBackgroundColor'] = $this->getPointBackgroundColor();
		if( !is_null( $this->pointBorderWidth ) ) $data['pointBorderWidth'] = $this->getPointBorderWidth();
		if( !is_null( $this->pointRadius ) ) $data['pointRadius'] = $this->getPointRadius();
		if( !is_null( $this->pointHoverRadius ) ) $data['pointHoverRadius'] = $this->getPointHoverRadius();
		if( !is_null( $this->hitRadius ) ) $data['hitRadius'] = $this->getHitRadius();
		if( !is_null( $this->pointHoverBackgroundColor ) )
			$data['pointHoverBackgroundColor'] = $this->getPointHoverBackgroundColor();
		if( !is_null( $this->pointHoverBorderColor ) )
			$data['pointHoverBorderColor'] = $this->getPointHoverBorderColor();
		if( !is_null( $this->pointHoverBorderWidth ) )
			$data['pointHoverBorderWidth'] = $this->getPointHoverBorderWidth();
		if( !is_null( $this->pointStyle ) ) $data['pointStyle'] = $this->getPointStyle();

		return $data;
	}
}