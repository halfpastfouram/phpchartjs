<?php
/**
 * Created by PhpStorm.
 * User: gbonnema
 * Date: 14-12-2016
 * Time: 13:18
 */

namespace ConfigDefaults;

use Halfpastfour\PHPChartJS\ConfigDefaults\AnimationConfig;
use Halfpastfour\PHPChartJS\ConfigDefaults\ElementsConfig;
use Halfpastfour\PHPChartJS\ConfigDefaults\GlobalConfig;
use Halfpastfour\PHPChartJS\ConfigDefaults\HoverConfig;
use Halfpastfour\PHPChartJS\ConfigDefaults\LayoutConfig;
use Halfpastfour\PHPChartJS\ConfigDefaults\TooltipsConfig;

/**
 * Class GlobalConfigTest
 * @package ConfigDefaults
 */
class GlobalConfigTest extends \PHPUnit_Framework_TestCase
{
	/*
	 * @var GlobalConfig $config
	 */
	/**
	 * @var GlobalConfig $config
	 */
	private $config;

	/**
	 * @var array
	 */
	private $config_values_1 = [
		'defaultFontColor'  => 'defaultFontColor',
		'defaultFontFamily' => 'defaultFontFamily',
		'defaultFontSize'   => 2,
		'defaultFontStyle'  => 'defaultFontStyle',
	];

	/**
	 *
	 */
	public function setUp()
	{
		$this->config = GlobalConfig::getInstance();
		$this->setAttributes( $this->config, $this->config_values_1 );
	}

	/**
	 *
	 */
	public function testAttributes()
	{
		$result   = $this->getAttributes( $this->config, $this->config_values_1 );
		$expected = $this->config_values_1;
		self::assertSame( $expected, $result, "result should have the same attributes as input" );
	}

	/**
	 *
	 */
	public function testLayout()
	{
		$result = $this->config->layout();
		self::assertInstanceOf( LayoutConfig::class, $result );
	}

	/**
	 *
	 */
	public function testTooltips()
	{
		$result = $this->config->tooltips();
		self::assertInstanceOf( TooltipsConfig::class, $result );
	}

	/**
	 *
	 */
	public function testHover()
	{
		$result = $this->config->hover();
		self::assertInstanceOf( HoverConfig::class, $result );
	}

	/**
	 *
	 */
	public function testAnimation()
	{
		$result = $this->config->animation();
		self::assertInstanceOf( AnimationConfig::class, $result );
	}

	/**
	 *
	 */
	public function testElements()
	{
		$result = $this->config->elements();
		self::assertInstanceOf( ElementsConfig::class, $result );
	}

	/**
	 * this method sets all defined attributes from the input array
	 * $input_data in the $obj and calls the setter. It returns the resulting array.
	 *
	 * @param       $obj
	 * @param array $data
	 */
	private function setAttributes( $obj, array $data )
	{

		if( !is_object( $obj ) ) {
			throw new \RuntimeException( "First param should be an object. " );
		}

		foreach( $data as $key => $value ) {
			$function = 'set' . ucfirst( $key );
			$obj->$function( $value );
		}
	}

	/**
	 * this method reads all defined attributes from the input array
	 * $input_data and calls the getter. It returns the resulting array.
	 *
	 * @param       $obj
	 * @param array $input_data
	 *
	 * @return array
	 */
	private function getAttributes( $obj, array $input_data )
	{

		if( !is_object( $obj ) ) {
			throw new \RuntimeException( "First param should be an object. " );
		}

		$array = [];
		foreach( $input_data as $key => $value ) {
			$function      = ( gettype( $value ) == "boolean" ? 'is' : 'get' ) . ucfirst( $key );
			$array[ $key ] = $obj->$function( $value );
		}

		return $array;
	}
}
