<?php

namespace AbstractFactory\Chevrolet;

use AbstractFactory\AbstractCarFactory;

/**
 * Class ChevroletFactory
 *
 * implements the operations to create concrete product objects
 *
 * @package AbstractFactory\Chevrolet
 */
class ChevroletFactory extends AbstractCarFactory
{
    /**
     * @return ChevroletCar
     */
    public function createCar()
    {
        return new ChevroletCar();
    }

    /**
     * @return ChevroletBody
     */
    public function createBody()
    {
        return new ChevroletBody();
    }

    /**
     * @return ChevroletEngine
     */
    public function createEngine()
    {
        return new ChevroletEngine();
    }

    /**
     * @return ChevroletTier
     */
    public function createTier()
    {
        return new ChevroletTier();
    }

    /**
     * @return ChevroletTank
     */
    public function createTank()
    {
        return new ChevroletTank();
    }
}