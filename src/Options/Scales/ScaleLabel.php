<?php

namespace Halfpastfour\PHPChartJS\Options\Scales;

use Halfpastfour\PHPChartJS\ArraySerializable;
use Zend\Json\Json;

/**
 * Class ScaleLabel
 * @package Halfpastfour\PHPChartJS\Options\Scales
 */
class ScaleLabel implements ArraySerializable, \JsonSerializable
{
	/**
	 * @var bool
	 */
	private $display;

	/**
	 * @var string
	 */
	private $labelString;

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
	public function getLabelString()
	{
		return $this->labelString;
	}

	/**
	 * @param string $labelString
	 *
	 * @return $this
	 */
	public function setLabelString( $labelString )
	{
		$this->labelString = strval( $labelString );

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
	 * @return array
	 */
	public function getArrayCopy()
	{
		$data	= [];

		if( !is_null( $this->display ) ) $data['display'] = $this->isDisplay();
		if( !is_null( $this->labelString ) ) $data['labelString'] = $this->getLabelString();
		if( !is_null( $this->fontColor ) ) $data['fontColor'] = $this->getFontColor();
		if( !is_null( $this->fontFamily ) ) $data['fontFamily'] = $this->getFontFamily();
		if( !is_null( $this->fontSize ) ) $data['fontSize'] = $this->getFontSize();
		if( !is_null( $this->fontStyle ) ) $data['fontStyle'] = $this->getFontStyle();

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