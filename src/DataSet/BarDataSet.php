<?php

namespace Halfpastfour\PHPChartJS\DataSet;

use Halfpastfour\PHPChartJS\DataSet;

/**
 * Class BarDataSet
 *
 * @package Halfpastfour\PHPChartJS\DataSet
 */
class BarDataSet extends DataSet
{
    /**
     * @var string|null
     */
    protected $stack;

    /**
     * @return string|null
     */
    public function getStack()
    {
        return $this->stack;
    }

    /**
     * @param string|null $stack
     *
     * @return $this
     */
    public function setStack($stack)
    {
        $this->stack = is_null($stack) ? null : strval($stack);

        return $this;
    }
}
