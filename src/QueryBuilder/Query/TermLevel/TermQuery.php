<?php

namespace Pucene\Bundle\ElasticBundle\QueryBuilder\Query\TermLevel;

use Pucene\Bundle\ElasticBundle\QueryBuilder\QueryInterface;
use Pucene\Component\QueryBuilder\Query\TermLevel\Term;

/**
 * Represents term query.
 */
class TermQuery implements QueryInterface
{
    /**
     * @var Term
     */
    private $query;

    /**
     * @param Term $query
     */
    public function __construct(Term $query)
    {
        $this->query = $query;
    }

    public function toArray()
    {
        return [
            'term' => [
                $this->query->getField() => $this->query->getTerm(),
            ],
        ];
    }
}
