<?php

namespace Halfpastfour\PHPChartJS\Options\Scales;

use Halfpastfour\Collection\Collection\ArrayAccess;
use Halfpastfour\PHPChartJS\ArraySerializableInterface;
use JsonSerializable;

/**
 * Class YAxisCollection
 *
 * @package Halfpastfour\PHPChartJS\Collection
 */
class YAxisCollection extends ArrayAccess implements ArraySerializableInterface, JsonSerializable
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
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->getArrayCopy();
    }
}
