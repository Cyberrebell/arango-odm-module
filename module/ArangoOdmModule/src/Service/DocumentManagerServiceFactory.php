<?php

namespace ArangoOdmModule\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use ArangoOdm\DocumentManager;

class DocumentManagerServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator) {
        $config = $serviceLocator->get('Config');
        $documentManager = new DocumentHandler($config['arango-odm']);
        return $documentManager;
    }
}
