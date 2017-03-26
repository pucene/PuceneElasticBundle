<?php

namespace Pucene\Bundle\ElasticBundle\Elasticsearch;

use Elasticsearch\ClientBuilder;

/**
 * Factory for clients.
 */
class ClientFactory
{
    public static function create()
    {
        return ClientBuilder::create()->build();
    }
}
