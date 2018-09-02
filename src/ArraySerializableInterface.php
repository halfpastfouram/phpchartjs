<?php

namespace Halfpastfour\PHPChartJS;

/**
 * Interface ArraySerializableInterface
 * @package Halfpastfour\PHPChartJS
 */
interface ArraySerializableInterface
{
    /**
     * Should return an array containing all values.
     *
     * @return array
     */
    public function getArrayCopy();
}
