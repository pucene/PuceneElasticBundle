<?php

namespace Pucene\Bundle\ElasticBundle\Index;

use Elasticsearch\Client;
use Pucene\Bundle\ElasticBundle\QueryBuilder\SearchBuilder;
use Pucene\Component\QueryBuilder\Search;

/**
 * Entry-point for index.
 */
class Index
{
    /**
     * @var SearchBuilder
     */
    private $searchBuilder;

    /**
     * @var Client
     */
    private $client;

    /**
     * @var string
     */
    protected $name;

    /**
     * @param SearchBuilder $searchBuilder
     * @param Client $client
     * @param string $name
     */
    public function __construct(SearchBuilder $searchBuilder, Client $client, $name)
    {
        $this->searchBuilder = $searchBuilder;
        $this->client = $client;
        $this->name = $name;
    }

    public function index(array $document, $id = null)
    {
        $this->client->index(
            [
                'index' => 'pucene',
                'type' => 'doc',
                'id' => $id,
                'body' => $document,
            ]
        );

        return $document;
    }

    public function remove($id)
    {
        $this->client->delete(
            [
                'index' => $this->name,
                'type' => 'doc',
                'id' => $id,
            ]
        );
    }

    public function search(Search $search)
    {
        $response = $this->client->search(
            [
                'index' => $this->name,
                'type' => 'doc',
                'body' => [
                    'query' => $this->searchBuilder->build($search)->toArray(),
                ],
            ]
        );

        return $response['hits'];
    }
}
