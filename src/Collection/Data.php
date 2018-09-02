<?php

namespace Halfpastfour\PHPChartJS\Collection;

use Halfpastfour\Collection\Collection\ArrayAccess;
use Zend\Json\Json;

/**
 * Class Data
 * @package Halfpastfour\PHPChartJS\Collection
 */
class Data extends ArrayAccess implements \JsonSerializable
{
    /**
     * @return string
     */
    public function jsonSerialize()
    {
        return Json::encode($this->data);
    }
}
