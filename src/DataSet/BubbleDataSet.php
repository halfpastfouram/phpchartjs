<?php

namespace Halfpastfour\PHPChartJS\DataSet;

use Halfpastfour\PHPChartJS\DataSet;

/**
 * Class BubbleDataSet
 *
 * @package Halfpastfour\PHPChartJS\DataSet
 */
class BubbleDataSet extends DataSet
{
    /**
     * @var string
     */
    protected $pointStyle;

    /**
     * @var int
     */
    protected $radius;

    /**
     * @return string
     */
    public function getPointStyle()
    {
        return $this->pointStyle;
    }

    /**
     * @param string $pointStyle
     *
     * @return \Halfpastfour\PHPChartJS\DataSet\BubbleDataSet
     */
    public function setPointStyle($pointStyle)
    {
        $this->pointStyle = $pointStyle;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     *
     * @return \Halfpastfour\PHPChartJS\DataSet\BubbleDataSet
     */
    public function setRadius($radius)
    {
        $this->radius = $radius;

        return $this;
    }
}
