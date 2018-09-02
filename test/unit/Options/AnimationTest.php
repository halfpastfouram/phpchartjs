<?php

namespace Options;

use Halfpastfour\PHPChartJS\Options\Animation;
use Test\TestUtils;

/**
 * Class AnimationTest
 * @package Test\Options
 */
class AnimationTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Animation
     */
    private $animation;

    /**
     * @var array
     */
    private $data_types = [
        'duration'   => 1,
        'easing'     => '',
        'onProgress' => '',
        'onComplete' => '',
    ];

    /**
     * @var array
     */
    private $input_data_no_expressions = [
        'duration'   => 1,
        'easing'     => '',
        'onProgress' => null,
        'onComplete' => null,
    ];

    /**
     * @var array
     */
    private $input_data_with_expressions = [
        'duration'   => 1,
        'easing'     => '',
        'onProgress' => 'function() { echo "onProgress"; }',
        'onComplete' => 'function() { echo "onComplete"; }',
    ];

    /**
     * @var array
     */
    private $empty_data = [
        'duration'   => null,
        'easing'     => null,
        'onProgress' => null,
        'onComplete' => null,
    ];

    /**
     *
     */
    public function setUp()
    {
        $this->animation = new Animation();
    }

    /**
     *
     */
    public function testEmpty()
    {
        $expected = $this->empty_data;
        $result   = TestUtils::getAttributes($this->animation, $this->data_types);
        self::assertEquals($expected, $result);
    }

    /**
     *
     */
    public function testGetAndSetWithExpressions()
    {
        $expected = $this->input_data_with_expressions;
        TestUtils::setAttributes($this->animation, $this->input_data_with_expressions);
        $result = TestUtils::getAttributes($this->animation, $this->data_types);
        self::assertEquals($expected, $result);
    }

    /**
     *
     */
    public function testJsonSerializeNoExpressions()
    {
        $expected = TestUtils::removeNullsFromArray($this->input_data_no_expressions);
        TestUtils::setAttributes($this->animation, $this->input_data_no_expressions);
        $result = json_decode($this->animation->jsonSerialize(), true);
        self::assertSame($expected, $result);
    }
}
