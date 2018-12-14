<?php

namespace Halfpastfour\PHPChartJS\Options\Scales;

use Halfpastfour\PHPChartJS\ArraySerializableInterface;
use Halfpastfour\PHPChartJS\Delegate\ArraySerializable;
use Zend\Json\Expr;
use Zend\Json\Json;

/**
 * Class Ticks
 *
 * @package Halfpastfour\PHPChartJS\Options\Scales
 */
class Ticks implements ArraySerializableInterface, \JsonSerializable
{
    use ArraySerializable;

    /**
     * @var float
     */
    protected $suggestedMin;

    /**
     * @var bool
     */
    protected $beginAtZero;

    /**
     * @var float
     */
    protected $stepSize;

    /**
     * @var bool
     */
    protected $autoSkip;

    /**
     * @var int
     */
    protected $autoSkipPadding;

    /**
     * @var Expr
     */
    protected $callback;

    /**
     * @var bool
     */
    protected $display;

    /**
     * @var string
     */
    protected $fontColor;

    /**
     * @var string
     */
    protected $fontFamily;

    /**
     * @var int
     */
    protected $fontSize;

    /**
     * @var string
     */
    protected $fontStyle;

    /**
     * @var int
     */
    protected $labelOffset;

    /**
     * @var int
     */
    protected $maxRotation;

    /**
     * @var int
     */
    protected $minRotation;

    /**
     * @var bool
     */
    protected $mirror;

    /**
     * @var int
     */
    protected $padding;

    /**
     * @var bool
     */
    protected $reverse;

    /**
     * @var int
     */
    protected $max;

    /**
     * @return float
     */
    public function getSuggestedMin()
    {
        return $this->suggestedMin;
    }

    /**
     * @param float $suggestedMin
     *
     * @return $this
     */
    public function setSuggestedMin($suggestedMin)
    {
        $this->suggestedMin = floatval($suggestedMin);

        return $this;
    }

    /**
     * @return bool
     */
    public function isBeginAtZero()
    {
        return $this->beginAtZero;
    }

    /**
     * @return bool
     */
    public function getBeginAtZero()
    {
        return $this->beginAtZero;
    }

    /**
     * @param bool $beginAtZero
     *
     * @return $this
     */
    public function setBeginAtZero($beginAtZero)
    {
        $this->beginAtZero = boolval($beginAtZero);

        return $this;
    }

    /**
     * @return float
     */
    public function getStepSize()
    {
        return $this->stepSize;
    }

    /**
     * @param float $stepSize
     *
     * @return $this
     */
    public function setStepSize($stepSize)
    {
        $this->stepSize = floatval($stepSize);

        return $this;
    }

    /**
     * @return bool
     */
    public function isAutoSkip()
    {
        return $this->autoSkip;
    }

    /**
     * @return bool
     */
    public function getAutoSkip()
    {
        return $this->autoSkip;
    }

    /**
     * @param bool $autoSkip
     *
     * @return $this
     */
    public function setAutoSkip($autoSkip)
    {
        $this->autoSkip = ! ! $autoSkip;

        return $this;
    }

    /**
     * @return int
     */
    public function getAutoSkipPadding()
    {
        return $this->autoSkipPadding;
    }

    /**
     * @param int $autoSkipPadding
     *
     * @return $this
     */
    public function setAutoSkipPadding($autoSkipPadding)
    {
        $this->autoSkipPadding = intval($autoSkipPadding);

        return $this;
    }

    /**
     * @return Expr
     */
    public function getCallback()
    {
        return $this->callback;
    }

    /**
     * @param string $callback
     *
     * @return $this
     */
    public function setCallback($callback)
    {
        $this->callback = new Expr(strval($callback));

        return $this;
    }

    /**
     * @return bool
     */
    public function isDisplay()
    {
        return $this->display;
    }

    /**
     * @return bool
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @param bool $display
     *
     * @return $this
     */
    public function setDisplay($display)
    {
        $this->display = ! ! $display;

        return $this;
    }

    /**
     * @return string
     */
    public function getFontColor()
    {
        return $this->fontColor;
    }

    /**
     * @param string $fontColor
     *
     * @return $this
     */
    public function setFontColor($fontColor)
    {
        $this->fontColor = strval($fontColor);

        return $this;
    }

    /**
     * @return string
     */
    public function getFontFamily()
    {
        return $this->fontFamily;
    }

    /**
     * @param string $fontFamily
     *
     * @return $this
     */
    public function setFontFamily($fontFamily)
    {
        $this->fontFamily = strval($fontFamily);

        return $this;
    }

    /**
     * @return int
     */
    public function getFontSize()
    {
        return $this->fontSize;
    }

    /**
     * @param int $fontSize
     *
     * @return $this
     */
    public function setFontSize($fontSize)
    {
        $this->fontSize = intval($fontSize);

        return $this;
    }

    /**
     * @return string
     */
    public function getFontStyle()
    {
        return $this->fontStyle;
    }

    /**
     * @param string $fontStyle
     *
     * @return $this
     */
    public function setFontStyle($fontStyle)
    {
        $this->fontStyle = strval($fontStyle);

        return $this;
    }

    /**
     * @return int
     */
    public function getLabelOffset()
    {
        return $this->labelOffset;
    }

    /**
     * @param int $labelOffset
     *
     * @return $this
     */
    public function setLabelOffset($labelOffset)
    {
        $this->labelOffset = intval($labelOffset);

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxRotation()
    {
        return $this->maxRotation;
    }

    /**
     * @param int $maxRotation
     *
     * @return $this
     */
    public function setMaxRotation($maxRotation)
    {
        $this->maxRotation = intval($maxRotation);

        return $this;
    }

    /**
     * @return int
     */
    public function getMinRotation()
    {
        return $this->minRotation;
    }

    /**
     * @param int $minRotation
     *
     * @return $this
     */
    public function setMinRotation($minRotation)
    {
        $this->minRotation = intval($minRotation);

        return $this;
    }

    /**
     * @return bool
     */
    public function isMirror()
    {
        return $this->mirror;
    }

    /**
     * @return bool
     */
    public function getMirror()
    {
        return $this->mirror;
    }

    /**
     * @param bool $mirror
     *
     * @return $this
     */
    public function setMirror($mirror)
    {
        $this->mirror = ! ! $mirror;

        return $this;
    }

    /**
     * @return int
     */
    public function getPadding()
    {
        return $this->padding;
    }

    /**
     * @param int $padding
     *
     * @return $this
     */
    public function setPadding($padding)
    {
        $this->padding = intval($padding);

        return $this;
    }

    /**
     * @return bool
     */
    public function isReverse()
    {
        return $this->reverse;
    }

    /**
     * @return bool
     */
    public function getReverse()
    {
        return $this->reverse;
    }

    /**
     * @param bool $reverse
     *
     * @return $this
     */
    public function setReverse($reverse)
    {
        $this->reverse = ! ! $reverse;

        return $this;
    }

    /**
     * @return int
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @param int $max
     *
     * @return $this
     */
    public function setMax($max)
    {
        $this->max = intval($max);

        return $this;
    }

    /**
     * @return string
     * @throws \ReflectionException
     * @throws \Zend_Reflection_Exception
     */
    public function jsonSerialize()
    {
        return Json::encode($this->getArrayCopy(), false, ['enableJsonExprFinder' => true]);
    }
}
