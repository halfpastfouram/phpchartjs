<?php

namespace Halfpastfour\PHPChartJS\Delegate;

/**
 * Trait StringUtils
 *
 * @package Halfpastfour\PHPChartJS\Delegate
 */
trait StringUtils
{
    /**
     * @param array $input
     *
     * @return array
     */
    public function recursiveToString(array $input)
    {
        array_walk_recursive($input, function (&$value) {
            $value = strval($value);
        });

        return $input;
    }

    /**
     * @param array $input
     *
     * @return array
     */
    public function recursiveToFloat(array $input)
    {
        array_walk_recursive($input, function (&$value) {
            $value = floatval($value);
        });

        return $input;
    }

    /**
     * @param array $input
     *
     * @return array
     */
    public function recursiveToInt(array $input)
    {
        array_walk_recursive($input, function (&$value) {
            $value = intval($value);
        });

        return $input;
    }
}
