<?php

namespace Test\Options;

use Halfpastfour\PHPChartJS\Options;
use Test\TestUtils;
use Zend\Json\Expr;

/**
 * Class ClickTest
 * @package Test\Options
 */
class ClickTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Options
     */
    private $options;

    private $data_types = [
        'onClick' => null,
    ];

    private $input_data_no_expressions = ['onClick' => null];
    private $input_data_with_expressions = null;

    /**
     *
     */
    public function setUp()
    {
        $this->options = new Options();
        $this->input_data_with_expressions = ['onClick' => new Expr('function(event, array) { echo "onClick"; }')];
    }

    /**
     *
     */
    public function testEmpty()
    {
        $expected = $this->input_data_no_expressions;
        TestUtils::setAttributes($this->options, $this->input_data_no_expressions);
        $result = TestUtils::getAttributes($this->options, $this->data_types);
        self::assertEquals($expected, $result);
    }

    /**
     *
     */
    public function testGetAndSetWithExpressions()
    {
        $expected = $this->input_data_with_expressions;
        TestUtils::setAttributes($this->options, $this->input_data_with_expressions);
        $result = TestUtils::getAttributes($this->options, $this->data_types);
        self::assertEquals($expected, $result);
    }

    /**
     *
     */
    public function testJsonSerializeWithoutExpressions()
    {
        $expected = TestUtils::removeNullsFromArray($this->input_data_no_expressions);
        TestUtils::setAttributes($this->options, $this->input_data_no_expressions);
        $result = json_decode($this->options->jsonSerialize(), true);
        self::assertSame($expected, $result);
    }
}
