<?php

namespace Pucene\Bundle\ElasticBundle;

use Pucene\Bundle\ElasticBundle\DependencyInjection\CompilerPass\QueryBuilderCompilerPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class PuceneElasticBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new QueryBuilderCompilerPass());
    }
}
