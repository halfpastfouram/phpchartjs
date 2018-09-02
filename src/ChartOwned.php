<?php

namespace Halfpastfour\PHPChartJS;

/**
 * Class ChartOwned
 * @package Halfpastfour\PHPChartJS
 */
trait ChartOwned
{
    /**
     * @var ChartInterface
     */
    private $owner;

    /**
     * @param ChartInterface $chart
     *
     * @return $this
     */
    public function setOwner(ChartInterface $chart)
    {
        $this->owner        = $chart;

        return $this;
    }

    /**
     * @return ChartInterface
     */
    public function owner()
    {
        return $this->owner;
    }
}
