<?php

namespace Test\ConfigDefaults;

use Halfpastfour\PHPChartJS\ConfigDefaults\AnimationConfig;
use Halfpastfour\PHPChartJS\ConfigDefaults\ElementsConfig;
use Halfpastfour\PHPChartJS\ConfigDefaults\GlobalConfig;
use Halfpastfour\PHPChartJS\ConfigDefaults\HoverConfig;
use Halfpastfour\PHPChartJS\ConfigDefaults\LayoutConfig;
use Halfpastfour\PHPChartJS\ConfigDefaults\TooltipsConfig;
use Test\TestUtils;

/**
 * Class GlobalConfigTest
 * @package Test\ConfigDefaults
 */
class GlobalConfigTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GlobalConfig $config
     */
    private $config;

    /**
     * @var array
     */
    private $data_types = [
        'defaultFontColor'  => '',
        'defaultFontFamily' => '',
        'defaultFontSize'   => 1,
        'defaultFontStyle'  => '',
    ];

    /**
     * @var array
     */
    private $input_data = [
        'defaultFontColor'  => 'defaultFontColor',
        'defaultFontFamily' => 'defaultFontFamily',
        'defaultFontSize'   => 2,
        'defaultFontStyle'  => 'defaultFontStyle',
    ];

    /**
     * @var array
     */
    private $empty_data = [
        'defaultFontColor'  => null,
        'defaultFontFamily' => null,
        'defaultFontSize'   => null,
        'defaultFontStyle'  => null,
    ];

    /**
     *
     */
    public function setUp()
    {
        $this->config = GlobalConfig::getInstance();
    }

    /**
     *
     */
    public function testEmpty()
    {
        $result   = TestUtils::getAttributes($this->config, $this->data_types);
        $expected = $this->empty_data;
        self::assertSame($expected, $result);
    }

    /**
     *
     */
    public function testGetAndSet()
    {
        TestUtils::setAttributes($this->config, $this->input_data);
        $result   = TestUtils::getAttributes($this->config, $this->data_types);
        $expected = $this->input_data;
        self::assertSame($expected, $result);
    }

    /**
     *
     */
    public function testLayout()
    {
        $result = $this->config->layout();
        self::assertInstanceOf(LayoutConfig::class, $result);
    }

    /**
     *
     */
    public function testTooltips()
    {
        $result = $this->config->tooltips();
        self::assertInstanceOf(TooltipsConfig::class, $result);
    }

    /**
     *
     */
    public function testHover()
    {
        $result = $this->config->hover();
        self::assertInstanceOf(HoverConfig::class, $result);
    }

    /**
     *
     */
    public function testAnimation()
    {
        $result = $this->config->animation();
        self::assertInstanceOf(AnimationConfig::class, $result);
    }

    /**
     *
     */
    public function testElements()
    {
        $result = $this->config->elements();
        self::assertInstanceOf(ElementsConfig::class, $result);
    }
}
