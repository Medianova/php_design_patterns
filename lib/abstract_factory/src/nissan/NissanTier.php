<?php

namespace AbstractFactory\Nissan;

use AbstractFactory\AbstractTier;

/**
 * Class NissanTier
 *
 * - defines a product object to be created by the corresponding concrete factory
 * - implements the AbstractTier interface
 *
 * @package AbstractFactory\Nissan
 */
class NissanTier extends AbstractTier
{
    /** @var int We will use 220 as a radius */
    protected $radius = 220;

    /** @var float Friction for this tiers is 0.0012 */
    protected $friction = 0.0012;
}