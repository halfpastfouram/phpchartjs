<?php

namespace Halfpastfour\PHPChartJS;

class DataSetCollectionTest extends \PHPUnit_Framework_TestCase
{
    /** @var  DataSetCollection */
    private $dataSetCollection;

    public function setUp()
    {
        $this->dataSetCollection = new DataSetCollection();
    }

    public function testGetArrayCopyEmpty()
    {
        $expected = [];
        $result = $this->dataSetCollection->getArrayCopy();
        self::assertSame($expected, $result);
    }

    public function testGetArrayCopyNonEmpty()
    {
        $expected = [[]];
        $this->dataSetCollection->append(new DataSet());
        $result = $this->dataSetCollection->getArrayCopy();
        self::assertSame($expected, $result);
    }

    public function testJsonSerializeEmpty()
    {
        $expected = '[]';
        $result = $this->dataSetCollection->jsonSerialize();
        self::assertSame($expected, $result);
    }

    public function testJsonSerializeNonEmpty()
    {
        $expected = '[[]]';
        $this->dataSetCollection->append(new DataSet());
        $result = $this->dataSetCollection->jsonSerialize();
        self::assertSame($expected, $result);
    }
}
