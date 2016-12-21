<?php

namespace Halfpastfour\PHPChartJS\Options\Tooltips;

use Halfpastfour\PHPChartJS\ArraySerializableInterface;
use Halfpastfour\PHPChartJS\Delegate\ArraySerializable;
use Zend\Json\Expr;
use Zend\Json\Json;

/**
 * Class Callbacks
 * @package Halfpastfour\PHPChartJS\Tooltips
 */
class Callbacks implements ArraySerializableInterface, \JsonSerializable
{
	use ArraySerializable;

	/**
	 * @var Expr
	 */
	private $beforeTitle;

	/**
	 * @var Expr
	 */
	private $title;

	/**
	 * @var Expr
	 */
	private $afterTitle;

	/**
	 * @var Expr
	 */
	private $beforeLabel;

	/**
	 * @var Expr
	 */
	private $label;

	/**
	 * @var Expr
	 */
	private $labelColor;

	/**
	 * @var Expr
	 */
	private $afterLabel;

	/**
	 * @var Expr
	 */
	private $afterBody;

	/**
	 * @var Expr
	 */
	private $beforeFooter;

	/**
	 * @var Expr
	 */
	private $footer;

	/**
	 * @var Expr
	 */
	private $afterFooter;

	/**
	 * @var Expr
	 */
	private $dataPoints;

	/**
	 * @return null|string
	 */
	public function getBeforeTitle()
	{
		return is_null( $this->beforeTitle ) ? null : strval( $this->beforeTitle );
	}

	/**
	 * @param string $beforeTitle
	 *
	 * @return $this
	 */
	public function setBeforeTitle( $beforeTitle )
	{
		$this->beforeTitle = new Expr( strval( $beforeTitle ) );

		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getTitle()
	{
		return is_null( $this->title ) ? null : strval( $this->title );
	}

	/**
	 * @param string $title
	 *
	 * @return $this
	 */
	public function setTitle( $title )
	{
		$this->title = new Expr( strval( $title ) );

		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getAfterTitle()
	{
		return is_null( $this->afterTitle ) ? null : strval( $this->afterTitle );
	}

	/**
	 * @param string $afterTitle
	 *
	 * @return $this
	 */
	public function setAfterTitle( $afterTitle )
	{
		$this->afterTitle = new Expr( strval( $afterTitle ) );

		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getBeforeLabel()
	{
		return is_null( $this->beforeLabel ) ? null : strval( $this->beforeLabel );
	}

	/**
	 * @param string $beforeLabel
	 *
	 * @return $this
	 */
	public function setBeforeLabel( $beforeLabel )
	{
		$this->beforeLabel = new Expr( strval( $beforeLabel ) );

		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getLabel()
	{
		return is_null( $this->label ) ? null : strval( $this->label );
	}

	/**
	 * @param string $label
	 *
	 * @return $this
	 */
	public function setLabel( $label )
	{
		$this->label = new Expr( strval( $label ) );

		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getLabelColor()
	{
		return is_null( $this->labelColor ) ? null : strval( $this->labelColor );
	}

	/**
	 * @param string $labelColor
	 *
	 * @return $this
	 */
	public function setLabelColor( $labelColor )
	{
		$this->labelColor = new Expr( strval( $labelColor ) );

		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getAfterLabel()
	{
		return is_null( $this->afterLabel ) ? null : strval( $this->afterLabel );
	}

	/**
	 * @param string $afterLabel
	 *
	 * @return $this
	 */
	public function setAfterLabel( $afterLabel )
	{
		$this->afterLabel = new Expr( strval( $afterLabel ) );

		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getAfterBody()
	{
		return is_null( $this->afterBody ) ? null : strval( $this->afterBody );
	}

	/**
	 * @param string $afterBody
	 *
	 * @return $this
	 */
	public function setAfterBody( $afterBody )
	{
		$this->afterBody = new Expr( strval( $afterBody ) );

		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getBeforeFooter()
	{
		return is_null( $this->beforeFooter ) ? null : strval( $this->beforeFooter );
	}

	/**
	 * @param string $beforeFooter
	 *
	 * @return $this
	 */
	public function setBeforeFooter( $beforeFooter )
	{
		$this->beforeFooter = new Expr( strval( $beforeFooter ) );

		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getFooter()
	{
		return is_null( $this->footer ) ? null : strval( $this->footer );
	}

	/**
	 * @param string $footer
	 *
	 * @return $this
	 */
	public function setFooter( $footer )
	{
		$this->footer = new Expr( strval( $footer ) );

		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getAfterFooter()
	{
		return is_null( $this->afterFooter ) ? null : strval( $this->afterFooter );
	}

	/**
	 * @param string $afterFooter
	 *
	 * @return $this
	 */
	public function setAfterFooter( $afterFooter )
	{
		$this->afterFooter = new Expr( strval( $afterFooter ) );

		return $this;
	}

	/**
	 * @return null|string
	 */
	public function getDataPoints()
	{
		return is_null( $this->dataPoints ) ? null : strval( $this->dataPoints );
	}

	/**
	 * @param string $dataPoints
	 *
	 * @return $this
	 */
	public function setDataPoints( $dataPoints )
	{
		$this->dataPoints = new Expr( strval( $dataPoints ) );

		return $this;
	}

	/**
	 * @return string
	 */
	public function jsonSerialize()
	{
		return Json::encode( $this->getArrayCopy() );
	}
}