<?php

namespace Test\Options;

use Halfpastfour\PHPChartJS\Options\Hover;
use Test\TestUtils;

/**
 * Class HoverTest
 * @package Test\Options
 */
class HoverTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Hover
     */
    private $hover;

    /**
     * @var array
     */
    private $data_types = [
        'mode'              => '',
        'intersect'         => false,
        'animationDuration' => 1,
        'onHover'           => '',
    ];

    /**
     * @var array
     */
    private $input_data_no_expressions = [
        'mode'              => 'mode',
        'intersect'         => true,
        'animationDuration' => 2,
        'onHover'           => null,
    ];

    /**
     * @var array
     */
    private $input_data_with_expressions = [
        'mode'              => 'mode',
        'intersect'         => true,
        'animationDuration' => 2,
        'onHover'           => 'function() { echo "onHover"; }',
    ];

    /**
     * @var array
     */
    private $empty_data = [
        'mode'              => null,
        'intersect'         => null,
        'animationDuration' => null,
        'onHover'           => null,
    ];

    /**
     *
     */
    public function setUp()
    {
        $this->hover = new Hover();
    }

    /**
     *
     */
    public function testEmpty()
    {
        $expected = $this->empty_data;
        $result   = TestUtils::getAttributes($this->hover, $this->data_types);
        self::assertEquals($expected, $result);
    }

    /**
     *
     */
    public function testGetAndSetWithExpressions()
    {
        $expected = $this->input_data_with_expressions;
        TestUtils::setAttributes($this->hover, $this->input_data_with_expressions);
        $result = TestUtils::getAttributes($this->hover, $this->data_types);
        self::assertEquals($expected, $result);
    }

    /**
     *
     */
    public function testJsonSerializeWithoutExpressions()
    {
        $expected = TestUtils::removeNullsFromArray($this->input_data_no_expressions);
        TestUtils::setAttributes($this->hover, $this->input_data_no_expressions);
        $result = json_decode($this->hover->jsonSerialize(), true);
        self::assertSame($expected, $result);
    }
}
