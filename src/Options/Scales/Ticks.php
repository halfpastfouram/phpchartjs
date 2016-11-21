<?php

namespace Halfpastfour\PHPChartJS\Options\Scales;

use Halfpastfour\PHPChartJS\ArraySerializable;
use Zend\Json\Expr;
use Zend\Json\Json;

/**
 * Class Ticks
 * @package Halfpastfour\PHPChartJS\Options\Scales
 */
class Ticks implements ArraySerializable, \JsonSerializable
{
	/**
	 * @var float
	 */
	private $suggestedMin;

	/**
	 * @var bool
	 */
	private $beginAtZero;

	/**
	 * @var float
	 */
	private $stepSize;

	/**
	 * @var bool
	 */
	private $autoSkip;

	/**
	 * @var int
	 */
	private $autoSkipPadding;

	/**
	 * @var Expr
	 */
	private $callback;

	/**
	 * @var bool
	 */
	private $display;

	/**
	 * @var string
	 */
	private $fontColor;

	/**
	 * @var string
	 */
	private $fontFamily;

	/**
	 * @var int
	 */
	private $fontSize;

	/**
	 * @var string
	 */
	private $fontStyle;

	/**
	 * @var int
	 */
	private $labelOffset;

	/**
	 * @var int
	 */
	private $maxRotation;

	/**
	 * @var int
	 */
	private $minRotation;

	/**
	 * @var bool
	 */
	private $mirror;

	/**
	 * @var int
	 */
	private $padding;

	/**
	 * @var bool
	 */
	private $reverse;

	/**
	 * @return float
	 */
	public function getSuggestedMin()
	{
		return $this->suggestedMin;
	}

	/**
	 * @param float $suggestedMin
	 *
	 * @return $this
	 */
	public function setSuggestedMin( $suggestedMin )
	{
		$this->suggestedMin = floatval( $suggestedMin );

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isBeginAtZero()
	{
		return $this->beginAtZero;
	}

	/**
	 * @param boolean $beginAtZero
	 *
	 * @return $this
	 */
	public function setBeginAtZero( $beginAtZero )
	{
		$this->beginAtZero = floatval( $beginAtZero );

		return $this;
	}

	/**
	 * @return float
	 */
	public function getStepSize()
	{
		return $this->stepSize;
	}

	/**
	 * @param float $stepSize
	 *
	 * @return $this
	 */
	public function setStepSize( $stepSize )
	{
		$this->stepSize = floatval( $stepSize );

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isAutoSkip()
	{
		return $this->autoSkip;
	}

	/**
	 * @param boolean $autoSkip
	 *
	 * @return $this
	 */
	public function setAutoSkip( $autoSkip )
	{
		$this->autoSkip = !!$autoSkip;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getAutoSkipPadding()
	{
		return $this->autoSkipPadding;
	}

	/**
	 * @param int $autoSkipPadding
	 *
	 * @return $this
	 */
	public function setAutoSkipPadding( $autoSkipPadding )
	{
		$this->autoSkipPadding = intval( $autoSkipPadding );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getCallback()
	{
		return strval( $this->callback );
	}

	/**
	 * @param string $callback
	 *
	 * @return $this
	 */
	public function setCallback( $callback )
	{
		$this->callback = new Expr( strval( $callback ) );

		return $this;
	}

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
		$this->display = !!$display;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getFontColor()
	{
		return $this->fontColor;
	}

	/**
	 * @param string $fontColor
	 *
	 * @return $this
	 */
	public function setFontColor( $fontColor )
	{
		$this->fontColor = strval( $fontColor );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getFontFamily()
	{
		return $this->fontFamily;
	}

	/**
	 * @param string $fontFamily
	 *
	 * @return $this
	 */
	public function setFontFamily( $fontFamily )
	{
		$this->fontFamily = strval( $fontFamily );

		return $this;
	}

	/**
	 * @return int
	 */
	public function getFontSize()
	{
		return $this->fontSize;
	}

	/**
	 * @param int $fontSize
	 *
	 * @return $this
	 */
	public function setFontSize( $fontSize )
	{
		$this->fontSize = intval( $fontSize );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getFontStyle()
	{
		return $this->fontStyle;
	}

	/**
	 * @param string $fontStyle
	 *
	 * @return $this
	 */
	public function setFontStyle( $fontStyle )
	{
		$this->fontStyle = strval( $fontStyle );

		return $this;
	}

	/**
	 * @return int
	 */
	public function getLabelOffset()
	{
		return $this->labelOffset;
	}

	/**
	 * @param int $labelOffset
	 *
	 * @return $this
	 */
	public function setLabelOffset( $labelOffset )
	{
		$this->labelOffset = intval( $labelOffset );

		return $this;
	}

	/**
	 * @return int
	 */
	public function getMaxRotation()
	{
		return $this->maxRotation;
	}

	/**
	 * @param int $maxRotation
	 *
	 * @return $this
	 */
	public function setMaxRotation( $maxRotation )
	{
		$this->maxRotation = intval( $maxRotation );

		return $this;
	}

	/**
	 * @return int
	 */
	public function getMinRotation()
	{
		return $this->minRotation;
	}

	/**
	 * @param int $minRotation
	 *
	 * @return $this
	 */
	public function setMinRotation( $minRotation )
	{
		$this->minRotation = intval( $minRotation );

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isMirror()
	{
		return $this->mirror;
	}

	/**
	 * @param boolean $mirror
	 *
	 * @return $this
	 */
	public function setMirror( $mirror )
	{
		$this->mirror = !!$mirror;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getPadding()
	{
		return $this->padding;
	}

	/**
	 * @param int $padding
	 *
	 * @return $this
	 */
	public function setPadding( $padding )
	{
		$this->padding = intval( $padding );

		return $this;
	}

	/**
	 * @return bool
	 */
	public function isReverse()
	{
		return $this->reverse;
	}

	/**
	 * @param bool $reverse
	 *
	 * @return $this
	 */
	public function setReverse( $reverse )
	{
		$this->reverse = !!$reverse;

		return $this;
	}

	/**
	 * @return array
	 */
	public function getArrayCopy()
	{
		$data	= array();

		if( !is_null( $this->suggestedMin ) ) $data['suggestedMin'] = $this->getSuggestedMin();
		if( !is_null( $this->beginAtZero ) ) $data['beginAtZero'] = $this->isBeginAtZero();
		if( !is_null( $this->stepSize ) ) $data['stepSize'] = $this->getStepSize();
		if( !is_null( $this->autoSkip ) ) $data['autoSkip'] = $this->isAutoSkip();
		if( !is_null( $this->autoSkipPadding ) ) $data['autoSkipPadding'] = $this->getAutoSkipPadding();
		if( !is_null( $this->callback ) ) $data['callback'] = $this->getCallback();
		if( !is_null( $this->display ) ) $data['display'] = $this->isDisplay();
		if( !is_null( $this->fontColor ) ) $data['fontColor'] = $this->getFontColor();
		if( !is_null( $this->fontFamily ) ) $data['fontFamily'] = $this->getFontFamily();
		if( !is_null( $this->fontSize ) ) $data['fontSize'] = $this->getFontSize();
		if( !is_null( $this->fontStyle ) ) $data['fontStyle'] = $this->getFontStyle();
		if( !is_null( $this->labelOffset ) ) $data['labelOffset'] = $this->getLabelOffset();
		if( !is_null( $this->maxRotation ) ) $data['maxRotation'] = $this->getMaxRotation();
		if( !is_null( $this->minRotation ) ) $data['minRotation'] = $this->getMinRotation();
		if( !is_null( $this->mirror ) ) $data['mirror'] = $this->isMirror();
		if( !is_null( $this->padding ) ) $data['padding'] = $this->getPadding();
		if( !is_null( $this->reverse ) ) $data['reverse'] = $this->isReverse();

		return $data;
	}

	/**
	 * @return string
	 */
	public function jsonSerialize()
	{
		return Json::encode( $this->getArrayCopy(), false, array( 'enableJsonExprFinder' => true ) );
	}
}