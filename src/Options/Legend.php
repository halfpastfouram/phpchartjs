<?php

namespace Halfpastfour\PHPChartJS\Options;

use Halfpastfour\PHPChartJS\ArraySerializable;
use Zend\Json\Json;

/**
 * Class Legend
 * @package Halfpastfour\PHPChartJS\Options
 */
class Legend implements ArraySerializable, \JsonSerializable
{
	/**
	 * @var string
	 */
	private $onClick;

	/**
	 * @return string
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
		$this->onClick = strval( $onClick );

		return $this;
	}

	/**
	 * @return array
	 */
	public function getArrayCopy()
	{
		$data	= array();

		if( !is_null( $this->onClick ) ) $data['onClick'] = $this->getOnClick();

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