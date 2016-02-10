<?php

namespace AbstractFactory\Nissan;

use AbstractFactory\AbstractEngine;

/**
 * Class NissanEngine
 *
 * - defines a product object to be created by the corresponding concrete factory
 * - implements the AbstractEngine interface
 *
 * @package AbstractFactory\Nissan
 */
class NissanEngine extends AbstractEngine
{
    /** @var int This engine has 6 cylinders */
    protected $numberOfCylinders = 6;

    /** @var int And it has 150 HPw */
    protected $horsePower = 150;

    /** @var int Maximum speed is set to 200 km/h */
    protected $maxSpeed = 200;
}