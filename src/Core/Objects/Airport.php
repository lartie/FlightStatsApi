<?php

namespace LArtie\FlightStatsApi\Core\Objects;

/**
 * Class Airport
 *
 */
final class Airport extends BaseObject
{
    /**
     * @var
     */
    protected $fs;

    /**
     * @var
     */
    protected $iata;

    /**
     * @var
     */
    protected $icao;

    /**
     * @var
     */
    protected $faa;

    /**
     * @var
     */
    protected $name;

    /**
     * @var
     */
    protected $city;

    /**
     * @var
     */
    protected $cityCode;

    /**
     * @var
     */
    protected $stateCode;

    /**
     * @var
     */
    protected $postalCode;

    /**
     * @var
     */
    protected $countryCode;

    /**
     * @var
     */
    protected $countryName;

    /**
     * @var
     */
    protected $regionName;

    /**
     * @var
     */
    protected $timeZoneRegionName;

    /**
     * @var
     */
    protected $weatherZone;

    /**
     * @var
     */
    protected $localTime;

    /**
     * @var
     */
    protected $classification;

    /**
     * @var
     */
    protected $active;

    /**
     * @var
     */
    protected $longitude;

    /**
     * @var
     */
    protected $latitude;

    /**
     * @var
     */
    protected $weatherUrl;

    /**
     * @var
     */
    protected $delayIndexUrl;

    /**
     * @var
     */
    protected $street1;

    /**
     * @var
     */
    protected $utcOffsetHours;

    /**
     * @var
     */
    protected $elevationFeet;

    /**
     * @return mixed
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param mixed $active
     */
    public function setActive($active)
    {
        $this->active = $active;
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
     * @return mixed
     */
    public function getCityCode()
    {
        return $this->cityCode;
    }

    /**
     * @param mixed $cityCode
     */
    public function setCityCode($cityCode)
    {
        $this->cityCode = $cityCode;
    }

    /**
     * @return mixed
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * @param mixed $classification
     */
    public function setClassification($classification)
    {
        $this->classification = $classification;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param mixed $countryCode
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }

    /**
     * @return mixed
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * @param mixed $countryName
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
    }

    /**
     * @return mixed
     */
    public function getDelayIndexUrl()
    {
        return $this->delayIndexUrl;
    }

    /**
     * @param mixed $delayIndexUrl
     */
    public function setDelayIndexUrl($delayIndexUrl)
    {
        $this->delayIndexUrl = $delayIndexUrl;
    }

    /**
     * @return mixed
     */
    public function getElevationFeet()
    {
        return $this->elevationFeet;
    }

    /**
     * @param mixed $elevationFeet
     */
    public function setElevationFeet($elevationFeet)
    {
        $this->elevationFeet = $elevationFeet;
    }

    /**
     * @return mixed
     */
    public function getFaa()
    {
        return $this->faa;
    }

    /**
     * @param mixed $faa
     */
    public function setFaa($faa)
    {
        $this->faa = $faa;
    }

    /**
     * @return mixed
     */
    public function getFs()
    {
        return $this->fs;
    }

    /**
     * @param mixed $fs
     */
    public function setFs($fs)
    {
        $this->fs = $fs;
    }

    /**
     * @return mixed
     */
    public function getIata()
    {
        return $this->iata;
    }

    /**
     * @param mixed $iata
     */
    public function setIata($iata)
    {
        $this->iata = $iata;
    }

    /**
     * @return mixed
     */
    public function getIcao()
    {
        return $this->icao;
    }

    /**
     * @param mixed $icao
     */
    public function setIcao($icao)
    {
        $this->icao = $icao;
    }

    /**
     * @return mixed
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param mixed $latitude
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return mixed
     */
    public function getLocalTime()
    {
        return $this->localTime;
    }

    /**
     * @param mixed $localTime
     */
    public function setLocalTime($localTime)
    {
        $this->localTime = $localTime;
    }

    /**
     * @return mixed
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param mixed $longitude
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     * @return mixed
     */
    public function getRegionName()
    {
        return $this->regionName;
    }

    /**
     * @param mixed $regionName
     */
    public function setRegionName($regionName)
    {
        $this->regionName = $regionName;
    }

    /**
     * @return mixed
     */
    public function getStateCode()
    {
        return $this->stateCode;
    }

    /**
     * @param mixed $stateCode
     */
    public function setStateCode($stateCode)
    {
        $this->stateCode = $stateCode;
    }

    /**
     * @return mixed
     */
    public function getStreet1()
    {
        return $this->street1;
    }

    /**
     * @param mixed $street1
     */
    public function setStreet1($street1)
    {
        $this->street1 = $street1;
    }

    /**
     * @return mixed
     */
    public function getTimeZoneRegionName()
    {
        return $this->timeZoneRegionName;
    }

    /**
     * @param mixed $timeZoneRegionName
     */
    public function setTimeZoneRegionName($timeZoneRegionName)
    {
        $this->timeZoneRegionName = $timeZoneRegionName;
    }

    /**
     * @return mixed
     */
    public function getUtcOffsetHours()
    {
        return $this->utcOffsetHours;
    }

    /**
     * @param mixed $utcOffsetHours
     */
    public function setUtcOffsetHours($utcOffsetHours)
    {
        $this->utcOffsetHours = $utcOffsetHours;
    }

    /**
     * @return mixed
     */
    public function getWeatherUrl()
    {
        return $this->weatherUrl;
    }

    /**
     * @param mixed $weatherUrl
     */
    public function setWeatherUrl($weatherUrl)
    {
        $this->weatherUrl = $weatherUrl;
    }

    /**
     * @return mixed
     */
    public function getWeatherZone()
    {
        return $this->weatherZone;
    }

    /**
     * @param mixed $weatherZone
     */
    public function setWeatherZone($weatherZone)
    {
        $this->weatherZone = $weatherZone;
    }

}