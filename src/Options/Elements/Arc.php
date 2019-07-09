<?php

namespace Halfpastfour\PHPChartJS\Options\Elements;

use Halfpastfour\PHPChartJS\ArraySerializableInterface;
use Halfpastfour\PHPChartJS\Delegate\ArraySerializable;
use Zend\Json\Json;

/**
 * Class Arc
 * @package Halfpastfour\PHPChartJS\Options\Elements
 */
class Arc implements ArraySerializableInterface, \JsonSerializable
{
    use ArraySerializable;

    /**
     * Arc fill color.
     * @default 'rgba(0,0,0,0.1)'
     * @var string
     */
    private $backgroundColor;

    /**
     * Arc stroke color.
     * @default '#fff'
     * @var string
     */
    private $borderColor;

    /**
     * Arc stroke width.
     * @default 2
     * @var int
     */
    private $borderWidth;

    /**
     * @return string
     */
    public function getBackgroundColor()
    {
        return $this->backgroundColor;
    }

    /**
     * @param string $backgroundColor
     * @return Arc
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = is_null($backgroundColor) ? null : strval($backgroundColor);
        return $this;
    }

    /**
     * @return string
     */
    public function getBorderColor()
    {
        return $this->borderColor;
    }

    /**
     * @param string $borderColor
     * @return Arc
     */
    public function setBorderColor($borderColor)
    {
        $this->borderColor = is_null($borderColor) ? null : strval($borderColor);
        return $this;
    }

    /**
     * @return int
     */
    public function getBorderWidth()
    {
        return $this->borderWidth;
    }

    /**
     * @param int $borderWidth
     * @return Arc
     */
    public function setBorderWidth($borderWidth)
    {
        $this->borderWidth = intval($borderWidth);
        return $this;
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