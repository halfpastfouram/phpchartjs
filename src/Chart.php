<?php

namespace Halfpastfour\PHPChartJS;

/**
 * Class Chart
 * @package Halfpastfour\PHPChartJS
 */
abstract class Chart implements ChartInterface
{
	/**
	 * The internal type of chart.
	 */
	const TYPE	= null;

	/**
	 * The list of models that should be used for this chart type.
	 */
	const MODEL	= [
		'dataset'	=> DataSet::class,
		'options'	=> Options::class
	];

	/**
	 * @var string
	 */
	protected $id;

	/**
	 * @var int
	 */
	protected $height;

	/**
	 * @var int
	 */
	protected $width;

	/**
	 * @var string
	 */
	protected $title;

	/**
	 * @var LabelsCollection
	 */
	protected $labels;

	/**
	 * @var Options
	 */
	protected $options;

	/**
	 * @var DataSetCollection
	 */
	protected $dataSets;

	/**
	 * @return string
	 */
	public function getId()
	{
		if( is_null( $this->id ) ) {
			$this->id	= uniqid( 'chart' );
		}
		return $this->id;
	}

	/**
	 * @param string $id
	 *
	 * @return Chart
	 */
	public function setId( $id )
	{
		$this->id	= strval( $id );

		return $this;
	}

	/**
	 * @return int
	 */
	public function getHeight()
	{
		return $this->height;
	}

	/**
	 * @param int $height
	 *
	 * @return Chart
	 */
	public function setHeight( $height )
	{
		$this->height = intval( $height );

		return $this;
	}

	/**
	 * @return int
	 */
	public function getWidth()
	{
		return $this->width;
	}

	/**
	 * @param int $width
	 *
	 * @return Chart
	 */
	public function setWidth( $width )
	{
		$this->width = intval( $width );

		return $this;
	}

	/**
	 * @return string
	 */
	public function getTitle()
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 *
	 * @return Chart
	 */
	public function setTitle( $title )
	{
		$this->title = strval( $title );

		return $this;
	}

	/**
	 * @return LabelsCollection
	 */
	public function getLabels()
	{
		if( is_null( $this->labels ) ) {
			$this->labels	= new LabelsCollection();
		}

		return $this->labels;
	}

	/**
	 * @param string $label
	 *
	 * @return $this
	 */
	public function addLabel( $label )
	{
		$this->getLabels()->append( $label );

		return $this;
	}

	/**
	 * @param $offset
	 *
	 * @return string|bool
	 */
	public function getLabel( $offset )
	{
		return $this->getLabels()->offsetGet( $offset );
	}

	/**
	 * @return DataSetCollection
	 */
	public function getDataSets()
	{
		if( is_null( $this->dataSets ) ) {
			$this->dataSets	= new DataSetCollection();
		}

		return $this->dataSets;
	}

	/**
	 * @param DataSet $dataSet
	 *
	 * @return $this
	 */
	public function addDataSet( DataSet $dataSet )
	{
		$this->getDataSets()->append( $dataSet->setOwner( $this ) );

		return $this;
	}

	/**
	 * @param $offset
	 *
	 * @return DataSet|bool
	 */
	public function getDataSet( $offset )
	{
		return $this->getDataSets()->offsetGet( $offset );
	}

	/**
	 * @param bool $pretty
	 *
	 * @return string
	 */
	public function render( $pretty = false )
	{
		$renderer	= new Renderer( $this );
		return $renderer->render( !!$pretty );
	}

	/**
	 * @return DataSet
	 */
	public function createDataSet()
	{
		$datasetClass	= static::MODEL['dataset'];
		return new $datasetClass();
	}

	/**
	 * @return Options
	 */
	public function options()
	{
		if( is_null( $this->options ) ) {
			$optionsClass	= static::MODEL['options'];
			$this->options	= new $optionsClass( $this );
		}

		return $this->options;
	}
}