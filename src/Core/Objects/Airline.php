<?php

namespace LArtie\FlightStatsApi\Core\Objects;

/**
 * Class Airline
 *
 */
final class Airline extends BaseObject
{
    /** @var  boolean */
    protected $active;

    /** @var  string */
    protected $fs;

    /** @var  string */
    protected $iata;

    /** @var  string */
    protected $icao;

    /** @var  string */
    protected $name;

    /** @var  string */
    protected $phoneNumber;

    /**
     * @return boolean
     */
    public function isActive()
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     */
    public function setActive($active)
    {
        $this->active = $active;
    }

    /**
     * @return string
     */
    public function getFs()
    {
        return $this->fs;
    }

    /**
     * @param string $fs
     */
    public function setFs($fs)
    {
        $this->fs = $fs;
    }

    /**
     * @return string
     */
    public function getIata()
    {
        return $this->iata;
    }

    /**
     * @param string $iata
     */
    public function setIata($iata)
    {
        $this->iata = $iata;
    }

    /**
     * @return string
     */
    public function getIcao()
    {
        return $this->icao;
    }

    /**
     * @param string $icao
     */
    public function setIcao($icao)
    {
        $this->icao = $icao;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }
}