<?php

namespace Pucene\Bundle\ElasticBundle\QueryBuilder\Query\FullText;

use Pucene\Bundle\ElasticBundle\QueryBuilder\QueryBuilderInterface;
use Pucene\Component\QueryBuilder\Query\QueryInterface;

/**
 * Build match query.
 */
class MatchQueryBuilder implements QueryBuilderInterface
{
    public function build(QueryInterface $query)
    {
        return new MatchQuery($query);
    }
}
