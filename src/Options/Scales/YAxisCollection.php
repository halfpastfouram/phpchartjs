<?php

namespace Halfpastfour\PHPChartJS\Options\Scales;

use Halfpastfour\Collection\Collection\ArrayAccess;
use Zend\Json\Json;

/**
 * Class YAxisCollection
 * @package Halfpastfour\PHPChartJS\Collection
 */
class YAxisCollection extends ArrayAccess implements \JsonSerializable
{
    /**
     * @return array
     */
    public function getArrayCopy()
    {
        $rows = [];
        foreach ($this->data as $row) {
            /** @var YAxis $row */
            $rows[] = $row->getArrayCopy();
        }

        return $rows;
    }

    /**
     * @return string
     */
    public function jsonSerialize()
    {
        return Json::encode($this->getArrayCopy(), false, [ 'enableJsonExprFinder' => true ]);
    }
}
