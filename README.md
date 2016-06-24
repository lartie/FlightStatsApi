# Flight Stats API for Laravel

Пакет для работы с flightstats.com

- Зависимости

Какое либо описание захуярить тут.

## Version
1.0

## Installation

Чтобы установить проект выполните команду ниже.
```sh
composer require "lartie/flightstatsapi"
```

Затем вам нужно добавить класс в app.php файл:

```php
    'providers' => [
        ...
        \LArtie\FlightStatsApi\FlightStatsApiServiceProvider::class, 
    ]
```


## API Methods

### Airports

* array active($year = null, $month = null, $day = null, $params = [])
* array all($params = [])
* array fs($code, $params = [])
* array iata($code, $year = null, $month = null, $day = null, $params = [])
* array icao($code, $year = null, $month = null, $day = null, $params = [])

### Airlines

* array active($year = null, $month = null, $day = null, $params = [])
* array all($params = [])
* array airportCode($code, $year = null, $month = null, $day = null)
* array cityCode($code, $params = [])
* array countryCode($code, $params = [])
* array fs($code, $params = [])
* array iata($code, $year = null, $month = null, $day = null, $params = [])
* array icao($code, $year = null, $month = null, $day = null, $params = [])
* array withinRadius($longitude, $latitude, $radiusMiles, $params = [])

### Alerts

* array createFlightRuleByArrival($carrier, $flightNumber, $arrivalAirport, $year, $month, $day, $deliverTo, $type = 'json', $params = []) 
* array createFlightRuleByDeparture($carrier, $flightNumber, $departureAirport, $year, $month, $day, $deliverTo, $type = 'json', $params = [])
* array createFlightRuleForRouteWithArrivalDate($carrier, $flightNumber, $departureAirport, $arrivalAirport, $year, $month, $day, $deliverTo, $type = 'json', $params = [])
* array createFlightRuleForRouteWithDepartureDate($carrier, $flightNumber, $departureAirport, $arrivalAirport, $year, $month, $day, $deliverTo, $type = 'json', $params = [])
* array delete($ruleId, $params = [])
* array retrieve($ruleId, $params = [])
* array list($lessThan = null, $params = [])
* array test($carrier, $flightNumber, $departureAirport, $arrivalAirport, $deliverTo, $type = 'json', $params = [])

### Equipment

* array all($params = [])
* array iata($code, $params = [])

### FIDS

* array arrivals($airport)
* array departures($airport)

# License
