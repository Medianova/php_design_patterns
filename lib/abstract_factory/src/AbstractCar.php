<?php

namespace AbstractFactory;

/**
 * Class AbstractCar
 *
 * declares an interface for a product - Car
 *
 * @package AbstractFactory
 */
abstract class AbstractCar
{
    /** @var string Name of a car */
    protected $name;

    /** @var \AbstractFactory\AbstractEngine|null Car engine */
    protected $engine = null;

    /** @var \AbstractFactory\AbstractTier[] Array of tiers for a car */
    protected $tiers = [];

    /** @var \AbstractFactory\AbstractTank|null Car's tank */
    protected $tank = null;

    /** @var \AbstractFactory\AbstractBody|null Car's body */
    protected $body = null;

    /**
     * Each concrete Car has to implement driving method
     * @return null
     */
    abstract public function go();

    /**
     * Getter for $name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add engine to a car
     * @param AbstractEngine $engine
     */
    public function addEngine(AbstractEngine $engine)
    {
        $this->engine = $engine;
    }

    /**
     * Add tier to a car
     * @param AbstractTier $tier
     */
    public function addTier(AbstractTier $tier)
    {
        $this->tiers[] = $tier;
    }

    /**
     * Add tank to a car
     * @param AbstractTank $tank
     */
    public function addTank(AbstractTank $tank)
    {
        $this->tank = $tank;
    }

    /**
     * Add body to a car
     * @param AbstractBody $body
     */
    public function addBody(AbstractBody $body)
    {
        $this->body = $body;
    }

    /**
     * Refuel the car
     * @param int $amount
     * @throws \Exception
     */
    public function refuelTank($amount)
    {
        $this->tank->refuelTank($amount);
    }

    /**
     * Returns current tank volume
     * @return int
     */
    public function getCurrentTankVolume()
    {
        return $this->tank->getCurrentVolume();
    }

    /**
     * Provide common method for calculating car's mileage
     * Each car implementation can override this method and provide custom calculation
     *
     * @return float
     * @throws \Exception
     */
    public function getMileage()
    {
        // first check if we have all elements
        if (!$this->body) {
            throw new \Exception('Car doesn\'t have a body.');
        }
        if (!$this->engine) {
            throw new \Exception('Car doesn\'t have an engine.');
        }
        if (!$this->tank) {
            throw new \Exception('Car doesn\'t have a tank.');
        }
        if (count($this->tiers) < 2) {
            throw new \Exception('Car must have at least 2 tiers.');
        }

        // throw some number
        return $this->body->getWeight() * count($this->tiers)
        * $this->tiers[0]->getFriction() * $this->tank->getVolume();
    }

    public function __toString()
    {
        $description = '---------------------' . PHP_EOL;
        $description .= 'Car: ' . $this->name . PHP_EOL;

        $description .= 'Engine: ' . $this->engine->getHorsePower() . 'HPw, ' .
            $this->engine->getMaxSpeed() . 'km/h' . PHP_EOL;

        $description .= 'Number of tiers: ' . count($this->tiers) . ' each having ' .
            $this->tiers[0]->getFriction() . ' of friction' . PHP_EOL;

        $description .= 'Body made of ' . $this->body->getType() . ' and weights ' .
            $this->body->getWeight() . ' kg' . PHP_EOL;

        $description .= 'Car is running on ' . $this->tank->getType() . ' and currently it has ' .
            $this->tank->getCurrentVolume() . PHP_EOL;

        $description .= '---------------------' . PHP_EOL;

        return $description;
    }

}