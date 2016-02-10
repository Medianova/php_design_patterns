<?php

namespace AbstractFactory\Chevrolet;

use AbstractFactory\AbstractBody;

/**
 * Class ChevroletBody
 *
 * - defines a product object to be created by the corresponding concrete factory
 * - implements the AbstractBody interface
 *
 * @package AbstractFactory\Chevrolet
 */
class ChevroletBody extends AbstractBody
{
    /** @var string Chevrolet body is made of aluminium */
    protected $type = AbstractBody::TYPE_ALUMINIUM;

    /** @var int Body weights 1200 kg */
    protected $weight = 1200;

}