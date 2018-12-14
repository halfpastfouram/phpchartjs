<?php

namespace Halfpastfour\PHPChartJS\Options;

use Halfpastfour\PHPChartJS\ArraySerializableInterface;
use Halfpastfour\PHPChartJS\Delegate\ArraySerializable;
use Zend\Json\Expr;
use Zend\Json\Json;

/**
 * Class Hover
 * @package Halfpastfour\PHPChartJS\Options
 */
class Click implements ArraySerializableInterface, \JsonSerializable
{
    use ArraySerializable;

    /**
     * @var string
     */
    private $mode;

    /**
     * @var bool
     */
    private $intersect;

    /**
     * @var int
     */
    private $animationDuration;

    /**
     * @var Expr
     */
    private $onClick;

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param string $mode
     *
     * @return $this
     */
    public function setMode($mode)
    {
        $this->mode = strval($mode);

        return $this;
    }

    /**
     * @return bool
     */
    public function isIntersect()
    {
        return $this->intersect;
    }

    /**
     * @return bool
     */
    public function getIntersect()
    {
        return $this->intersect;
    }

    /**
     * @param bool $intersect
     *
     * @return $this
     */
    public function setIntersect($intersect)
    {
        $this->intersect = ! ! $intersect;

        return $this;
    }

    /**
     * @return int
     */
    public function getAnimationDuration()
    {
        return $this->animationDuration;
    }

    /**
     * @param int $animationDuration
     *
     * @return $this
     */
    public function setAnimationDuration($animationDuration)
    {
        $this->animationDuration = intval($animationDuration);

        return $this;
    }

    /**
     * @return \Zend\Json\Expr
     */
    public function getOnClick()
    {
        return $this->onClick;
    }

    /**
     * @param Expr $onClick
     *
     * @return $this
     */
    public function setOnClick($onClick)
    {
        $this->onClick = new Expr(strval($onClick));

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
