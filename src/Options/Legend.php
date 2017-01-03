<?php

namespace Halfpastfour\PHPChartJS\Options;

use Halfpastfour\PHPChartJS\ArraySerializableInterface;
use Halfpastfour\PHPChartJS\Delegate\ArraySerializable;
use Halfpastfour\PHPChartJS\LabelsCollection;
use Zend\Json\Expr;
use Zend\Json\Json;

/**
 * Class Legend
 * @package Halfpastfour\PHPChartJS\Options
 */
class Legend implements ArraySerializableInterface, \JsonSerializable
{
	use ArraySerializable;

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
	 * @return Expr
	 */
	public function getOnClick()
	{
		return $this->onClick;
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
	 * @return Expr
	 */
	public function getOnHover()
	{
		return $this->onHover;
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
		if( is_null( $this->labels ) ) {
			$this->labels = new LabelsCollection();
		}

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
	 * @return string
	 */
	public function jsonSerialize()
	{
		return Json::encode( $this->getArrayCopy(), false, [ 'enableJsonExprFinder' => true ] );
	}
}