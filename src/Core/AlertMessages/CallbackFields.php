<?php

namespace LArtie\FlightStatsApi\Core\AlertMessages;

use Illuminate\Support\Facades\Log;
use LArtie\FlightStatsApi\Core\Objects\AlertRule;
use LArtie\FlightStatsApi\Core\Objects\StatusFlight;

/**
 * Class CallbackFields
 * @package LArtie\FlightStatsApi\Models\AlertMessages
 * @link https://developer.flightstats.com/api-docs/alerts/v1/alertsCallback
 *
 * Alert Messages are produced when an existing alert rule is triggered, and delivered to the destination specified by the rule.
 * Currently, the only supported delivery mechanism is HTTP POST;
 * this means you must have a running web server configured to accept POST requests to the delivery URL given in the rule.
 * Your web server will receive Alert Messages in your requested format, structured according to the specification below.
 *
 * @property CallbackEvents $event The event that has triggered the alert.
 * @property object $dataSource The source of the data from which the event was detected.
 * @property string $dateTimeRecorded The UTC date and time of the event in ISO-8601 format. yyyy-MM-dd'T'HH:mm:ss.SSSZ
 * @property AlertRule $rule The Alert Rule that was triggered.
 * @property StatusFlight $flightStatus The Flight Status that triggered the rule.
 */
class CallbackFields
{
    /**
     * CallbackFields constructor.
     * @param $alert
     */
    public function __construct($alert)
    {
        $this->event = new CallbackEvents($alert->event);

        Log::info(var_export($alert->event, true));
        
        $this->dataSource = $alert->dataSource;
        $this->dateTimeRecorded = $alert->dateTimeRecorded;
        $this->rule = new AlertRule($alert->rule);
        $this->flightStatus = new StatusFlight($alert->flightStatus);
    }

    /**
     * @return CallbackEvents
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param CallbackEvents $event
     */
    public function setEvent(CallbackEvents $event)
    {
        $this->event = $event;
    }

    /**
     * @return AlertRule
     */
    public function getRule()
    {
        return $this->rule;
    }

    /**
     * @param AlertRule $rule
     */
    public function setRule(AlertRule $rule)
    {
        $this->rule = $rule;
    }

    /**
     * @return object
     */
    public function getDataSource()
    {
        return $this->dataSource;
    }

    /**
     * @param object $dataSource
     */
    public function setDataSource($dataSource)
    {
        $this->dataSource = $dataSource;
    }

    /**
     * @return string
     */
    public function getDateTimeRecorded()
    {
        return $this->dateTimeRecorded;
    }

    /**
     * @param string $dateTimeRecorded
     */
    public function setDateTimeRecorded($dateTimeRecorded)
    {
        $this->dateTimeRecorded = $dateTimeRecorded;
    }

    /**
     * @return StatusFlight
     */
    public function getFlightStatus()
    {
        return $this->flightStatus;
    }

    /**
     * @param StatusFlight $flightStatus
     */
    public function setFlightStatus(StatusFlight $flightStatus)
    {
        $this->flightStatus = $flightStatus;
    }
}