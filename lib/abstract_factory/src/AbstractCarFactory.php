<?php

namespace AbstractFactory;

/**
 * Class AbstractCarFactory
 *
 * declares an interface for operations that create abstract product objects
 *
 * @package AbstractFactory
 */
abstract class AbstractCarFactory
{
    /**
     * returns new AbstractCar product object
     * @return AbstractCar
     */
    abstract public function createCar();

    /**
     * returns new AbstractBody product object
     * @return AbstractBody
     */
    abstract public function createBody();

    /**
     * returns new AbstractEngine product object
     * @return AbstractEngine
     */
    abstract public function createEngine();

    /**
     * returns new AbstractTier product object
     * @return AbstractTier
     */
    abstract public function createTier();

    /**
     * returns new AbstractTank product object
     * @return AbstractTank
     */
    abstract public function createTank();
}