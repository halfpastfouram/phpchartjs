<?php

namespace Test\Options;

use Halfpastfour\PHPChartJS\Options\Click;
use Test\TestUtils;

/**
 * Class ClickTest
 * @package Test\Options
 */
class ClickTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Click
     */
    private $click;

    /**
     * @var array
     */
    private $data_types = [
        'mode'              => '',
        'intersect'         => false,
        'animationDuration' => 1,
        'onClick'           => '',
    ];

    /**
     * @var array
     */
    private $input_data_no_expressions = [
        'mode'              => 'mode',
        'intersect'         => true,
        'animationDuration' => 2,
        'onClick'           => null,
    ];

    /**
     * @var array
     */
    private $input_data_with_expressions = [
        'mode'              => 'mode',
        'intersect'         => true,
        'animationDuration' => 2,
        'onClick'           => 'function(event, array) { echo "onClick"; }',
    ];

    /**
     * @var array
     */
    private $empty_data = [
        'mode'              => null,
        'intersect'         => null,
        'animationDuration' => null,
        'onClick'           => null,
    ];

    /**
     *
     */
    public function setUp()
    {
        $this->click = new Click();
    }

    /**
     *
     */
    public function testEmpty()
    {
        $expected = $this->empty_data;
        $result   = TestUtils::getAttributes($this->click, $this->data_types);
        self::assertEquals($expected, $result);
    }

    /**
     *
     */
    public function testGetAndSetWithExpressions()
    {
        $expected = $this->input_data_with_expressions;
        TestUtils::setAttributes($this->click, $this->input_data_with_expressions);
        $result = TestUtils::getAttributes($this->click, $this->data_types);
        self::assertEquals($expected, $result);
    }

    /**
     *
     */
    public function testJsonSerializeWithoutExpressions()
    {
        $expected = TestUtils::removeNullsFromArray($this->input_data_no_expressions);
        TestUtils::setAttributes($this->click, $this->input_data_no_expressions);
        $result = json_decode($this->click->jsonSerialize(), true);
        self::assertSame($expected, $result);
    }
}
