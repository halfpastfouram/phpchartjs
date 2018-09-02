<?php

namespace Test\Options\Scales;

use Halfpastfour\PHPChartJS\Options\Scales\XAxis;
use Halfpastfour\PHPChartJS\Options\Scales\XAxisCollection;

/**
 * Class XAxisCollectionTest
 * @package Test\Options\Scales
 */
class XAxisCollectionTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var XAxisCollection
     */
    private $xAxisCollection;

    /**
     * @var XAxis[]
     */
    private $input_data;

    /**
     *
     */
    public function setUp()
    {
        $this->xAxisCollection = new XAxisCollection();
        $this->input_data      = [];
        foreach ($this->input_data as $value) {
            $this->xAxisCollection[] = $value;
        }
    }

    /**
     *
     */
    public function testGetArrayCopyEmpty()
    {
        $expected = [];
        $xAxisCollection = new XAxisCollection();
        $result   = $xAxisCollection->getArrayCopy();
        self::assertSame($expected, $result);
    }

    /**
     *
     */
    public function testGetArrayCopyNonEmpty()
    {
        $expected                = [];
        $x                       = new XAxis();
        $expected[]              = $x->getArrayCopy();
        $this->xAxisCollection[] = $x;
        $result                  = $this->xAxisCollection->getArrayCopy();
        self::assertSame($expected, $result);
    }

    /**
     *
     */
    public function testJsonSerializeEmpty()
    {
        $expected = [];
        $result   = json_decode($this->xAxisCollection->jsonSerialize(), true);
        self::assertSame($expected, $result);
    }

    /**
     *
     */
    public function testJsonSerializeNonEmpty()
    {
        $expected                = [];
        $x                       = new XAxis();
        $expected[]              = $x->getArrayCopy();
        $this->xAxisCollection[] = $x;
        $result                  = json_decode($this->xAxisCollection->jsonSerialize(), true);
        self::assertSame($expected, $result);
    }
}
