<?php

namespace AbstractFactory;

/**
 * Class AbstractEngine
 *
 * declares an interface for a product - Engine
 *
 * @package AbstractFactory
 */
abstract class AbstractEngine
{
    /** @var int Number of cylinders */
    protected $numberOfCylinders;

    /** @var int Number of horse power */
    protected $horsePower;

    /** @var int Maximum speed */
    protected $maxSpeed;

    /**
     * Getter for $numberOfCylinders
     * @return int
     */
    public function getNumberOfCylinders()
    {
        return $this->numberOfCylinders;
    }

    /**
     * Getter for $horsePower
     * @return int
     */
    public function getHorsePower()
    {
        return $this->horsePower;
    }

    /**
     * Getter for $maxSpeed
     * @return int
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }
}