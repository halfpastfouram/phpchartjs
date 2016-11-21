<?php

namespace Halfpastfour\PHPChartJS\Options;

use Halfpastfour\PHPChartJS\ArraySerializable;
use Zend\Json\Json;

/**
 * Class LineOptions
 * @package Halfpastfour\PHPChartJS\Options
 */
class Title implements ArraySerializable, \JsonSerializable
{
	/**
	 * @var bool
	 */
	private $display;

	/**
	 * @var string
	 */
	private $position;

	/**
	 * @var bool
	 */
	private $fullWidth;

	/**
	 * @var int
	 */
	private $fontSize;

	/**
	 * @var string
	 */
	private $fontFamily;

	/**
	 * @var string
	 */
	private $fontColor;

	/**
	 * @var string
	 */
	private $fontStyle;

	/**
	 * @var int
	 */
	private $padding;

	/**
	 * @var string
	 */
	private $text;

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
	public function getPosition()
	{
		return $this->position;
	}

	/**
	 * @param string $position
	 *
	 * @return $this
	 */
	public function setPosition( $position )
	{
		$this->position = strval( $position );

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isFullWidth()
	{
		return $this->fullWidth;
	}

	/**
	 * @param boolean $fullWidth
	 *
	 * @return $this
	 */
	public function setFullWidth( $fullWidth )
	{
		$this->fullWidth = !!$fullWidth;

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
	 * @return string
	 */
	public function getText()
	{
		return $this->text;
	}

	/**
	 * @param string $text
	 *
	 * @return $this
	 */
	public function setText( $text )
	{
		$this->text = strval( $text );

		return $this;
	}

	/**
	 * @return array
	 */
	public function getArrayCopy()
	{
		$data	= array();

		if( !is_null( $this->display ) ) $data['display'] = $this->isDisplay();
		if( !is_null( $this->position ) ) $data['position'] = $this->getPosition();
		if( !is_null( $this->fullWidth ) ) $data['fullWidth'] = $this->isFullWidth();
		if( !is_null( $this->fontSize ) ) $data['fontSize'] = $this->getFontSize();
		if( !is_null( $this->fontFamily ) ) $data['fontFamily'] = $this->getFontFamily();
		if( !is_null( $this->fontColor ) ) $data['fontColor'] = $this->getFontColor();
		if( !is_null( $this->fontStyle ) ) $data['fontStyle'] = $this->getFontStyle();
		if( !is_null( $this->padding ) ) $data['padding'] = $this->getPadding();
		if( !is_null( $this->text ) ) $data['text'] = $this->getText();

		return $data;
	}

	/**
	 * @return string
	 */
	function jsonSerialize()
	{
		return Json::encode( $this->getArrayCopy() );
	}
}