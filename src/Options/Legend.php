<?php

namespace Halfpastfour\PHPChartJS\Options;

use Halfpastfour\PHPChartJS\ArraySerializable;
use Halfpastfour\PHPChartJS\LabelsCollection;
use Zend\Json\Expr;
use Zend\Json\Json;

/**
 * Class Legend
 * @package Halfpastfour\PHPChartJS\Options
 */
class Legend implements ArraySerializable, \JsonSerializable
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
	 * @var Expr
	 */
	private $onClick;

	/**
	 * @var Expr
	 */
	private $onHover;

	/**
	 * @var LabelsCollection
	 */
	private $labels;

	/**
	 * @var bool
	 */
	private $reverse;

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
	 * @return string
	 */
	public function getOnClick()
	{
		return strval( $this->onClick );
	}

	/**
	 * @param string $onClick
	 *
	 * @return $this
	 */
	public function setOnClick( $onClick )
	{
		$this->onClick = new Expr( strval( $onClick ) );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getOnHover()
	{
		return strval( $this->onHover );
	}

	/**
	 * @param string $onHover
	 *
	 * @return $this
	 */
	public function setOnHover( $onHover )
	{
		$this->onHover = new Expr( strval( $onHover ) );

		return $this;
	}

	/**
	 * @return LabelsCollection
	 */
	public function labels()
	{

		return $this->labels;
	}

	/**
	 * @return boolean
	 */
	public function isReverse()
	{
		return $this->reverse;
	}

	/**
	 * @param boolean $reverse
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
		$data	= [];

		if( !is_null( $this->display ) ) $data['display'] = $this->isDisplay();
		if( !is_null( $this->position ) ) $data['position'] = $this->getPosition();
		if( !is_null( $this->fullWidth ) ) $data['fullWidth'] = $this->isFullWidth();
		if( !is_null( $this->onClick ) ) $data['onClick'] = $this->getOnClick();
		if( !is_null( $this->onHover) ) $data['onHover'] = $this->getOnHover();
		if( !is_null( $this->labels ) ) $data['labels'] = $this->labels()->getArrayCopy();
		if( !is_null( $this->reverse ) ) $data['reverse'] = $this->isReverse();

		return $data;
	}

	/**
	 * @return string
	 */
	public function jsonSerialize()
	{
		return Json::encode( $this->getArrayCopy(), false, [ 'enableJsonExprFinder' => true ] );
	}
}