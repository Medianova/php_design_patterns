<?php

namespace AbstractFactory\Chevrolet;

use AbstractFactory\AbstractCar;

/**
 * Class ChevroletCar
 *
 * - defines a product object to be created by the corresponding concrete factory
 * - implements the AbstractCar interface
 *
 * @package AbstractFactory\Chevrolet
 */
class ChevroletCar extends AbstractCar
{
    /** @var string Define the name of this car */
    protected $name = 'Chevrolet Car 1';

    /**
     * Implement driving method
     * @return string
     */
    public function go()
    {
        // reduce tank volume by current consumption
        $this->tank->reduceCurrentVolume($this->getCurrentConsumption());

        return $this->name . ' goes wroom wroom';
    }

    /**
     * Get current consuption based on state of our tank
     * @return float
     */
    private function getCurrentConsumption()
    {
        $currentVolume = $this->tank->getCurrentVolume();
        $maxVolume = $this->tank->getVolume();

        $percentage = $currentVolume / $maxVolume;

        if ($percentage > 0.7) {
            return 12.5;
        } else if ($percentage > 0.5) {
            return 10.2;
        } else {
            return 8.7;
        }

    }
}