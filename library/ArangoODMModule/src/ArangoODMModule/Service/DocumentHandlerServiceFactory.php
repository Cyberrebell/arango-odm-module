<?php

namespace ArangoODMModule\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use ArangoODM\DocumentHandler;

class DocumentHandlerServiceFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator) {
    	$config = $serviceLocator->get('Config');
    	$documentHandler = new DocumentHandler($config['arango-odm']);
        return $documentHandler;
    }
}
