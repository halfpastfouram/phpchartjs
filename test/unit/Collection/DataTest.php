<?php

namespace Collection;

use Halfpastfour\PHPChartJS\Collection\Data;
use PHPUnit_Framework_TestCase;

/**
 * Class DataTest
 *
 * @package Collection
 */
class DataTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var  Data
     */
    private $data;

    /**
     *
     */
    public function setUp()
    {
        $this->data = new Data();
    }

    /**
     *
     */
    public function testJsonSerializeEmpty()
    {
        $expected = [];
        $result   = $this->data->jsonSerialize();
        self::assertSame($expected, $result);
    }
}
