<?php

namespace Halfpastfour\PHPChartJS\Collection;

use Halfpastfour\Collection\Collection\ArrayAccess;
use Halfpastfour\PHPChartJS\Delegate;
use JsonSerializable as JsonSerializableInterface;

/**
 * Class Data
 *
 * @package Halfpastfour\PHPChartJS\Collection
 */
class Data extends ArrayAccess implements JsonSerializableInterface
{
    use Delegate\JsonSerializable;
}
