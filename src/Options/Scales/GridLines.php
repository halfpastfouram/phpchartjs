<?php

namespace Halfpastfour\PHPChartJS\Options\Scales;

use Halfpastfour\PHPChartJS\ArraySerializableInterface;
use Halfpastfour\PHPChartJS\Delegate\ArraySerializable;
use Zend\Json\Json;

/**
 * Class GridLines
 *
 * @package Halfpastfour\PHPChartJS\Options\Scales
 */
class GridLines implements ArraySerializableInterface, \JsonSerializable
{
    use ArraySerializable;

    /**
     * @var bool
     */
    protected $display;

    /**
     * @var string|string[]
     */
    protected $color;

    /**
     * @var float[]
     */
    protected $borderDash;

    /**
     * @var float
     */
    protected $borderDashOffset;

    /**
     * @var int|int[]
     */
    protected $lineWidth;

    /**
     * @var bool
     */
    protected $drawBorder;

    /**
     * @var bool
     */
    protected $drawOnChartArea;

    /**
     * @var bool
     */
    protected $drawTicks;

    /**
     * @var int
     */
    protected $tickMarkLength;

    /**
     * @var int
     */
    protected $zeroLineWidth;

    /**
     * @var string
     */
    protected $zeroLineColor;

    /**
     * @var bool
     */
    protected $offsetGridLines;

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
        $this->display = $display;

        return $this;
    }

    /**
     * @return string|string[]
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string|string[] $color
     *
     * @return $this
     */
    public function setColor($color)
    {
        if (is_array($color)) {
            array_walk_recursive(
                $color,
                function (&$value) {
                    $value = strval($value);
                }
            );
            $this->color = $color;
        } else {
            $this->color = is_null($color) ? null : strval($color);
        }

        return $this;
    }

    /**
     * @return \float[]
     */
    public function getBorderDash()
    {
        return $this->borderDash;
    }

    /**
     * @param \float[] $borderDash
     *
     * @return $this
     */
    public function setBorderDash($borderDash)
    {
        if (is_array($borderDash)) {
            array_walk_recursive(
                $borderDash,
                function (&$value) {
                    $value = floatval($value);
                }
            );
            $this->borderDash = $borderDash;
        }

        return $this;
    }

    /**
     * @return float
     */
    public function getBorderDashOffset()
    {
        return $this->borderDashOffset;
    }

    /**
     * @param float $borderDashOffset
     *
     * @return $this
     */
    public function setBorderDashOffset($borderDashOffset)
    {
        $this->borderDashOffset = floatval($borderDashOffset);

        return $this;
    }

    /**
     * @return int|int[]
     */
    public function getLineWidth()
    {
        return $this->lineWidth;
    }

    /**
     * @param int|int[] $lineWidth
     *
     * @return $this
     */
    public function setLineWidth($lineWidth)
    {
        if (is_array($lineWidth)) {
            array_walk_recursive(
                $lineWidth,
                function (&$value) {
                    $value = intval($value);
                }
            );
            $this->lineWidth = $lineWidth;
        } else {
            $this->lineWidth = is_null($lineWidth) ? null : intval($lineWidth);
        }

        return $this;
    }

    /**
     * @return bool
     */
    public function isDrawBorder()
    {
        return $this->drawBorder;
    }

    /**
     * @return bool
     */
    public function getDrawBorder()
    {
        return $this->drawBorder;
    }

    /**
     * @param bool $drawBorder
     *
     * @return $this
     */
    public function setDrawBorder($drawBorder)
    {
        $this->drawBorder = boolval($drawBorder);

        return $this;
    }

    /**
     * @return bool
     */
    public function isDrawOnChartArea()
    {
        return $this->drawOnChartArea;
    }

    /**
     * @return bool
     */
    public function getDrawOnChartArea()
    {
        return $this->drawOnChartArea;
    }

    /**
     * @param bool $drawOnChartArea
     *
     * @return $this
     */
    public function setDrawOnChartArea($drawOnChartArea)
    {
        $this->drawOnChartArea = boolval($drawOnChartArea);

        return $this;
    }

    /**
     * @return bool
     */
    public function getDrawTicks()
    {
        return $this->drawTicks;
    }

    /**
     * @return bool
     */
    public function isDrawTicks()
    {
        return $this->drawTicks;
    }

    /**
     * @param bool $drawTicks
     *
     * @return $this
     */
    public function setDrawTicks($drawTicks)
    {
        $this->drawTicks = boolval($drawTicks);

        return $this;
    }

    /**
     * @return int
     */
    public function getTickMarkLength()
    {
        return $this->tickMarkLength;
    }

    /**
     * @param int $tickMarkLength
     *
     * @return $this
     */
    public function setTickMarkLength($tickMarkLength)
    {
        $this->tickMarkLength = intval($tickMarkLength);

        return $this;
    }

    /**
     * @return int
     */
    public function getZeroLineWidth()
    {
        return $this->zeroLineWidth;
    }

    /**
     * @param int $zeroLineWidth
     *
     * @return $this
     */
    public function setZeroLineWidth($zeroLineWidth)
    {
        $this->zeroLineWidth = intval($zeroLineWidth);

        return $this;
    }

    /**
     * @return string
     */
    public function getZeroLineColor()
    {
        return $this->zeroLineColor;
    }

    /**
     * @param string $zeroLineColor
     *
     * @return $this
     */
    public function setZeroLineColor($zeroLineColor)
    {
        $this->zeroLineColor = is_null($zeroLineColor) ? null : strval($zeroLineColor);

        return $this;
    }

    /**
     * @return bool
     */
    public function isOffsetGridLines()
    {
        return $this->offsetGridLines;
    }

    /**
     * @return bool
     */
    public function getOffsetGridLines()
    {
        return $this->offsetGridLines;
    }

    /**
     * @param bool $offsetGridLines
     *
     * @return $this
     */
    public function setOffsetGridLines($offsetGridLines)
    {
        $this->offsetGridLines = boolval($offsetGridLines);

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
