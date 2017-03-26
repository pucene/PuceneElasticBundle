<?php

namespace Pucene\Bundle\ElasticBundle\QueryBuilder\Query\TermLevel;

use Pucene\Bundle\ElasticBundle\QueryBuilder\QueryBuilderInterface;
use Pucene\Component\QueryBuilder\Query\QueryInterface;

/**
 * Builder for term query.
 */
class TermQueryBuilder implements QueryBuilderInterface
{
    public function build(QueryInterface $query)
    {
        return new TermQuery($query);
    }
}
