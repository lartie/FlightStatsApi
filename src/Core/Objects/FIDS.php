<?php

namespace LArtie\FlightStatsApi\Core\Objects;


/**
 * Class FIDS
 */
final class FIDS extends BaseObject
{
    /**
     * @var
     */
    protected $destinationStateCode;
    /**
     * @var
     */
    protected $destinationCountryCode;
    /**
     * @var
     */
    protected $flight;
    /**
     * @var
     */
    protected $delayed;
    /**
     * @var
     */
    protected $remarks;
    /**
     * @var
     */
    protected $remarksWithTime;
    /**
     * @var
     */
    protected $remarksCode;
    /**
     * @var
     */
    protected $airportCode;
    /**
     * @var
     */
    protected $airportName;
    /**
     * @var
     */
    protected $city;
    /**
     * @var
     */
    protected $familiarName;
    /**
     * @var
     */
    protected $scheduledTime;
    /**
     * @var
     */
    protected $currentTime;
    /**
     * @var
     */
    protected $scheduledGateTime;
    /**
     * @var
     */
    protected $currentGateTime;

    /** @var  array */
    protected $codesharesAsNames;

    /** @var  array */
    protected $codesharesAsCodes;

    /** @var  array */
    protected $uplineAirportNames;

    /** @var  array */
    protected $uplineAirportCodes;
    /**
     * @var
     */
    protected $weather;
    /**
     * @var
     */
    protected $temperatureC;
    /**
     * @var
     */
    protected $temperatureF;
    /**
     * @var
     */
    protected $flightId;
    /**
     * @var
     */
    protected $lastUpdatedTime;
    /**
     * @var
     */
    protected $lastUpdatedTimeUtc;
    /**
     * @var
     */
    protected $lastUpdatedDate;
    /**
     * @var
     */
    protected $lastUpdatedDateUtc;
    /**
     * @var
     */
    protected $dayOffset;
    /**
     * @var
     */
    protected $statusCode;
    /**
     * @var
     */
    protected $airlineName;
    /**
     * @var
     */
    protected $airlineCode;
    /**
     * @var
     */
    protected $flightNumber;
    /**
     * @var
     */
    protected $airlineLogoUrlPng;
    /**
     * @var
     */
    protected $airlineLogoUrlSvg;
    /**
     * @var
     */
    protected $isCodeshare;
    /**
     * @var
     */
    protected $operatedFlightNumber;
    /**
     * @var
     */
    protected $operatingAirlineName;
    /**
     * @var
     */
    protected $operatingAirlineCode;
    /**
     * @var
     */
    protected $originCity;
    /**
     * @var
     */
    protected $originFamiliarName;
    /**
     * @var
     */
    protected $originStateCode;
    /**
     * @var
     */
    protected $originCountryCode;
    /**
     * @var
     */
    protected $destinationAirportName;
    /**
     * @var
     */
    protected $destinationAirportCode;
    /**
     * @var
     */
    protected $destinationCity;
    /**
     * @var
     */
    protected $destinationFamiliarName;

    /**
     * @return mixed
     */
    public function getAirlineCode()
    {
        return $this->airlineCode;
    }

    /**
     * @param mixed $airlineCode
     */
    public function setAirlineCode($airlineCode)
    {
        $this->airlineCode = $airlineCode;
    }

    /**
     * @return mixed
     */
    public function getAirlineLogoUrlPng()
    {
        return $this->airlineLogoUrlPng;
    }

    /**
     * @param mixed $airlineLogoUrlPng
     */
    public function setAirlineLogoUrlPng($airlineLogoUrlPng)
    {
        $this->airlineLogoUrlPng = $airlineLogoUrlPng;
    }

    /**
     * @return mixed
     */
    public function getAirlineLogoUrlSvg()
    {
        return $this->airlineLogoUrlSvg;
    }

    /**
     * @param mixed $airlineLogoUrlSvg
     */
    public function setAirlineLogoUrlSvg($airlineLogoUrlSvg)
    {
        $this->airlineLogoUrlSvg = $airlineLogoUrlSvg;
    }

    /**
     * @return mixed
     */
    public function getAirlineName()
    {
        return $this->airlineName;
    }

    /**
     * @param mixed $airlineName
     */
    public function setAirlineName($airlineName)
    {
        $this->airlineName = $airlineName;
    }

    /**
     * @return mixed
     */
    public function getAirportCode()
    {
        return $this->airportCode;
    }

    /**
     * @param mixed $airportCode
     */
    public function setAirportCode($airportCode)
    {
        $this->airportCode = $airportCode;
    }

    /**
     * @return mixed
     */
    public function getAirportName()
    {
        return $this->airportName;
    }

    /**
     * @param mixed $airportName
     */
    public function setAirportName($airportName)
    {
        $this->airportName = $airportName;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return array
     */
    public function getCodesharesAsCodes()
    {
        return $this->codesharesAsCodes;
    }

    /**
     * @param array $codesharesAsCodes
     */
    public function setCodesharesAsCodes($codesharesAsCodes)
    {
        $this->codesharesAsCodes = $codesharesAsCodes;
    }

    /**
     * @return array
     */
    public function getCodesharesAsNames()
    {
        return $this->codesharesAsNames;
    }

    /**
     * @param array $codesharesAsNames
     */
    public function setCodesharesAsNames($codesharesAsNames)
    {
        $this->codesharesAsNames = $codesharesAsNames;
    }

    /**
     * @return mixed
     */
    public function getCurrentGateTime()
    {
        return $this->currentGateTime;
    }

    /**
     * @param mixed $currentGateTime
     */
    public function setCurrentGateTime($currentGateTime)
    {
        $this->currentGateTime = $currentGateTime;
    }

    /**
     * @return mixed
     */
    public function getCurrentTime()
    {
        return $this->currentTime;
    }

    /**
     * @param mixed $currentTime
     */
    public function setCurrentTime($currentTime)
    {
        $this->currentTime = $currentTime;
    }

    /**
     * @return mixed
     */
    public function getDayOffset()
    {
        return $this->dayOffset;
    }

    /**
     * @param mixed $dayOffset
     */
    public function setDayOffset($dayOffset)
    {
        $this->dayOffset = $dayOffset;
    }

    /**
     * @return mixed
     */
    public function getDelayed()
    {
        return $this->delayed;
    }

    /**
     * @param mixed $delayed
     */
    public function setDelayed($delayed)
    {
        $this->delayed = $delayed;
    }

    /**
     * @return mixed
     */
    public function getDestinationAirportCode()
    {
        return $this->destinationAirportCode;
    }

    /**
     * @param mixed $destinationAirportCode
     */
    public function setDestinationAirportCode($destinationAirportCode)
    {
        $this->destinationAirportCode = $destinationAirportCode;
    }

    /**
     * @return mixed
     */
    public function getDestinationAirportName()
    {
        return $this->destinationAirportName;
    }

    /**
     * @param mixed $destinationAirportName
     */
    public function setDestinationAirportName($destinationAirportName)
    {
        $this->destinationAirportName = $destinationAirportName;
    }

    /**
     * @return mixed
     */
    public function getDestinationCity()
    {
        return $this->destinationCity;
    }

    /**
     * @param mixed $destinationCity
     */
    public function setDestinationCity($destinationCity)
    {
        $this->destinationCity = $destinationCity;
    }

    /**
     * @return mixed
     */
    public function getDestinationCountryCode()
    {
        return $this->destinationCountryCode;
    }

    /**
     * @param mixed $destinationCountryCode
     */
    public function setDestinationCountryCode($destinationCountryCode)
    {
        $this->destinationCountryCode = $destinationCountryCode;
    }

    /**
     * @return mixed
     */
    public function getDestinationFamiliarName()
    {
        return $this->destinationFamiliarName;
    }

    /**
     * @param mixed $destinationFamiliarName
     */
    public function setDestinationFamiliarName($destinationFamiliarName)
    {
        $this->destinationFamiliarName = $destinationFamiliarName;
    }

    /**
     * @return mixed
     */
    public function getDestinationStateCode()
    {
        return $this->destinationStateCode;
    }

    /**
     * @param mixed $destinationStateCode
     */
    public function setDestinationStateCode($destinationStateCode)
    {
        $this->destinationStateCode = $destinationStateCode;
    }

    /**
     * @return mixed
     */
    public function getFamiliarName()
    {
        return $this->familiarName;
    }

    /**
     * @param mixed $familiarName
     */
    public function setFamiliarName($familiarName)
    {
        $this->familiarName = $familiarName;
    }

    /**
     * @return mixed
     */
    public function getFlight()
    {
        return $this->flight;
    }

    /**
     * @param mixed $flight
     */
    public function setFlight($flight)
    {
        $this->flight = $flight;
    }

    /**
     * @return mixed
     */
    public function getFlightId()
    {
        return $this->flightId;
    }

    /**
     * @param mixed $flightId
     */
    public function setFlightId($flightId)
    {
        $this->flightId = $flightId;
    }

    /**
     * @return mixed
     */
    public function getFlightNumber()
    {
        return $this->flightNumber;
    }

    /**
     * @param mixed $flightNumber
     */
    public function setFlightNumber($flightNumber)
    {
        $this->flightNumber = $flightNumber;
    }

    /**
     * @return mixed
     */
    public function getIsCodeshare()
    {
        return $this->isCodeshare;
    }

    /**
     * @param mixed $isCodeshare
     */
    public function setIsCodeshare($isCodeshare)
    {
        $this->isCodeshare = $isCodeshare;
    }

    /**
     * @return mixed
     */
    public function getLastUpdatedDate()
    {
        return $this->lastUpdatedDate;
    }

    /**
     * @param mixed $lastUpdatedDate
     */
    public function setLastUpdatedDate($lastUpdatedDate)
    {
        $this->lastUpdatedDate = $lastUpdatedDate;
    }

    /**
     * @return mixed
     */
    public function getLastUpdatedDateUtc()
    {
        return $this->lastUpdatedDateUtc;
    }

    /**
     * @param mixed $lastUpdatedDateUtc
     */
    public function setLastUpdatedDateUtc($lastUpdatedDateUtc)
    {
        $this->lastUpdatedDateUtc = $lastUpdatedDateUtc;
    }

    /**
     * @return mixed
     */
    public function getLastUpdatedTime()
    {
        return $this->lastUpdatedTime;
    }

    /**
     * @param mixed $lastUpdatedTime
     */
    public function setLastUpdatedTime($lastUpdatedTime)
    {
        $this->lastUpdatedTime = $lastUpdatedTime;
    }

    /**
     * @return mixed
     */
    public function getLastUpdatedTimeUtc()
    {
        return $this->lastUpdatedTimeUtc;
    }

    /**
     * @param mixed $lastUpdatedTimeUtc
     */
    public function setLastUpdatedTimeUtc($lastUpdatedTimeUtc)
    {
        $this->lastUpdatedTimeUtc = $lastUpdatedTimeUtc;
    }

    /**
     * @return mixed
     */
    public function getOperatedFlightNumber()
    {
        return $this->operatedFlightNumber;
    }

    /**
     * @param mixed $operatedFlightNumber
     */
    public function setOperatedFlightNumber($operatedFlightNumber)
    {
        $this->operatedFlightNumber = $operatedFlightNumber;
    }

    /**
     * @return mixed
     */
    public function getOperatingAirlineCode()
    {
        return $this->operatingAirlineCode;
    }

    /**
     * @param mixed $operatingAirlineCode
     */
    public function setOperatingAirlineCode($operatingAirlineCode)
    {
        $this->operatingAirlineCode = $operatingAirlineCode;
    }

    /**
     * @return mixed
     */
    public function getOperatingAirlineName()
    {
        return $this->operatingAirlineName;
    }

    /**
     * @param mixed $operatingAirlineName
     */
    public function setOperatingAirlineName($operatingAirlineName)
    {
        $this->operatingAirlineName = $operatingAirlineName;
    }

    /**
     * @return mixed
     */
    public function getOriginCity()
    {
        return $this->originCity;
    }

    /**
     * @param mixed $originCity
     */
    public function setOriginCity($originCity)
    {
        $this->originCity = $originCity;
    }

    /**
     * @return mixed
     */
    public function getOriginCountryCode()
    {
        return $this->originCountryCode;
    }

    /**
     * @param mixed $originCountryCode
     */
    public function setOriginCountryCode($originCountryCode)
    {
        $this->originCountryCode = $originCountryCode;
    }

    /**
     * @return mixed
     */
    public function getOriginFamiliarName()
    {
        return $this->originFamiliarName;
    }

    /**
     * @param mixed $originFamiliarName
     */
    public function setOriginFamiliarName($originFamiliarName)
    {
        $this->originFamiliarName = $originFamiliarName;
    }

    /**
     * @return mixed
     */
    public function getOriginStateCode()
    {
        return $this->originStateCode;
    }

    /**
     * @param mixed $originStateCode
     */
    public function setOriginStateCode($originStateCode)
    {
        $this->originStateCode = $originStateCode;
    }

    /**
     * @return mixed
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * @param mixed $remarks
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;
    }

    /**
     * @return mixed
     */
    public function getRemarksCode()
    {
        return $this->remarksCode;
    }

    /**
     * @param mixed $remarksCode
     */
    public function setRemarksCode($remarksCode)
    {
        $this->remarksCode = $remarksCode;
    }

    /**
     * @return mixed
     */
    public function getRemarksWithTime()
    {
        return $this->remarksWithTime;
    }

    /**
     * @param mixed $remarksWithTime
     */
    public function setRemarksWithTime($remarksWithTime)
    {
        $this->remarksWithTime = $remarksWithTime;
    }

    /**
     * @return mixed
     */
    public function getScheduledGateTime()
    {
        return $this->scheduledGateTime;
    }

    /**
     * @param mixed $scheduledGateTime
     */
    public function setScheduledGateTime($scheduledGateTime)
    {
        $this->scheduledGateTime = $scheduledGateTime;
    }

    /**
     * @return mixed
     */
    public function getScheduledTime()
    {
        return $this->scheduledTime;
    }

    /**
     * @param mixed $scheduledTime
     */
    public function setScheduledTime($scheduledTime)
    {
        $this->scheduledTime = $scheduledTime;
    }

    /**
     * @return mixed
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * @param mixed $statusCode
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    /**
     * @return mixed
     */
    public function getTemperatureC()
    {
        return $this->temperatureC;
    }

    /**
     * @param mixed $temperatureC
     */
    public function setTemperatureC($temperatureC)
    {
        $this->temperatureC = $temperatureC;
    }

    /**
     * @return mixed
     */
    public function getTemperatureF()
    {
        return $this->temperatureF;
    }

    /**
     * @param mixed $temperatureF
     */
    public function setTemperatureF($temperatureF)
    {
        $this->temperatureF = $temperatureF;
    }

    /**
     * @return array
     */
    public function getUplineAirportCodes()
    {
        return $this->uplineAirportCodes;
    }

    /**
     * @param array $uplineAirportCodes
     */
    public function setUplineAirportCodes($uplineAirportCodes)
    {
        $this->uplineAirportCodes = $uplineAirportCodes;
    }

    /**
     * @return array
     */
    public function getUplineAirportNames()
    {
        return $this->uplineAirportNames;
    }

    /**
     * @param array $uplineAirportNames
     */
    public function setUplineAirportNames($uplineAirportNames)
    {
        $this->uplineAirportNames = $uplineAirportNames;
    }

    /**
     * @return mixed
     */
    public function getWeather()
    {
        return $this->weather;
    }

    /**
     * @param mixed $weather
     */
    public function setWeather($weather)
    {
        $this->weather = $weather;
    }
}