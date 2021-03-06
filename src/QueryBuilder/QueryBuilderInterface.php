<?php

namespace Pucene\Bundle\ElasticBundle\QueryBuilder;

use Pucene\Component\QueryBuilder\Query\QueryInterface;

/**
 * Builder interface.
 */
interface QueryBuilderInterface
{
    public function build(QueryInterface $query);
}
