<?php

namespace Halfpastfour\PHPChartJS\Delegate;

use Halfpastfour\PHPChartJS\ArraySerializableInterface;

/**
 * Class ArraySerializable
 *
 * @package Halfpastfour\PHPChartJS\Model
 */
trait ArraySerializable
{
    /**
     * Returns an array copy of the properties and their current values in this class
     *
     * @return array
     */
    public function getArrayCopy()
    {
        $currentValues = array_map(function ($value) {
            if (is_object($value)) {
                if ($value instanceof ArraySerializableInterface) {
                    return $value->getArrayCopy();
                }
            }

            return $value;
        }, get_object_vars($this));

        // Filter out null values and return the remaining.
        return array_filter($currentValues, function ($value) {
            return ! is_null($value);
        });
    }
}
