<?php

namespace LArtie\FlightStatsApi\Core\Methods;
use LArtie\FlightStatsApi\Core\Objects\AlertRule;

/**
 * @link https://developer.flightstats.com/api-docs/alerts/v1
 */
final class Alerts extends BaseMethod
{
    /**
     * @var string
     */
    protected $baseMethod = 'alerts';

    /**
     * @var array
     */
    private $objectKeys = ['rule', 'alertCapabilities', 'appendix'];

    /**
     * @var
     */
    protected $objectClassName = AlertRule::class;

    /**
     * Create a flight rule to be monitored for a specific flight arriving at an airport on the given day.
     * Returns the fully constructed flight rule that was created.
     *
     * @param $carrier
     * @param $flightNumber
     * @param $arrivalAirport
     * @param $year
     * @param $month
     * @param $day
     * @param $deliverTo
     * @param string $type
     * @param array $data
     * @return mixed|string
     */
    public function createFlightRuleByArrival($carrier, $flightNumber, $arrivalAirport, $year, $month, $day, $deliverTo, $type = 'json', $data = [])
    {
        $method = "create/{$carrier}/{$flightNumber}/to/{$arrivalAirport}/arriving/{$year}/{$month}/{$day}";

        $data['deliverTo'] = $deliverTo;
        $data['type'] = $type;

        return $this->get($method, $data);
    }

    /**
     * Create a flight rule to be monitored for a specific flight departing from an airport on the given day.
     * Returns the fully constructed flight rule that was created.
     *
     * @param $carrier
     * @param $flightNumber
     * @param $departureAirport
     * @param $year
     * @param $month
     * @param $day
     * @param $deliverTo
     * @param string $type
     * @param array $data
     * @return mixed|string
     */
    public function createFlightRuleByDeparture($carrier, $flightNumber, $departureAirport, $year, $month, $day, $deliverTo, $type = 'json', $data = [])
    {
        $method = "create/{$carrier}/{$flightNumber}/from/{$departureAirport}/departing/{$year}/{$month}/{$day}";

        $data['deliverTo'] = $deliverTo;
        $data['type'] = $type;

        return $this->get($method, $data);
    }

    /**
     * @param $carrier
     * @param $flightNumber
     * @param $departureAirport
     * @param $arrivalAirport
     * @param $year
     * @param $month
     * @param $day
     * @param $deliverTo
     * @param string $type
     * @param array $data
     * @return mixed|string
     */
    public function createFlightRuleForRouteWithArrivalDate($carrier, $flightNumber, $departureAirport, $arrivalAirport, $year, $month, $day, $deliverTo, $type = 'json', $data = [])
    {
        $method = "create/{$carrier}/{$flightNumber}/from/{$departureAirport}/to/{$arrivalAirport}/arriving/{$year}/{$month}/{$day}";

        $data['deliverTo'] = $deliverTo;
        $data['type'] = $type;

        return $this->get($method, $data);
    }

    /**
     * Create a flight rule to be monitored for a specific flight between two airports departing on the given day.
     * Returns the fully constructed flight rule that was created.
     *
     * @param $carrier
     * @param $flightNumber
     * @param $departureAirport
     * @param $arrivalAirport
     * @param $year
     * @param $month
     * @param $day
     * @param $deliverTo
     * @param string $type
     * @param array $data
     * @return mixed|string
     */
    public function createFlightRuleForRouteWithDepartureDate($carrier, $flightNumber, $departureAirport, $arrivalAirport, $year, $month, $day, $deliverTo, $type = 'json', $data = [])
    {
        $method = "create/{$carrier}/{$flightNumber}/from/{$departureAirport}/to/{$arrivalAirport}/departing/{$year}/{$month}/{$day}";

        $data['deliverTo'] = $deliverTo;
        $data['type'] = $type;

        return $this->get($method, $data);
    }

    /**
     * Deletes a flight rule that was previously created given a rule ID.
     * Returns the flight rule that was deleted.
     * Note that once deleted any subsequent calls with the same ID will return a rule not found exception.
     *
     * @param $ruleId
     * @param array $data
     * @return mixed|string
     */
    public function delete($ruleId, $data = [])
    {
        return $this->get('delete/' . $ruleId, $data);
    }

    /**
     * Returns the flight rule that was previously created given a rule ID.
     *
     * @param $ruleId
     * @param array $data
     * @return mixed|string
     */
    public function retrieve($ruleId, $data = [])
    {
        return $this->get('get/' . $ruleId, $data);
    }

    /**
     * Returns at most the last thousand Alert Rule IDs.
     * See the alternative form of this to specify the max Rule ID, which allows for iteration over all Rule IDs.
     *
     * @param null $lessThan
     * @param array $data
     * @return mixed|string
     */
    public function list($lessThan = null, $data = [])
    {
        $method = 'list';

        if (!is_null($lessThan)) {
            $method .= '/' . $lessThan;
        }

        return $this->get($method, $data);
    }

    /**
     * When you invoke this service, FlightStats will send a simulated alert - a fake event for a fake flight - to your URL.
     *
     * @param $carrier
     * @param $flightNumber
     * @param $departureAirport
     * @param $arrivalAirport
     * @param $deliverTo
     * @param string $type
     * @param array $data
     * @return mixed|string
     */
    public function test($carrier, $flightNumber, $departureAirport, $arrivalAirport, $deliverTo, $type = 'json', $data = [])
    {
        $method = "testdelivery/{$carrier}/{$flightNumber}/from/{$departureAirport}/to/{$arrivalAirport}";

        $data['deliverTo'] = $deliverTo;
        $data['type'] = $type;

        return $this->get($method, $data);
    }

    /**
     * @param $content
     * @return array
     */
    protected function jsonToObject($content)
    {
        return new AlertRule($content);
    }
}