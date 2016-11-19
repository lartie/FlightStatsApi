<?php

namespace LArtie\FlightStatsApi\Core\Methods;

use LArtie\FlightStatsApi\Core\Objects\Airline;

/**
 * The Airlines API provides basic reference data about one or more airlines.
 * @link https://developer.flightstats.com/api-docs/airlines/v1
 *
 * Class Airlines
 * @package App
 *
 */
final class Airlines extends BaseMethod
{
    /**
     * @var string
     */
    protected $baseMethod = 'airlines';

    /**
     * @var string
     */
    protected $objectKey = 'airlines';

    /**
     * @var string
     */
    protected $objectClassName = Airline::class;

    /**
     * Returns a listing of all airlines, including those that are not currently active
     * @param array $data
     * @return Airline[]
     */
    public function all($data = [])
    {
        return $this->get('all', $data);
    }

    /**
     * Returns a listing of active airlines on the given date or all
     *
     * @param null $year Four-digit year
     * @param null $month Month (1 to 12)
     * @param null $day Day of month
     * @param array $data
     * @return Airline[]
     */
    public function active($year = null, $month = null, $day = null, $data = [])
    {
        return $this->get($this->buildMethodViaDate('active', $year, $month, $day), $data);
    }

    /**
     * Returns the airline with the given FlightStats code, a globally unique code that is consistent across time
     *
     * @param $code
     * @param array $data
     * @return Airline[]
     */
    public function fs($code, $data = [])
    {
        return $this->get('fs/' . $code, $data);
    }

    /**
     * Returns a listing of airlines that have had the given IATA code
     *
     * @param $iataCode
     * @param null $year
     * @param null $month
     * @param null $day
     * @param array $data
     * @return Airline[]
     */
    public function iata($iataCode, $year = null, $month = null, $day = null, $data = [])
    {
        return $this->get($this->buildMethodViaDate('iata/' . $iataCode, $year, $month, $day), $data);
    }

    /**
     * Returns a listing of airlines that have had the given ICAO code
     *
     * @param $icaoCode
     * @param null $year
     * @param null $month
     * @param null $day
     * @param array $data
     * @return Airline[]
     */
    public function icao($icaoCode, $year = null, $month = null, $day = null, $data = [])
    {
        return $this->get($this->buildMethodViaDate('icao/' . $icaoCode, $year, $month, $day), $data);
    }
}