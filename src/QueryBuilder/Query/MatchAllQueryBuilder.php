<?php

namespace Pucene\Bundle\ElasticBundle\QueryBuilder\Query;

use Pucene\Bundle\ElasticBundle\QueryBuilder\QueryBuilderInterface;
use Pucene\Component\QueryBuilder\Query\QueryInterface;

/**
 * Builds match_all query.
 */
class MatchAllQueryBuilder implements QueryBuilderInterface
{
    public function build(QueryInterface $query)
    {
        return new MatchAllQuery($query);
    }
}
