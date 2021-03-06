<?php

namespace Pucene\Bundle\ElasticBundle\QueryBuilder\Query;

use Pucene\Bundle\ElasticBundle\QueryBuilder\QueryInterface;
use Pucene\Component\QueryBuilder\Query\MatchAll;

/**
 * Represents a match_all query.
 */
class MatchAllQuery implements QueryInterface
{
    /**
     * @var MatchAll
     */
    private $query;

    /**
     * @param MatchAll $query
     */
    public function __construct(MatchAll $query)
    {
        $this->query = $query;
    }

    public function toArray()
    {
        return [
            'match_all' => [],
        ];
    }
}
