<?php

namespace Halfpastfour\PHPChartJS;

use Halfpastfour\Collection\Collection\ArrayAccess;
use JsonSerializable;

/**
 * Class LabelsCollection
 *
 * @package Halfpastfour\PHPChartJS
 */
class LabelsCollection extends ArrayAccess implements JsonSerializable
{
    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->data;
    }
}
