<?php

namespace LArtie\FlightStatsApi\Core\Objects;

/**
 * Class BaseObject
 * @package LArtie\FlightStatsApi\Models\Objects
 */
class BaseObject
{
    final public function __construct($data)
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }
}