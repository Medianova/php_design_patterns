<?php

namespace AbstractFactory\Nissan;

use AbstractFactory\AbstractTank;

/**
 * Class NissanTank
 *
 * - defines a product object to be created by the corresponding concrete factory
 * - implements the AbstractTank interface
 *
 * @package AbstractFactory\Nissan
 */
class NissanTank extends AbstractTank
{
    /** @var int Tank volume is 40 liters */
    protected $volume = 50;

    /** @var string We can pour only diesel */
    protected $type = AbstractTank::TYPE_DIESEL;
}