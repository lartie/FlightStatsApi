<?php

namespace LArtie\FlightStatsApi\Core\Objects;

/**
 * Class ScheduledFlight
 * @package LArtie\FlightStatsApi\Core\Objects
 */
final class ScheduledFlight extends BaseObject
{
    /**
     * @var
     */
    public $carrierFsCode;

    /**
     * @var
     */
    public $flightNumber;

    /**
     * @var
     */
    public $departureAirportFsCode;

    /**
     * @var
     */
    public $arrivalAirportFsCode;

    /**
     * @var
     */
    public $stops;

    /**
     * @var
     */
    public $departureTime;

    /**
     * @var
     */
    public $arrivalTime;

    /**
     * @var
     */
    public $flightEquipmentIataCode;

    /**
     * @var
     */
    public $isCodeshare;

    /**
     * @var
     */
    public $isWetlease;

    /**
     * @var
     */
    public $serviceType;

    /**
     * @var
     */
    public $serviceClasses;

    /**
     * @var
     */
    public $trafficRestrictions;

    /**
     * @var
     */
    public $codeshares;

    /**
     * @var
     */
    public $referenceCode;

    /**
     * @var
     */
    public $wetleaseOperatorFsCode;

    /**
     * @var
     */
    public $arrivalTerminal;

    /**
     * @return mixed
     */
    public function getArrivalAirportFsCode()
    {
        return $this->arrivalAirportFsCode;
    }

    /**
     * @param mixed $arrivalAirportFsCode
     */
    public function setArrivalAirportFsCode($arrivalAirportFsCode)
    {
        $this->arrivalAirportFsCode = $arrivalAirportFsCode;
    }

    /**
     * @return mixed
     */
    public function getArrivalTerminal()
    {
        return $this->arrivalTerminal;
    }

    /**
     * @param mixed $arrivalTerminal
     */
    public function setArrivalTerminal($arrivalTerminal)
    {
        $this->arrivalTerminal = $arrivalTerminal;
    }

    /**
     * @return mixed
     */
    public function getArrivalTime()
    {
        return $this->arrivalTime;
    }

    /**
     * @param mixed $arrivalTime
     */
    public function setArrivalTime($arrivalTime)
    {
        $this->arrivalTime = $arrivalTime;
    }

    /**
     * @return mixed
     */
    public function getCarrierFsCode()
    {
        return $this->carrierFsCode;
    }

    /**
     * @param mixed $carrierFsCode
     */
    public function setCarrierFsCode($carrierFsCode)
    {
        $this->carrierFsCode = $carrierFsCode;
    }

    /**
     * @return mixed
     */
    public function getCodeshares()
    {
        return $this->codeshares;
    }

    /**
     * @param mixed $codeshares
     */
    public function setCodeshares($codeshares)
    {
        $this->codeshares = $codeshares;
    }

    /**
     * @return mixed
     */
    public function getDepartureAirportFsCode()
    {
        return $this->departureAirportFsCode;
    }

    /**
     * @param mixed $departureAirportFsCode
     */
    public function setDepartureAirportFsCode($departureAirportFsCode)
    {
        $this->departureAirportFsCode = $departureAirportFsCode;
    }

    /**
     * @return mixed
     */
    public function getDepartureTime()
    {
        return $this->departureTime;
    }

    /**
     * @param mixed $departureTime
     */
    public function setDepartureTime($departureTime)
    {
        $this->departureTime = $departureTime;
    }

    /**
     * @return mixed
     */
    public function getFlightEquipmentIataCode()
    {
        return $this->flightEquipmentIataCode;
    }

    /**
     * @param mixed $flightEquipmentIataCode
     */
    public function setFlightEquipmentIataCode($flightEquipmentIataCode)
    {
        $this->flightEquipmentIataCode = $flightEquipmentIataCode;
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
    public function getIsWetlease()
    {
        return $this->isWetlease;
    }

    /**
     * @param mixed $isWetlease
     */
    public function setIsWetlease($isWetlease)
    {
        $this->isWetlease = $isWetlease;
    }

    /**
     * @return mixed
     */
    public function getReferenceCode()
    {
        return $this->referenceCode;
    }

    /**
     * @param mixed $referenceCode
     */
    public function setReferenceCode($referenceCode)
    {
        $this->referenceCode = $referenceCode;
    }

    /**
     * @return mixed
     */
    public function getServiceClasses()
    {
        return $this->serviceClasses;
    }

    /**
     * @param mixed $serviceClasses
     */
    public function setServiceClasses($serviceClasses)
    {
        $this->serviceClasses = $serviceClasses;
    }

    /**
     * @return mixed
     */
    public function getServiceType()
    {
        return $this->serviceType;
    }

    /**
     * @param mixed $serviceType
     */
    public function setServiceType($serviceType)
    {
        $this->serviceType = $serviceType;
    }

    /**
     * @return mixed
     */
    public function getStops()
    {
        return $this->stops;
    }

    /**
     * @param mixed $stops
     */
    public function setStops($stops)
    {
        $this->stops = $stops;
    }

    /**
     * @return mixed
     */
    public function getTrafficRestrictions()
    {
        return $this->trafficRestrictions;
    }

    /**
     * @param mixed $trafficRestrictions
     */
    public function setTrafficRestrictions($trafficRestrictions)
    {
        $this->trafficRestrictions = $trafficRestrictions;
    }

    /**
     * @return mixed
     */
    public function getWetleaseOperatorFsCode()
    {
        return $this->wetleaseOperatorFsCode;
    }

    /**
     * @param mixed $wetleaseOperatorFsCode
     */
    public function setWetleaseOperatorFsCode($wetleaseOperatorFsCode)
    {
        $this->wetleaseOperatorFsCode = $wetleaseOperatorFsCode;
    }
}