<?php

namespace LArtie\FlightStatsApi\Core\Methods;

use Exception;
use LArtie\FlightStatsApi\Core\Exceptions\FlightStatsException;
use LArtie\FlightStatsApi\Core\Objects\Airport;

/**
 * The Airports API provides basic reference data about one or more airports.
 *
 * Class Airports
 * @package App
 */
final class Airports extends BaseMethod
{
    /**
     * @var string
     */
    protected $baseMethod = 'airports';

    /**
     * @var string
     */
    protected $objectKey = 'airports';

    /**
     * @var string
     */
    protected $objectClassName = Airport::class;

    /**
     * Returns a listing of all airports, including those that are not currently active
     *
     * @param array $data
     * @return Airport[]
     */
    public function all($data = [])
    {
        return $this->get('all', $data);
    }

    /**
     * Returns a listing of currently active airports
     *
     * @param null $year
     * @param null $month
     * @param null $day
     * @return Airport[]
     */
    public function active($year = null, $month = null, $day = null)
    {
        $method = $this->buildMethodViaDate('active', $year, $month, $day);

        return $this->get($method);
    }

    /**
     * Returns the airport that currently has the given code (or null if none)
     *
     * @param $code
     * @param null $year
     * @param null $month
     * @param null $day
     * @return Airport[]
     */
    public function airportCode($code, $year = null, $month = null, $day = null)
    {
        $method = $this->buildMethodViaDate($code, $year, $month, $day);

        if ($method == $code) {
            $method .= '/today';
        }

        return $this->get($method);
    }

    /**
     * Returns a listing of airports that have had the given city code
     *
     * @param $cityCode
     * @return Airport[]
     */
    public function cityCode($cityCode)
    {
        return $this->get('cityCode/' . $cityCode);
    }

    /**
     * Returns a listing of airports that have had the given country code
     *
     * @param $countryCode
     * @return Airport[]
     */
    public function countryCode($countryCode)
    {
        return $this->get('countryCode/' . $countryCode);
    }

    /**
     * Returns the airport with the given FlightStats code, a globally unique code across time
     *
     * @param $code
     * @return Airport[]
     */
    public function fs($code)
    {
        return $this->get('fs/' . $code);
    }

    /**
     * Returns a listing of airports that have had the given IATA code
     *
     * @param $iataCode
     * @param null $year
     * @param null $month
     * @param null $day
     * @return Airport[]
     */
    public function iata($iataCode, $year = null, $month = null, $day = null)
    {
        $method = $this->buildMethodViaDate('iata/' . $iataCode, $year, $month, $day);

        return $this->get($method);
    }

    /**
     * Returns a listing of airports that have had the given ICAO code
     *
     * @param $icaoCode
     * @param null $year
     * @param null $month
     * @param null $day
     * @return Airport[]
     */
    public function icao($icaoCode, $year = null, $month = null, $day = null)
    {
        $method = $this->buildMethodViaDate('icao/' . $icaoCode, $year, $month, $day);

        return $this->get($method);
    }

    /**
     * Returns a listing of airports located within a specified radius of the given position.
     *
     * @param $longitude
     * @param $latitude
     * @param $radiusMiles
     * @return Airport[]
     * @throws FlightStatsException
     */
    public function withinRadius($longitude, $latitude, $radiusMiles)
    {
        if (!isset($longitude, $latitude, $radiusMiles)) {
            throw new FlightStatsException('Поля longitude, latitude, radiusMiles должны быть заполнены полностью или отсутствовать вообще.');
        }

        $method = "withinRadius/{$longitude}/{$latitude}/{$radiusMiles}";

        return $this->get($method);
    }
}