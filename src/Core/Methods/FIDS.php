<?php

namespace LArtie\FlightStatsApi\Core\Methods;

use LArtie\FlightStatsApi\Core\Objects\FIDS as FIDSObject;

/**
 * The FIDS API is specifically designed to provide the data needed by FIDS (Flight Information Display System)
 * displays such as those commonly deployed in airport terminals, hotel lobbies, and other places travelers are found.
 *
 * Highly flexible, the FIDS API offers a wide range of fields to choose from.
 * The response contains only the fields you request, presented in a simple flat structure that's drop-in ready for most applications.
 *
 *
 * Class FIDS
 *
 * @method string getCodeType() IATA, ICAO or FS
 * @method string setCodeType($code) IATA, ICAO or FS
 * @method string getSortFields()
 * @method string setSortFields($fields)
 * @method string getExcludeAirlines()
 * @method string setExcludeAirlines($airlines)
 * @method string getIncludeAirlines()
 * @method string setIncludeAirlines($airlines)
 * @method string getTerminal()
 * @method string setTerminal($terminal)
 * @method integer getTimeFormat() 12 or 24
 * @method integer setTimeFormat($number) 12 or 24
 * @method integer getTimeWindowBegin()
 * @method integer setTimeWindowBegin($time)
 * @method integer getTimeWindowEnd()
 * @method integer setTimeWindowEnd($time)
 * @method integer getMaxFlights()
 * @method integer setMaxFlights($max)
 * @method integer getLateMinutes() Defaults to 100
 * @method integer setLateMinutes($minutes) Defaults to 100
 * @method integer getBoardingMinutes()
 * @method integer setBoardingMinutes($minutes)
 * @method boolean getUseRunwayTimes()
 * @method boolean setUseRunwayTimes($times)
 * @method boolean getExcludeCargoOnlyFlights()
 * @method boolean setExcludeCargoOnlyFlights(boolean $value)
 */
final class FIDS extends BaseMethod
{
    /**
     * @var string
     */
    protected $baseMethod = 'fids';

    /**
     * @var string
     */
    protected $objectKey = 'fids';

    /**
     * @var string
     */
    protected $objectClassName = FIDSObject::class;

    /**
     * @var array
     */
    private $parameters = [];

    /**
     *
     * @param $airport
     * @return array
     */
    public function departures($airport)
    {
        return $this->get($airport . '/departures');
    }

    /**
     * @param $airport
     * @return array
     */
    public function arrivals($airport)
    {
        return $this->get($airport . '/arrivals');
    }

    /**
     * Билд для необязательных параметров
     * @param $name
     * @param $argument
     * @return null|string
     */
    public function __call($name, $argument)
    {
        $args = preg_split('/(?<=\w)(?=[A-Z])/', $name);
        $action = array_shift($args);
        $value = lcfirst(implode('', $args));

        switch ($action) {
            case 'get':

                if (array_key_exists($value, $this->parameters)) {
                    return $this->parameters[$value];
                }
                return null;

            case 'set':
                return $this->parameters[$value] = $argument[0];
        }

        return null;
    }
}