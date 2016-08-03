<?php

namespace LArtie\FlightStatsApi\Core\Methods;

use LArtie\FlightStatsApi\Core\Objects\TrackFlight;

/**
 * The Flight Tracks APIs give you access to information on an active flight, including position (lat/long),
 * altitude, bearing, speed and route.
 * Initial flight plans and aircraft positions are made available when they are received
 * (often roughly 24 hours in advance for flight plans) until roughly seven days after arrival.
 *
 * FlightStats provides the best available position for active flights,
 * either ASDI from the FAA or ADS-B from transceivers located around the globe.
 * In cases where the flight is out of range of either of these systems -- such as ocean crossings -- FlightStats derives
 * the position based on the last known location and its destination.
 * With a sourceType of 'derived', the API automatically returns the best available position.
 * Users also have the option of requesting the 'raw' data (either ASDI or ADS-B) or 'all' which will
 * return both derived and raw in the same payload.
 *
 * Class FlightTracks
 * @package LArtie\FlightStatsApi\Core\Methods
 */
final class FlightTracks extends BaseMethod
{
    /**
     * @var string
     */
    protected $baseMethod = 'flightstatus';

    /**
     * @var string
     */
    protected $objectKey = 'flightTrack';

    /**
     * @var string
     */
    protected $objectClassName = TrackFlight::class;

    /**
     * @var string
     */
    protected $version = 'v2';

    /**
     * Returns the positional track for a specific flight, specified by flight ID.
     * Flight plan may be optionally included.
     * To narrow down to only the freshest data, you may optionally limit the age (in minutes) and/or number of positions returned.
     * You can obtain a candidate Flight ID using the other Flight Status API's
     *
     * @param $flightId
     * @param array $data
     * @return array
     */
    public function byFlightId($flightId, $data = [])
    {
        $method = "flight/track/{$flightId}";

        return $this->get($method, $data);
    }

    /**
     * Returns the positional tracks of flights, with a given carrier and flight number, arriving or having arrived on the given date.
     * If 'hourOfDay' is specified, results will be limited to the given hour, unless 'numHours' is also specified.
     * Arrival airport may optionally be specified.
     * Flight plans may be optionally included.
     * To narrow down to only the freshest data, you may optionally limit the age (in minutes) and/or number of positions per track.
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
        $method = "flight/tracks/{$carrier}/{$flight}/arr";

        return $this->get($this->buildMethodViaDate($method, $year, $month, $day), $data);
    }

    /**
     * Returns the positional tracks of flights, with a given carrier and flight number, departing or having departed on the given date.
     * If 'hourOfDay' is specified, results will be limited to the given hour, unless 'numHours' is also specified.
     * Departure airport may optionally be specified. Flight plans may be optionally included.
     * To narrow down to only the freshest data, you may optionally limit the age (in minutes) or number of positions per track.
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
        $method = "flight/tracks/{$carrier}/{$flight}/dep";

        return $this->get($this->buildMethodViaDate($method, $year, $month, $day), $data);
    }
}