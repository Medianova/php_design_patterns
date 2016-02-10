<?php

namespace AbstractFactory\Chevrolet;

use AbstractFactory\AbstractTank;

/**
 * Class ChevroletTank
 *
 * - defines a product object to be created by the corresponding concrete factory
 * - implements the AbstractTank interface
 *
 * @package AbstractFactory\Chevrolet
 */
class ChevroletTank extends AbstractTank
{
    /** @var int Tank volume is 60 liters */
    protected $volume = 60;

    /** @var string We can pour only gasoline */
    protected $type = AbstractTank::TYPE_GASOLINE;
}