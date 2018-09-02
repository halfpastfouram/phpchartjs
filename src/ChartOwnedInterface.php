<?php

namespace Halfpastfour\PHPChartJS;

/**
 * Class DataSet
 * @package Halfpastfour\PHPChartJS
 */
interface ChartOwnedInterface
{
    /**
     * @param ChartInterface $chart
     *
     * @return $this
     */
    public function setOwner(ChartInterface $chart);

    /**
     * @return ChartInterface
     */
    public function owner();
}
