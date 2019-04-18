<?php

namespace Halfpastfour\PHPChartJS;

use Halfpastfour\PHPChartJS\Delegate\ArraySerializable;
use Halfpastfour\PHPChartJS\Options\Animation;
use Halfpastfour\PHPChartJS\Options\Hover;
use Halfpastfour\PHPChartJS\Options\Layout;
use Halfpastfour\PHPChartJS\Options\Legend;
use Halfpastfour\PHPChartJS\Options\Scales;
use Halfpastfour\PHPChartJS\Options\Title;
use Halfpastfour\PHPChartJS\Options\Tooltips;
use Zend\Json\Expr;
use Zend\Json\Json;

/**
 * Class Options
 * @package Halfpastfour\PHPChartJS
 */
class Options implements ChartOwnedInterface, ArraySerializableInterface, \JsonSerializable
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
     * @var Hover
     */
    protected $hover;

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
     * @var Expr
     */
    protected $legendCallback;

    /**
     * @return Expr
     */
    public function getLegendCallback()
    {
    	return $this->legendCallback;
    }

    /**
     * @param Expr $legendCallback
     *
     * @return $this
     */
    public function setLegendCallback($legendCallback)
    {
    	$this->legendCallback = new Expr(strval($legendCallback));

    	return $this;
    }

    /**
     * @return Layout
     */
    public function getLayout()
    {
        if (is_null($this->layout)) {
            $this->layout   = new Layout();
        }

        return $this->layout;
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
     * @return string
     */
    public function jsonSerialize()
    {
        return Json::encode($this->getArrayCopy(), false, [ 'enableJsonExprFinder' => true ]);
    }
}
