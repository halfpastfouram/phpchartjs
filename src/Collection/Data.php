<?php

namespace Halfpastfour\PHPChartJS\Collection;

use Halfpastfour\Collection\Collection\ArrayAccess;
use JsonSerializable;

/**
 * Class Data
 *
 * @package Halfpastfour\PHPChartJS\Collection
 */
class Data extends ArrayAccess implements JsonSerializable
{
    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->data;
    }
}
