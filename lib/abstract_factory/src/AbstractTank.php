<?php

namespace AbstractFactory;

/**
 * Class AbstractTank
 *
 * declares an interface for a product - Tank
 *
 * @package AbstractFactory
 */
abstract class AbstractTank
{
    /** @const TYPE_GASOLINE Defines that we can pour only gasoline into this tank */
    const TYPE_GASOLINE = 'gasoline';

    /** @const TYPE_DIESEL Defines that we can pour only diesel into this tank */
    const TYPE_DIESEL = 'diesel';

    /** @var int Volume of a tank */
    protected $volume;

    /** @var string What can we pour into this tank */
    protected $type;

    /** @var int Measure how much of gasoline or diesel we have in our tank */
    protected $currentTankVolume = 0;

    /**
     * Getter for $volume
     * @return int
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * Getter for $type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Getter for $currentTankVolume
     * @return int
     */
    public function getCurrentVolume()
    {
        return $this->currentTankVolume;
    }

    /**
     * Refuel the tank
     * @param int $amount Amount of gas we want to fill in
     */
    public function refuelTank($amount)
    {
        $this->currentTankVolume += $amount;

        if($this->currentTankVolume > $this->volume) {
            $this->currentTankVolume = $this->volume;
        }
    }

    /**
     * Reduce current amount of gas by given value
     * @param int $value
     * @throws \Exception
     */
    public function reduceCurrentVolume($value)
    {
        $this->currentTankVolume -= $value;

        if ($this->currentTankVolume < 0) {
            $this->currentTankVolume = 0;

            throw new \Exception('You ran out of the gas');
        }
    }
}