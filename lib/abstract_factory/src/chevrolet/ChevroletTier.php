<?php

namespace AbstractFactory\Chevrolet;

use AbstractFactory\AbstractTier;

/**
 * Class ChevroletTier
 *
 * - defines a product object to be created by the corresponding concrete factory
 * - implements the AbstractTank interface
 *
 * @package AbstractFactory\Chevrolet
 */
class ChevroletTier extends AbstractTier
{
    /** @var int We will use 200 as a radius */
    protected $radius = 200;

    /** @var float Friction for this tiers is 0.0016 */
    protected $friction = 0.0016;
}