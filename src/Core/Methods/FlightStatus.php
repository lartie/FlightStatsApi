<?php

namespace LArtie\FlightStatsApi\Core\Methods;

use LArtie\FlightStatsApi\Core\Objects\StatusFlight;

/**
 * The Flight Status APIs give you access to current flight information, including scheduled,
 * estimated and actual departure/arrival times, equipment type, delay calculations, terminal, gate and baggage carousel.
 * Current flight information is made available for flights for roughly three days in advance of
 * departure until roughly seven days after arrival.
 *
 * Class FlightStatus
 * @package LArtie\FlightStatsApi\Core\Methods
 *
 */
final class FlightStatus extends BaseMethod
{
    /**
     * @var string
     */
    protected $baseMethod = 'flightstatus';

    /**
     * @var string
     */
    protected $objectKey = 'flightStatus';

    /**
     * @var string
     */
    protected $objectClassName = StatusFlight::class;

    /**
     * Returns the Flight Status associated with provided Flight ID.
     * The Flight ID is an arbitrary number that FlightStats uses to uniquely identify flights.
     *
     * @param $flightId
     * @param array $data
     * @return array
     */
    public function byFlightId($flightId, $data = [])
    {
        $method = "flight/status/{$flightId}";

        return $this->get($method, $data);
    }

    /**
     * Returns the Flight Statuses for the given Carrier and Flight Number that departed on the given date.
     * Optionally, the arrival airport may be specified.
     *
     * @param $carrier
     * @param $flight
     * @param $year
     * @param $month
     * @param $day
     * @param array $data
     * @return array
     */
    public function arrivingOnDate($carrier, $flight, $year, $month, $day, $data = [])
    {
        $method = "flight/status/{$carrier}/{$flight}/arr";

        return $this->get($this->buildMethodViaDate($method, $year, $month, $day), $data);
    }

    /**
     * Returns the Flight Statuses for the given Carrier and Flight Number that departed on the given date.
     * Optionally, the departure airport may be specified.
     *
     * @param $carrier
     * @param $flight
     * @param $year
     * @param $month
     * @param $day
     * @param array $data
     * @return array
     */
    public function departingOnDate($carrier, $flight, $year, $month, $day, $data = [])
    {
        $method = "flight/status/{$carrier}/{$flight}/dep";

        return $this->get($this->buildMethodViaDate($method, $year, $month, $day), $data);
    }
}