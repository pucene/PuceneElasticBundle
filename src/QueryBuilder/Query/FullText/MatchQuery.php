<?php

namespace Pucene\Bundle\ElasticBundle\QueryBuilder\Query\FullText;

use Pucene\Bundle\ElasticBundle\QueryBuilder\QueryInterface;
use Pucene\Component\QueryBuilder\Query\FullText\Match;

/**
 * Represents match query.
 */
class MatchQuery implements QueryInterface
{
    /**
     * @var Match
     */
    private $query;

    /**
     * @param Match $query
     */
    public function __construct(Match $query)
    {
        $this->query = $query;
    }

    public function toArray()
    {
        return [
            'match' => [
                $this->query->getField() => $this->query->getQuery(),
            ],
        ];
    }
}
