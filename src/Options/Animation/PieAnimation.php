<?php

namespace Halfpastfour\PHPChartJS\Options\Animation;

use Halfpastfour\PHPChartJS\Options\Animation;

class PieAnimation extends Animation
{
	/**
	 * @var bool
	 */
	private $animateRotate;

	/**
	 * @var bool
	 */
	private $animateScale;

	/**
	 * @return boolean
	 */
	public function isAnimateRotate()
	{
		return $this->animateRotate;
	}

	/**
	 * @param boolean $animateRotate
	 *
	 * @return PieAnimation
	 */
	public function setAnimateRotate( $animateRotate )
	{
		$this->animateRotate = $animateRotate;

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isAnimateScale()
	{
		return $this->animateScale;
	}

	/**
	 * @param boolean $animateScale
	 *
	 * @return PieAnimation
	 */
	public function setAnimateScale( $animateScale )
	{
		$this->animateScale = $animateScale;

		return $this;
	}

	/**
	 * @return array
	 */
	public function getArrayCopy()
	{
		$data	= parent::getArrayCopy();

		if( !is_null( $this->animateRotate ) ) $data['animateRotate'] = $this->isAnimateRotate();
		if( !is_null( $this->animateScale ) ) $data['animateScale'] = $this->isAnimateScale();

		return $data;
	}
}