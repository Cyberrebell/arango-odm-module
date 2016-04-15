<?php

namespace ArangoOdmModule;

use Zend\Console\Adapter\AdapterInterface;

class Module
{
    function getConfig() {
        return require __DIR__ . '/config/module.config.php';
    }

    function getAutoloaderConfig() {
        return [
            'Zend\Loader\StandardAutoloader' => [
                'namespaces' => [
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ]
            ]
        ];
    }

    function getConsoleUsage(AdapterInterface $console){
        return [
            'arango-odm generate-documents <directory> <namespace>' => 'generate document classes'
        ];
    }
}
