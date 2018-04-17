<?php

namespace Test\Options;

use Halfpastfour\PHPChartJS\LabelsCollection;
use Halfpastfour\PHPChartJS\Options\Legend;
use Test\TestUtils;
use Zend\Json\Expr;

/**
 * Class LegendTest
 * @package Test\Options
 */
class LegendTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Legend
     */
    private $legend;

    /**
     * @var array
     */
    private $data_types = [
        'display'   => false,
        'position'  => '',
        'fullWidth' => false,
        'onClick'   => '',
        'onHover'   => '',
        'reverse'   => false,
        'labels'    => '', /* LabelsCollection */
    ];

    /**
     * @var array
     */
    private $input_data_with_expressions = [
        'display'   => true,
        'position'  => 'position',
        'fullWidth' => true,
        'onClick'   => 'onClick',
        'onHover'   => 'onHover',
        'reverse'   => true,
    ];

    /**
     * @var array
     */
    private $input_data_no_expressions = [
        'display'   => true,
        'position'  => 'position',
        'fullWidth' => true,
        'onClick'   => null,
        'onHover'   => null,
        'labels'    => null,
        'reverse'   => true,
    ];

    /**
     * @var array
     */
    private $empty_data = [
        'display'   => null,
        'position'  => null,
        'fullWidth' => null,
        'onClick'   => null,
        'onHover'   => null,
        'reverse'   => null,
    ];

    /**
     *
     */
    public function setUp()
    {
        $this->legend = new Legend();

        $this->input_data_with_expressions['onClick'] = new Expr($this->input_data_with_expressions['onClick']);
        $this->input_data_with_expressions['onHover'] = new Expr($this->input_data_with_expressions['onHover']);
    }

    /**
     *
     */
    public function testEmpty()
    {
        $expected = $this->empty_data;
        $result   = TestUtils::getAttributes($this->legend, $this->data_types);
        self::assertSame($expected, $result);
    }

    /**
     *
     */
    public function testGetAndSetWithExpr()
    {
        $expected = $this->input_data_with_expressions;
        TestUtils::setAttributes($this->legend, $this->input_data_with_expressions);
        $result = TestUtils::getAttributes($this->legend, $this->data_types);
        self::assertEquals($expected, $result);
    }

    /**
     *
     */
    public function testLabelsCollection()
    {
        $labels = $this->legend->labels();
        self::assertNotNull($labels);
        self::assertInstanceOf(LabelsCollection::class, $labels);
    }

    /**
     *
     */
    public function testJsonSerializeWithoutExpressions()
    {
        $expected = TestUtils::removeNullsFromArray($this->input_data_no_expressions);
        TestUtils::setAttributes($this->legend, $this->input_data_no_expressions);
        $result = json_decode($this->legend->jsonSerialize(), true);
        self::assertSame($expected, $result);
    }
}
