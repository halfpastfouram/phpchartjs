<?php

namespace Halfpastfour\PHPChartJS\Options\Scales;

use Halfpastfour\PHPChartJS\Options\Scale;
use Zend\Json\Json;

/**
 * Class XAxis
 * @package Halfpastfour\PHPChartJS\Options\Scales
 */
class XAxis extends Scale
{
	/**
	 * @var float
	 */
	private $categoryPercentage;

	/**
	 * @var float
	 */
	private $barPercentage;

	/**
	 * @return float
	 */
	public function getCategoryPercentage()
	{
		return $this->categoryPercentage;
	}

	/**
	 * @param float $categoryPercentage
	 *
	 * @return $this
	 */
	public function setCategoryPercentage( $categoryPercentage )
	{
		$this->categoryPercentage = floatval( $categoryPercentage );

		return $this;
	}

	/**
	 * @return float
	 */
	public function getBarPercentage()
	{
		return $this->barPercentage;
	}

	/**
	 * @param float $barPercentage
	 *
	 * @return $this
	 */
	public function setBarPercentage( $barPercentage )
	{
		$this->barPercentage = floatval( $barPercentage );

		return $this;
	}

	/**
	 * @return array
	 */
	public function getArrayCopy()
	{
		$data	= parent::getArrayCopy();

		if( !is_null( $this->type ) ) $data['type'] = $this->getType();
		if( !is_null( $this->display ) ) $data['display'] = $this->isDisplay();
		if( !is_null( $this->id ) ) $data['id'] = $this->getId();
		if( !is_null( $this->stacked ) ) $data['stacked'] = $this->isStacked();
		if( !is_null( $this->barThickness ) ) $data['barThickness'] = $this->getBarThickness();
		if( !is_null( $this->categoryPercentage ) ) $data['categoryPercentage'] = $this->getCategoryPercentage();
		if( !is_null( $this->barPercentage ) ) $data['barPercentage'] = $this->getBarPercentage();
		if( !is_null( $this->position ) ) $data['position'] = $this->getPosition();

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