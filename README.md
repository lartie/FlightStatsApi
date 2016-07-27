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

* ``` array active($year = null, $month = null, $day = null, $params = [])```
* ``` array all($params = [])```
* ``` array fs($code, $params = [])```
* ``` array iata($code, $year = null, $month = null, $day = null, $params = [])```
* ``` array icao($code, $year = null, $month = null, $day = null, $params = [])```

### Airlines

* ``` array active($year = null, $month = null, $day = null, $params = [])```
* ``` array all($params = [])```
* ``` array airportCode($code, $year = null, $month = null, $day = null)```
* ``` array cityCode($code, $params = [])```
* ``` array countryCode($code, $params = [])```
* ``` array fs($code, $params = [])```
* ``` array iata($code, $year = null, $month = null, $day = null, $params = [])```
* ``` array icao($code, $year = null, $month = null, $day = null, $params = [])```
* ``` array withinRadius($longitude, $latitude, $radiusMiles, $params = [])```

### Alerts

* ``` array createFlightRuleByArrival($carrier, $flightNumber, $arrivalAirport, $year, $month, $day, $deliverTo, $type = 'json', $params = [])``` 
* ``` array createFlightRuleByDeparture($carrier, $flightNumber, $departureAirport, $year, $month, $day, $deliverTo, $type = 'json', $params = [])```
* ``` array createFlightRuleForRouteWithArrivalDate($carrier, $flightNumber, $departureAirport, $arrivalAirport, $year, $month, $day, $deliverTo, $type = 'json', $params = [])```
* ``` array createFlightRuleForRouteWithDepartureDate($carrier, $flightNumber, $departureAirport, $arrivalAirport, $year, $month, $day, $deliverTo, $type = 'json', $params = [])```
* ``` array delete($ruleId, $params = [])```
* ``` array retrieve($ruleId, $params = [])```
* ``` array list($lessThan = null, $params = [])```
* ``` array test($carrier, $flightNumber, $departureAirport, $arrivalAirport, $deliverTo, $type = 'json', $params = [])```

### Equipment

* ``` array all($params = [])```
* ``` array iata($code, $params = [])```

### FIDS

* ``` array arrivals($airport)```
* ``` array departures($airport)```

### Schedules

* ``` array departingFrom($airport, $year, $month, $day, $hour, $params = [])```
* ``` array arrivingTo($airport, $year, $month, $day, $hour, $params = [])```

# License
MIT
