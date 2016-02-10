<?php

namespace AbstractFactory;

/**
 * Class AbstractBody
 *
 * declares an interface for a product - Body
 *
 * @package AbstractFactory
 */
abstract class AbstractBody
{
    /** @const TYPE_ALUMINIUM Defines body made of aluminium */
    const TYPE_ALUMINIUM = 'aluminium';

    /** @const TYPE_STEEL Defines body made of steel */
    const TYPE_STEEL = 'steel';

    /** @var string Body type */
    protected $type;

    /** @var int Body weight */
    protected $weight;

    /**
     * Getter method for $type
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Getter method for $weight
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }
}