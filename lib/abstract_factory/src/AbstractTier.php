<?php

namespace AbstractFactory;

/**
 * Class AbstractTier
 *
 * declares an interface for a product - Tier
 *
 * @package AbstractFactory
 */
abstract class AbstractTier
{
    /** @var int Defines tier radius */
    protected $radius;

    /** @var float Defines tier friction */
    protected $friction;

    /**
     * Getter for $radius
     * @return int
     */
    public function getRadius()
    {
        return $this->radius;
    }

    /**
     * Getter for $friction
     * @return float
     */
    public function getFriction()
    {
        return $this->friction;
    }
}