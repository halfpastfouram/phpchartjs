<?php

namespace Halfpastfour\PHPChartJS;

use Halfpastfour\PHPChartJS\Delegate\ArraySerializable;
use Halfpastfour\PHPChartJS\Options\Animation;
use Halfpastfour\PHPChartJS\Options\Elements;
use Halfpastfour\PHPChartJS\Options\Hover;
use Halfpastfour\PHPChartJS\Options\Layout;
use Halfpastfour\PHPChartJS\Options\Legend;
use Halfpastfour\PHPChartJS\Options\Scales;
use Halfpastfour\PHPChartJS\Options\Title;
use Halfpastfour\PHPChartJS\Options\Tooltips;
use JsonSerializable;
use Zend\Json\Expr;

/**
 * Class Options
 *
 * @package Halfpastfour\PHPChartJS
 */
class Options implements ChartOwnedInterface, ArraySerializableInterface, JsonSerializable
{
    use ChartOwned;
    use ArraySerializable;

    /**
     * @var Layout
     */
    protected $layout;

    /**
     * @var Title
     */
    protected $title;

    /**
     * @var Elements
     */
    protected $elements;

    /**
     * @var Hover
     */
    protected $hover;

    /**
     * @var \Zend\Json\Expr
     */
    protected $onClick;

    /**
     * @var Scales
     */
    protected $scales;

    /**
     * @var Animation
     */
    protected $animation;

    /**
     * @var Legend
     */
    protected $legend;

    /**
     * @var Tooltips
     */
    protected $tooltips;

    /**
     * @var bool
     */
    protected $maintainAspectRatio;

    /**
     * @return Layout
     */
    public function getLayout()
    {
        if (is_null($this->layout)) {
            $this->layout = new Layout();
        }

        return $this->layout;
    }

    /**
     * @return Elements
     */
    public function getElements()
    {
        if (is_null($this->elements)) {
            $this->elements = new Elements();
        }

        return $this->elements;
    }

    /**
     * @return Title
     */
    public function getTitle()
    {
        if (is_null($this->title)) {
            $this->title = new Title();
        }

        return $this->title;
    }

    /**
     * @return Hover
     */
    public function getHover()
    {
        if (is_null($this->hover)) {
            $this->hover = new Hover();
        }

        return $this->hover;
    }

    /**
     * @return \Zend\Json\Expr
     */
    public function getOnClick()
    {
        return $this->onClick;
    }

    /**
     * @param string $onClick
     *
     * @return $this
     */
    public function setOnClick($onClick)
    {
        $this->onClick = new Expr(strval($onClick));

        return $this;
    }

    /**
     * @return Scales
     */
    public function getScales()
    {
        if (is_null($this->scales)) {
            $this->scales = new Scales();
        }

        return $this->scales;
    }

    /**
     * @return Animation
     */
    public function getAnimation()
    {
        if (is_null($this->animation)) {
            $this->animation = new Animation();
        }

        return $this->animation;
    }

    /**
     * @return Legend
     */
    public function getLegend()
    {
        if (is_null($this->legend)) {
            $this->legend = new Legend();
        }

        return $this->legend;
    }

    /**
     * @return Tooltips
     */
    public function getTooltips()
    {
        if (is_null($this->tooltips)) {
            $this->tooltips = new Tooltips();
        }

        return $this->tooltips;
    }

    /**
     * @return bool
     */
    public function isMaintainAspectRatio()
    {
        if (is_null($this->maintainAspectRatio)) {
            $this->maintainAspectRatio = true;
        }

        return $this->maintainAspectRatio;
    }

    /**
     * @param bool $flag
     *
     * @return $this
     */
    public function setMaintainAspectRatio($flag)
    {
        $this->maintainAspectRatio = boolval($flag);

        return $this;
    }

    /**
     * @return array
     */
    public function jsonSerialize()
    {
        return $this->getArrayCopy();
    }
}
