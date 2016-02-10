<?php

namespace AbstractFactory\Chevrolet;

use AbstractFactory\AbstractEngine;

/**
 * Class ChevroletEngine
 *
 * - defines a product object to be created by the corresponding concrete factory
 * - implements the AbstractEngine interface
 *
 * @package AbstractFactory\Chevrolet
 */
class ChevroletEngine extends AbstractEngine
{
    /** @var int This engine has 4 cylinders */
    protected $numberOfCylinders = 4;

    /** @var int And it has 110 HPw */
    protected $horsePower = 110;

    /** @var int Maximum speed is set to 160 km/h */
    protected $maxSpeed = 160;
}