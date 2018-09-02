<?php

namespace Halfpastfour\PHPChartJS;

use Halfpastfour\Collection\Collection\ArrayAccess;
use Zend\Json\Json;

/**
 * Class DataSetCollection
 * @package Halfpastfour\PHPChartJS
 */
class DataSetCollection extends ArrayAccess implements \JsonSerializable
{
    /**
     * @return array
     */
    public function getArrayCopy()
    {
        $rows   = [];
        foreach ($this->data as $row) {
            /** @var DataSet $row */
            $rows[] = $row->getArrayCopy();
        }

        return $rows;
    }

    /**
     * @return string
     */
    public function jsonSerialize()
    {
        return Json::encode($this->getArrayCopy());
    }
}
