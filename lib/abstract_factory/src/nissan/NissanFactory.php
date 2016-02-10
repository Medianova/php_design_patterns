<?php

namespace AbstractFactory\Nissan;

use AbstractFactory\AbstractCarFactory;

/**
 * Class NissanFactory
 *
 * implements the operations to create concrete product objects
 *
 * @package AbstractFactory\Nissan
 */
class NissanFactory extends AbstractCarFactory
{
    /**
     * @return NissanCar
     */
    public function createCar()
    {
        return new NissanCar();
    }

    /**
     * @return NissanBody
     */
    public function createBody()
    {
        return new NissanBody();
    }

    /**
     * @return NissanEngine
     */
    public function createEngine()
    {
        return new NissanEngine();
    }

    /**
     * @return NissanTier
     */
    public function createTier()
    {
        return new NissanTier();
    }

    /**
     * @return NissanTank
     */
    public function createTank()
    {
        return new NissanTank();
    }
}