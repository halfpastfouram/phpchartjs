<?php

namespace Halfpastfour\PHPChartJS\Options;

use Halfpastfour\PHPChartJS\ArraySerializableInterface;
use Halfpastfour\PHPChartJS\Delegate\ArraySerializable;
use Halfpastfour\PHPChartJS\Options\Scales\XAxis;
use Halfpastfour\PHPChartJS\Options\Scales\XAxisCollection;
use Halfpastfour\PHPChartJS\Options\Scales\YAxis;
use Halfpastfour\PHPChartJS\Options\Scales\YAxisCollection;
use Zend\Json\Json;

/**
 * Class Scales
 * @package Halfpastfour\PHPChartJS\Options
 */
class Scales implements ArraySerializableInterface, \JsonSerializable
{
    use ArraySerializable;

    /**
     * @var XAxisCollection
     */
    private $xAxes;

    /**
     * @var YAxisCollection
     */
    private $yAxes;

    /**
     * @return XAxis
     */
    public function createXAxis()
    {
        return new XAxis();
    }

    /**
     * @return YAxis
     */
    public function createYAxis()
    {
        return new YAxis();
    }

    /**
     * @return XAxisCollection
     */
    public function getXAxes()
    {
        if (is_null($this->xAxes)) {
            $this->xAxes = new XAxisCollection();
        }

        return $this->xAxes;
    }

    /**
     * @return YAxisCollection
     */
    public function getYAxes()
    {
        if (is_null($this->yAxes)) {
            $this->yAxes = new YAxisCollection();
        }

        return $this->yAxes;
    }

    /**
     * @return string
     */
    public function jsonSerialize()
    {
        return Json::encode($this->getArrayCopy(), false, [ 'enableJsonExprFinder' => true ]);
    }
}
