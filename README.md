# FlightStats API for Laravel

[![Latest Stable Version](https://poser.pugx.org/lartie/flight-stats-api/v/stable)](https://packagist.org/packages/lartie/flight-stats-api)
[![Total Downloads](https://poser.pugx.org/lartie/flight-stats-api/downloads)](https://packagist.org/packages/lartie/flight-stats-api)
[![Latest Unstable Version](https://poser.pugx.org/lartie/flight-stats-api/v/unstable)](https://packagist.org/packages/lartie/flight-stats-api)
[![License](https://poser.pugx.org/lartie/flight-stats-api/license)](https://packagist.org/packages/lartie/flight-stats-api)
[![composer.lock](https://poser.pugx.org/lartie/flight-stats-api/composerlock)](https://packagist.org/packages/lartie/flight-stats-api)

Package for flightstats.com

## Install

```sh
composer require "lartie/flight-stats-api"
```

```php
'providers' => [
    ...
    \LArtie\FlightStatsApi\FlightStatsApiServiceProvider::class, 
]
```

## Usage

### Airports

* `php array active($year = null, $month = null, $day = null, $params = [])`
* `php array all($params = [])`
* `php array fs($code, $params = [])`
* `php array iata($code, $year = null, $month = null, $day = null, $params = [])`
* `php array icao($code, $year = null, $month = null, $day = null, $params = [])`

### Airlines

* `php array active($year = null, $month = null, $day = null, $params = [])`
* `php array all($params = [])`
* `php array airportCode($code, $year = null, $month = null, $day = null)`
* `php array cityCode($code, $params = [])`
* `php array countryCode($code, $params = [])`
* `php array fs($code, $params = [])`
* `php array iata($code, $year = null, $month = null, $day = null, $params = [])`
* `php array icao($code, $year = null, $month = null, $day = null, $params = [])`
* `php array withinRadius($longitude, $latitude, $radiusMiles, $params = [])`

### Alerts

* `php array createFlightRuleByArrival($carrier, $flightNumber, $arrivalAirport, $year, $month, $day, $deliverTo, $type = 'json', $params = [])` 
* `php array createFlightRuleByDeparture($carrier, $flightNumber, $departureAirport, $year, $month, $day, $deliverTo, $type = 'json', $params = [])`
* `php array createFlightRuleForRouteWithArrivalDate($carrier, $flightNumber, $departureAirport, $arrivalAirport, $year, $month, $day, $deliverTo, $type = 'json', $params = [])`
* `php array createFlightRuleForRouteWithDepartureDate($carrier, $flightNumber, $departureAirport, $arrivalAirport, $year, $month, $day, $deliverTo, $type = 'json', $params = [])`
* `php array delete($ruleId, $params = [])`
* `php array retrieve($ruleId, $params = [])`
* `php array list($lessThan = null, $params = [])`
* `php array test($carrier, $flightNumber, $departureAirport, $arrivalAirport, $deliverTo, $type = 'json', $params = [])`

### Equipment

* `php array all($params = [])`
* `php array iata($code, $params = [])`

### FIDS

* `php array arrivals($airport)`
* `php array departures($airport)`

### Schedules

* `php array departingFrom($airport, $year, $month, $day, $hour, $params = [])`
* `php array arrivingTo($airport, $year, $month, $day, $hour, $params = [])`

# License
MIT
