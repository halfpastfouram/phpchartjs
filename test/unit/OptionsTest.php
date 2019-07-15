<?php

namespace Test;

use Halfpastfour\PHPChartJS\Options;
use Halfpastfour\PHPChartJS\Options\Layout;
use Halfpastfour\PHPChartJS\Options\Title;
use Halfpastfour\PHPChartJS\Options\Animation;
use Halfpastfour\PHPChartJS\Options\Hover;
use Halfpastfour\PHPChartJS\Options\Scales;
use Halfpastfour\PHPChartJS\Options\Tooltips;
use Halfpastfour\PHPChartJS\Options\Legend;
use Halfpastfour\PHPChartJS\Options\Elements;

/**
 * Class OptionsTest
 * @package Test
 */
class OptionsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Options $options
     */
    private $options;

    /**
     * @var array
     */
    private $empty_options = [];

    /**
     *
     */
    public function setUp()
    {
        $this->options = new Options();
    }

    /**
     *
     */
    public function testTitle()
    {
        $title = $this->options->getTitle();
        self::assertInstanceOf(Title::class, $title);
    }

    /**
     *
     */
    public function testLayout()
    {
        $layout = $this->options->getLayout();
        self::assertInstanceOf(Layout::class, $layout);
    }

    /**
     *
     */
    public function testElements()
    {
        $layout = $this->options->getElements();
        self::assertInstanceOf(Elements::class, $layout);
    }

    /**
     *
     */
    public function testAnimation()
    {
        $animation = $this->options->getAnimation();
        self::assertInstanceOf(Animation::class, $animation);
    }

    /**
     *
     */
    public function testHover()
    {
        $hover = $this->options->getHover();
        self::assertInstanceOf(Hover::class, $hover);
    }

    /**
     *
     */
    public function testScales()
    {
        $scales = $this->options->getScales();
        self::assertInstanceOf(Scales::class, $scales);
    }

    /**
     *
     */
    public function testLagend()
    {
        $legend = $this->options->getLegend();
        self::assertInstanceOf(Legend::class, $legend);
    }

    /**
     *
     */
    public function testTooltips()
    {
        $tooltips = $this->options->getTooltips();
        self::assertInstanceOf(Tooltips::class, $tooltips);
    }

    /**
     *
     */
    public function testJsonSerialize()
    {
        $expected = $this->empty_options;
        $result   = json_decode($this->options->jsonSerialize(), true);
        self::assertEquals($expected, $result);
    }
}
