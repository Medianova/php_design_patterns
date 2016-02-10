<?php

namespace AbstractFactory\Nissan;

use AbstractFactory\AbstractBody;

/**
 * Class NissanBody
 *
 * - defines a product object to be created by the corresponding concrete factory
 * - implements the AbstractBody interface
 *
 * @package AbstractFactory\Nissan
 */
class NissanBody extends AbstractBody
{
    /** @var string Nissan body is made of steel */
    protected $type = AbstractBody::TYPE_STEEL;

    /** @var int Body weights 1000 kg */
    protected $weight = 1000;

}