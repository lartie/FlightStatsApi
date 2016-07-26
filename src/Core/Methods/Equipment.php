<?php

namespace LArtie\FlightStatsApi\Core\Methods;

use \LArtie\FlightStatsApi\Core\Objects\Equipment as EquipmentObject;

/**
 * The Equipment API provides basic reference data about aircraft equipment.
 *
 * Class Equipment
 * @package App
 */
final class Equipment extends BaseMethod
{
    /**
     * @var string
     */
    protected $baseMethod = 'equipment';

    /**
     * @var string
     */
    protected $objectKey = 'equipment';

    /**
     * @var
     */
    protected $objectClassName = EquipmentObject::class;

    /**
     * Returns all equipment reference data.
     *
     * @param array $data
     * @return mixed|string
     */
    public function all($data = [])
    {
        return $this->get('all', $data);
    }

    /**
     * Returns the equipment for the given IATA code.
     *
     * @param $code
     * @param array $data
     * @return mixed|string
     */
    public function iata($code, $data = [])
    {
        return $this->get('iata/' . $code, $data);
    }
}