<?php

namespace LArtie\FlightStatsApi\Core\Methods;

use LArtie\FlightStatsApi\Core\Objects\ScheduledFlight;

/**
 *
 * Class Schedules
 */
final class Schedules extends BaseMethod
{
    /**
     * @var string
     */
    protected $baseMethod = 'schedules';

    /**
     * @var string
     */
    protected $objectKey = 'scheduledFlights';

    /**
     * @var string
     */
    protected $objectClassName = ScheduledFlight::class;

    /**
     * @param $airport
     * @param $year
     * @param $month
     * @param $day
     * @param $hour
     * @param array $data
     * @return ScheduledFlight[]
     */
    public function departingFrom($airport, $year, $month, $day, $hour, $data = [])
    {
        $method = "from/{$airport}/departing/{$year}/{$month}/{$day}/{$hour}";

        return $this->get($method, $data);
    }

    /**
     * @param $airport
     * @param $year
     * @param $month
     * @param $day
     * @param $hour
     * @param array $data
     * @return ScheduledFlight[]
     */
    public function arrivingTo($airport, $year, $month, $day, $hour, $data = [])
    {
        $method = "to/{$airport}/arriving/{$year}/{$month}/{$day}/{$hour}";

        return $this->get($method, $data);
    }
}