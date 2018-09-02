<?php

namespace Halfpastfour\PHPChartJS\Options;

use Halfpastfour\PHPChartJS\ArraySerializableInterface;
use Halfpastfour\PHPChartJS\Delegate\ArraySerializable;
use Halfpastfour\PHPChartJS\Options\Layout\Padding;
use Zend\Json\Json;

/**
 * Class Layout
 *
 * @package Halfpastfour\PHPChartJS\Options
 */
class Layout implements ArraySerializableInterface, \JsonSerializable
{
    use ArraySerializable;

    /**
     * @var int|Padding
     */
    private $padding;

    /**
     * @param int $padding
     */
    public function setPadding($padding)
    {
        $this->padding = intval($padding);
    }

    /**
     * @return int|Padding
     */
    public function getPadding()
    {
        return $this->padding;
    }

    /**
     * @return Padding
     */
    public function padding()
    {
        if (is_null($this->padding)) {
            $this->padding = new Padding();
        }

        return $this->padding;
    }

    /**
     * @return string
     * @throws \ReflectionException
     * @throws \Zend_Reflection_Exception
     */
    public function jsonSerialize()
    {
        return Json::encode($this->getArrayCopy());
    }
}
