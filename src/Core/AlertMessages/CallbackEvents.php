<?php

namespace LArtie\FlightStatsApi\Core\AlertMessages;

/**
 * Class CallbackEvents
 * @package LArtie\FlightStatsApi\Models\AlertMessages
 */
class CallbackEvents
{
    /**
     * @var
     */
    private $type;

    /**
     * @var integer Configured parameter value for events that accept or require additional specification.

     */
    private $value;

    /**
     * CallbackEvents constructor.
     * @param object $event
     */
    public function __construct($event)
    {
        $this->type = $event->type;

        if (isset($event->value)) {
            $this->value = $event->value;
        }
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param int $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

}