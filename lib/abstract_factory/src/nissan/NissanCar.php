<?php

namespace AbstractFactory\Nissan;

use AbstractFactory\AbstractCar;

/**
 * Class NissanCar
 *
 * - defines a product object to be created by the corresponding concrete factory
 * - implements the AbstractCar interface
 *
 * @package AbstractFactory\Nissan
 */
class NissanCar extends AbstractCar
{
    /** @var string Define the name of this car */
    protected $name = 'Nissan Car 1';

    /**
     * Implement driving method
     * @return string
     */
    public function go()
    {
        $this->tank->reduceCurrentVolume(10);

        return $this->name . ' goes broom broom';
    }
}