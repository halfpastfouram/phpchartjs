<?php

namespace Halfpastfour\PHPChartJS\Options;

use Halfpastfour\PHPChartJS\ArraySerializableInterface;
use Halfpastfour\PHPChartJS\Delegate\ArraySerializable;
use Halfpastfour\PHPChartJS\Options\Layout\Padding;
use Zend\Json\Json;

/**
 * Class Layout
 * @package Halfpastfour\PHPChartJS\Options
 */
class Layout implements ArraySerializableInterface, \JsonSerializable
{
	use ArraySerializable;

	/**
	 * @var int|Padding
	 */
	private $padding;

	/**
	 * @param int $padding
	 */
	public function setPadding( $padding )
	{
		$this->padding = intval( $padding );
	}

	/**
	 * @return int
	 */
	public function getPadding()
	{
		return $this->padding ? intval( $this->padding ) : null;
	}

	/**
	 * @return Padding
	 */
	public function padding()
	{
		if( is_null( $this->padding ) ) {
			$this->padding	= new Padding();
		}

		return $this->padding;
	}

	/**
	 * @return string
	 */
	public function jsonSerialize()
	{
		return Json::encode( $this->getArrayCopy() );
	}
}