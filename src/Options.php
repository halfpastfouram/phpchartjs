<?php

namespace Halfpastfour\PHPChartJS;

use Halfpastfour\PHPChartJS\Options\Animation;
use Halfpastfour\PHPChartJS\Options\Hover;
use Halfpastfour\PHPChartJS\Options\Legend;
use Halfpastfour\PHPChartJS\Options\Scales;
use Halfpastfour\PHPChartJS\Options\Title;
use Zend\Json\Json;

/**
 * Class Options
 * @package Halfpastfour\PHPChartJS
 */
class Options implements ChartOwnedInterface, ArraySerializable, \JsonSerializable
{
	use ChartOwned;

	/**
	 * @var Title
	 */
	protected $title;

	/**
	 * @var Hover
	 */
	protected $hover;

	/**
	 * @var Scales
	 */
	protected $scales;

	/**
	 * @var Animation
	 */
	protected $animation;

	/**
	 * @var Legend
	 */
	protected $legend;

	/**
	 * @return Title
	 */
	public function title()
	{
		if( is_null( $this->title ) ) {
			$this->title = new Title();
		}

		return $this->title;
	}

	/**
	 * @return Hover
	 */
	public function hover()
	{
		if( is_null( $this->hover ) ) {
			$this->hover = new Hover();
		}

		return $this->hover;
	}

	/**
	 * @return Scales
	 */
	public function scales()
	{
		if( is_null( $this->scales ) ) {
			$this->scales = new Scales();
		}

		return $this->scales;
	}

	/**
	 * @return Animation
	 */
	public function animation()
	{
		if( is_null( $this->animation ) ) {
			$this->animation = new Animation();
		}

		return $this->animation;
	}

	/**
	 * @return Legend
	 */
	public function legend()
	{
		if( is_null( $this->legend ) ) {
			$this->legend = new Legend();
		}

		return $this->legend;
	}

	/**
	 * @return array
	 */
	public function getArrayCopy()
	{
		$data = [];

		if( !is_null( $this->title ) ) $data['title'] = $this->title()->getArrayCopy();
		if( !is_null( $this->hover ) ) $data['hover'] = $this->hover()->getArrayCopy();
		if( !is_null( $this->scales ) ) $data['scales'] = $this->scales()->getArrayCopy();
		if( !is_null( $this->animation ) ) $data['animation'] = $this->animation()->getArrayCopy();
		if( !is_null( $this->legend ) ) $data['legend'] = $this->legend()->getArrayCopy();

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