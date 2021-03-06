<?php

namespace Pucene\Bundle\ElasticBundle\QueryBuilder;

/**
 * Pool of query builder.
 */
class QueryBuilderPool
{
    /**
     * @var QueryBuilderInterface[]
     */
    private $builders = [];

    /**
     * @param QueryBuilderInterface[] $builders
     */
    public function __construct(array $builders)
    {
        $this->builders = $builders;
    }

    public function get($className)
    {
        return $this->builders[$className];
    }
}
