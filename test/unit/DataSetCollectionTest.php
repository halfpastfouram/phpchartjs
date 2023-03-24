<?php

namespace Halfpastfour\PHPChartJSTest;

use Halfpastfour\PHPChartJS\DataSet;
use Halfpastfour\PHPChartJS\DataSetCollection;
use PHPUnit\Framework\TestCase;

/**
 * Class DataSetCollectionTest
 *
 * @package Halfpastfour\PHPChartJS
 */
class DataSetCollectionTest extends TestCase
{
    /** @var  DataSetCollection */
    private DataSetCollection $dataSetCollection;

    /**
     *
     */
    public function setUp(): void
    {
        $this->dataSetCollection = new DataSetCollection();
    }

    /**
     *
     */
    public function testGetArrayCopyEmpty()
    {
        $expected = [];
        $result   = $this->dataSetCollection->getArrayCopy();
        self::assertSame($expected, $result);
    }

    /**
     *
     */
    public function testGetArrayCopyNonEmpty()
    {
        $expected = [[]];
        $this->dataSetCollection->append(new DataSet());
        $result = $this->dataSetCollection->getArrayCopy();
        self::assertSame($expected, $result);
    }

    /**
     *
     */
    public function testJsonSerializeEmpty()
    {
        $expected = [];
        $result   = $this->dataSetCollection->jsonSerialize();
        self::assertSame($expected, $result);
    }

    /**
     *
     */
    public function testJsonSerializeNonEmpty()
    {
        $expected = [[]];
        $this->dataSetCollection->append(new DataSet());
        $result = $this->dataSetCollection->jsonSerialize();
        self::assertSame($expected, $result);
    }
}
