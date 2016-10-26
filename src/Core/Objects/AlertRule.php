<?php

namespace LArtie\FlightStatsApi\Core\Objects;

/**
 * Class Alert
 * @package LArtie\FlightStatsApi\Models\Objects
 * @link https://developer.flightstats.com/api-docs/alerts/v1/alertsResponse#alertRule
 *
 * @property integer $id The id of the rule to be used for retrieval or deletion.
 * @property string $name The name of this rule as provided or assigned by default otherwise.
 * @property string $description
 * @property integer $flightNumber The flight identification number and any additional characters (String).
 * @property object $ruleEvents Holder for the event rules that will trigger alerts.
 * @property object $delivery Holder element for the alert delivery configuration.
 */
final class AlertRule extends BaseObject
{

}