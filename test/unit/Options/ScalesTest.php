<?php

namespace Test\Options;

use Halfpastfour\PHPChartJS\Options\Scales;

/**
 * Class ScalesTest
 * @package Test\Options
 */
class ScalesTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Scales
     */
    private $scales;

    /**
     *
     */
    public function setUp()
    {
        $this->scales = new Scales();
    }

    /**
     *
     */
    public function testCreateXAxis()
    {
        self::assertInstanceOf(Scales\XAxis::class, $this->scales->createXAxis());
    }

    /**
     *
     */
    public function testCreateYAxis()
    {
        self::assertInstanceOf(Scales\YAxis::class, $this->scales->createYAxis());
    }

    /**
     *
     */
    public function testEmptyXAxis()
    {
        $expected = new Scales\XAxisCollection();
        $result   = $this->scales->getXAxes();
        self::assertInstanceOf(Scales\XAxisCollection::class, $result);
        self::assertEquals($expected, $result);
    }

    /**
     *
     */
    public function testEmptyYAxis()
    {
        $expected = new Scales\YAxisCollection();
        $result   = $this->scales->getYAxes();
        self::assertInstanceOf(Scales\YAxisCollection::class, $result);
        self::assertEquals($expected, $result);
    }

    /**
     *
     */
    public function testJsonSerialize()
    {
        $xc = new Scales\XAxisCollection();
        $x1 = new Scales\XAxis();
        $x1->setBarThickness(2);
        $xc[]              = $x1;
        $expected['xAxes'] = json_decode($xc->jsonSerialize(), true);

        $yc = new Scales\YAxisCollection();
        $y1 = new Scales\YAxis();
        $y1->setBarThickness(3);
        $yc[] = $y1;

        $expected['xAxes']          = json_decode($xc->jsonSerialize(), true);
        $expected['yAxes']          = json_decode($yc->jsonSerialize(), true);
        $this->scales->getXAxes()[] = $x1;
        $this->scales->getYAxes()[] = $y1;
        $result                     = json_decode($this->scales->jsonSerialize(), true);
        self::assertSame($expected, $result);
    }
}
