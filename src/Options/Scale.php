<?php

namespace Halfpastfour\PHPChartJS\Options;

use Halfpastfour\PHPChartJS\ArraySerializable;
use Halfpastfour\PHPChartJS\Options\Scales\GridLines;
use Halfpastfour\PHPChartJS\Options\Scales\ScaleLabel;
use Halfpastfour\PHPChartJS\Options\Scales\Ticks;

/**
 * Class Scale
 * @package Halfpastfour\PHPChartJS\Options
 */
abstract class Scale implements ArraySerializable, \JsonSerializable
{
	/**
	 * @var string
	 */
	protected $type;

	/**
	 * @var bool
	 */
	protected $display;

	/**
	 * @var string
	 */
	protected $id;

	/**
	 * @var bool
	 */
	protected $stacked;

	/**
	 * @var int
	 */
	protected $barThickness;

	/**
	 * @var string
	 */
	protected $position;

	/**
	 * @var string
	 */
	protected $beforeUpdate;

	/**
	 * @var string
	 */
	protected $beforeSetDimensions;

	/**
	 * @var string
	 */
	protected $afterSetDimensions;

	/**
	 * @var string
	 */
	protected $beforeDataLimits;

	/**
	 * @var string
	 */
	protected $afterDataLimits;

	/**
	 * @var string
	 */
	protected $beforeBuildTicks;

	/**
	 * @var string
	 */
	protected $afterBuildTicks;

	/**
	 * @var string
	 */
	protected $beforeTickToLabelConversion;

	/**
	 * @var string
	 */
	protected $afterTickToLabelConversion;

	/**
	 * @var string
	 */
	protected $beforeCalculateTickRotation;

	/**
	 * @var string
	 */
	protected $afterCalculateTickRotation;

	/**
	 * @var string
	 */
	protected $beforeFit;

	/**
	 * @var string
	 */
	protected $afterFit;

	/**
	 * @var string
	 */
	protected $afterUpdate;

	/**
	 * @var GridLines
	 */
	protected $gridLines;

	/**
	 * @var ScaleLabel
	 */
	protected $scaleLabel;

	/**
	 * @var Ticks
	 */
	protected $ticks;


	/**
	 * @return string
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param string $type
	 *
	 * @return $this
	 */
	public function setType( $type )
	{
		$this->type = $type;

		return $this;
	}

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
		$this->display = $display;

		return $this;
	}

	/**
	 * @return string
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param string $id
	 *
	 * @return $this
	 */
	public function setId( $id )
	{
		$this->id = strval( $id );

		return $this;
	}

	/**
	 * @return boolean
	 */
	public function isStacked()
	{
		return $this->stacked;
	}

	/**
	 * @param boolean $stacked
	 *
	 * @return $this
	 */
	public function setStacked( $stacked )
	{
		$this->stacked = !!$stacked;

		return $this;
	}

	/**
	 * @return int
	 */
	public function getBarThickness()
	{
		return $this->barThickness;
	}

	/**
	 * @param int $barThickness
	 *
	 * @return $this
	 */
	public function setBarThickness( $barThickness )
	{
		$this->barThickness = intval( $barThickness );

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
	 * @return string
	 */
	public function getBeforeUpdate()
	{
		return $this->beforeUpdate;
	}

	/**
	 * @param string $beforeUpdate
	 *
	 * @return $this
	 */
	public function setBeforeUpdate( $beforeUpdate )
	{
		$this->beforeUpdate = strval( $beforeUpdate );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getBeforeSetDimensions()
	{
		return $this->beforeSetDimensions;
	}

	/**
	 * @param string $beforeSetDimensions
	 *
	 * @return $this
	 */
	public function setBeforeSetDimensions( $beforeSetDimensions )
	{
		$this->beforeSetDimensions = strval( $beforeSetDimensions );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getAfterSetDimensions()
	{
		return $this->afterSetDimensions;
	}

	/**
	 * @param string $afterSetDimensions
	 *
	 * @return $this
	 */
	public function setAfterSetDimensions( $afterSetDimensions )
	{
		$this->afterSetDimensions = strval( $afterSetDimensions );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getBeforeDataLimits()
	{
		return $this->beforeDataLimits;
	}

	/**
	 * @param string $beforeDataLimits
	 *
	 * @return $this
	 */
	public function setBeforeDataLimits( $beforeDataLimits )
	{
		$this->beforeDataLimits = strval( $beforeDataLimits );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getAfterDataLimits()
	{
		return $this->afterDataLimits;
	}

	/**
	 * @param string $afterDataLimits
	 *
	 * @return $this
	 */
	public function setAfterDataLimits( $afterDataLimits )
	{
		$this->afterDataLimits = strval( $afterDataLimits );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getBeforeBuildTicks()
	{
		return $this->beforeBuildTicks;
	}

	/**
	 * @param string $beforeBuildTicks
	 *
	 * @return $this
	 */
	public function setBeforeBuildTicks( $beforeBuildTicks )
	{
		$this->beforeBuildTicks = strval( $beforeBuildTicks );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getAfterBuildTicks()
	{
		return $this->afterBuildTicks;
	}

	/**
	 * @param string $afterBuildTicks
	 *
	 * @return $this
	 */
	public function setAfterBuildTicks( $afterBuildTicks )
	{
		$this->afterBuildTicks = strval( $afterBuildTicks );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getBeforeTickToLabelConversion()
	{
		return $this->beforeTickToLabelConversion;
	}

	/**
	 * @param string $beforeTickToLabelConversion
	 *
	 * @return $this
	 */
	public function setBeforeTickToLabelConversion( $beforeTickToLabelConversion )
	{
		$this->beforeTickToLabelConversion = strval( $beforeTickToLabelConversion );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getAfterTickToLabelConversion()
	{
		return $this->afterTickToLabelConversion;
	}

	/**
	 * @param string $afterTickToLabelConversion
	 *
	 * @return $this
	 */
	public function setAfterTickToLabelConversion( $afterTickToLabelConversion )
	{
		$this->afterTickToLabelConversion = strval( $afterTickToLabelConversion );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getBeforeCalculateTickRotation()
	{
		return $this->beforeCalculateTickRotation;
	}

	/**
	 * @param string $beforeCalculateTickRotation
	 *
	 * @return $this
	 */
	public function setBeforeCalculateTickRotation( $beforeCalculateTickRotation )
	{
		$this->beforeCalculateTickRotation = strval( $beforeCalculateTickRotation );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getAfterCalculateTickRotation()
	{
		return $this->afterCalculateTickRotation;
	}

	/**
	 * @param string $afterCalculateTickRotation
	 *
	 * @return $this
	 */
	public function setAfterCalculateTickRotation( $afterCalculateTickRotation )
	{
		$this->afterCalculateTickRotation = strval( $afterCalculateTickRotation );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getBeforeFit()
	{
		return $this->beforeFit;
	}

	/**
	 * @param string $beforeFit
	 *
	 * @return $this
	 */
	public function setBeforeFit( $beforeFit )
	{
		$this->beforeFit = strval( $beforeFit );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getAfterFit()
	{
		return $this->afterFit;
	}

	/**
	 * @param string $afterFit
	 *
	 * @return $this
	 */
	public function setAfterFit( $afterFit )
	{
		$this->afterFit = strval( $afterFit );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getAfterUpdate()
	{
		return $this->afterUpdate;
	}

	/**
	 * @param string $afterUpdate
	 *
	 * @return $this
	 */
	public function setAfterUpdate( $afterUpdate )
	{
		$this->afterUpdate = strval( $afterUpdate );

		return $this;
	}

	/**
	 * @return GridLines
	 */
	public function gridLines()
	{
		if( is_null( $this->gridLines ) ) {
			$this->gridLines	= new GridLines();
		}

		return $this->gridLines;
	}

	/**
	 * @return ScaleLabel
	 */
	public function scaleLabel()
	{
		if( is_null( $this->scaleLabel ) ) {
			$this->scaleLabel	= new ScaleLabel();
		}

		return $this->scaleLabel;
	}

	/**
	 * @return Ticks
	 */
	public function ticks()
	{
		if( is_null( $this->ticks ) ) {
			$this->ticks	= new Ticks();
		}

		return $this->ticks;
	}

	/**
	 * @return array
	 */
	public function getArrayCopy()
	{
		$data	= array();

		if( !is_null( $this->type ) ) $data['type'] = $this->getType();
		if( !is_null( $this->display ) ) $data['display'] = $this->isDisplay();
		if( !is_null( $this->id ) ) $data['id'] = $this->getId();
		if( !is_null( $this->stacked ) ) $data['stacked'] = $this->isStacked();
		if( !is_null( $this->barThickness ) ) $data['barThickness'] = $this->getBarThickness();
		if( !is_null( $this->position ) ) $data['position'] = $this->getPosition();
		if( !is_null( $this->gridLines ) ) $data['gridLines'] = $this->gridLines()->getArrayCopy();
		if( !is_null( $this->beforeUpdate ) ) $data['beforeUpdate'] = $this->getBeforeUpdate();
		if( !is_null( $this->afterUpdate ) ) $data['afterUpdate'] = $this->getAfterUpdate();
		if( !is_null( $this->beforeSetDimensions ) ) $data['beforeSetDimensions'] = $this->getBeforeSetDimensions();
		if( !is_null( $this->afterSetDimensions ) ) $data['afterSetDimensions'] = $this->getAfterSetDimensions();
		if( !is_null( $this->beforeDataLimits ) ) $data['beforeDataLimits'] = $this->getBeforeDataLimits();
		if( !is_null( $this->afterDataLimits ) ) $data['afterDataLimits'] = $this->getAfterDataLimits();
		if( !is_null( $this->beforeBuildTicks ) ) $data['beforeBuildTicks'] = $this->getBeforeBuildTicks();
		if( !is_null( $this->afterBuildTicks ) ) $data['afterBuildTicks'] = $this->getAfterBuildTicks();
		if( !is_null( $this->beforeTickToLabelConversion ) )
			$data['beforeTickToLabelConversion'] = $this->getBeforeTickToLabelConversion();
		if( !is_null( $this->afterTickToLabelConversion ) )
			$data['afterTickToLabelConversion'] = $this->getAfterTickToLabelConversion();
		if( !is_null( $this->beforeCalculateTickRotation ) )
			$data['beforeCalculateTickRotation'] = $this->getBeforeCalculateTickRotation();
		if( !is_null( $this->afterCalculateTickRotation ) )
			$data['afterCalculateTickRotation'] = $this->getAfterCalculateTickRotation();
		if( !is_null( $this->beforeFit ) ) $data['beforeFit'] = $this->getBeforeFit();
		if( !is_null( $this->afterFit ) ) $data['afterFit'] = $this->getAfterFit();
		if( !is_null( $this->gridLines) ) $data['gridLines']	= $this->gridLines()->getArrayCopy();
		if( !is_null( $this->scaleLabel ) ) $data['scaleLabel']	= $this->scaleLabel()->getArrayCopy();
		if( !is_null( $this->ticks ) ) $data['ticks']	= $this->ticks()->getArrayCopy();

		return $data;
	}

	/**
	 * @return string
	 */
	public function jsonSerialize()
	{
		return json_encode( $this->getArrayCopy() );
	}
}