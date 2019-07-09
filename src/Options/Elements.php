<?php

namespace Halfpastfour\PHPChartJS\Options;

use Halfpastfour\PHPChartJS\ArraySerializableInterface;
use Halfpastfour\PHPChartJS\Delegate\ArraySerializable;
use Halfpastfour\PHPChartJS\Options\Elements\Arc;
use Halfpastfour\PHPChartJS\Options\Elements\Line;
use Halfpastfour\PHPChartJS\Options\Elements\Point;
use Halfpastfour\PHPChartJS\Options\Elements\Rectangle;
use Zend\Json\Expr;
use Zend\Json\Json;

/**
 * Class Elements
 * @package Halfpastfour\PHPChartJS\Options
 */
class Elements implements ArraySerializableInterface, \JsonSerializable
{
    use ArraySerializable;

    /**
     * @var Rectangle
     */
    private $rectangle;

    /**
     * @var Line
     */
    private $line;

    /**
     * @var Point
     */
    private $point;

    /**
     * @var Arc
     */
    private $arc;

    /**
     * @return Rectangle
     */
    public function getRectangle()
    {
        return $this->rectangle;
    }

    /**
     * @return Rectangle
     */
    public function rectangle()
    {
        if (is_null($this->rectangle)) {
            $this->rectangle = new Rectangle();
        }

        return $this->rectangle;
    }

    /**
     * @return Line
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * @return Line
     */
    public function line()
    {
        if (is_null($this->line)) {
            $this->line = new Line();
        }

        return $this->line;
    }

    /**
     * @return Point
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * @return Point
     */
    public function point()
    {
        if (is_null($this->point)) {
            $this->point = new Point();
        }

        return $this->point;
    }

    /**
     * @return Arc
     */
    public function getArc()
    {
        return $this->arc;
    }

    /**
     * @return Arc
     */
    public function arc()
    {
        if (is_null($this->arc)) {
            $this->arc = new Arc();
        }

        return $this->arc;
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
